<x-admin::layouts>
    <x-slot:title>
        @lang('admin::app.bill-files.index.title')
    </x-slot>

    <!-- Bill Files Datagrid -->
    <v-bill-files>
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

                <div class="flex gap-2">
                    <i class="icon-kanban cursor-pointer rounded p-2 text-2xl"></i>
                    <i class="icon-calendar cursor-pointer rounded p-2 text-2xl"></i>
                </div>
            </div>

            <!-- Table with sorting and pagination -->
            <x-admin::datagrid
                src="{{ route('admin.bill-files.index') }}"
                :isMultiRow="true"
                ref="datagrid"
            >
                <!-- Table Header with Sortable Columns -->
                <template #header="{
                    isLoading,
                    available,
                    applied,
                    sort
                }">
                    <div class="grid grid-cols-[2fr_1fr_1fr] items-center border-b px-4 py-2.5 dark:border-gray-800">
                        <p class="cursor-pointer hover:text-gray-800 dark:hover:text-white font-medium text-gray-800 dark:text-white"
                            @click="sort('billname')">
                            Bill Name
                            <i class="icon-up-stat" v-if="applied.sort.column == 'billname' && applied.sort.order == 'asc'"></i>
                            <i class="icon-down-stat" v-if="applied.sort.column == 'billname' && applied.sort.order == 'desc'"></i>
                        </p>

                        <p class="cursor-pointer hover:text-gray-800 dark:hover:text-white font-medium text-gray-800 dark:text-white"
                           @click="sort('status')">
                            Status
                            <i class="icon-up-stat" v-if="applied.sort.column == 'status' && applied.sort.order == 'asc'"></i>
                            <i class="icon-down-stat" v-if="applied.sort.column == 'status' && applied.sort.order == 'desc'"></i>
                        </p>

                        <p class="text-gray-600 dark:text-gray-300">Actions</p>
                    </div>
                </template>

                <!-- Table Body -->
                <template #body="{
                    isLoading,
                    available,
                    applied
                }">
                    <div v-if="isLoading">
                        <x-admin::shimmer.datagrid.table.body :isMultiRow="true" />
                    </div>

                    <div v-else>
                        @forelse ($billFiles as $billFile)
                            <div class="grid grid-cols-[2fr_1fr_1fr] items-center border-b px-4 py-2.5 transition-all hover:bg-gray-50 dark:border-gray-800 dark:hover:bg-gray-950">
                                <p class="text-gray-600 dark:text-gray-300">{{ $billFile->billname }}</p>

                                <p class="text-gray-600 dark:text-gray-300">{{ $billFile->status }}</p>

                                <div class="flex gap-2">
                                    <a href="{{ route('admin.bill-files.view', $billFile->id) }}" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        @empty
                            <div class="grid grid-cols-[1fr] items-center border-b px-4 py-2.5">
                                <p class="text-gray-600 dark:text-gray-300">No bill files available.</p>
                            </div>
                        @endforelse
                    </div>
                </template>

                <!-- Pagination with Per Page Selector -->
                <template #pagination="{
                    pagination,
                    applyPage
                }">
                    <div class="flex justify-between items-center px-4 py-2 border-t">
                        <!-- Per Page Selector -->
                        <div class="flex items-center">
                            <label for="perPage" class="mr-2 text-sm text-gray-600 dark:text-gray-300">Per page:</label>
                            <select id="perPage" class="form-select dark:bg-gray-900 dark:text-white text-gray-600" @change="applyPage($event.target.value)">
                                <option value="10" {{ request()->get('per_page') == 10 ? 'selected' : '' }}>10</option>
                                <option value="25" {{ request()->get('per_page') == 25 ? 'selected' : '' }}>25</option>
                                <option value="50" {{ request()->get('per_page') == 50 ? 'selected' : '' }}>50</option>
                            </select>
                        </div>

                        <span class="text-sm text-gray-600 dark:text-gray-300">
                            Showing {{ $billFiles->firstItem() }} to {{ $billFiles->lastItem() }} of {{ $billFiles->total() }} results
                        </span>

                        <nav class="flex gap-2">
                            <!-- Previous Page Button -->
                            @if ($billFiles->onFirstPage())
                                <span class="px-3 py-2 text-gray-400 cursor-not-allowed">&lt;</span>
                            @else
                                <a href="{{ $billFiles->previousPageUrl() }}" class="px-3 py-2 bg-gray-200 dark:bg-gray-800 rounded">&lt;</a>
                            @endif

                            <!-- Next Page Button -->
                            @if ($billFiles->hasMorePages())
                                <a href="{{ $billFiles->nextPageUrl() }}" class="px-3 py-2 bg-gray-200 dark:bg-gray-800 rounded">&gt;</a>
                            @else
                                <span class="px-3 py-2 text-gray-400 cursor-not-allowed">&gt;</span>
                            @endif
                        </nav>
                    </div>
                </template>
            </x-admin::datagrid>
        </div>
    </v-bill-files>

    @pushOnce('scripts')
        <script>
            app.component('v-bill-files', {
                template: '#v-bill-files-template',

                data() {
                    return {
                        viewType: (new URLSearchParams(window.location.search))?.get('view-type') || 'table',
                    };
                },

                methods: {
                    toggleView(type) {
                        this.viewType = type;

                        let currentUrl = new URL(window.location);

                        currentUrl.searchParams.set('view-type', type);

                        window.history.pushState({}, '', currentUrl);
                    },

                    applyPage(perPage) {
                        let currentUrl = new URL(window.location);

                        currentUrl.searchParams.set('per_page', perPage);
                        window.location.href = currentUrl.toString();
                    },

                    sort(column) {
                        let currentUrl = new URL(window.location);

                        let currentSortColumn = currentUrl.searchParams.get('sort') || 'billname';
                        let currentOrder = currentUrl.searchParams.get('order') || 'asc';

                        if (column === currentSortColumn) {
                            currentOrder = currentOrder === 'asc' ? 'desc' : 'asc';
                        } else {
                            currentSortColumn = column;
                            currentOrder = 'asc';
                        }

                        currentUrl.searchParams.set('sort', currentSortColumn);
                        currentUrl.searchParams.set('order', currentOrder);

                        window.location.href = currentUrl.toString();
                    }
                },
            });
        </script>
    @endPushOnce
</x-admin::layouts>
