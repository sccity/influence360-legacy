<x-admin::layouts>
    <x-slot:title>
        @lang('admin::app.bill-files.activities.index.title', ['billname' => $billFile->billname])
    </x-slot>

    <div class="flex gap-4">
        <div class="flex flex-col gap-4 w-full">
            <x-admin::activities :endpoint="route('admin.bill-files.activities.index', $billFile->id)" />
        </div>
    </div>
</x-admin::layouts>
