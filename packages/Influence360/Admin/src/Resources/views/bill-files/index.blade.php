<x-admin::layouts>
    <x-slot:title>
        @lang('admin::app.bill-files.index.title')
    </x-slot>

    <!-- Header -->
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

    <!-- Content -->
    <div class="mt-3.5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Bill Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($billFiles as $billFile)
                    <tr>
                        <td>{{ $billFile->billname }}</td>
                        <td>{{ $billFile->status }}</td>
                        <td>
                            <a href="{{ route('admin.bill-files.view', $billFile->id) }}" class="btn btn-primary">View</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No bill files available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination -->
        {{ $billFiles->links() }}
    </div>
</x-admin::layouts>
