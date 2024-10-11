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
            <!-- Datagrid shimmer -->
            <x-admin::shimmer.datagrid />
        </v-bill-files>
    </div>

    @pushOnce('scripts')        
        <script 
            type="text/x-template"
            id="v-bill-files-template"
        >
            <x-admin::datagrid
                src="{{ route('admin.bill-files.index') }}"
                :isMultiRow="true"
                ref="datagrid"
            >
                <template #header="{
                    isLoading,
                    available,
                    applied,
                    sort,
                }">
                    <template v-if="isLoading">
                        <x-admin::shimmer.datagrid.table.head :isMultiRow="true" />
                    </template>

                    <template v-else>
                        <div class="row grid grid-cols-[.1fr_.2fr_.2fr_.2fr_.2fr_.2fr] grid-rows-1 items-center border-b px-4 py-2.5 dark:border-gray-800">
                            <div
                                class="flex select-none items-center gap-2.5"
                                v-for="(columnGroup, index) in [['id'], ['bill_name'], ['year'], ['session'], ['status'], ['sponsor']]"
                            >
                                <p class="text-gray-600 dark:text-gray-300">
                                    <span class="[&>*]:after:content-['_/_']">
                                        <template v-for="column in columnGroup">
                                            <span
                                                class="after:content-['/'] last:after:content-['']"
                                                :class="{
                                                    'font-medium text-gray-800 dark:text-white': applied.sort.column == column,
                                                    'cursor-pointer hover:text-gray-800 dark:hover:text-white': available.columns.find(columnTemp => columnTemp.index === column)?.sortable,
                                                }"
                                                @click="
                                                    available.columns.find(columnTemp => columnTemp.index === column)?.sortable ? sort(available.columns.find(columnTemp => columnTemp.index === column)): {}
                                                "
                                            >
                                                @{{ available.columns.find(columnTemp => columnTemp.index === column)?.label }}
                                            </span>
                                        </template>
                                    </span>

                                    <i
                                        class="align-text-bottom text-base text-gray-800 dark:text-white ltr:ml-1.5 rtl:mr-1.5"
                                        :class="[applied.sort.order === 'asc' ? 'icon-down-stat': 'icon-up-stat']"
                                        v-if="columnGroup.includes(applied.sort.column)"
                                    ></i>
                                </p>
                            </div>
                        </div>
                    </template>
                </template>

                <template #body="{
                    isLoading,
                    available,
                    applied,
                    performAction
                }">
                    <template v-if="isLoading">
                        <x-admin::shimmer.datagrid.table.body :isMultiRow="true" />
                    </template>

                    <template v-else>
                        <div
                            class="row grid grid-cols-[.1fr_.2fr_.2fr_.2fr_.2fr_.2fr] grid-rows-1 border-b px-4 py-2.5 transition-all hover:bg-gray-50 dark:border-gray-800 dark:hover:bg-gray-950"
                            v-for="record in available.records"
                        >
                            <!-- Bill File ID -->
                            <div class="flex items-center gap-2.5">
                                <div class="flex flex-col gap-1.5 dark:text-gray-300">
                                    @{{ record.id }}
                                </div>
                            </div>

                            <!-- Bill Name -->
                            <div class="flex items-center gap-1.5 dark:text-gray-300">
                                @{{ record.bill_name }}
                            </div>

                            <!-- Year -->
                            <p class="flex items-center dark:text-gray-300">
                                @{{ record.year }}
                            </p>

                            <!-- Session -->
                            <p class="flex items-center dark:text-gray-300">
                                @{{ record.session }}
                            </p>

                            <!-- Status -->
                            <p class="flex items-center dark:text-gray-300">
                                @{{ record.status }}
                            </p>

                            <!-- Sponsor -->
                            <p class="flex items-center dark:text-gray-300">
                                @{{ record.sponsor }}
                            </p>
                            
                            <!-- Actions -->
                            <div class="flex items-center justify-end gap-x-4">
                                <div class="flex items-center gap-1.5">
                                    <a
                                        :href="'{{ route('admin.bill-files.view', '') }}/' + record.id"
                                        class="cursor-pointer rounded-md p-1.5 text-2xl transition-all hover:bg-gray-200 dark:hover:bg-gray-800 max-sm:place-self-center"
                                    >
                                        <span class="icon-eye"></span>
                                    </a>
                                </div>
                            </div> 
                        </div>
                    </template>
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