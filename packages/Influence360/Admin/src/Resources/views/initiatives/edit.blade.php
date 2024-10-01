<x-admin::layouts>
    <!-- Page Title -->
    <x-slot:title>
        @lang('admin::app.initiatives.edit.title')
    </x-slot>

    {!! view_render_event('admin.initiatives.edit.form_controls.before', ['initiative' => $initiative]) !!}

    <!-- Edit Initiative Form -->
    <x-admin::form
        :action="route('admin.initiatives.update', $initiative->id)"
        method="PUT"
    >
        <div class="flex flex-col gap-4">

            <div class="flex items-center justify-between rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300">
                <div class="flex flex-col gap-2">
                    <div class="flex cursor-pointer items-center">
                        <x-admin::breadcrumbs
                            name="initiatives.edit"
                            :entity="$initiative"
                        />
                    </div>

                    <div class="text-xl font-bold dark:text-white">
                        @lang('admin::app.initiatives.edit.title')
                    </div>
                </div>

                <div class="flex items-center gap-x-2.5">
                    {!! view_render_event('admin.initiatives.edit.save_button.before', ['initiative' => $initiative]) !!}

                    <!-- Save button for Editing Initiative -->
                    <div class="flex items-center gap-x-2.5">
                        {!! view_render_event('admin.initiatives.edit.form_buttons.before') !!}

                        <button
                            type="submit"
                            class="primary-button"
                        >
                            @lang('admin::app.initiatives.edit.save-btn')
                        </button>

                        {!! view_render_event('admin.initiatives.edit.form_buttons.after') !!}
                    </div>

                    {!! view_render_event('admin.initiatives.edit.save_button.after', ['initiative' => $initiative]) !!}
                </div>
            </div>

            <input type="hidden" id="initiative_pipeline_stage_id" name="initiative_pipeline_stage_id" value="{{ $initiative->initiative_pipeline_stage_id }}" />

            <!-- Initiative Edit Component -->
            <v-initiative-edit :initiative="{{ json_encode($initiative) }}"></v-initiative-edit>
        </div>
    </x-admin::form>

    {!! view_render_event('admin.initiatives.edit.form_controls.after', ['initiative' => $initiative]) !!}

    @pushOnce('scripts')
        <script
            type="text/x-template"
            id="v-initiative-edit-template"
        >
            <div class="box-shadow flex flex-col gap-4 rounded-lg border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900 max-xl:flex-wrap">
                <div class="flex gap-2 border-b border-gray-200 dark:border-gray-800">
                    <!-- Tabs -->
                    <template v-for="tab in tabs" :key="tab.id">
                        {!! view_render_event('admin.initiatives.edit.tabs.before', ['initiative' => $initiative]) !!}

                        <a
                            :href="'#' + tab.id"
                            :class="[
                                'inline-block px-3 py-2.5 border-b-2  text-sm font-medium ',
                                activeTab === tab.id
                                ? 'text-brandColor border-brandColor dark:brandColor dark:brandColor'
                                : 'text-gray-600 dark:text-gray-300  border-transparent hover:text-gray-800 hover:border-gray-400 dark:hover:border-gray-400  dark:hover:text-white'
                            ]"
                            @click="scrollToSection(tab.id)"
                            :text="tab.label"
                        ></a>

                        {!! view_render_event('admin.initiatives.edit.tabs.after', ['initiative' => $initiative]) !!}
                    </template>
                </div>

                <div class="flex flex-col gap-4 px-4 py-2">
                    {!! view_render_event('admin.initiatives.edit.initiative_details.before', ['initiative' => $initiative]) !!}

                    <!-- Details section -->
                    <div
                        class="flex flex-col gap-4"
                        id="initiative-details"
                    >
                        <div class="flex flex-col gap-1">
                            <p class="text-base font-semibold dark:text-white">
                                @lang('admin::app.initiatives.edit.details')
                            </p>

                            <p class="text-gray-600 dark:text-white">
                                @lang('admin::app.initiatives.edit.details-info')
                            </p>
                        </div>

                        <div class="w-1/2">
                            {!! view_render_event('admin.initiatives.edit.initiative_details.attributes.before', ['initiative' => $initiative]) !!}

                            <!-- Initiative Details Title and Description -->
                            <x-admin::attributes
                                :custom-attributes="app('Influence360\Attribute\Repositories\AttributeRepository')->findWhere([
                                    ['code', 'NOTIN', ['initiative_value', 'initiative_type_id', 'initiative_source_id', 'expected_close_date', 'user_id', 'initiative_pipeline_id', 'initiative_pipeline_stage_id']],
                                    'entity_type' => 'initiatives',
                                    'quick_add'   => 1
                                ])"
                                :custom-validations="[
                                    'expected_close_date' => [
                                        'date_format:yyyy-MM-dd',
                                        'after:' .  \Carbon\Carbon::yesterday()->format('Y-m-d')
                                    ],
                                ]"
                                :entity="$initiative"
                            />

                            <!-- Initiative Details Other input fields -->
                            <div class="flex gap-4 max-sm:flex-wrap">
                                <div class="w-full">
                                    <x-admin::attributes
                                        :custom-attributes="app('Influence360\Attribute\Repositories\AttributeRepository')->findWhere([
                                            ['code', 'IN', ['initiative_value', 'initiative_type_id', 'initiative_source_id']],
                                            'entity_type' => 'initiatives',
                                            'quick_add'   => 1
                                        ])"
                                        :custom-validations="[
                                            'expected_close_date' => [
                                                'date_format:yyyy-MM-dd',
                                                'after:' .  \Carbon\Carbon::yesterday()->format('Y-m-d')
                                            ],
                                        ]"
                                        :entity="$initiative"
                                    />
                                </div>

                                <div class="w-full">
                                    <x-admin::attributes
                                        :custom-attributes="app('Influence360\Attribute\Repositories\AttributeRepository')->findWhere([
                                            ['code', 'IN', ['expected_close_date', 'user_id']],
                                            'entity_type' => 'initiatives',
                                            'quick_add'   => 1
                                        ])"
                                        :custom-validations="[
                                            'expected_close_date' => [
                                                'date_format:yyyy-MM-dd',
                                                'after:' .  \Carbon\Carbon::yesterday()->format('Y-m-d')
                                            ],
                                        ]"
                                        :entity="$initiative"
                                        />
                                </div>
                            </div>

                            {!! view_render_event('admin.initiatives.edit.initiative_details.attributes.after', ['initiative' => $initiative]) !!}
                        </div>
                    </div>

                    {!! view_render_event('admin.initiatives.edit.initiative_details.after', ['initiative' => $initiative]) !!}

                    {!! view_render_event('admin.initiatives.edit.contact_person.before', ['initiative' => $initiative]) !!}

                    <!-- Contact Person -->
                    <div
                        class="flex flex-col gap-4"
                        id="contact-person"
                    >
                        <div class="flex flex-col gap-1">
                            <p class="text-base font-semibold dark:text-white">
                                @lang('admin::app.initiatives.edit.contact-person')
                            </p>

                            <p class="text-gray-600 dark:text-white">
                                @lang('admin::app.initiatives.edit.contact-info')
                            </p>
                        </div>

                        <div class="w-1/2">
                            <!-- Contact Person Component -->
                            @include('admin::initiatives.common.contact')
                        </div>
                    </div>

                    {!! view_render_event('admin.initiatives.edit.contact_person.after', ['initiative' => $initiative]) !!}

                    {!! view_render_event('admin.initiatives.edit.contact_person.products.before', ['initiative' => $initiative]) !!}

                    <!-- Product Section -->
                    <div
                        class="flex flex-col gap-4"
                        id="products"
                    >
                        <div class="flex flex-col gap-1">
                            <p class="text-base font-semibold dark:text-white">
                                @lang('admin::app.initiatives.edit.products')
                            </p>

                            <p class="text-gray-600 dark:text-white">
                                @lang('admin::app.initiatives.edit.products-info')
                            </p>
                        </div>

                        <div>
                            <!-- Product Component -->
                            @include('admin::initiatives.common.products')
                        </div>
                    </div>

                    {!! view_render_event('admin.initiatives.edit.contact_person.products.after', ['initiative' => $initiative]) !!}
                </div>

                {!! view_render_event('admin.initiatives.form_controls.after') !!}
            </div>
        </script>

        <script type="module">
            app.component('v-initiative-edit', {
                template: '#v-initiative-edit-template',

                data() {
                    return {
                        activeTab: 'initiative-details',

                        initiative:  @json($initiative),

                        person:  @json($initiative->person),

                        products: @json($initiative->products),

                        tabs: [
                            { id: 'initiative-details', label: '@lang('admin::app.initiatives.edit.details')' },
                            { id: 'contact-person', label: '@lang('admin::app.initiatives.edit.contact-person')' },
                            { id: 'products', label: '@lang('admin::app.initiatives.edit.products')' }
                        ],
                    };
                },

                methods: {
                    /**
                     * Scroll to the section.
                     *
                     * @param {String} tabId
                     *
                     * @returns {void}
                     */
                    scrollToSection(tabId) {
                        const section = document.getElementById(tabId);

                        if (section) {
                            section.scrollIntoView({ behavior: 'smooth' });
                        }
                    },
                },
            });
        </script>
    @endPushOnce

    @pushOnce('styles')
        <style>
            html {
                scroll-behavior: smooth;
            }
        </style>
    @endPushOnce
</x-admin::layouts>
