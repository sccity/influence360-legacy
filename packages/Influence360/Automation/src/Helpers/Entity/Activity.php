<?php

namespace Influence360\Automation\Helpers\Entity;

use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Influence360\Activity\Contracts\Activity as ContractsActivity;
use Influence360\Activity\Repositories\ActivityRepository;
use Influence360\Admin\Notifications\Common;
use Influence360\Attribute\Repositories\AttributeRepository;
use Influence360\Automation\Repositories\WebhookRepository;
use Influence360\Automation\Services\WebhookService;
use Influence360\Contact\Repositories\PersonRepository;
use Influence360\EmailTemplate\Repositories\EmailTemplateRepository;
use Influence360\Initiative\Repositories\InitiativeRepository;

class Activity extends AbstractEntity
{
    /**
     * Define the entity type.
     *
     * @var string
     */
    protected $entityType = 'activities';

    /**
     * Create a new repository instance.
     *
     * @return void
     */
    public function __construct(
        protected AttributeRepository $attributeRepository,
        protected EmailTemplateRepository $emailTemplateRepository,
        protected InitiativeRepository $initiativeRepository,
        protected PersonRepository $personRepository,
        protected ActivityRepository $activityRepository,
        protected WebhookRepository $webhookRepository,
        protected WebhookService $webhookService
    ) {}

    /**
     * Get the attributes for workflow conditions.
     */
    public function getAttributes(string $entityType, array $skipAttributes = []): array
    {
        $attributes = [
            [
                'id'          => 'title',
                'type'        => 'text',
                'name'        => 'Title',
                'lookup_type' => null,
                'options'     => collect(),
            ], [
                'id'          => 'type',
                'type'        => 'multiselect',
                'name'        => 'Type',
                'lookup_type' => null,
                'options'     => collect([
                    (object) [
                        'id'   => 'note',
                        'name' => 'Note',
                    ], (object) [
                        'id'   => 'call',
                        'name' => 'Call',
                    ], (object) [
                        'id'   => 'emailmsg',
                        'name' => 'E-Mail',
                    ], (object) [
                        'id'   => 'meeting',
                        'name' => 'Meeting',
                    ], (object) [
                        'id'   => 'lunch',
                        'name' => 'Lunch',
                    ], (object) [
                        'id'   => 'file',
                        'name' => 'File',
                    ],
                ]),
            ], [
                'id'          => 'location',
                'type'        => 'text',
                'name'        => 'Location',
                'lookup_type' => null,
                'options'     => collect(),
            ], [
                'id'          => 'comment',
                'type'        => 'textarea',
                'name'        => 'Comment',
                'lookup_type' => null,
                'options'     => collect(),
            ], [
                'id'          => 'schedule_from',
                'type'        => 'datetime',
                'name'        => 'Schedule From',
                'lookup_type' => null,
                'options'     => collect(),
            ], [
                'id'          => 'schedule_to',
                'type'        => 'datetime',
                'name'        => 'Schedule To',
                'lookup_type' => null,
                'options'     => collect(),
            ], [
                'id'          => 'user_id',
                'type'        => 'select',
                'name'        => 'User',
                'lookup_type' => 'users',
                'options'     => $this->attributeRepository->getLookUpOptions('users'),
            ],
        ];

        return $attributes;
    }

    /**
     * Returns placeholders for email templates.
     */
    public function getEmailTemplatePlaceholders(array $entity): array
    {
        $emailTemplates = parent::getEmailTemplatePlaceholders($entity);

        $emailTemplates['menu'][] = [
            'text'  => 'Participants',
            'value' => '{%activities.participants%}',
        ];

        return $emailTemplates;
    }

    /**
     * Replace placeholders with values.
     */
    public function replacePlaceholders(mixed $entity, string $content): string
    {
        $content = parent::replacePlaceholders($entity, $content);

        $value = '<ul style="padding-left: 18px;margin: 0;">';

        foreach ($entity->participants as $participant) {
            $value .= '<li>'.($participant->user ? $participant->user->name : $participant->person->name).'</li>';
        }

        $value .= '</ul>';

        return strtr($content, [
            '{%'.$this->entityType.'.participants%}'   => $value,
            '{% '.$this->entityType.'.participants %}' => $value,
        ]);
    }

    /**
     * Listing of the entities.
     */
    public function getEntity(mixed $entity): mixed
    {
        if (! $entity instanceof ContractsActivity) {
            $entity = $this->activityRepository->find($entity);
        }

        return $entity;
    }

