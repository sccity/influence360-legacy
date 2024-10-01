<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2021_03_12_060658_create_core_config_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2021_03_12_074578_create_groups_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2021_03_12_074597_create_roles_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2021_03_12_074857_create_users_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2021_03_12_074867_create_user_groups_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2021_03_12_074957_create_user_password_resets_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2021_04_02_080709_create_attributes_table',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2021_04_02_080837_create_attribute_options_table',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2021_04_06_122751_create_attribute_values_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2021_04_09_051326_create_organizations_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2021_04_09_065617_create_persons_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2021_04_09_065617_create_products_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2021_04_12_173232_create_countries_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2021_04_12_173344_create_country_states_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2021_04_21_172825_create_lead_sources_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2021_04_21_172847_create_lead_types_table',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2021_04_22_153258_create_lead_stages_table',
                'batch' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2021_04_22_155706_create_lead_pipelines_table',
                'batch' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2021_04_22_155838_create_lead_pipeline_stages_table',
                'batch' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2021_04_22_164215_create_leads_table',
                'batch' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2021_04_22_171805_create_lead_products_table',
                'batch' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2021_05_12_150329_create_activities_table',
                'batch' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'migration' => '2021_05_12_150329_create_lead_activities_table',
                'batch' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'migration' => '2021_05_15_151855_create_activity_files_table',
                'batch' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'migration' => '2021_05_20_141230_create_tags_table',
                'batch' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'migration' => '2021_05_20_141240_create_lead_tags_table',
                'batch' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'migration' => '2021_05_24_075618_create_emails_table',
                'batch' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'migration' => '2021_05_25_072700_create_email_attachments_table',
                'batch' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'migration' => '2021_06_07_162808_add_lead_view_permission_column_in_users_table',
                'batch' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'migration' => '2021_07_01_230345_create_quotes_table',
                'batch' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'migration' => '2021_07_01_231317_create_quote_items_table',
                'batch' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'migration' => '2021_07_02_201822_create_lead_quotes_table',
                'batch' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'migration' => '2021_07_28_142453_create_activity_participants_table',
                'batch' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'migration' => '2021_08_26_133538_create_workflows_table',
                'batch' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'migration' => '2021_09_03_172713_create_email_templates_table',
                'batch' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'migration' => '2021_09_22_194103_add_unique_index_to_name_in_organizations_table',
                'batch' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'migration' => '2021_09_22_194622_add_unique_index_to_name_in_groups_table',
                'batch' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'migration' => '2021_09_23_221138_add_column_expected_close_date_in_leads_table',
                'batch' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'migration' => '2021_09_30_135857_add_column_rotten_days_in_lead_pipelines_table',
                'batch' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'migration' => '2021_09_30_154222_alter_lead_pipeline_stages_table',
                'batch' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'migration' => '2021_09_30_161722_alter_leads_table',
                'batch' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'migration' => '2021_09_30_183825_change_user_id_to_nullable_in_leads_table',
                'batch' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'migration' => '2021_10_02_170105_insert_expected_closed_date_column_in_attributes_table',
                'batch' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'migration' => '2021_11_11_180804_change_lead_pipeline_stage_id_constraint_in_leads_table',
                'batch' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'migration' => '2021_11_12_171510_add_image_column_in_users_table',
                'batch' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'migration' => '2021_11_17_190943_add_location_column_in_activities_table',
                'batch' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'migration' => '2021_12_14_213049_create_web_forms_table',
                'batch' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'migration' => '2021_12_14_214923_create_web_form_attributes_table',
                'batch' => 1,
            ),
            50 => 
            array (
                'id' => 51,
                'migration' => '2024_05_10_152848_create_saved_filters_table',
                'batch' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'migration' => '2024_06_21_160707_create_warehouses_table',
                'batch' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'migration' => '2024_06_21_160735_create_warehouse_locations_table',
                'batch' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'migration' => '2024_06_24_174241_insert_warehouse_attributes_in_attributes_table',
                'batch' => 1,
            ),
            54 => 
            array (
                'id' => 55,
                'migration' => '2024_06_28_154009_create_product_inventories_table',
                'batch' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'migration' => '2024_07_24_150821_create_webhooks_table',
                'batch' => 1,
            ),
            56 => 
            array (
                'id' => 57,
                'migration' => '2024_07_31_092951_add_job_title_in_persons_table',
                'batch' => 1,
            ),
            57 => 
            array (
                'id' => 58,
                'migration' => '2024_07_31_093603_add_organization_sales_owner_attribute_in_attributes_table',
                'batch' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'migration' => '2024_07_31_093605_add_person_job_title_attribute_in_attributes_table',
                'batch' => 1,
            ),
            59 => 
            array (
                'id' => 60,
                'migration' => '2024_07_31_093605_add_person_sales_owner_attribute_in_attributes_table',
                'batch' => 1,
            ),
            60 => 
            array (
                'id' => 61,
                'migration' => '2024_08_06_145943_create_person_tags_table',
                'batch' => 1,
            ),
            61 => 
            array (
                'id' => 62,
                'migration' => '2024_08_06_161212_create_person_activities_table',
                'batch' => 1,
            ),
            62 => 
            array (
                'id' => 63,
                'migration' => '2024_08_10_100329_create_warehouse_activities_table',
                'batch' => 1,
            ),
            63 => 
            array (
                'id' => 64,
                'migration' => '2024_08_10_100340_create_warehouse_tags_table',
                'batch' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'migration' => '2024_08_10_150329_create_product_activities_table',
                'batch' => 1,
            ),
            65 => 
            array (
                'id' => 66,
                'migration' => '2024_08_10_150340_create_product_tags_table',
                'batch' => 1,
            ),
            66 => 
            array (
                'id' => 67,
                'migration' => '2024_08_14_102116_add_user_id_column_in_persons_table',
                'batch' => 1,
            ),
            67 => 
            array (
                'id' => 68,
                'migration' => '2024_08_14_102136_add_user_id_column_in_organizations_table',
                'batch' => 1,
            ),
            68 => 
            array (
                'id' => 69,
                'migration' => '2024_08_21_153011_add_leads_stage_and_pipeline_attributes',
                'batch' => 1,
            ),
            69 => 
            array (
                'id' => 70,
                'migration' => '2024_08_27_091619_create_email_tags_table',
                'batch' => 1,
            ),
            70 => 
            array (
                'id' => 71,
                'migration' => '2024_09_06_065808_alter_product_inventories_table',
                'batch' => 1,
            ),
            71 => 
            array (
                'id' => 72,
                'migration' => '2024_10_01_084133_create_activities_table',
                'batch' => 0,
            ),
            72 => 
            array (
                'id' => 73,
                'migration' => '2024_10_01_084133_create_activity_files_table',
                'batch' => 0,
            ),
            73 => 
            array (
                'id' => 74,
                'migration' => '2024_10_01_084133_create_activity_participants_table',
                'batch' => 0,
            ),
            74 => 
            array (
                'id' => 75,
                'migration' => '2024_10_01_084133_create_attribute_options_table',
                'batch' => 0,
            ),
            75 => 
            array (
                'id' => 76,
                'migration' => '2024_10_01_084133_create_attribute_values_table',
                'batch' => 0,
            ),
            76 => 
            array (
                'id' => 77,
                'migration' => '2024_10_01_084133_create_attributes_table',
                'batch' => 0,
            ),
            77 => 
            array (
                'id' => 78,
                'migration' => '2024_10_01_084133_create_core_config_table',
                'batch' => 0,
            ),
            78 => 
            array (
                'id' => 79,
                'migration' => '2024_10_01_084133_create_countries_table',
                'batch' => 0,
            ),
            79 => 
            array (
                'id' => 80,
                'migration' => '2024_10_01_084133_create_country_states_table',
                'batch' => 0,
            ),
            80 => 
            array (
                'id' => 81,
                'migration' => '2024_10_01_084133_create_datagrid_saved_filters_table',
                'batch' => 0,
            ),
            81 => 
            array (
                'id' => 82,
                'migration' => '2024_10_01_084133_create_email_attachments_table',
                'batch' => 0,
            ),
            82 => 
            array (
                'id' => 83,
                'migration' => '2024_10_01_084133_create_email_tags_table',
                'batch' => 0,
            ),
            83 => 
            array (
                'id' => 84,
                'migration' => '2024_10_01_084133_create_email_templates_table',
                'batch' => 0,
            ),
            84 => 
            array (
                'id' => 85,
                'migration' => '2024_10_01_084133_create_emails_table',
                'batch' => 0,
            ),
            85 => 
            array (
                'id' => 86,
                'migration' => '2024_10_01_084133_create_failed_jobs_table',
                'batch' => 0,
            ),
            86 => 
            array (
                'id' => 87,
                'migration' => '2024_10_01_084133_create_groups_table',
                'batch' => 0,
            ),
            87 => 
            array (
                'id' => 88,
                'migration' => '2024_10_01_084133_create_lead_activities_table',
                'batch' => 0,
            ),
            88 => 
            array (
                'id' => 89,
                'migration' => '2024_10_01_084133_create_lead_pipeline_stages_table',
                'batch' => 0,
            ),
            89 => 
            array (
                'id' => 90,
                'migration' => '2024_10_01_084133_create_lead_pipelines_table',
                'batch' => 0,
            ),
            90 => 
            array (
                'id' => 91,
                'migration' => '2024_10_01_084133_create_lead_products_table',
                'batch' => 0,
            ),
            91 => 
            array (
                'id' => 92,
                'migration' => '2024_10_01_084133_create_lead_quotes_table',
                'batch' => 0,
            ),
            92 => 
            array (
                'id' => 93,
                'migration' => '2024_10_01_084133_create_lead_sources_table',
                'batch' => 0,
            ),
            93 => 
            array (
                'id' => 94,
                'migration' => '2024_10_01_084133_create_lead_stages_table',
                'batch' => 0,
            ),
            94 => 
            array (
                'id' => 95,
                'migration' => '2024_10_01_084133_create_lead_tags_table',
                'batch' => 0,
            ),
            95 => 
            array (
                'id' => 96,
                'migration' => '2024_10_01_084133_create_lead_types_table',
                'batch' => 0,
            ),
            96 => 
            array (
                'id' => 97,
                'migration' => '2024_10_01_084133_create_leads_table',
                'batch' => 0,
            ),
            97 => 
            array (
                'id' => 98,
                'migration' => '2024_10_01_084133_create_organizations_table',
                'batch' => 0,
            ),
            98 => 
            array (
                'id' => 99,
                'migration' => '2024_10_01_084133_create_person_activities_table',
                'batch' => 0,
            ),
            99 => 
            array (
                'id' => 100,
                'migration' => '2024_10_01_084133_create_person_tags_table',
                'batch' => 0,
            ),
            100 => 
            array (
                'id' => 101,
                'migration' => '2024_10_01_084133_create_personal_access_tokens_table',
                'batch' => 0,
            ),
            101 => 
            array (
                'id' => 102,
                'migration' => '2024_10_01_084133_create_persons_table',
                'batch' => 0,
            ),
            102 => 
            array (
                'id' => 103,
                'migration' => '2024_10_01_084133_create_product_activities_table',
                'batch' => 0,
            ),
            103 => 
            array (
                'id' => 104,
                'migration' => '2024_10_01_084133_create_product_inventories_table',
                'batch' => 0,
            ),
            104 => 
            array (
                'id' => 105,
                'migration' => '2024_10_01_084133_create_product_tags_table',
                'batch' => 0,
            ),
            105 => 
            array (
                'id' => 106,
                'migration' => '2024_10_01_084133_create_products_table',
                'batch' => 0,
            ),
            106 => 
            array (
                'id' => 107,
                'migration' => '2024_10_01_084133_create_quote_items_table',
                'batch' => 0,
            ),
            107 => 
            array (
                'id' => 108,
                'migration' => '2024_10_01_084133_create_quotes_table',
                'batch' => 0,
            ),
            108 => 
            array (
                'id' => 109,
                'migration' => '2024_10_01_084133_create_roles_table',
                'batch' => 0,
            ),
            109 => 
            array (
                'id' => 110,
                'migration' => '2024_10_01_084133_create_tags_table',
                'batch' => 0,
            ),
            110 => 
            array (
                'id' => 111,
                'migration' => '2024_10_01_084133_create_user_groups_table',
                'batch' => 0,
            ),
            111 => 
            array (
                'id' => 112,
                'migration' => '2024_10_01_084133_create_user_password_resets_table',
                'batch' => 0,
            ),
            112 => 
            array (
                'id' => 113,
                'migration' => '2024_10_01_084133_create_users_table',
                'batch' => 0,
            ),
            113 => 
            array (
                'id' => 114,
                'migration' => '2024_10_01_084133_create_warehouse_activities_table',
                'batch' => 0,
            ),
            114 => 
            array (
                'id' => 115,
                'migration' => '2024_10_01_084133_create_warehouse_locations_table',
                'batch' => 0,
            ),
            115 => 
            array (
                'id' => 116,
                'migration' => '2024_10_01_084133_create_warehouse_tags_table',
                'batch' => 0,
            ),
            116 => 
            array (
                'id' => 117,
                'migration' => '2024_10_01_084133_create_warehouses_table',
                'batch' => 0,
            ),
            117 => 
            array (
                'id' => 118,
                'migration' => '2024_10_01_084133_create_web_form_attributes_table',
                'batch' => 0,
            ),
            118 => 
            array (
                'id' => 119,
                'migration' => '2024_10_01_084133_create_web_forms_table',
                'batch' => 0,
            ),
            119 => 
            array (
                'id' => 120,
                'migration' => '2024_10_01_084133_create_webhooks_table',
                'batch' => 0,
            ),
            120 => 
            array (
                'id' => 121,
                'migration' => '2024_10_01_084133_create_workflows_table',
                'batch' => 0,
            ),
            121 => 
            array (
                'id' => 122,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_activities_table',
                'batch' => 0,
            ),
            122 => 
            array (
                'id' => 123,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_activity_files_table',
                'batch' => 0,
            ),
            123 => 
            array (
                'id' => 124,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_activity_participants_table',
                'batch' => 0,
            ),
            124 => 
            array (
                'id' => 125,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_attribute_options_table',
                'batch' => 0,
            ),
            125 => 
            array (
                'id' => 126,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_attribute_values_table',
                'batch' => 0,
            ),
            126 => 
            array (
                'id' => 127,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_country_states_table',
                'batch' => 0,
            ),
            127 => 
            array (
                'id' => 128,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_email_attachments_table',
                'batch' => 0,
            ),
            128 => 
            array (
                'id' => 129,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_email_tags_table',
                'batch' => 0,
            ),
            129 => 
            array (
                'id' => 130,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_emails_table',
                'batch' => 0,
            ),
            130 => 
            array (
                'id' => 131,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_lead_activities_table',
                'batch' => 0,
            ),
            131 => 
            array (
                'id' => 132,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_lead_pipeline_stages_table',
                'batch' => 0,
            ),
            132 => 
            array (
                'id' => 133,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_lead_products_table',
                'batch' => 0,
            ),
            133 => 
            array (
                'id' => 134,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_lead_quotes_table',
                'batch' => 0,
            ),
            134 => 
            array (
                'id' => 135,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_lead_tags_table',
                'batch' => 0,
            ),
            135 => 
            array (
                'id' => 136,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_leads_table',
                'batch' => 0,
            ),
            136 => 
            array (
                'id' => 137,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_organizations_table',
                'batch' => 0,
            ),
            137 => 
            array (
                'id' => 138,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_person_activities_table',
                'batch' => 0,
            ),
            138 => 
            array (
                'id' => 139,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_person_tags_table',
                'batch' => 0,
            ),
            139 => 
            array (
                'id' => 140,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_persons_table',
                'batch' => 0,
            ),
            140 => 
            array (
                'id' => 141,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_product_activities_table',
                'batch' => 0,
            ),
            141 => 
            array (
                'id' => 142,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_product_inventories_table',
                'batch' => 0,
            ),
            142 => 
            array (
                'id' => 143,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_product_tags_table',
                'batch' => 0,
            ),
            143 => 
            array (
                'id' => 144,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_quote_items_table',
                'batch' => 0,
            ),
            144 => 
            array (
                'id' => 145,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_quotes_table',
                'batch' => 0,
            ),
            145 => 
            array (
                'id' => 146,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_tags_table',
                'batch' => 0,
            ),
            146 => 
            array (
                'id' => 147,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_user_groups_table',
                'batch' => 0,
            ),
            147 => 
            array (
                'id' => 148,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_users_table',
                'batch' => 0,
            ),
            148 => 
            array (
                'id' => 149,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_warehouse_activities_table',
                'batch' => 0,
            ),
            149 => 
            array (
                'id' => 150,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_warehouse_locations_table',
                'batch' => 0,
            ),
            150 => 
            array (
                'id' => 151,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_warehouse_tags_table',
                'batch' => 0,
            ),
            151 => 
            array (
                'id' => 152,
                'migration' => '2024_10_01_084136_add_foreign_keys_to_web_form_attributes_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}