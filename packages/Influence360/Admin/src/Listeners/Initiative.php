<?php

namespace Influence360\Admin\Listeners;

use Influence360\Email\Repositories\EmailRepository;

class Initiative
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(protected EmailRepository $emailRepository) {}

    /**
     * @param  \Influence360\Initiative\Models\Initiative  $initiative
     * @return void
     */
    public function linkToEmail($initiative)
    {
        if (! request('email_id')) {
            return;
        }

        $this->emailRepository->update([
            'initiative_id' => $initiative->id,
        ], request('email_id'));
    }
}
