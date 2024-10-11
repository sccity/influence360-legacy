{!! view_render_event('admin.bill-files.view.attributes.before', ['billFile' => $billFile]) !!}

<div class="flex w-full flex-col gap-4 border-b border-gray-200 p-4 dark:border-gray-800">
    <h4 class="font-semibold dark:text-white">
        @lang('admin::app.bill-files.view.about-bill-file')
    </h4>

    {!! view_render_event('admin.bill-files.view.attributes.form_controls.before', ['billFile' => $billFile]) !!}

    <x-admin::form
        v-slot="{ meta, errors, handleSubmit }"
        as="div"
        ref="modalForm"
    >
        <form @submit="handleSubmit($event, () => {})">
            {!! view_render_event('admin.bill-files.view.attributes.form_controls.attributes_view.before', ['billFile' => $billFile]) !!}

            <x-admin::attributes.view
                :custom-attributes="app('Influence360\Attribute\Repositories\AttributeRepository')->findWhere([
                    'entity_type' => 'bill_files',
                    ['code', 'NOTIN', ['billid', 'billname']]
                ])"
                :entity="$billFile"
                :url="route('admin.bill-files.update', $billFile->id)"
                :allow-edit="true"
            />

            {!! view_render_event('admin.bill-files.view.attributes.form_controls.attributes_view.after', ['billFile' => $billFile]) !!}
        </form>
    </x-admin::form>

    {!! view_render_event('admin.bill-files.view.attributes.form_controls.after', ['billFile' => $billFile]) !!}
</div>

{!! view_render_event('admin.bill-files.view.attributes.after', ['billFile' => $billFile]) !!}