    /**
     * Returns workflow actions.
     */
    public function getActions(): array
    {
        $emailTemplates = $this->emailTemplateRepository->all(['id', 'name']);

        $webhooksOptions = $this->webhookRepository->all(['id', 'name']);

        return [
            [
                'id'         => 'update_related_initiatives',
                'name'       => trans('admin::app.settings.workflows.helpers.update-related-initiatives'),
                'attributes' => $this->getAttributes('initiatives'),
            ], [
                'id'      => 'send_email_to_sales_owner',
                'name'    => trans('admin::app.settings.workflows.helpers.send-email-to-sales-owner'),
                'options' => $emailTemplates,
            ], [
                'id'      => 'send_email_to_participants',
                'name'    => trans('admin::app.settings.workflows.helpers.send-email-to-participants'),
                'options' => $emailTemplates,
            ], [
                'id'      => 'trigger_webhook',
                'name'    => trans('admin::app.settings.workflows.helpers.add-webhook'),
                'options' => $webhooksOptions,
            ],
        ];
    }

    /**
     * Execute workflow actions.
     */
    public function executeActions(mixed $workflow, mixed $activity): void
    {
        foreach ($workflow->actions as $action) {
            switch ($action['id']) {
                case 'update_related_initiatives':
                    $initiativeIds = $this->activityRepository->getModel()
                        ->leftJoin('initiative_activities', 'activities.id', 'initiative_activities.activity_id')
                        ->leftJoin('initiatives', 'initiative_activities.initiative_id', 'initiatives.id')
                        ->addSelect('initiatives.id')
                        ->where('activities.id', $activity->id)
                        ->pluck('id');

                    foreach ($initiativeIds as $initiativeId) {
                        $this->initiativeRepository->update([
                            'entity_type'        => 'initiatives',
                            $action['attribute'] => $action['value'],
                        ], $initiativeId);
                    }

                    break;

                case 'send_email_to_sales_owner':
                    $emailTemplate = $this->emailTemplateRepository->find($action['value']);

                    if (! $emailTemplate) {
                        break;
                    }

                    try {
                        Mail::queue(new Common([
                            'to'          => $activity->user->email,
                            'subject'     => $this->replacePlaceholders($activity, $emailTemplate->subject),
                            'body'        => $this->replacePlaceholders($activity, $emailTemplate->content),
                            'attachments' => [
                                [
                                    'name'    => 'invite.ics',
                                    'mime'    => 'text/calendar',
                                    'content' => $this->getICSContent($activity),
                                ],
                            ],
                        ]));
                    } catch (\Exception $e) {
                    }

                    break;

                case 'send_email_to_participants':
                    $emailTemplate = $this->emailTemplateRepository->find($action['value']);

                    if (! $emailTemplate) {
                        break;
                    }

                    try {
                        foreach ($activity->participants as $participant) {
                            Mail::queue(new Common([
                                'to'          => $participant->user
                                    ? $participant->user->email
                                    : data_get($participant->person->emails, '*.value'),
                                'subject'     => $this->replacePlaceholders($activity, $emailTemplate->subject),
                                'body'        => $this->replacePlaceholders($activity, $emailTemplate->content),
                                'attachments' => [
                                    [
                                        'name'    => 'invite.ics',
                                        'mime'    => 'text/calendar',
                                        'content' => $this->getICSContent($activity),
                                    ],
                                ],
                            ]));
                        }
                    } catch (\Exception $e) {
                    }

                    break;

                case 'trigger_webhook':
                    try {
                        $this->triggerWebhook($action['value'], $activity);
                    } catch (\Exception $e) {
                        report($e);
                    }

                    break;
            }
        }
    }

    /**
     * Returns .ics file for attachments.
     */
    public function getICSContent(ContractsActivity $activity): string
    {
        $content = [
            'BEGIN:VCALENDAR',
            'VERSION:2.0',
            'PRODID:-//Krayincrm//Krayincrm//EN',
            'BEGIN:VEVENT',
            'UID:'.time().'-'.$activity->id,
            'DTSTAMP:'.Carbon::now()->format('YmdTHis'),
            'CREATED:'.$activity->created_at->format('YmdTHis'),
            'SEQUENCE:1',
            'ORGANIZER;CN='.$activity->user->name.':MAILTO:'.$activity->user->email,
        ];

        foreach ($activity->participants as $participant) {
            if ($participant->user) {
                $content[] = 'ATTENDEE;ROLE=REQ-PARTICIPANT;CN='.$participant->user->name.';PARTSTAT=NEEDS-ACTION:MAILTO:'.$participant->user->email;
            } else {
                foreach (data_get($participant->person->emails, '*.value') as $email) {
                    $content[] = 'ATTENDEE;ROLE=REQ-PARTICIPANT;CN='.$participant->person->name.';PARTSTAT=NEEDS-ACTION:MAILTO:'.$email;
                }
            }
        }

        $content = array_merge($content, [
            'DTSTART:'.$activity->schedule_from->format('YmdTHis'),
            'DTEND:'.$activity->schedule_to->format('YmdTHis'),
            'SUMMARY:'.$activity->title,
            'LOCATION:'.$activity->location,
            'DESCRIPTION:'.$activity->comment,
            'END:VEVENT',
            'END:VCALENDAR',
        ]);

        return implode("\r\n", $content);
    }
}
