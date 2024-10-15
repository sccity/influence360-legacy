<x-admin::layouts>
    <x-slot:title>
        @lang('admin::app.bill-files.index.title')
    </x-slot>

    <div class="flex flex-col gap-4">
        <div class="flex items-center justify-between rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300">
            <div class="flex flex-col gap-2">
                <div class="flex cursor-pointer items-center">
                    <x-admin::breadcrumbs name="admin.bill-files.index" />
                </div>

                <div class="text-xl font-bold dark:text-white">
                    @lang('admin::app.bill-files.index.title')
                </div>
            </div>
        </div>

        <v-bill-files>
            <x-admin::shimmer.datagrid />
        </v-bill-files>
    </div>

    @pushOnce('scripts')        
        <script type="text/x-template" id="v-bill-files-template">
            <x-admin::datagrid
                src="{{ route('admin.bill-files.index') }}"
                :isMultiRow="false"
                ref="datagrid"
            >
                <template #default="{ columns, records, actions }">
                    <div class="table-responsive grid w-full box-shadow rounded bg-white dark:bg-gray-900 overflow-hidden">
                        <table class="table">
                            <thead>
                                <tr class="text-left">
                                    <th v-for="column in columns" :key="column.index">
                                        @{{ column.label }}
                                    </th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr v-for="record in records" :key="record.id">
                                    <td v-for="column in columns" :key="column.index">
                                        @{{ record[column.index] }}
                                    </td>
                                    <td>
                                        <a v-for="action in actions"
                                           :key="action.title"
                                           :href="action.url(record)"
                                           class="text-blue-600 hover:underline mr-2"
                                        >
                                            <i :class="action.icon"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </template>
            </x-admin::datagrid>
        </script>

        <script type="module">
            app.component('v-bill-files', {
                template: '#v-bill-files-template',
            });
        </script>
    @endPushOnce
</x-admin::layouts>
