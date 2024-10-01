<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ActivitiesTableSeeder::class,
            ActivityFilesTableSeeder::class,
            ActivityParticipantsTableSeeder::class,
            AttributeOptionsTableSeeder::class,
            AttributeValuesTableSeeder::class,
            AttributesTableSeeder::class,
            CoreConfigTableSeeder::class,
            CountriesTableSeeder::class,
            CountryStatesTableSeeder::class,
            DatagridSavedFiltersTableSeeder::class,
            EmailAttachmentsTableSeeder::class,
            EmailTagsTableSeeder::class,
            EmailTemplatesTableSeeder::class,
            EmailsTableSeeder::class,
            FailedJobsTableSeeder::class,
            GroupsTableSeeder::class,
            InitiativeActivitiesTableSeeder::class,
            InitiativePipelinesTableSeeder::class,
            InitiativePipelineStagesTableSeeder::class,
            InitiativeSourcesTableSeeder::class,
            InitiativeStagesTableSeeder::class,
            InitiativeTagsTableSeeder::class,
            InitiativeTypesTableSeeder::class,
            InitiativesTableSeeder::class,
            OrganizationsTableSeeder::class,
            PersonActivitiesTableSeeder::class,
            PersonTagsTableSeeder::class,
            PersonalAccessTokensTableSeeder::class,
            PersonsTableSeeder::class,
            RolesTableSeeder::class,
            TagsTableSeeder::class,
            UserGroupsTableSeeder::class,
            UserPasswordResetsTableSeeder::class,
            UsersTableSeeder::class,
            WarehouseActivitiesTableSeeder::class,
            WarehouseLocationsTableSeeder::class,
            WarehouseTagsTableSeeder::class,
            WarehousesTableSeeder::class,
            WebFormAttributesTableSeeder::class,
            WebFormsTableSeeder::class,
            WebhooksTableSeeder::class,
            WorkflowsTableSeeder::class,
        ]);
    }
}
