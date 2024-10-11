<x-admin::layouts>
    <x-slot:title>
        @lang('admin::app.bill-files.view.title', ['billname' => $billFile->billname])
    </x-slot>

    <!-- Content -->
    <div class="flex gap-4">
        <!-- Left Panel -->
        {!! view_render_event('admin.bill-files.view.left.before', ['billFile' => $billFile]) !!}

        <div class="sticky top-[73px] flex min-w-[394px] max-w-[394px] flex-col self-start rounded-lg border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">
            <!-- Bill File Information -->
            <div class="flex w-full flex-col gap-2 border-b border-gray-200 p-4 dark:border-gray-800">
                <!-- Breadcrumbs -->
                <div class="flex items-center justify-between">
                    <x-admin::breadcrumbs name="admin.bill-files.view" :entity="$billFile" />
                </div>

                {!! view_render_event('admin.bill-files.view.tags.before', ['billFile' => $billFile]) !!}

                <!-- Tags -->
                <x-admin::tags
                    :attach-endpoint="route('admin.bill-files.tags.attach', $billFile->id)"
                    :detach-endpoint="route('admin.bill-files.tags.detach', $billFile->id)"
                    :added-tags="$billFile->tags"
                />

                {!! view_render_event('admin.bill-files.view.tags.after', ['billFile' => $billFile]) !!}

                <!-- Title -->
                <div class="mb-4 flex flex-col gap-0.5">
                    {!! view_render_event('admin.bill-files.view.title.before', ['billFile' => $billFile]) !!}

                    <h3 class="text-lg font-bold dark:text-white">
                        {{ $billFile->billname }}
                    </h3>

                    <p class="dark:text-white">
                        Bill ID: {{ $billFile->billid }}
                    </p>

                    {!! view_render_event('admin.bill-files.view.title.after', ['billFile' => $billFile]) !!}
                </div>
                
                <!-- Activity Actions -->
                <div class="flex flex-wrap gap-2">
                    {!! view_render_event('admin.bill-files.view.actions.before', ['billFile' => $billFile]) !!}

                    <!-- File Activity Action -->
                    <x-admin::activities.actions.file
                        :entity="$billFile"
                        entity-control-name="bill_file_id"
                    />

                    <!-- Note Activity Action -->
                    <x-admin::activities.actions.note
                        :entity="$billFile"
                        entity-control-name="bill_file_id"
                    />

                    <!-- Activity Action -->
                    <x-admin::activities.actions.activity
                        :entity="$billFile"
                        entity-control-name="bill_file_id"
                    />

                    {!! view_render_event('admin.bill-files.view.actions.after', ['billFile' => $billFile]) !!}
                </div>
            </div>

            <!-- Bill File Attributes -->
            @include ('admin::bill-files.view.attributes')
        </div>

        {!! view_render_event('admin.bill-files.view.left.after', ['billFile' => $billFile]) !!}

        <!-- Right Panel -->
        <div class="flex w-full flex-col gap-4 rounded-lg">
            {!! view_render_event('admin.bill-files.view.right.before', ['billFile' => $billFile]) !!}

            <!-- Activities -->
            <x-admin::activities :endpoint="route('admin.bill-files.activities.index', $billFile->id)" />

            {!! view_render_event('admin.bill-files.view.right.after', ['billFile' => $billFile]) !!}
        </div>
    </div>
</x-admin::layouts>
