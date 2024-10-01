<?php

namespace Influence360\Admin\Http\Controllers\Settings;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Event;
use Illuminate\View\View;
use Influence360\Admin\Http\Controllers\Controller;
use Influence360\Attribute\Repositories\AttributeRepository;
use Influence360\Contact\Repositories\PersonRepository;
use Influence360\Initiative\Repositories\InitiativeRepository;
use Influence360\Initiative\Repositories\PipelineRepository;
use Influence360\Initiative\Repositories\SourceRepository;
use Influence360\Initiative\Repositories\TypeRepository;
use Influence360\WebForm\DataGrids\WebFormDataGrid;
use Influence360\WebForm\Repositories\WebFormRepository;

class WebFormController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected AttributeRepository $attributeRepository,
        protected WebFormRepository $webFormRepository,
        protected PersonRepository $personRepository,
        protected InitiativeRepository $initiativeRepository,
        protected PipelineRepository $pipelineRepository,
        protected SourceRepository $sourceRepository,
        protected TypeRepository $typeRepository
    ) {}

    /**
     * Display a listing of the email template.
     */
    public function index(): View|JsonResponse
    {
        if (request()->ajax()) {
            return datagrid(WebFormDataGrid::class)->process();
        }

        return view('admin::settings.web-forms.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tempAttributes = $this->attributeRepository->findWhereIn('entity_type', ['persons', 'initiatives']);

        $attributes = [];

        foreach ($tempAttributes as $attribute) {
            if ($attribute->entity_type == 'persons'
                && (
                    $attribute->code == 'name'
                    || $attribute->code == 'emails'
                    || $attribute->code == 'contact_numbers'
                )
            ) {
                $attributes['default'][] = $attribute;
            } else {
                $attributes['other'][] = $attribute;
            }
        }

        return view('admin::settings.web-forms.create', compact('attributes'));
    }

    /**
     * Store a newly created email templates in storage.
     */
    public function store(): RedirectResponse
    {
        $this->validate(request(), [
            'title'                  => 'required',
            'submit_button_label'    => 'required',
            'submit_success_action'  => 'required',
            'submit_success_content' => 'required',
        ]);

        Event::dispatch('settings.web_forms.create.before');

        $data = request()->all();

        $data['create_initiative'] = isset($data['create_initiative']) ? 1 : 0;

        $webForm = $this->webFormRepository->create($data);

        Event::dispatch('settings.web_forms.create.after', $webForm);

        session()->flash('success', trans('admin::app.settings.webforms.index.create-success'));

        return redirect()->route('admin.settings.web_forms.index');
    }

    /**
     * Show the form for editing the specified email template.
     */
    public function edit(int $id): View
    {
        $webForm = $this->webFormRepository->findOrFail($id);

        $attributes = $this->attributeRepository->findWhere([
            ['entity_type', 'IN', ['persons', 'initiatives']],
            ['id', 'NOTIN', $webForm->attributes()->pluck('attribute_id')->toArray()],
        ]);

        return view('admin::settings.web-forms.edit', compact('webForm', 'attributes'));
    }

    /**
     * Update the specified email template in storage.
     */
    public function update(int $id): RedirectResponse
    {
        $this->validate(request(), [
            'title'                  => 'required',
            'submit_button_label'    => 'required',
            'submit_success_action'  => 'required',
            'submit_success_content' => 'required',
        ]);

        Event::dispatch('settings.web_forms.update.before', $id);

        $data = request()->all();

        $data['create_initiative'] = isset($data['create_initiative']) ? 1 : 0;

        $webForm = $this->webFormRepository->update($data, $id);

        Event::dispatch('settings.web_forms.update.after', $webForm);

        session()->flash('success', trans('admin::app.settings.webforms.index.update-success'));

        return redirect()->route('admin.settings.web_forms.index');
    }

    /**
     * Remove the specified email template from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        $webForm = $this->webFormRepository->findOrFail($id);

        try {
            Event::dispatch('settings.web_forms.delete.before', $id);

            $webForm->delete($id);

            Event::dispatch('settings.web_forms.delete.after', $id);

            return response()->json([
                'message' => trans('admin::app.settings.webforms.index.delete-success'),
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => trans('admin::app.settings.webforms.index.delete-failed'),
            ], 400);
        }
    }
}
