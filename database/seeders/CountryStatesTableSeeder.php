<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountryStatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('country_states')->delete();
        
        \DB::table('country_states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_code' => 'US',
                'code' => 'AL',
                'name' => 'Alabama',
                'country_id' => 244,
            ),
            1 => 
            array (
                'id' => 2,
                'country_code' => 'US',
                'code' => 'AK',
                'name' => 'Alaska',
                'country_id' => 244,
            ),
            2 => 
            array (
                'id' => 3,
                'country_code' => 'US',
                'code' => 'AS',
                'name' => 'American Samoa',
                'country_id' => 244,
            ),
            3 => 
            array (
                'id' => 4,
                'country_code' => 'US',
                'code' => 'AZ',
                'name' => 'Arizona',
                'country_id' => 244,
            ),
            4 => 
            array (
                'id' => 5,
                'country_code' => 'US',
                'code' => 'AR',
                'name' => 'Arkansas',
                'country_id' => 244,
            ),
            5 => 
            array (
                'id' => 6,
                'country_code' => 'US',
                'code' => 'AE',
                'name' => 'Armed Forces Africa',
                'country_id' => 244,
            ),
            6 => 
            array (
                'id' => 7,
                'country_code' => 'US',
                'code' => 'AA',
                'name' => 'Armed Forces Americas',
                'country_id' => 244,
            ),
            7 => 
            array (
                'id' => 8,
                'country_code' => 'US',
                'code' => 'AE',
                'name' => 'Armed Forces Canada',
                'country_id' => 244,
            ),
            8 => 
            array (
                'id' => 9,
                'country_code' => 'US',
                'code' => 'AE',
                'name' => 'Armed Forces Europe',
                'country_id' => 244,
            ),
            9 => 
            array (
                'id' => 10,
                'country_code' => 'US',
                'code' => 'AE',
                'name' => 'Armed Forces Middle East',
                'country_id' => 244,
            ),
            10 => 
            array (
                'id' => 11,
                'country_code' => 'US',
                'code' => 'AP',
                'name' => 'Armed Forces Pacific',
                'country_id' => 244,
            ),
            11 => 
            array (
                'id' => 12,
                'country_code' => 'US',
                'code' => 'CA',
                'name' => 'California',
                'country_id' => 244,
            ),
            12 => 
            array (
                'id' => 13,
                'country_code' => 'US',
                'code' => 'CO',
                'name' => 'Colorado',
                'country_id' => 244,
            ),
            13 => 
            array (
                'id' => 14,
                'country_code' => 'US',
                'code' => 'CT',
                'name' => 'Connecticut',
                'country_id' => 244,
            ),
            14 => 
            array (
                'id' => 15,
                'country_code' => 'US',
                'code' => 'DE',
                'name' => 'Delaware',
                'country_id' => 244,
            ),
            15 => 
            array (
                'id' => 16,
                'country_code' => 'US',
                'code' => 'DC',
                'name' => 'District of Columbia',
                'country_id' => 244,
            ),
            16 => 
            array (
                'id' => 17,
                'country_code' => 'US',
                'code' => 'FM',
                'name' => 'Federated States Of Micronesia',
                'country_id' => 244,
            ),
            17 => 
            array (
                'id' => 18,
                'country_code' => 'US',
                'code' => 'FL',
                'name' => 'Florida',
                'country_id' => 244,
            ),
            18 => 
            array (
                'id' => 19,
                'country_code' => 'US',
                'code' => 'GA',
                'name' => 'Georgia',
                'country_id' => 244,
            ),
            19 => 
            array (
                'id' => 20,
                'country_code' => 'US',
                'code' => 'GU',
                'name' => 'Guam',
                'country_id' => 244,
            ),
            20 => 
            array (
                'id' => 21,
                'country_code' => 'US',
                'code' => 'HI',
                'name' => 'Hawaii',
                'country_id' => 244,
            ),
            21 => 
            array (
                'id' => 22,
                'country_code' => 'US',
                'code' => 'ID',
                'name' => 'Idaho',
                'country_id' => 244,
            ),
            22 => 
            array (
                'id' => 23,
                'country_code' => 'US',
                'code' => 'IL',
                'name' => 'Illinois',
                'country_id' => 244,
            ),
            23 => 
            array (
                'id' => 24,
                'country_code' => 'US',
                'code' => 'IN',
                'name' => 'Indiana',
                'country_id' => 244,
            ),
            24 => 
            array (
                'id' => 25,
                'country_code' => 'US',
                'code' => 'IA',
                'name' => 'Iowa',
                'country_id' => 244,
            ),
            25 => 
            array (
                'id' => 26,
                'country_code' => 'US',
                'code' => 'KS',
                'name' => 'Kansas',
                'country_id' => 244,
            ),
            26 => 
            array (
                'id' => 27,
                'country_code' => 'US',
                'code' => 'KY',
                'name' => 'Kentucky',
                'country_id' => 244,
            ),
            27 => 
            array (
                'id' => 28,
                'country_code' => 'US',
                'code' => 'LA',
                'name' => 'Louisiana',
                'country_id' => 244,
            ),
            28 => 
            array (
                'id' => 29,
                'country_code' => 'US',
                'code' => 'ME',
                'name' => 'Maine',
                'country_id' => 244,
            ),
            29 => 
            array (
                'id' => 30,
                'country_code' => 'US',
                'code' => 'MH',
                'name' => 'Marshall Islands',
                'country_id' => 244,
            ),
            30 => 
            array (
                'id' => 31,
                'country_code' => 'US',
                'code' => 'MD',
                'name' => 'Maryland',
                'country_id' => 244,
            ),
            31 => 
            array (
                'id' => 32,
                'country_code' => 'US',
                'code' => 'MA',
                'name' => 'Massachusetts',
                'country_id' => 244,
            ),
            32 => 
            array (
                'id' => 33,
                'country_code' => 'US',
                'code' => 'MI',
                'name' => 'Michigan',
                'country_id' => 244,
            ),
            33 => 
            array (
                'id' => 34,
                'country_code' => 'US',
                'code' => 'MN',
                'name' => 'Minnesota',
                'country_id' => 244,
            ),
            34 => 
            array (
                'id' => 35,
                'country_code' => 'US',
                'code' => 'MS',
                'name' => 'Mississippi',
                'country_id' => 244,
            ),
            35 => 
            array (
                'id' => 36,
                'country_code' => 'US',
                'code' => 'MO',
                'name' => 'Missouri',
                'country_id' => 244,
            ),
            36 => 
            array (
                'id' => 37,
                'country_code' => 'US',
                'code' => 'MT',
                'name' => 'Montana',
                'country_id' => 244,
            ),
            37 => 
            array (
                'id' => 38,
                'country_code' => 'US',
                'code' => 'NE',
                'name' => 'Nebraska',
                'country_id' => 244,
            ),
            38 => 
            array (
                'id' => 39,
                'country_code' => 'US',
                'code' => 'NV',
                'name' => 'Nevada',
                'country_id' => 244,
            ),
            39 => 
            array (
                'id' => 40,
                'country_code' => 'US',
                'code' => 'NH',
                'name' => 'New Hampshire',
                'country_id' => 244,
            ),
            40 => 
            array (
                'id' => 41,
                'country_code' => 'US',
                'code' => 'NJ',
                'name' => 'New Jersey',
                'country_id' => 244,
            ),
            41 => 
            array (
                'id' => 42,
                'country_code' => 'US',
                'code' => 'NM',
                'name' => 'New Mexico',
                'country_id' => 244,
            ),
            42 => 
            array (
                'id' => 43,
                'country_code' => 'US',
                'code' => 'NY',
                'name' => 'New York',
                'country_id' => 244,
            ),
            43 => 
            array (
                'id' => 44,
                'country_code' => 'US',
                'code' => 'NC',
                'name' => 'North Carolina',
                'country_id' => 244,
            ),
            44 => 
            array (
                'id' => 45,
                'country_code' => 'US',
                'code' => 'ND',
                'name' => 'North Dakota',
                'country_id' => 244,
            ),
            45 => 
            array (
                'id' => 46,
                'country_code' => 'US',
                'code' => 'MP',
                'name' => 'Northern Mariana Islands',
                'country_id' => 244,
            ),
            46 => 
            array (
                'id' => 47,
                'country_code' => 'US',
                'code' => 'OH',
                'name' => 'Ohio',
                'country_id' => 244,
            ),
            47 => 
            array (
                'id' => 48,
                'country_code' => 'US',
                'code' => 'OK',
                'name' => 'Oklahoma',
                'country_id' => 244,
            ),
            48 => 
            array (
                'id' => 49,
                'country_code' => 'US',
                'code' => 'OR',
                'name' => 'Oregon',
                'country_id' => 244,
            ),
            49 => 
            array (
                'id' => 50,
                'country_code' => 'US',
                'code' => 'PW',
                'name' => 'Palau',
                'country_id' => 244,
            ),
            50 => 
            array (
                'id' => 51,
                'country_code' => 'US',
                'code' => 'PA',
                'name' => 'Pennsylvania',
                'country_id' => 244,
            ),
            51 => 
            array (
                'id' => 52,
                'country_code' => 'US',
                'code' => 'PR',
                'name' => 'Puerto Rico',
                'country_id' => 244,
            ),
            52 => 
            array (
                'id' => 53,
                'country_code' => 'US',
                'code' => 'RI',
                'name' => 'Rhode Island',
                'country_id' => 244,
            ),
            53 => 
            array (
                'id' => 54,
                'country_code' => 'US',
                'code' => 'SC',
                'name' => 'South Carolina',
                'country_id' => 244,
            ),
            54 => 
            array (
                'id' => 55,
                'country_code' => 'US',
                'code' => 'SD',
                'name' => 'South Dakota',
                'country_id' => 244,
            ),
            55 => 
            array (
                'id' => 56,
                'country_code' => 'US',
                'code' => 'TN',
                'name' => 'Tennessee',
                'country_id' => 244,
            ),
            56 => 
            array (
                'id' => 57,
                'country_code' => 'US',
                'code' => 'TX',
                'name' => 'Texas',
                'country_id' => 244,
            ),
            57 => 
            array (
                'id' => 58,
                'country_code' => 'US',
                'code' => 'UT',
                'name' => 'Utah',
                'country_id' => 244,
            ),
            58 => 
            array (
                'id' => 59,
                'country_code' => 'US',
                'code' => 'VT',
                'name' => 'Vermont',
                'country_id' => 244,
            ),
            59 => 
            array (
                'id' => 60,
                'country_code' => 'US',
                'code' => 'VI',
                'name' => 'Virgin Islands',
                'country_id' => 244,
            ),
            60 => 
            array (
                'id' => 61,
                'country_code' => 'US',
                'code' => 'VA',
                'name' => 'Virginia',
                'country_id' => 244,
            ),
            61 => 
            array (
                'id' => 62,
                'country_code' => 'US',
                'code' => 'WA',
                'name' => 'Washington',
                'country_id' => 244,
            ),
            62 => 
            array (
                'id' => 63,
                'country_code' => 'US',
                'code' => 'WV',
                'name' => 'West Virginia',
                'country_id' => 244,
            ),
            63 => 
            array (
                'id' => 64,
                'country_code' => 'US',
                'code' => 'WI',
                'name' => 'Wisconsin',
                'country_id' => 244,
            ),
            64 => 
            array (
                'id' => 65,
                'country_code' => 'US',
                'code' => 'WY',
                'name' => 'Wyoming',
                'country_id' => 244,
            ),
            65 => 
            array (
                'id' => 66,
                'country_code' => 'CA',
                'code' => 'AB',
                'name' => 'Alberta',
                'country_id' => 40,
            ),
            66 => 
            array (
                'id' => 67,
                'country_code' => 'CA',
                'code' => 'BC',
                'name' => 'British Columbia',
                'country_id' => 40,
            ),
            67 => 
            array (
                'id' => 68,
                'country_code' => 'CA',
                'code' => 'MB',
                'name' => 'Manitoba',
                'country_id' => 40,
            ),
            68 => 
            array (
                'id' => 69,
                'country_code' => 'CA',
                'code' => 'NL',
                'name' => 'Newfoundland and Labrador',
                'country_id' => 40,
            ),
            69 => 
            array (
                'id' => 70,
                'country_code' => 'CA',
                'code' => 'NB',
                'name' => 'New Brunswick',
                'country_id' => 40,
            ),
            70 => 
            array (
                'id' => 71,
                'country_code' => 'CA',
                'code' => 'NS',
                'name' => 'Nova Scotia',
                'country_id' => 40,
            ),
            71 => 
            array (
                'id' => 72,
                'country_code' => 'CA',
                'code' => 'NT',
                'name' => 'Northwest Territories',
                'country_id' => 40,
            ),
            72 => 
            array (
                'id' => 73,
                'country_code' => 'CA',
                'code' => 'NU',
                'name' => 'Nunavut',
                'country_id' => 40,
            ),
            73 => 
            array (
                'id' => 74,
                'country_code' => 'CA',
                'code' => 'ON',
                'name' => 'Ontario',
                'country_id' => 40,
            ),
            74 => 
            array (
                'id' => 75,
                'country_code' => 'CA',
                'code' => 'PE',
                'name' => 'Prince Edward Island',
                'country_id' => 40,
            ),
            75 => 
            array (
                'id' => 76,
                'country_code' => 'CA',
                'code' => 'QC',
                'name' => 'Quebec',
                'country_id' => 40,
            ),
            76 => 
            array (
                'id' => 77,
                'country_code' => 'CA',
                'code' => 'SK',
                'name' => 'Saskatchewan',
                'country_id' => 40,
            ),
            77 => 
            array (
                'id' => 78,
                'country_code' => 'CA',
                'code' => 'YT',
                'name' => 'Yukon Territory',
                'country_id' => 40,
            ),
            78 => 
            array (
                'id' => 79,
                'country_code' => 'DE',
                'code' => 'NDS',
                'name' => 'Niedersachsen',
                'country_id' => 88,
            ),
            79 => 
            array (
                'id' => 80,
                'country_code' => 'DE',
                'code' => 'BAW',
                'name' => 'Baden-Württemberg',
                'country_id' => 88,
            ),
            80 => 
            array (
                'id' => 81,
                'country_code' => 'DE',
                'code' => 'BAY',
                'name' => 'Bayern',
                'country_id' => 88,
            ),
            81 => 
            array (
                'id' => 82,
                'country_code' => 'DE',
                'code' => 'BER',
                'name' => 'Berlin',
                'country_id' => 88,
            ),
            82 => 
            array (
                'id' => 83,
                'country_code' => 'DE',
                'code' => 'BRG',
                'name' => 'Brandenburg',
                'country_id' => 88,
            ),
            83 => 
            array (
                'id' => 84,
                'country_code' => 'DE',
                'code' => 'BRE',
                'name' => 'Bremen',
                'country_id' => 88,
            ),
            84 => 
            array (
                'id' => 85,
                'country_code' => 'DE',
                'code' => 'HAM',
                'name' => 'Hamburg',
                'country_id' => 88,
            ),
            85 => 
            array (
                'id' => 86,
                'country_code' => 'DE',
                'code' => 'HES',
                'name' => 'Hessen',
                'country_id' => 88,
            ),
            86 => 
            array (
                'id' => 87,
                'country_code' => 'DE',
                'code' => 'MEC',
                'name' => 'Mecklenburg-Vorpommern',
                'country_id' => 88,
            ),
            87 => 
            array (
                'id' => 88,
                'country_code' => 'DE',
                'code' => 'NRW',
                'name' => 'Nordrhein-Westfalen',
                'country_id' => 88,
            ),
            88 => 
            array (
                'id' => 89,
                'country_code' => 'DE',
                'code' => 'RHE',
                'name' => 'Rheinland-Pfalz',
                'country_id' => 88,
            ),
            89 => 
            array (
                'id' => 90,
                'country_code' => 'DE',
                'code' => 'SAR',
                'name' => 'Saarland',
                'country_id' => 88,
            ),
            90 => 
            array (
                'id' => 91,
                'country_code' => 'DE',
                'code' => 'SAS',
                'name' => 'Sachsen',
                'country_id' => 88,
            ),
            91 => 
            array (
                'id' => 92,
                'country_code' => 'DE',
                'code' => 'SAC',
                'name' => 'Sachsen-Anhalt',
                'country_id' => 88,
            ),
            92 => 
            array (
                'id' => 93,
                'country_code' => 'DE',
                'code' => 'SCN',
                'name' => 'Schleswig-Holstein',
                'country_id' => 88,
            ),
            93 => 
            array (
                'id' => 94,
                'country_code' => 'DE',
                'code' => 'THE',
                'name' => 'Thüringen',
                'country_id' => 88,
            ),
            94 => 
            array (
                'id' => 95,
                'country_code' => 'AT',
                'code' => 'WI',
                'name' => 'Wien',
                'country_id' => 16,
            ),
            95 => 
            array (
                'id' => 96,
                'country_code' => 'AT',
                'code' => 'NO',
                'name' => 'Niederösterreich',
                'country_id' => 16,
            ),
            96 => 
            array (
                'id' => 97,
                'country_code' => 'AT',
                'code' => 'OO',
                'name' => 'Oberösterreich',
                'country_id' => 16,
            ),
            97 => 
            array (
                'id' => 98,
                'country_code' => 'AT',
                'code' => 'SB',
                'name' => 'Salzburg',
                'country_id' => 16,
            ),
            98 => 
            array (
                'id' => 99,
                'country_code' => 'AT',
                'code' => 'KN',
                'name' => 'Kärnten',
                'country_id' => 16,
            ),
            99 => 
            array (
                'id' => 100,
                'country_code' => 'AT',
                'code' => 'ST',
                'name' => 'Steiermark',
                'country_id' => 16,
            ),
            100 => 
            array (
                'id' => 101,
                'country_code' => 'AT',
                'code' => 'TI',
                'name' => 'Tirol',
                'country_id' => 16,
            ),
            101 => 
            array (
                'id' => 102,
                'country_code' => 'AT',
                'code' => 'BL',
                'name' => 'Burgenland',
                'country_id' => 16,
            ),
            102 => 
            array (
                'id' => 103,
                'country_code' => 'AT',
                'code' => 'VB',
                'name' => 'Vorarlberg',
                'country_id' => 16,
            ),
            103 => 
            array (
                'id' => 104,
                'country_code' => 'CH',
                'code' => 'AG',
                'name' => 'Aargau',
                'country_id' => 220,
            ),
            104 => 
            array (
                'id' => 105,
                'country_code' => 'CH',
                'code' => 'AI',
                'name' => 'Appenzell Innerrhoden',
                'country_id' => 220,
            ),
            105 => 
            array (
                'id' => 106,
                'country_code' => 'CH',
                'code' => 'AR',
                'name' => 'Appenzell Ausserrhoden',
                'country_id' => 220,
            ),
            106 => 
            array (
                'id' => 107,
                'country_code' => 'CH',
                'code' => 'BE',
                'name' => 'Bern',
                'country_id' => 220,
            ),
            107 => 
            array (
                'id' => 108,
                'country_code' => 'CH',
                'code' => 'BL',
                'name' => 'Basel-Landschaft',
                'country_id' => 220,
            ),
            108 => 
            array (
                'id' => 109,
                'country_code' => 'CH',
                'code' => 'BS',
                'name' => 'Basel-Stadt',
                'country_id' => 220,
            ),
            109 => 
            array (
                'id' => 110,
                'country_code' => 'CH',
                'code' => 'FR',
                'name' => 'Freiburg',
                'country_id' => 220,
            ),
            110 => 
            array (
                'id' => 111,
                'country_code' => 'CH',
                'code' => 'GE',
                'name' => 'Genf',
                'country_id' => 220,
            ),
            111 => 
            array (
                'id' => 112,
                'country_code' => 'CH',
                'code' => 'GL',
                'name' => 'Glarus',
                'country_id' => 220,
            ),
            112 => 
            array (
                'id' => 113,
                'country_code' => 'CH',
                'code' => 'GR',
                'name' => 'Graubünden',
                'country_id' => 220,
            ),
            113 => 
            array (
                'id' => 114,
                'country_code' => 'CH',
                'code' => 'JU',
                'name' => 'Jura',
                'country_id' => 220,
            ),
            114 => 
            array (
                'id' => 115,
                'country_code' => 'CH',
                'code' => 'LU',
                'name' => 'Luzern',
                'country_id' => 220,
            ),
            115 => 
            array (
                'id' => 116,
                'country_code' => 'CH',
                'code' => 'NE',
                'name' => 'Neuenburg',
                'country_id' => 220,
            ),
            116 => 
            array (
                'id' => 117,
                'country_code' => 'CH',
                'code' => 'NW',
                'name' => 'Nidwalden',
                'country_id' => 220,
            ),
            117 => 
            array (
                'id' => 118,
                'country_code' => 'CH',
                'code' => 'OW',
                'name' => 'Obwalden',
                'country_id' => 220,
            ),
            118 => 
            array (
                'id' => 119,
                'country_code' => 'CH',
                'code' => 'SG',
                'name' => 'St. Gallen',
                'country_id' => 220,
            ),
            119 => 
            array (
                'id' => 120,
                'country_code' => 'CH',
                'code' => 'SH',
                'name' => 'Schaffhausen',
                'country_id' => 220,
            ),
            120 => 
            array (
                'id' => 121,
                'country_code' => 'CH',
                'code' => 'SO',
                'name' => 'Solothurn',
                'country_id' => 220,
            ),
            121 => 
            array (
                'id' => 122,
                'country_code' => 'CH',
                'code' => 'SZ',
                'name' => 'Schwyz',
                'country_id' => 220,
            ),
            122 => 
            array (
                'id' => 123,
                'country_code' => 'CH',
                'code' => 'TG',
                'name' => 'Thurgau',
                'country_id' => 220,
            ),
            123 => 
            array (
                'id' => 124,
                'country_code' => 'CH',
                'code' => 'TI',
                'name' => 'Tessin',
                'country_id' => 220,
            ),
            124 => 
            array (
                'id' => 125,
                'country_code' => 'CH',
                'code' => 'UR',
                'name' => 'Uri',
                'country_id' => 220,
            ),
            125 => 
            array (
                'id' => 126,
                'country_code' => 'CH',
                'code' => 'VD',
                'name' => 'Waadt',
                'country_id' => 220,
            ),
            126 => 
            array (
                'id' => 127,
                'country_code' => 'CH',
                'code' => 'VS',
                'name' => 'Wallis',
                'country_id' => 220,
            ),
            127 => 
            array (
                'id' => 128,
                'country_code' => 'CH',
                'code' => 'ZG',
                'name' => 'Zug',
                'country_id' => 220,
            ),
            128 => 
            array (
                'id' => 129,
                'country_code' => 'CH',
                'code' => 'ZH',
                'name' => 'Zürich',
                'country_id' => 220,
            ),
            129 => 
            array (
                'id' => 130,
                'country_code' => 'ES',
                'code' => 'A Coruсa',
                'name' => 'A Coruña',
                'country_id' => 206,
            ),
            130 => 
            array (
                'id' => 131,
                'country_code' => 'ES',
                'code' => 'Alava',
                'name' => 'Alava',
                'country_id' => 206,
            ),
            131 => 
            array (
                'id' => 132,
                'country_code' => 'ES',
                'code' => 'Albacete',
                'name' => 'Albacete',
                'country_id' => 206,
            ),
            132 => 
            array (
                'id' => 133,
                'country_code' => 'ES',
                'code' => 'Alicante',
                'name' => 'Alicante',
                'country_id' => 206,
            ),
            133 => 
            array (
                'id' => 134,
                'country_code' => 'ES',
                'code' => 'Almeria',
                'name' => 'Almeria',
                'country_id' => 206,
            ),
            134 => 
            array (
                'id' => 135,
                'country_code' => 'ES',
                'code' => 'Asturias',
                'name' => 'Asturias',
                'country_id' => 206,
            ),
            135 => 
            array (
                'id' => 136,
                'country_code' => 'ES',
                'code' => 'Avila',
                'name' => 'Avila',
                'country_id' => 206,
            ),
            136 => 
            array (
                'id' => 137,
                'country_code' => 'ES',
                'code' => 'Badajoz',
                'name' => 'Badajoz',
                'country_id' => 206,
            ),
            137 => 
            array (
                'id' => 138,
                'country_code' => 'ES',
                'code' => 'Baleares',
                'name' => 'Baleares',
                'country_id' => 206,
            ),
            138 => 
            array (
                'id' => 139,
                'country_code' => 'ES',
                'code' => 'Barcelona',
                'name' => 'Barcelona',
                'country_id' => 206,
            ),
            139 => 
            array (
                'id' => 140,
                'country_code' => 'ES',
                'code' => 'Burgos',
                'name' => 'Burgos',
                'country_id' => 206,
            ),
            140 => 
            array (
                'id' => 141,
                'country_code' => 'ES',
                'code' => 'Caceres',
                'name' => 'Caceres',
                'country_id' => 206,
            ),
            141 => 
            array (
                'id' => 142,
                'country_code' => 'ES',
                'code' => 'Cadiz',
                'name' => 'Cadiz',
                'country_id' => 206,
            ),
            142 => 
            array (
                'id' => 143,
                'country_code' => 'ES',
                'code' => 'Cantabria',
                'name' => 'Cantabria',
                'country_id' => 206,
            ),
            143 => 
            array (
                'id' => 144,
                'country_code' => 'ES',
                'code' => 'Castellon',
                'name' => 'Castellon',
                'country_id' => 206,
            ),
            144 => 
            array (
                'id' => 145,
                'country_code' => 'ES',
                'code' => 'Ceuta',
                'name' => 'Ceuta',
                'country_id' => 206,
            ),
            145 => 
            array (
                'id' => 146,
                'country_code' => 'ES',
                'code' => 'Ciudad Real',
                'name' => 'Ciudad Real',
                'country_id' => 206,
            ),
            146 => 
            array (
                'id' => 147,
                'country_code' => 'ES',
                'code' => 'Cordoba',
                'name' => 'Cordoba',
                'country_id' => 206,
            ),
            147 => 
            array (
                'id' => 148,
                'country_code' => 'ES',
                'code' => 'Cuenca',
                'name' => 'Cuenca',
                'country_id' => 206,
            ),
            148 => 
            array (
                'id' => 149,
                'country_code' => 'ES',
                'code' => 'Girona',
                'name' => 'Girona',
                'country_id' => 206,
            ),
            149 => 
            array (
                'id' => 150,
                'country_code' => 'ES',
                'code' => 'Granada',
                'name' => 'Granada',
                'country_id' => 206,
            ),
            150 => 
            array (
                'id' => 151,
                'country_code' => 'ES',
                'code' => 'Guadalajara',
                'name' => 'Guadalajara',
                'country_id' => 206,
            ),
            151 => 
            array (
                'id' => 152,
                'country_code' => 'ES',
                'code' => 'Guipuzcoa',
                'name' => 'Guipuzcoa',
                'country_id' => 206,
            ),
            152 => 
            array (
                'id' => 153,
                'country_code' => 'ES',
                'code' => 'Huelva',
                'name' => 'Huelva',
                'country_id' => 206,
            ),
            153 => 
            array (
                'id' => 154,
                'country_code' => 'ES',
                'code' => 'Huesca',
                'name' => 'Huesca',
                'country_id' => 206,
            ),
            154 => 
            array (
                'id' => 155,
                'country_code' => 'ES',
                'code' => 'Jaen',
                'name' => 'Jaen',
                'country_id' => 206,
            ),
            155 => 
            array (
                'id' => 156,
                'country_code' => 'ES',
                'code' => 'La Rioja',
                'name' => 'La Rioja',
                'country_id' => 206,
            ),
            156 => 
            array (
                'id' => 157,
                'country_code' => 'ES',
                'code' => 'Las Palmas',
                'name' => 'Las Palmas',
                'country_id' => 206,
            ),
            157 => 
            array (
                'id' => 158,
                'country_code' => 'ES',
                'code' => 'Leon',
                'name' => 'Leon',
                'country_id' => 206,
            ),
            158 => 
            array (
                'id' => 159,
                'country_code' => 'ES',
                'code' => 'Lleida',
                'name' => 'Lleida',
                'country_id' => 206,
            ),
            159 => 
            array (
                'id' => 160,
                'country_code' => 'ES',
                'code' => 'Lugo',
                'name' => 'Lugo',
                'country_id' => 206,
            ),
            160 => 
            array (
                'id' => 161,
                'country_code' => 'ES',
                'code' => 'Madrid',
                'name' => 'Madrid',
                'country_id' => 206,
            ),
            161 => 
            array (
                'id' => 162,
                'country_code' => 'ES',
                'code' => 'Malaga',
                'name' => 'Malaga',
                'country_id' => 206,
            ),
            162 => 
            array (
                'id' => 163,
                'country_code' => 'ES',
                'code' => 'Melilla',
                'name' => 'Melilla',
                'country_id' => 206,
            ),
            163 => 
            array (
                'id' => 164,
                'country_code' => 'ES',
                'code' => 'Murcia',
                'name' => 'Murcia',
                'country_id' => 206,
            ),
            164 => 
            array (
                'id' => 165,
                'country_code' => 'ES',
                'code' => 'Navarra',
                'name' => 'Navarra',
                'country_id' => 206,
            ),
            165 => 
            array (
                'id' => 166,
                'country_code' => 'ES',
                'code' => 'Ourense',
                'name' => 'Ourense',
                'country_id' => 206,
            ),
            166 => 
            array (
                'id' => 167,
                'country_code' => 'ES',
                'code' => 'Palencia',
                'name' => 'Palencia',
                'country_id' => 206,
            ),
            167 => 
            array (
                'id' => 168,
                'country_code' => 'ES',
                'code' => 'Pontevedra',
                'name' => 'Pontevedra',
                'country_id' => 206,
            ),
            168 => 
            array (
                'id' => 169,
                'country_code' => 'ES',
                'code' => 'Salamanca',
                'name' => 'Salamanca',
                'country_id' => 206,
            ),
            169 => 
            array (
                'id' => 170,
                'country_code' => 'ES',
                'code' => 'Santa Cruz de Tenerife',
                'name' => 'Santa Cruz de Tenerife',
                'country_id' => 206,
            ),
            170 => 
            array (
                'id' => 171,
                'country_code' => 'ES',
                'code' => 'Segovia',
                'name' => 'Segovia',
                'country_id' => 206,
            ),
            171 => 
            array (
                'id' => 172,
                'country_code' => 'ES',
                'code' => 'Sevilla',
                'name' => 'Sevilla',
                'country_id' => 206,
            ),
            172 => 
            array (
                'id' => 173,
                'country_code' => 'ES',
                'code' => 'Soria',
                'name' => 'Soria',
                'country_id' => 206,
            ),
            173 => 
            array (
                'id' => 174,
                'country_code' => 'ES',
                'code' => 'Tarragona',
                'name' => 'Tarragona',
                'country_id' => 206,
            ),
            174 => 
            array (
                'id' => 175,
                'country_code' => 'ES',
                'code' => 'Teruel',
                'name' => 'Teruel',
                'country_id' => 206,
            ),
            175 => 
            array (
                'id' => 176,
                'country_code' => 'ES',
                'code' => 'Toledo',
                'name' => 'Toledo',
                'country_id' => 206,
            ),
            176 => 
            array (
                'id' => 177,
                'country_code' => 'ES',
                'code' => 'Valencia',
                'name' => 'Valencia',
                'country_id' => 206,
            ),
            177 => 
            array (
                'id' => 178,
                'country_code' => 'ES',
                'code' => 'Valladolid',
                'name' => 'Valladolid',
                'country_id' => 206,
            ),
            178 => 
            array (
                'id' => 179,
                'country_code' => 'ES',
                'code' => 'Vizcaya',
                'name' => 'Vizcaya',
                'country_id' => 206,
            ),
            179 => 
            array (
                'id' => 180,
                'country_code' => 'ES',
                'code' => 'Zamora',
                'name' => 'Zamora',
                'country_id' => 206,
            ),
            180 => 
            array (
                'id' => 181,
                'country_code' => 'ES',
                'code' => 'Zaragoza',
                'name' => 'Zaragoza',
                'country_id' => 206,
            ),
            181 => 
            array (
                'id' => 182,
                'country_code' => 'FR',
                'code' => '1',
                'name' => 'Ain',
                'country_id' => 81,
            ),
            182 => 
            array (
                'id' => 183,
                'country_code' => 'FR',
                'code' => '2',
                'name' => 'Aisne',
                'country_id' => 81,
            ),
            183 => 
            array (
                'id' => 184,
                'country_code' => 'FR',
                'code' => '3',
                'name' => 'Allier',
                'country_id' => 81,
            ),
            184 => 
            array (
                'id' => 185,
                'country_code' => 'FR',
                'code' => '4',
                'name' => 'Alpes-de-Haute-Provence',
                'country_id' => 81,
            ),
            185 => 
            array (
                'id' => 186,
                'country_code' => 'FR',
                'code' => '5',
                'name' => 'Hautes-Alpes',
                'country_id' => 81,
            ),
            186 => 
            array (
                'id' => 187,
                'country_code' => 'FR',
                'code' => '6',
                'name' => 'Alpes-Maritimes',
                'country_id' => 81,
            ),
            187 => 
            array (
                'id' => 188,
                'country_code' => 'FR',
                'code' => '7',
                'name' => 'Ardèche',
                'country_id' => 81,
            ),
            188 => 
            array (
                'id' => 189,
                'country_code' => 'FR',
                'code' => '8',
                'name' => 'Ardennes',
                'country_id' => 81,
            ),
            189 => 
            array (
                'id' => 190,
                'country_code' => 'FR',
                'code' => '9',
                'name' => 'Ariège',
                'country_id' => 81,
            ),
            190 => 
            array (
                'id' => 191,
                'country_code' => 'FR',
                'code' => '10',
                'name' => 'Aube',
                'country_id' => 81,
            ),
            191 => 
            array (
                'id' => 192,
                'country_code' => 'FR',
                'code' => '11',
                'name' => 'Aude',
                'country_id' => 81,
            ),
            192 => 
            array (
                'id' => 193,
                'country_code' => 'FR',
                'code' => '12',
                'name' => 'Aveyron',
                'country_id' => 81,
            ),
            193 => 
            array (
                'id' => 194,
                'country_code' => 'FR',
                'code' => '13',
                'name' => 'Bouches-du-Rhône',
                'country_id' => 81,
            ),
            194 => 
            array (
                'id' => 195,
                'country_code' => 'FR',
                'code' => '14',
                'name' => 'Calvados',
                'country_id' => 81,
            ),
            195 => 
            array (
                'id' => 196,
                'country_code' => 'FR',
                'code' => '15',
                'name' => 'Cantal',
                'country_id' => 81,
            ),
            196 => 
            array (
                'id' => 197,
                'country_code' => 'FR',
                'code' => '16',
                'name' => 'Charente',
                'country_id' => 81,
            ),
            197 => 
            array (
                'id' => 198,
                'country_code' => 'FR',
                'code' => '17',
                'name' => 'Charente-Maritime',
                'country_id' => 81,
            ),
            198 => 
            array (
                'id' => 199,
                'country_code' => 'FR',
                'code' => '18',
                'name' => 'Cher',
                'country_id' => 81,
            ),
            199 => 
            array (
                'id' => 200,
                'country_code' => 'FR',
                'code' => '19',
                'name' => 'Corrèze',
                'country_id' => 81,
            ),
            200 => 
            array (
                'id' => 201,
                'country_code' => 'FR',
                'code' => '2A',
                'name' => 'Corse-du-Sud',
                'country_id' => 81,
            ),
            201 => 
            array (
                'id' => 202,
                'country_code' => 'FR',
                'code' => '2B',
                'name' => 'Haute-Corse',
                'country_id' => 81,
            ),
            202 => 
            array (
                'id' => 203,
                'country_code' => 'FR',
                'code' => '21',
                'name' => 'Côte-d\'Or',
                'country_id' => 81,
            ),
            203 => 
            array (
                'id' => 204,
                'country_code' => 'FR',
                'code' => '22',
                'name' => 'Côtes-d\'Armor',
                'country_id' => 81,
            ),
            204 => 
            array (
                'id' => 205,
                'country_code' => 'FR',
                'code' => '23',
                'name' => 'Creuse',
                'country_id' => 81,
            ),
            205 => 
            array (
                'id' => 206,
                'country_code' => 'FR',
                'code' => '24',
                'name' => 'Dordogne',
                'country_id' => 81,
            ),
            206 => 
            array (
                'id' => 207,
                'country_code' => 'FR',
                'code' => '25',
                'name' => 'Doubs',
                'country_id' => 81,
            ),
            207 => 
            array (
                'id' => 208,
                'country_code' => 'FR',
                'code' => '26',
                'name' => 'Drôme',
                'country_id' => 81,
            ),
            208 => 
            array (
                'id' => 209,
                'country_code' => 'FR',
                'code' => '27',
                'name' => 'Eure',
                'country_id' => 81,
            ),
            209 => 
            array (
                'id' => 210,
                'country_code' => 'FR',
                'code' => '28',
                'name' => 'Eure-et-Loir',
                'country_id' => 81,
            ),
            210 => 
            array (
                'id' => 211,
                'country_code' => 'FR',
                'code' => '29',
                'name' => 'Finistère',
                'country_id' => 81,
            ),
            211 => 
            array (
                'id' => 212,
                'country_code' => 'FR',
                'code' => '30',
                'name' => 'Gard',
                'country_id' => 81,
            ),
            212 => 
            array (
                'id' => 213,
                'country_code' => 'FR',
                'code' => '31',
                'name' => 'Haute-Garonne',
                'country_id' => 81,
            ),
            213 => 
            array (
                'id' => 214,
                'country_code' => 'FR',
                'code' => '32',
                'name' => 'Gers',
                'country_id' => 81,
            ),
            214 => 
            array (
                'id' => 215,
                'country_code' => 'FR',
                'code' => '33',
                'name' => 'Gironde',
                'country_id' => 81,
            ),
            215 => 
            array (
                'id' => 216,
                'country_code' => 'FR',
                'code' => '34',
                'name' => 'Hérault',
                'country_id' => 81,
            ),
            216 => 
            array (
                'id' => 217,
                'country_code' => 'FR',
                'code' => '35',
                'name' => 'Ille-et-Vilaine',
                'country_id' => 81,
            ),
            217 => 
            array (
                'id' => 218,
                'country_code' => 'FR',
                'code' => '36',
                'name' => 'Indre',
                'country_id' => 81,
            ),
            218 => 
            array (
                'id' => 219,
                'country_code' => 'FR',
                'code' => '37',
                'name' => 'Indre-et-Loire',
                'country_id' => 81,
            ),
            219 => 
            array (
                'id' => 220,
                'country_code' => 'FR',
                'code' => '38',
                'name' => 'Isère',
                'country_id' => 81,
            ),
            220 => 
            array (
                'id' => 221,
                'country_code' => 'FR',
                'code' => '39',
                'name' => 'Jura',
                'country_id' => 81,
            ),
            221 => 
            array (
                'id' => 222,
                'country_code' => 'FR',
                'code' => '40',
                'name' => 'Landes',
                'country_id' => 81,
            ),
            222 => 
            array (
                'id' => 223,
                'country_code' => 'FR',
                'code' => '41',
                'name' => 'Loir-et-Cher',
                'country_id' => 81,
            ),
            223 => 
            array (
                'id' => 224,
                'country_code' => 'FR',
                'code' => '42',
                'name' => 'Loire',
                'country_id' => 81,
            ),
            224 => 
            array (
                'id' => 225,
                'country_code' => 'FR',
                'code' => '43',
                'name' => 'Haute-Loire',
                'country_id' => 81,
            ),
            225 => 
            array (
                'id' => 226,
                'country_code' => 'FR',
                'code' => '44',
                'name' => 'Loire-Atlantique',
                'country_id' => 81,
            ),
            226 => 
            array (
                'id' => 227,
                'country_code' => 'FR',
                'code' => '45',
                'name' => 'Loiret',
                'country_id' => 81,
            ),
            227 => 
            array (
                'id' => 228,
                'country_code' => 'FR',
                'code' => '46',
                'name' => 'Lot',
                'country_id' => 81,
            ),
            228 => 
            array (
                'id' => 229,
                'country_code' => 'FR',
                'code' => '47',
                'name' => 'Lot-et-Garonne',
                'country_id' => 81,
            ),
            229 => 
            array (
                'id' => 230,
                'country_code' => 'FR',
                'code' => '48',
                'name' => 'Lozère',
                'country_id' => 81,
            ),
            230 => 
            array (
                'id' => 231,
                'country_code' => 'FR',
                'code' => '49',
                'name' => 'Maine-et-Loire',
                'country_id' => 81,
            ),
            231 => 
            array (
                'id' => 232,
                'country_code' => 'FR',
                'code' => '50',
                'name' => 'Manche',
                'country_id' => 81,
            ),
            232 => 
            array (
                'id' => 233,
                'country_code' => 'FR',
                'code' => '51',
                'name' => 'Marne',
                'country_id' => 81,
            ),
            233 => 
            array (
                'id' => 234,
                'country_code' => 'FR',
                'code' => '52',
                'name' => 'Haute-Marne',
                'country_id' => 81,
            ),
            234 => 
            array (
                'id' => 235,
                'country_code' => 'FR',
                'code' => '53',
                'name' => 'Mayenne',
                'country_id' => 81,
            ),
            235 => 
            array (
                'id' => 236,
                'country_code' => 'FR',
                'code' => '54',
                'name' => 'Meurthe-et-Moselle',
                'country_id' => 81,
            ),
            236 => 
            array (
                'id' => 237,
                'country_code' => 'FR',
                'code' => '55',
                'name' => 'Meuse',
                'country_id' => 81,
            ),
            237 => 
            array (
                'id' => 238,
                'country_code' => 'FR',
                'code' => '56',
                'name' => 'Morbihan',
                'country_id' => 81,
            ),
            238 => 
            array (
                'id' => 239,
                'country_code' => 'FR',
                'code' => '57',
                'name' => 'Moselle',
                'country_id' => 81,
            ),
            239 => 
            array (
                'id' => 240,
                'country_code' => 'FR',
                'code' => '58',
                'name' => 'Nièvre',
                'country_id' => 81,
            ),
            240 => 
            array (
                'id' => 241,
                'country_code' => 'FR',
                'code' => '59',
                'name' => 'Nord',
                'country_id' => 81,
            ),
            241 => 
            array (
                'id' => 242,
                'country_code' => 'FR',
                'code' => '60',
                'name' => 'Oise',
                'country_id' => 81,
            ),
            242 => 
            array (
                'id' => 243,
                'country_code' => 'FR',
                'code' => '61',
                'name' => 'Orne',
                'country_id' => 81,
            ),
            243 => 
            array (
                'id' => 244,
                'country_code' => 'FR',
                'code' => '62',
                'name' => 'Pas-de-Calais',
                'country_id' => 81,
            ),
            244 => 
            array (
                'id' => 245,
                'country_code' => 'FR',
                'code' => '63',
                'name' => 'Puy-de-Dôme',
                'country_id' => 81,
            ),
            245 => 
            array (
                'id' => 246,
                'country_code' => 'FR',
                'code' => '64',
                'name' => 'Pyrénées-Atlantiques',
                'country_id' => 81,
            ),
            246 => 
            array (
                'id' => 247,
                'country_code' => 'FR',
                'code' => '65',
                'name' => 'Hautes-Pyrénées',
                'country_id' => 81,
            ),
            247 => 
            array (
                'id' => 248,
                'country_code' => 'FR',
                'code' => '66',
                'name' => 'Pyrénées-Orientales',
                'country_id' => 81,
            ),
            248 => 
            array (
                'id' => 249,
                'country_code' => 'FR',
                'code' => '67',
                'name' => 'Bas-Rhin',
                'country_id' => 81,
            ),
            249 => 
            array (
                'id' => 250,
                'country_code' => 'FR',
                'code' => '68',
                'name' => 'Haut-Rhin',
                'country_id' => 81,
            ),
            250 => 
            array (
                'id' => 251,
                'country_code' => 'FR',
                'code' => '69',
                'name' => 'Rhône',
                'country_id' => 81,
            ),
            251 => 
            array (
                'id' => 252,
                'country_code' => 'FR',
                'code' => '70',
                'name' => 'Haute-Saône',
                'country_id' => 81,
            ),
            252 => 
            array (
                'id' => 253,
                'country_code' => 'FR',
                'code' => '71',
                'name' => 'Saône-et-Loire',
                'country_id' => 81,
            ),
            253 => 
            array (
                'id' => 254,
                'country_code' => 'FR',
                'code' => '72',
                'name' => 'Sarthe',
                'country_id' => 81,
            ),
            254 => 
            array (
                'id' => 255,
                'country_code' => 'FR',
                'code' => '73',
                'name' => 'Savoie',
                'country_id' => 81,
            ),
            255 => 
            array (
                'id' => 256,
                'country_code' => 'FR',
                'code' => '74',
                'name' => 'Haute-Savoie',
                'country_id' => 81,
            ),
            256 => 
            array (
                'id' => 257,
                'country_code' => 'FR',
                'code' => '75',
                'name' => 'Paris',
                'country_id' => 81,
            ),
            257 => 
            array (
                'id' => 258,
                'country_code' => 'FR',
                'code' => '76',
                'name' => 'Seine-Maritime',
                'country_id' => 81,
            ),
            258 => 
            array (
                'id' => 259,
                'country_code' => 'FR',
                'code' => '77',
                'name' => 'Seine-et-Marne',
                'country_id' => 81,
            ),
            259 => 
            array (
                'id' => 260,
                'country_code' => 'FR',
                'code' => '78',
                'name' => 'Yvelines',
                'country_id' => 81,
            ),
            260 => 
            array (
                'id' => 261,
                'country_code' => 'FR',
                'code' => '79',
                'name' => 'Deux-Sèvres',
                'country_id' => 81,
            ),
            261 => 
            array (
                'id' => 262,
                'country_code' => 'FR',
                'code' => '80',
                'name' => 'Somme',
                'country_id' => 81,
            ),
            262 => 
            array (
                'id' => 263,
                'country_code' => 'FR',
                'code' => '81',
                'name' => 'Tarn',
                'country_id' => 81,
            ),
            263 => 
            array (
                'id' => 264,
                'country_code' => 'FR',
                'code' => '82',
                'name' => 'Tarn-et-Garonne',
                'country_id' => 81,
            ),
            264 => 
            array (
                'id' => 265,
                'country_code' => 'FR',
                'code' => '83',
                'name' => 'Var',
                'country_id' => 81,
            ),
            265 => 
            array (
                'id' => 266,
                'country_code' => 'FR',
                'code' => '84',
                'name' => 'Vaucluse',
                'country_id' => 81,
            ),
            266 => 
            array (
                'id' => 267,
                'country_code' => 'FR',
                'code' => '85',
                'name' => 'Vendée',
                'country_id' => 81,
            ),
            267 => 
            array (
                'id' => 268,
                'country_code' => 'FR',
                'code' => '86',
                'name' => 'Vienne',
                'country_id' => 81,
            ),
            268 => 
            array (
                'id' => 269,
                'country_code' => 'FR',
                'code' => '87',
                'name' => 'Haute-Vienne',
                'country_id' => 81,
            ),
            269 => 
            array (
                'id' => 270,
                'country_code' => 'FR',
                'code' => '88',
                'name' => 'Vosges',
                'country_id' => 81,
            ),
            270 => 
            array (
                'id' => 271,
                'country_code' => 'FR',
                'code' => '89',
                'name' => 'Yonne',
                'country_id' => 81,
            ),
            271 => 
            array (
                'id' => 272,
                'country_code' => 'FR',
                'code' => '90',
                'name' => 'Territoire-de-Belfort',
                'country_id' => 81,
            ),
            272 => 
            array (
                'id' => 273,
                'country_code' => 'FR',
                'code' => '91',
                'name' => 'Essonne',
                'country_id' => 81,
            ),
            273 => 
            array (
                'id' => 274,
                'country_code' => 'FR',
                'code' => '92',
                'name' => 'Hauts-de-Seine',
                'country_id' => 81,
            ),
            274 => 
            array (
                'id' => 275,
                'country_code' => 'FR',
                'code' => '93',
                'name' => 'Seine-Saint-Denis',
                'country_id' => 81,
            ),
            275 => 
            array (
                'id' => 276,
                'country_code' => 'FR',
                'code' => '94',
                'name' => 'Val-de-Marne',
                'country_id' => 81,
            ),
            276 => 
            array (
                'id' => 277,
                'country_code' => 'FR',
                'code' => '95',
                'name' => 'Val-d\'Oise',
                'country_id' => 81,
            ),
            277 => 
            array (
                'id' => 278,
                'country_code' => 'RO',
                'code' => 'AB',
                'name' => 'Alba',
                'country_id' => 185,
            ),
            278 => 
            array (
                'id' => 279,
                'country_code' => 'RO',
                'code' => 'AR',
                'name' => 'Arad',
                'country_id' => 185,
            ),
            279 => 
            array (
                'id' => 280,
                'country_code' => 'RO',
                'code' => 'AG',
                'name' => 'Argeş',
                'country_id' => 185,
            ),
            280 => 
            array (
                'id' => 281,
                'country_code' => 'RO',
                'code' => 'BC',
                'name' => 'Bacău',
                'country_id' => 185,
            ),
            281 => 
            array (
                'id' => 282,
                'country_code' => 'RO',
                'code' => 'BH',
                'name' => 'Bihor',
                'country_id' => 185,
            ),
            282 => 
            array (
                'id' => 283,
                'country_code' => 'RO',
                'code' => 'BN',
                'name' => 'Bistriţa-Năsăud',
                'country_id' => 185,
            ),
            283 => 
            array (
                'id' => 284,
                'country_code' => 'RO',
                'code' => 'BT',
                'name' => 'Botoşani',
                'country_id' => 185,
            ),
            284 => 
            array (
                'id' => 285,
                'country_code' => 'RO',
                'code' => 'BV',
                'name' => 'Braşov',
                'country_id' => 185,
            ),
            285 => 
            array (
                'id' => 286,
                'country_code' => 'RO',
                'code' => 'BR',
                'name' => 'Brăila',
                'country_id' => 185,
            ),
            286 => 
            array (
                'id' => 287,
                'country_code' => 'RO',
                'code' => 'B',
                'name' => 'Bucureşti',
                'country_id' => 185,
            ),
            287 => 
            array (
                'id' => 288,
                'country_code' => 'RO',
                'code' => 'BZ',
                'name' => 'Buzău',
                'country_id' => 185,
            ),
            288 => 
            array (
                'id' => 289,
                'country_code' => 'RO',
                'code' => 'CS',
                'name' => 'Caraş-Severin',
                'country_id' => 185,
            ),
            289 => 
            array (
                'id' => 290,
                'country_code' => 'RO',
                'code' => 'CL',
                'name' => 'Călăraşi',
                'country_id' => 185,
            ),
            290 => 
            array (
                'id' => 291,
                'country_code' => 'RO',
                'code' => 'CJ',
                'name' => 'Cluj',
                'country_id' => 185,
            ),
            291 => 
            array (
                'id' => 292,
                'country_code' => 'RO',
                'code' => 'CT',
                'name' => 'Constanţa',
                'country_id' => 185,
            ),
            292 => 
            array (
                'id' => 293,
                'country_code' => 'RO',
                'code' => 'CV',
                'name' => 'Covasna',
                'country_id' => 185,
            ),
            293 => 
            array (
                'id' => 294,
                'country_code' => 'RO',
                'code' => 'DB',
                'name' => 'Dâmboviţa',
                'country_id' => 185,
            ),
            294 => 
            array (
                'id' => 295,
                'country_code' => 'RO',
                'code' => 'DJ',
                'name' => 'Dolj',
                'country_id' => 185,
            ),
            295 => 
            array (
                'id' => 296,
                'country_code' => 'RO',
                'code' => 'GL',
                'name' => 'Galaţi',
                'country_id' => 185,
            ),
            296 => 
            array (
                'id' => 297,
                'country_code' => 'RO',
                'code' => 'GR',
                'name' => 'Giurgiu',
                'country_id' => 185,
            ),
            297 => 
            array (
                'id' => 298,
                'country_code' => 'RO',
                'code' => 'GJ',
                'name' => 'Gorj',
                'country_id' => 185,
            ),
            298 => 
            array (
                'id' => 299,
                'country_code' => 'RO',
                'code' => 'HR',
                'name' => 'Harghita',
                'country_id' => 185,
            ),
            299 => 
            array (
                'id' => 300,
                'country_code' => 'RO',
                'code' => 'HD',
                'name' => 'Hunedoara',
                'country_id' => 185,
            ),
            300 => 
            array (
                'id' => 301,
                'country_code' => 'RO',
                'code' => 'IL',
                'name' => 'Ialomiţa',
                'country_id' => 185,
            ),
            301 => 
            array (
                'id' => 302,
                'country_code' => 'RO',
                'code' => 'IS',
                'name' => 'Iaşi',
                'country_id' => 185,
            ),
            302 => 
            array (
                'id' => 303,
                'country_code' => 'RO',
                'code' => 'IF',
                'name' => 'Ilfov',
                'country_id' => 185,
            ),
            303 => 
            array (
                'id' => 304,
                'country_code' => 'RO',
                'code' => 'MM',
                'name' => 'Maramureş',
                'country_id' => 185,
            ),
            304 => 
            array (
                'id' => 305,
                'country_code' => 'RO',
                'code' => 'MH',
                'name' => 'Mehedinţi',
                'country_id' => 185,
            ),
            305 => 
            array (
                'id' => 306,
                'country_code' => 'RO',
                'code' => 'MS',
                'name' => 'Mureş',
                'country_id' => 185,
            ),
            306 => 
            array (
                'id' => 307,
                'country_code' => 'RO',
                'code' => 'NT',
                'name' => 'Neamţ',
                'country_id' => 185,
            ),
            307 => 
            array (
                'id' => 308,
                'country_code' => 'RO',
                'code' => 'OT',
                'name' => 'Olt',
                'country_id' => 185,
            ),
            308 => 
            array (
                'id' => 309,
                'country_code' => 'RO',
                'code' => 'PH',
                'name' => 'Prahova',
                'country_id' => 185,
            ),
            309 => 
            array (
                'id' => 310,
                'country_code' => 'RO',
                'code' => 'SM',
                'name' => 'Satu-Mare',
                'country_id' => 185,
            ),
            310 => 
            array (
                'id' => 311,
                'country_code' => 'RO',
                'code' => 'SJ',
                'name' => 'Sălaj',
                'country_id' => 185,
            ),
            311 => 
            array (
                'id' => 312,
                'country_code' => 'RO',
                'code' => 'SB',
                'name' => 'Sibiu',
                'country_id' => 185,
            ),
            312 => 
            array (
                'id' => 313,
                'country_code' => 'RO',
                'code' => 'SV',
                'name' => 'Suceava',
                'country_id' => 185,
            ),
            313 => 
            array (
                'id' => 314,
                'country_code' => 'RO',
                'code' => 'TR',
                'name' => 'Teleorman',
                'country_id' => 185,
            ),
            314 => 
            array (
                'id' => 315,
                'country_code' => 'RO',
                'code' => 'TM',
                'name' => 'Timiş',
                'country_id' => 185,
            ),
            315 => 
            array (
                'id' => 316,
                'country_code' => 'RO',
                'code' => 'TL',
                'name' => 'Tulcea',
                'country_id' => 185,
            ),
            316 => 
            array (
                'id' => 317,
                'country_code' => 'RO',
                'code' => 'VS',
                'name' => 'Vaslui',
                'country_id' => 185,
            ),
            317 => 
            array (
                'id' => 318,
                'country_code' => 'RO',
                'code' => 'VL',
                'name' => 'Vâlcea',
                'country_id' => 185,
            ),
            318 => 
            array (
                'id' => 319,
                'country_code' => 'RO',
                'code' => 'VN',
                'name' => 'Vrancea',
                'country_id' => 185,
            ),
            319 => 
            array (
                'id' => 320,
                'country_code' => 'FI',
                'code' => 'Lappi',
                'name' => 'Lappi',
                'country_id' => 80,
            ),
            320 => 
            array (
                'id' => 321,
                'country_code' => 'FI',
                'code' => 'Pohjois-Pohjanmaa',
                'name' => 'Pohjois-Pohjanmaa',
                'country_id' => 80,
            ),
            321 => 
            array (
                'id' => 322,
                'country_code' => 'FI',
                'code' => 'Kainuu',
                'name' => 'Kainuu',
                'country_id' => 80,
            ),
            322 => 
            array (
                'id' => 323,
                'country_code' => 'FI',
                'code' => 'Pohjois-Karjala',
                'name' => 'Pohjois-Karjala',
                'country_id' => 80,
            ),
            323 => 
            array (
                'id' => 324,
                'country_code' => 'FI',
                'code' => 'Pohjois-Savo',
                'name' => 'Pohjois-Savo',
                'country_id' => 80,
            ),
            324 => 
            array (
                'id' => 325,
                'country_code' => 'FI',
                'code' => 'Etelä-Savo',
                'name' => 'Etelä-Savo',
                'country_id' => 80,
            ),
            325 => 
            array (
                'id' => 326,
                'country_code' => 'FI',
                'code' => 'Etelä-Pohjanmaa',
                'name' => 'Etelä-Pohjanmaa',
                'country_id' => 80,
            ),
            326 => 
            array (
                'id' => 327,
                'country_code' => 'FI',
                'code' => 'Pohjanmaa',
                'name' => 'Pohjanmaa',
                'country_id' => 80,
            ),
            327 => 
            array (
                'id' => 328,
                'country_code' => 'FI',
                'code' => 'Pirkanmaa',
                'name' => 'Pirkanmaa',
                'country_id' => 80,
            ),
            328 => 
            array (
                'id' => 329,
                'country_code' => 'FI',
                'code' => 'Satakunta',
                'name' => 'Satakunta',
                'country_id' => 80,
            ),
            329 => 
            array (
                'id' => 330,
                'country_code' => 'FI',
                'code' => 'Keski-Pohjanmaa',
                'name' => 'Keski-Pohjanmaa',
                'country_id' => 80,
            ),
            330 => 
            array (
                'id' => 331,
                'country_code' => 'FI',
                'code' => 'Keski-Suomi',
                'name' => 'Keski-Suomi',
                'country_id' => 80,
            ),
            331 => 
            array (
                'id' => 332,
                'country_code' => 'FI',
                'code' => 'Varsinais-Suomi',
                'name' => 'Varsinais-Suomi',
                'country_id' => 80,
            ),
            332 => 
            array (
                'id' => 333,
                'country_code' => 'FI',
                'code' => 'Etelä-Karjala',
                'name' => 'Etelä-Karjala',
                'country_id' => 80,
            ),
            333 => 
            array (
                'id' => 334,
                'country_code' => 'FI',
                'code' => 'Päijät-Häme',
                'name' => 'Päijät-Häme',
                'country_id' => 80,
            ),
            334 => 
            array (
                'id' => 335,
                'country_code' => 'FI',
                'code' => 'Kanta-Häme',
                'name' => 'Kanta-Häme',
                'country_id' => 80,
            ),
            335 => 
            array (
                'id' => 336,
                'country_code' => 'FI',
                'code' => 'Uusimaa',
                'name' => 'Uusimaa',
                'country_id' => 80,
            ),
            336 => 
            array (
                'id' => 337,
                'country_code' => 'FI',
                'code' => 'Itä-Uusimaa',
                'name' => 'Itä-Uusimaa',
                'country_id' => 80,
            ),
            337 => 
            array (
                'id' => 338,
                'country_code' => 'FI',
                'code' => 'Kymenlaakso',
                'name' => 'Kymenlaakso',
                'country_id' => 80,
            ),
            338 => 
            array (
                'id' => 339,
                'country_code' => 'FI',
                'code' => 'Ahvenanmaa',
                'name' => 'Ahvenanmaa',
                'country_id' => 80,
            ),
            339 => 
            array (
                'id' => 340,
                'country_code' => 'EE',
                'code' => 'EE-37',
                'name' => 'Harjumaa',
                'country_id' => 74,
            ),
            340 => 
            array (
                'id' => 341,
                'country_code' => 'EE',
                'code' => 'EE-39',
                'name' => 'Hiiumaa',
                'country_id' => 74,
            ),
            341 => 
            array (
                'id' => 342,
                'country_code' => 'EE',
                'code' => 'EE-44',
                'name' => 'Ida-Virumaa',
                'country_id' => 74,
            ),
            342 => 
            array (
                'id' => 343,
                'country_code' => 'EE',
                'code' => 'EE-49',
                'name' => 'Jõgevamaa',
                'country_id' => 74,
            ),
            343 => 
            array (
                'id' => 344,
                'country_code' => 'EE',
                'code' => 'EE-51',
                'name' => 'Järvamaa',
                'country_id' => 74,
            ),
            344 => 
            array (
                'id' => 345,
                'country_code' => 'EE',
                'code' => 'EE-57',
                'name' => 'Läänemaa',
                'country_id' => 74,
            ),
            345 => 
            array (
                'id' => 346,
                'country_code' => 'EE',
                'code' => 'EE-59',
                'name' => 'Lääne-Virumaa',
                'country_id' => 74,
            ),
            346 => 
            array (
                'id' => 347,
                'country_code' => 'EE',
                'code' => 'EE-65',
                'name' => 'Põlvamaa',
                'country_id' => 74,
            ),
            347 => 
            array (
                'id' => 348,
                'country_code' => 'EE',
                'code' => 'EE-67',
                'name' => 'Pärnumaa',
                'country_id' => 74,
            ),
            348 => 
            array (
                'id' => 349,
                'country_code' => 'EE',
                'code' => 'EE-70',
                'name' => 'Raplamaa',
                'country_id' => 74,
            ),
            349 => 
            array (
                'id' => 350,
                'country_code' => 'EE',
                'code' => 'EE-74',
                'name' => 'Saaremaa',
                'country_id' => 74,
            ),
            350 => 
            array (
                'id' => 351,
                'country_code' => 'EE',
                'code' => 'EE-78',
                'name' => 'Tartumaa',
                'country_id' => 74,
            ),
            351 => 
            array (
                'id' => 352,
                'country_code' => 'EE',
                'code' => 'EE-82',
                'name' => 'Valgamaa',
                'country_id' => 74,
            ),
            352 => 
            array (
                'id' => 353,
                'country_code' => 'EE',
                'code' => 'EE-84',
                'name' => 'Viljandimaa',
                'country_id' => 74,
            ),
            353 => 
            array (
                'id' => 354,
                'country_code' => 'EE',
                'code' => 'EE-86',
                'name' => 'Võrumaa',
                'country_id' => 74,
            ),
            354 => 
            array (
                'id' => 355,
                'country_code' => 'LV',
                'code' => 'LV-DGV',
                'name' => 'Daugavpils',
                'country_id' => 125,
            ),
            355 => 
            array (
                'id' => 356,
                'country_code' => 'LV',
                'code' => 'LV-JEL',
                'name' => 'Jelgava',
                'country_id' => 125,
            ),
            356 => 
            array (
                'id' => 357,
                'country_code' => 'LV',
                'code' => 'Jēkabpils',
                'name' => 'Jēkabpils',
                'country_id' => 125,
            ),
            357 => 
            array (
                'id' => 358,
                'country_code' => 'LV',
                'code' => 'LV-JUR',
                'name' => 'Jūrmala',
                'country_id' => 125,
            ),
            358 => 
            array (
                'id' => 359,
                'country_code' => 'LV',
                'code' => 'LV-LPX',
                'name' => 'Liepāja',
                'country_id' => 125,
            ),
            359 => 
            array (
                'id' => 360,
                'country_code' => 'LV',
                'code' => 'LV-LE',
                'name' => 'Liepājas novads',
                'country_id' => 125,
            ),
            360 => 
            array (
                'id' => 361,
                'country_code' => 'LV',
                'code' => 'LV-REZ',
                'name' => 'Rēzekne',
                'country_id' => 125,
            ),
            361 => 
            array (
                'id' => 362,
                'country_code' => 'LV',
                'code' => 'LV-RIX',
                'name' => 'Rīga',
                'country_id' => 125,
            ),
            362 => 
            array (
                'id' => 363,
                'country_code' => 'LV',
                'code' => 'LV-RI',
                'name' => 'Rīgas novads',
                'country_id' => 125,
            ),
            363 => 
            array (
                'id' => 364,
                'country_code' => 'LV',
                'code' => 'Valmiera',
                'name' => 'Valmiera',
                'country_id' => 125,
            ),
            364 => 
            array (
                'id' => 365,
                'country_code' => 'LV',
                'code' => 'LV-VEN',
                'name' => 'Ventspils',
                'country_id' => 125,
            ),
            365 => 
            array (
                'id' => 366,
                'country_code' => 'LV',
                'code' => 'Aglonas novads',
                'name' => 'Aglonas novads',
                'country_id' => 125,
            ),
            366 => 
            array (
                'id' => 367,
                'country_code' => 'LV',
                'code' => 'LV-AI',
                'name' => 'Aizkraukles novads',
                'country_id' => 125,
            ),
            367 => 
            array (
                'id' => 368,
                'country_code' => 'LV',
                'code' => 'Aizputes novads',
                'name' => 'Aizputes novads',
                'country_id' => 125,
            ),
            368 => 
            array (
                'id' => 369,
                'country_code' => 'LV',
                'code' => 'Aknīstes novads',
                'name' => 'Aknīstes novads',
                'country_id' => 125,
            ),
            369 => 
            array (
                'id' => 370,
                'country_code' => 'LV',
                'code' => 'Alojas novads',
                'name' => 'Alojas novads',
                'country_id' => 125,
            ),
            370 => 
            array (
                'id' => 371,
                'country_code' => 'LV',
                'code' => 'Alsungas novads',
                'name' => 'Alsungas novads',
                'country_id' => 125,
            ),
            371 => 
            array (
                'id' => 372,
                'country_code' => 'LV',
                'code' => 'LV-AL',
                'name' => 'Alūksnes novads',
                'country_id' => 125,
            ),
            372 => 
            array (
                'id' => 373,
                'country_code' => 'LV',
                'code' => 'Amatas novads',
                'name' => 'Amatas novads',
                'country_id' => 125,
            ),
            373 => 
            array (
                'id' => 374,
                'country_code' => 'LV',
                'code' => 'Apes novads',
                'name' => 'Apes novads',
                'country_id' => 125,
            ),
            374 => 
            array (
                'id' => 375,
                'country_code' => 'LV',
                'code' => 'Auces novads',
                'name' => 'Auces novads',
                'country_id' => 125,
            ),
            375 => 
            array (
                'id' => 376,
                'country_code' => 'LV',
                'code' => 'Babītes novads',
                'name' => 'Babītes novads',
                'country_id' => 125,
            ),
            376 => 
            array (
                'id' => 377,
                'country_code' => 'LV',
                'code' => 'Baldones novads',
                'name' => 'Baldones novads',
                'country_id' => 125,
            ),
            377 => 
            array (
                'id' => 378,
                'country_code' => 'LV',
                'code' => 'Baltinavas novads',
                'name' => 'Baltinavas novads',
                'country_id' => 125,
            ),
            378 => 
            array (
                'id' => 379,
                'country_code' => 'LV',
                'code' => 'LV-BL',
                'name' => 'Balvu novads',
                'country_id' => 125,
            ),
            379 => 
            array (
                'id' => 380,
                'country_code' => 'LV',
                'code' => 'LV-BU',
                'name' => 'Bauskas novads',
                'country_id' => 125,
            ),
            380 => 
            array (
                'id' => 381,
                'country_code' => 'LV',
                'code' => 'Beverīnas novads',
                'name' => 'Beverīnas novads',
                'country_id' => 125,
            ),
            381 => 
            array (
                'id' => 382,
                'country_code' => 'LV',
                'code' => 'Brocēnu novads',
                'name' => 'Brocēnu novads',
                'country_id' => 125,
            ),
            382 => 
            array (
                'id' => 383,
                'country_code' => 'LV',
                'code' => 'Burtnieku novads',
                'name' => 'Burtnieku novads',
                'country_id' => 125,
            ),
            383 => 
            array (
                'id' => 384,
                'country_code' => 'LV',
                'code' => 'Carnikavas novads',
                'name' => 'Carnikavas novads',
                'country_id' => 125,
            ),
            384 => 
            array (
                'id' => 385,
                'country_code' => 'LV',
                'code' => 'Cesvaines novads',
                'name' => 'Cesvaines novads',
                'country_id' => 125,
            ),
            385 => 
            array (
                'id' => 386,
                'country_code' => 'LV',
                'code' => 'Ciblas novads',
                'name' => 'Ciblas novads',
                'country_id' => 125,
            ),
            386 => 
            array (
                'id' => 387,
                'country_code' => 'LV',
                'code' => 'LV-CE',
                'name' => 'Cēsu novads',
                'country_id' => 125,
            ),
            387 => 
            array (
                'id' => 388,
                'country_code' => 'LV',
                'code' => 'Dagdas novads',
                'name' => 'Dagdas novads',
                'country_id' => 125,
            ),
            388 => 
            array (
                'id' => 389,
                'country_code' => 'LV',
                'code' => 'LV-DA',
                'name' => 'Daugavpils novads',
                'country_id' => 125,
            ),
            389 => 
            array (
                'id' => 390,
                'country_code' => 'LV',
                'code' => 'LV-DO',
                'name' => 'Dobeles novads',
                'country_id' => 125,
            ),
            390 => 
            array (
                'id' => 391,
                'country_code' => 'LV',
                'code' => 'Dundagas novads',
                'name' => 'Dundagas novads',
                'country_id' => 125,
            ),
            391 => 
            array (
                'id' => 392,
                'country_code' => 'LV',
                'code' => 'Durbes novads',
                'name' => 'Durbes novads',
                'country_id' => 125,
            ),
            392 => 
            array (
                'id' => 393,
                'country_code' => 'LV',
                'code' => 'Engures novads',
                'name' => 'Engures novads',
                'country_id' => 125,
            ),
            393 => 
            array (
                'id' => 394,
                'country_code' => 'LV',
                'code' => 'Garkalnes novads',
                'name' => 'Garkalnes novads',
                'country_id' => 125,
            ),
            394 => 
            array (
                'id' => 395,
                'country_code' => 'LV',
                'code' => 'Grobiņas novads',
                'name' => 'Grobiņas novads',
                'country_id' => 125,
            ),
            395 => 
            array (
                'id' => 396,
                'country_code' => 'LV',
                'code' => 'LV-GU',
                'name' => 'Gulbenes novads',
                'country_id' => 125,
            ),
            396 => 
            array (
                'id' => 397,
                'country_code' => 'LV',
                'code' => 'Iecavas novads',
                'name' => 'Iecavas novads',
                'country_id' => 125,
            ),
            397 => 
            array (
                'id' => 398,
                'country_code' => 'LV',
                'code' => 'Ikšķiles novads',
                'name' => 'Ikšķiles novads',
                'country_id' => 125,
            ),
            398 => 
            array (
                'id' => 399,
                'country_code' => 'LV',
                'code' => 'Ilūkstes novads',
                'name' => 'Ilūkstes novads',
                'country_id' => 125,
            ),
            399 => 
            array (
                'id' => 400,
                'country_code' => 'LV',
                'code' => 'Inčukalna novads',
                'name' => 'Inčukalna novads',
                'country_id' => 125,
            ),
            400 => 
            array (
                'id' => 401,
                'country_code' => 'LV',
                'code' => 'Jaunjelgavas novads',
                'name' => 'Jaunjelgavas novads',
                'country_id' => 125,
            ),
            401 => 
            array (
                'id' => 402,
                'country_code' => 'LV',
                'code' => 'Jaunpiebalgas novads',
                'name' => 'Jaunpiebalgas novads',
                'country_id' => 125,
            ),
            402 => 
            array (
                'id' => 403,
                'country_code' => 'LV',
                'code' => 'Jaunpils novads',
                'name' => 'Jaunpils novads',
                'country_id' => 125,
            ),
            403 => 
            array (
                'id' => 404,
                'country_code' => 'LV',
                'code' => 'LV-JL',
                'name' => 'Jelgavas novads',
                'country_id' => 125,
            ),
            404 => 
            array (
                'id' => 405,
                'country_code' => 'LV',
                'code' => 'LV-JK',
                'name' => 'Jēkabpils novads',
                'country_id' => 125,
            ),
            405 => 
            array (
                'id' => 406,
                'country_code' => 'LV',
                'code' => 'Kandavas novads',
                'name' => 'Kandavas novads',
                'country_id' => 125,
            ),
            406 => 
            array (
                'id' => 407,
                'country_code' => 'LV',
                'code' => 'Kokneses novads',
                'name' => 'Kokneses novads',
                'country_id' => 125,
            ),
            407 => 
            array (
                'id' => 408,
                'country_code' => 'LV',
                'code' => 'Krimuldas novads',
                'name' => 'Krimuldas novads',
                'country_id' => 125,
            ),
            408 => 
            array (
                'id' => 409,
                'country_code' => 'LV',
                'code' => 'Krustpils novads',
                'name' => 'Krustpils novads',
                'country_id' => 125,
            ),
            409 => 
            array (
                'id' => 410,
                'country_code' => 'LV',
                'code' => 'LV-KR',
                'name' => 'Krāslavas novads',
                'country_id' => 125,
            ),
            410 => 
            array (
                'id' => 411,
                'country_code' => 'LV',
                'code' => 'LV-KU',
                'name' => 'Kuldīgas novads',
                'country_id' => 125,
            ),
            411 => 
            array (
                'id' => 412,
                'country_code' => 'LV',
                'code' => 'Kārsavas novads',
                'name' => 'Kārsavas novads',
                'country_id' => 125,
            ),
            412 => 
            array (
                'id' => 413,
                'country_code' => 'LV',
                'code' => 'Lielvārdes novads',
                'name' => 'Lielvārdes novads',
                'country_id' => 125,
            ),
            413 => 
            array (
                'id' => 414,
                'country_code' => 'LV',
                'code' => 'LV-LM',
                'name' => 'Limbažu novads',
                'country_id' => 125,
            ),
            414 => 
            array (
                'id' => 415,
                'country_code' => 'LV',
                'code' => 'Lubānas novads',
                'name' => 'Lubānas novads',
                'country_id' => 125,
            ),
            415 => 
            array (
                'id' => 416,
                'country_code' => 'LV',
                'code' => 'LV-LU',
                'name' => 'Ludzas novads',
                'country_id' => 125,
            ),
            416 => 
            array (
                'id' => 417,
                'country_code' => 'LV',
                'code' => 'Līgatnes novads',
                'name' => 'Līgatnes novads',
                'country_id' => 125,
            ),
            417 => 
            array (
                'id' => 418,
                'country_code' => 'LV',
                'code' => 'Līvānu novads',
                'name' => 'Līvānu novads',
                'country_id' => 125,
            ),
            418 => 
            array (
                'id' => 419,
                'country_code' => 'LV',
                'code' => 'LV-MA',
                'name' => 'Madonas novads',
                'country_id' => 125,
            ),
            419 => 
            array (
                'id' => 420,
                'country_code' => 'LV',
                'code' => 'Mazsalacas novads',
                'name' => 'Mazsalacas novads',
                'country_id' => 125,
            ),
            420 => 
            array (
                'id' => 421,
                'country_code' => 'LV',
                'code' => 'Mālpils novads',
                'name' => 'Mālpils novads',
                'country_id' => 125,
            ),
            421 => 
            array (
                'id' => 422,
                'country_code' => 'LV',
                'code' => 'Mārupes novads',
                'name' => 'Mārupes novads',
                'country_id' => 125,
            ),
            422 => 
            array (
                'id' => 423,
                'country_code' => 'LV',
                'code' => 'Naukšēnu novads',
                'name' => 'Naukšēnu novads',
                'country_id' => 125,
            ),
            423 => 
            array (
                'id' => 424,
                'country_code' => 'LV',
                'code' => 'Neretas novads',
                'name' => 'Neretas novads',
                'country_id' => 125,
            ),
            424 => 
            array (
                'id' => 425,
                'country_code' => 'LV',
                'code' => 'Nīcas novads',
                'name' => 'Nīcas novads',
                'country_id' => 125,
            ),
            425 => 
            array (
                'id' => 426,
                'country_code' => 'LV',
                'code' => 'LV-OG',
                'name' => 'Ogres novads',
                'country_id' => 125,
            ),
            426 => 
            array (
                'id' => 427,
                'country_code' => 'LV',
                'code' => 'Olaines novads',
                'name' => 'Olaines novads',
                'country_id' => 125,
            ),
            427 => 
            array (
                'id' => 428,
                'country_code' => 'LV',
                'code' => 'Ozolnieku novads',
                'name' => 'Ozolnieku novads',
                'country_id' => 125,
            ),
            428 => 
            array (
                'id' => 429,
                'country_code' => 'LV',
                'code' => 'LV-PR',
                'name' => 'Preiļu novads',
                'country_id' => 125,
            ),
            429 => 
            array (
                'id' => 430,
                'country_code' => 'LV',
                'code' => 'Priekules novads',
                'name' => 'Priekules novads',
                'country_id' => 125,
            ),
            430 => 
            array (
                'id' => 431,
                'country_code' => 'LV',
                'code' => 'Priekuļu novads',
                'name' => 'Priekuļu novads',
                'country_id' => 125,
            ),
            431 => 
            array (
                'id' => 432,
                'country_code' => 'LV',
                'code' => 'Pārgaujas novads',
                'name' => 'Pārgaujas novads',
                'country_id' => 125,
            ),
            432 => 
            array (
                'id' => 433,
                'country_code' => 'LV',
                'code' => 'Pāvilostas novads',
                'name' => 'Pāvilostas novads',
                'country_id' => 125,
            ),
            433 => 
            array (
                'id' => 434,
                'country_code' => 'LV',
                'code' => 'Pļaviņu novads',
                'name' => 'Pļaviņu novads',
                'country_id' => 125,
            ),
            434 => 
            array (
                'id' => 435,
                'country_code' => 'LV',
                'code' => 'Raunas novads',
                'name' => 'Raunas novads',
                'country_id' => 125,
            ),
            435 => 
            array (
                'id' => 436,
                'country_code' => 'LV',
                'code' => 'Riebiņu novads',
                'name' => 'Riebiņu novads',
                'country_id' => 125,
            ),
            436 => 
            array (
                'id' => 437,
                'country_code' => 'LV',
                'code' => 'Rojas novads',
                'name' => 'Rojas novads',
                'country_id' => 125,
            ),
            437 => 
            array (
                'id' => 438,
                'country_code' => 'LV',
                'code' => 'Ropažu novads',
                'name' => 'Ropažu novads',
                'country_id' => 125,
            ),
            438 => 
            array (
                'id' => 439,
                'country_code' => 'LV',
                'code' => 'Rucavas novads',
                'name' => 'Rucavas novads',
                'country_id' => 125,
            ),
            439 => 
            array (
                'id' => 440,
                'country_code' => 'LV',
                'code' => 'Rugāju novads',
                'name' => 'Rugāju novads',
                'country_id' => 125,
            ),
            440 => 
            array (
                'id' => 441,
                'country_code' => 'LV',
                'code' => 'Rundāles novads',
                'name' => 'Rundāles novads',
                'country_id' => 125,
            ),
            441 => 
            array (
                'id' => 442,
                'country_code' => 'LV',
                'code' => 'LV-RE',
                'name' => 'Rēzeknes novads',
                'country_id' => 125,
            ),
            442 => 
            array (
                'id' => 443,
                'country_code' => 'LV',
                'code' => 'Rūjienas novads',
                'name' => 'Rūjienas novads',
                'country_id' => 125,
            ),
            443 => 
            array (
                'id' => 444,
                'country_code' => 'LV',
                'code' => 'Salacgrīvas novads',
                'name' => 'Salacgrīvas novads',
                'country_id' => 125,
            ),
            444 => 
            array (
                'id' => 445,
                'country_code' => 'LV',
                'code' => 'Salas novads',
                'name' => 'Salas novads',
                'country_id' => 125,
            ),
            445 => 
            array (
                'id' => 446,
                'country_code' => 'LV',
                'code' => 'Salaspils novads',
                'name' => 'Salaspils novads',
                'country_id' => 125,
            ),
            446 => 
            array (
                'id' => 447,
                'country_code' => 'LV',
                'code' => 'LV-SA',
                'name' => 'Saldus novads',
                'country_id' => 125,
            ),
            447 => 
            array (
                'id' => 448,
                'country_code' => 'LV',
                'code' => 'Saulkrastu novads',
                'name' => 'Saulkrastu novads',
                'country_id' => 125,
            ),
            448 => 
            array (
                'id' => 449,
                'country_code' => 'LV',
                'code' => 'Siguldas novads',
                'name' => 'Siguldas novads',
                'country_id' => 125,
            ),
            449 => 
            array (
                'id' => 450,
                'country_code' => 'LV',
                'code' => 'Skrundas novads',
                'name' => 'Skrundas novads',
                'country_id' => 125,
            ),
            450 => 
            array (
                'id' => 451,
                'country_code' => 'LV',
                'code' => 'Skrīveru novads',
                'name' => 'Skrīveru novads',
                'country_id' => 125,
            ),
            451 => 
            array (
                'id' => 452,
                'country_code' => 'LV',
                'code' => 'Smiltenes novads',
                'name' => 'Smiltenes novads',
                'country_id' => 125,
            ),
            452 => 
            array (
                'id' => 453,
                'country_code' => 'LV',
                'code' => 'Stopiņu novads',
                'name' => 'Stopiņu novads',
                'country_id' => 125,
            ),
            453 => 
            array (
                'id' => 454,
                'country_code' => 'LV',
                'code' => 'Strenču novads',
                'name' => 'Strenču novads',
                'country_id' => 125,
            ),
            454 => 
            array (
                'id' => 455,
                'country_code' => 'LV',
                'code' => 'Sējas novads',
                'name' => 'Sējas novads',
                'country_id' => 125,
            ),
            455 => 
            array (
                'id' => 456,
                'country_code' => 'LV',
                'code' => 'LV-TA',
                'name' => 'Talsu novads',
                'country_id' => 125,
            ),
            456 => 
            array (
                'id' => 457,
                'country_code' => 'LV',
                'code' => 'LV-TU',
                'name' => 'Tukuma novads',
                'country_id' => 125,
            ),
            457 => 
            array (
                'id' => 458,
                'country_code' => 'LV',
                'code' => 'Tērvetes novads',
                'name' => 'Tērvetes novads',
                'country_id' => 125,
            ),
            458 => 
            array (
                'id' => 459,
                'country_code' => 'LV',
                'code' => 'Vaiņodes novads',
                'name' => 'Vaiņodes novads',
                'country_id' => 125,
            ),
            459 => 
            array (
                'id' => 460,
                'country_code' => 'LV',
                'code' => 'LV-VK',
                'name' => 'Valkas novads',
                'country_id' => 125,
            ),
            460 => 
            array (
                'id' => 461,
                'country_code' => 'LV',
                'code' => 'LV-VM',
                'name' => 'Valmieras novads',
                'country_id' => 125,
            ),
            461 => 
            array (
                'id' => 462,
                'country_code' => 'LV',
                'code' => 'Varakļānu novads',
                'name' => 'Varakļānu novads',
                'country_id' => 125,
            ),
            462 => 
            array (
                'id' => 463,
                'country_code' => 'LV',
                'code' => 'Vecpiebalgas novads',
                'name' => 'Vecpiebalgas novads',
                'country_id' => 125,
            ),
            463 => 
            array (
                'id' => 464,
                'country_code' => 'LV',
                'code' => 'Vecumnieku novads',
                'name' => 'Vecumnieku novads',
                'country_id' => 125,
            ),
            464 => 
            array (
                'id' => 465,
                'country_code' => 'LV',
                'code' => 'LV-VE',
                'name' => 'Ventspils novads',
                'country_id' => 125,
            ),
            465 => 
            array (
                'id' => 466,
                'country_code' => 'LV',
                'code' => 'Viesītes novads',
                'name' => 'Viesītes novads',
                'country_id' => 125,
            ),
            466 => 
            array (
                'id' => 467,
                'country_code' => 'LV',
                'code' => 'Viļakas novads',
                'name' => 'Viļakas novads',
                'country_id' => 125,
            ),
            467 => 
            array (
                'id' => 468,
                'country_code' => 'LV',
                'code' => 'Viļānu novads',
                'name' => 'Viļānu novads',
                'country_id' => 125,
            ),
            468 => 
            array (
                'id' => 469,
                'country_code' => 'LV',
                'code' => 'Vārkavas novads',
                'name' => 'Vārkavas novads',
                'country_id' => 125,
            ),
            469 => 
            array (
                'id' => 470,
                'country_code' => 'LV',
                'code' => 'Zilupes novads',
                'name' => 'Zilupes novads',
                'country_id' => 125,
            ),
            470 => 
            array (
                'id' => 471,
                'country_code' => 'LV',
                'code' => 'Ādažu novads',
                'name' => 'Ādažu novads',
                'country_id' => 125,
            ),
            471 => 
            array (
                'id' => 472,
                'country_code' => 'LV',
                'code' => 'Ērgļu novads',
                'name' => 'Ērgļu novads',
                'country_id' => 125,
            ),
            472 => 
            array (
                'id' => 473,
                'country_code' => 'LV',
                'code' => 'Ķeguma novads',
                'name' => 'Ķeguma novads',
                'country_id' => 125,
            ),
            473 => 
            array (
                'id' => 474,
                'country_code' => 'LV',
                'code' => 'Ķekavas novads',
                'name' => 'Ķekavas novads',
                'country_id' => 125,
            ),
            474 => 
            array (
                'id' => 475,
                'country_code' => 'LT',
                'code' => 'LT-AL',
                'name' => 'Alytaus Apskritis',
                'country_id' => 131,
            ),
            475 => 
            array (
                'id' => 476,
                'country_code' => 'LT',
                'code' => 'LT-KU',
                'name' => 'Kauno Apskritis',
                'country_id' => 131,
            ),
            476 => 
            array (
                'id' => 477,
                'country_code' => 'LT',
                'code' => 'LT-KL',
                'name' => 'Klaipėdos Apskritis',
                'country_id' => 131,
            ),
            477 => 
            array (
                'id' => 478,
                'country_code' => 'LT',
                'code' => 'LT-MR',
                'name' => 'Marijampolės Apskritis',
                'country_id' => 131,
            ),
            478 => 
            array (
                'id' => 479,
                'country_code' => 'LT',
                'code' => 'LT-PN',
                'name' => 'Panevėžio Apskritis',
                'country_id' => 131,
            ),
            479 => 
            array (
                'id' => 480,
                'country_code' => 'LT',
                'code' => 'LT-SA',
                'name' => 'Šiaulių Apskritis',
                'country_id' => 131,
            ),
            480 => 
            array (
                'id' => 481,
                'country_code' => 'LT',
                'code' => 'LT-TA',
                'name' => 'Tauragės Apskritis',
                'country_id' => 131,
            ),
            481 => 
            array (
                'id' => 482,
                'country_code' => 'LT',
                'code' => 'LT-TE',
                'name' => 'Telšių Apskritis',
                'country_id' => 131,
            ),
            482 => 
            array (
                'id' => 483,
                'country_code' => 'LT',
                'code' => 'LT-UT',
                'name' => 'Utenos Apskritis',
                'country_id' => 131,
            ),
            483 => 
            array (
                'id' => 484,
                'country_code' => 'LT',
                'code' => 'LT-VL',
                'name' => 'Vilniaus Apskritis',
                'country_id' => 131,
            ),
            484 => 
            array (
                'id' => 485,
                'country_code' => 'BR',
                'code' => 'AC',
                'name' => 'Acre',
                'country_id' => 31,
            ),
            485 => 
            array (
                'id' => 486,
                'country_code' => 'BR',
                'code' => 'AL',
                'name' => 'Alagoas',
                'country_id' => 31,
            ),
            486 => 
            array (
                'id' => 487,
                'country_code' => 'BR',
                'code' => 'AP',
                'name' => 'Amapá',
                'country_id' => 31,
            ),
            487 => 
            array (
                'id' => 488,
                'country_code' => 'BR',
                'code' => 'AM',
                'name' => 'Amazonas',
                'country_id' => 31,
            ),
            488 => 
            array (
                'id' => 489,
                'country_code' => 'BR',
                'code' => 'BA',
                'name' => 'Bahia',
                'country_id' => 31,
            ),
            489 => 
            array (
                'id' => 490,
                'country_code' => 'BR',
                'code' => 'CE',
                'name' => 'Ceará',
                'country_id' => 31,
            ),
            490 => 
            array (
                'id' => 491,
                'country_code' => 'BR',
                'code' => 'ES',
                'name' => 'Espírito Santo',
                'country_id' => 31,
            ),
            491 => 
            array (
                'id' => 492,
                'country_code' => 'BR',
                'code' => 'GO',
                'name' => 'Goiás',
                'country_id' => 31,
            ),
            492 => 
            array (
                'id' => 493,
                'country_code' => 'BR',
                'code' => 'MA',
                'name' => 'Maranhão',
                'country_id' => 31,
            ),
            493 => 
            array (
                'id' => 494,
                'country_code' => 'BR',
                'code' => 'MT',
                'name' => 'Mato Grosso',
                'country_id' => 31,
            ),
            494 => 
            array (
                'id' => 495,
                'country_code' => 'BR',
                'code' => 'MS',
                'name' => 'Mato Grosso do Sul',
                'country_id' => 31,
            ),
            495 => 
            array (
                'id' => 496,
                'country_code' => 'BR',
                'code' => 'MG',
                'name' => 'Minas Gerais',
                'country_id' => 31,
            ),
            496 => 
            array (
                'id' => 497,
                'country_code' => 'BR',
                'code' => 'PA',
                'name' => 'Pará',
                'country_id' => 31,
            ),
            497 => 
            array (
                'id' => 498,
                'country_code' => 'BR',
                'code' => 'PB',
                'name' => 'Paraíba',
                'country_id' => 31,
            ),
            498 => 
            array (
                'id' => 499,
                'country_code' => 'BR',
                'code' => 'PR',
                'name' => 'Paraná',
                'country_id' => 31,
            ),
            499 => 
            array (
                'id' => 500,
                'country_code' => 'BR',
                'code' => 'PE',
                'name' => 'Pernambuco',
                'country_id' => 31,
            ),
        ));
        \DB::table('country_states')->insert(array (
            0 => 
            array (
                'id' => 501,
                'country_code' => 'BR',
                'code' => 'PI',
                'name' => 'Piauí',
                'country_id' => 31,
            ),
            1 => 
            array (
                'id' => 502,
                'country_code' => 'BR',
                'code' => 'RJ',
                'name' => 'Rio de Janeiro',
                'country_id' => 31,
            ),
            2 => 
            array (
                'id' => 503,
                'country_code' => 'BR',
                'code' => 'RN',
                'name' => 'Rio Grande do Norte',
                'country_id' => 31,
            ),
            3 => 
            array (
                'id' => 504,
                'country_code' => 'BR',
                'code' => 'RS',
                'name' => 'Rio Grande do Sul',
                'country_id' => 31,
            ),
            4 => 
            array (
                'id' => 505,
                'country_code' => 'BR',
                'code' => 'RO',
                'name' => 'Rondônia',
                'country_id' => 31,
            ),
            5 => 
            array (
                'id' => 506,
                'country_code' => 'BR',
                'code' => 'RR',
                'name' => 'Roraima',
                'country_id' => 31,
            ),
            6 => 
            array (
                'id' => 507,
                'country_code' => 'BR',
                'code' => 'SC',
                'name' => 'Santa Catarina',
                'country_id' => 31,
            ),
            7 => 
            array (
                'id' => 508,
                'country_code' => 'BR',
                'code' => 'SP',
                'name' => 'São Paulo',
                'country_id' => 31,
            ),
            8 => 
            array (
                'id' => 509,
                'country_code' => 'BR',
                'code' => 'SE',
                'name' => 'Sergipe',
                'country_id' => 31,
            ),
            9 => 
            array (
                'id' => 510,
                'country_code' => 'BR',
                'code' => 'TO',
                'name' => 'Tocantins',
                'country_id' => 31,
            ),
            10 => 
            array (
                'id' => 511,
                'country_code' => 'BR',
                'code' => 'DF',
                'name' => 'Distrito Federal',
                'country_id' => 31,
            ),
            11 => 
            array (
                'id' => 512,
                'country_code' => 'HR',
                'code' => 'HR-01',
                'name' => 'Zagrebačka županija',
                'country_id' => 59,
            ),
            12 => 
            array (
                'id' => 513,
                'country_code' => 'HR',
                'code' => 'HR-02',
                'name' => 'Krapinsko-zagorska županija',
                'country_id' => 59,
            ),
            13 => 
            array (
                'id' => 514,
                'country_code' => 'HR',
                'code' => 'HR-03',
                'name' => 'Sisačko-moslavačka županija',
                'country_id' => 59,
            ),
            14 => 
            array (
                'id' => 515,
                'country_code' => 'HR',
                'code' => 'HR-04',
                'name' => 'Karlovačka županija',
                'country_id' => 59,
            ),
            15 => 
            array (
                'id' => 516,
                'country_code' => 'HR',
                'code' => 'HR-05',
                'name' => 'Varaždinska županija',
                'country_id' => 59,
            ),
            16 => 
            array (
                'id' => 517,
                'country_code' => 'HR',
                'code' => 'HR-06',
                'name' => 'Koprivničko-križevačka županija',
                'country_id' => 59,
            ),
            17 => 
            array (
                'id' => 518,
                'country_code' => 'HR',
                'code' => 'HR-07',
                'name' => 'Bjelovarsko-bilogorska županija',
                'country_id' => 59,
            ),
            18 => 
            array (
                'id' => 519,
                'country_code' => 'HR',
                'code' => 'HR-08',
                'name' => 'Primorsko-goranska županija',
                'country_id' => 59,
            ),
            19 => 
            array (
                'id' => 520,
                'country_code' => 'HR',
                'code' => 'HR-09',
                'name' => 'Ličko-senjska županija',
                'country_id' => 59,
            ),
            20 => 
            array (
                'id' => 521,
                'country_code' => 'HR',
                'code' => 'HR-10',
                'name' => 'Virovitičko-podravska županija',
                'country_id' => 59,
            ),
            21 => 
            array (
                'id' => 522,
                'country_code' => 'HR',
                'code' => 'HR-11',
                'name' => 'Požeško-slavonska županija',
                'country_id' => 59,
            ),
            22 => 
            array (
                'id' => 523,
                'country_code' => 'HR',
                'code' => 'HR-12',
                'name' => 'Brodsko-posavska županija',
                'country_id' => 59,
            ),
            23 => 
            array (
                'id' => 524,
                'country_code' => 'HR',
                'code' => 'HR-13',
                'name' => 'Zadarska županija',
                'country_id' => 59,
            ),
            24 => 
            array (
                'id' => 525,
                'country_code' => 'HR',
                'code' => 'HR-14',
                'name' => 'Osječko-baranjska županija',
                'country_id' => 59,
            ),
            25 => 
            array (
                'id' => 526,
                'country_code' => 'HR',
                'code' => 'HR-15',
                'name' => 'Šibensko-kninska županija',
                'country_id' => 59,
            ),
            26 => 
            array (
                'id' => 527,
                'country_code' => 'HR',
                'code' => 'HR-16',
                'name' => 'Vukovarsko-srijemska županija',
                'country_id' => 59,
            ),
            27 => 
            array (
                'id' => 528,
                'country_code' => 'HR',
                'code' => 'HR-17',
                'name' => 'Splitsko-dalmatinska županija',
                'country_id' => 59,
            ),
            28 => 
            array (
                'id' => 529,
                'country_code' => 'HR',
                'code' => 'HR-18',
                'name' => 'Istarska županija',
                'country_id' => 59,
            ),
            29 => 
            array (
                'id' => 530,
                'country_code' => 'HR',
                'code' => 'HR-19',
                'name' => 'Dubrovačko-neretvanska županija',
                'country_id' => 59,
            ),
            30 => 
            array (
                'id' => 531,
                'country_code' => 'HR',
                'code' => 'HR-20',
                'name' => 'Međimurska županija',
                'country_id' => 59,
            ),
            31 => 
            array (
                'id' => 532,
                'country_code' => 'HR',
                'code' => 'HR-21',
                'name' => 'Grad Zagreb',
                'country_id' => 59,
            ),
            32 => 
            array (
                'id' => 533,
                'country_code' => 'IN',
                'code' => 'AN',
                'name' => 'Andaman and Nicobar Islands',
                'country_id' => 106,
            ),
            33 => 
            array (
                'id' => 534,
                'country_code' => 'IN',
                'code' => 'AP',
                'name' => 'Andhra Pradesh',
                'country_id' => 106,
            ),
            34 => 
            array (
                'id' => 535,
                'country_code' => 'IN',
                'code' => 'AR',
                'name' => 'Arunachal Pradesh',
                'country_id' => 106,
            ),
            35 => 
            array (
                'id' => 536,
                'country_code' => 'IN',
                'code' => 'AS',
                'name' => 'Assam',
                'country_id' => 106,
            ),
            36 => 
            array (
                'id' => 537,
                'country_code' => 'IN',
                'code' => 'BR',
                'name' => 'Bihar',
                'country_id' => 106,
            ),
            37 => 
            array (
                'id' => 538,
                'country_code' => 'IN',
                'code' => 'CH',
                'name' => 'Chandigarh',
                'country_id' => 106,
            ),
            38 => 
            array (
                'id' => 539,
                'country_code' => 'IN',
                'code' => 'CT',
                'name' => 'Chhattisgarh',
                'country_id' => 106,
            ),
            39 => 
            array (
                'id' => 540,
                'country_code' => 'IN',
                'code' => 'DN',
                'name' => 'Dadra and Nagar Haveli',
                'country_id' => 106,
            ),
            40 => 
            array (
                'id' => 541,
                'country_code' => 'IN',
                'code' => 'DD',
                'name' => 'Daman and Diu',
                'country_id' => 106,
            ),
            41 => 
            array (
                'id' => 542,
                'country_code' => 'IN',
                'code' => 'DL',
                'name' => 'Delhi',
                'country_id' => 106,
            ),
            42 => 
            array (
                'id' => 543,
                'country_code' => 'IN',
                'code' => 'GA',
                'name' => 'Goa',
                'country_id' => 106,
            ),
            43 => 
            array (
                'id' => 544,
                'country_code' => 'IN',
                'code' => 'GJ',
                'name' => 'Gujarat',
                'country_id' => 106,
            ),
            44 => 
            array (
                'id' => 545,
                'country_code' => 'IN',
                'code' => 'HR',
                'name' => 'Haryana',
                'country_id' => 106,
            ),
            45 => 
            array (
                'id' => 546,
                'country_code' => 'IN',
                'code' => 'HP',
                'name' => 'Himachal Pradesh',
                'country_id' => 106,
            ),
            46 => 
            array (
                'id' => 547,
                'country_code' => 'IN',
                'code' => 'JK',
                'name' => 'Jammu and Kashmir',
                'country_id' => 106,
            ),
            47 => 
            array (
                'id' => 548,
                'country_code' => 'IN',
                'code' => 'JH',
                'name' => 'Jharkhand',
                'country_id' => 106,
            ),
            48 => 
            array (
                'id' => 549,
                'country_code' => 'IN',
                'code' => 'KA',
                'name' => 'Karnataka',
                'country_id' => 106,
            ),
            49 => 
            array (
                'id' => 550,
                'country_code' => 'IN',
                'code' => 'KL',
                'name' => 'Kerala',
                'country_id' => 106,
            ),
            50 => 
            array (
                'id' => 551,
                'country_code' => 'IN',
                'code' => 'LD',
                'name' => 'Lakshadweep',
                'country_id' => 106,
            ),
            51 => 
            array (
                'id' => 552,
                'country_code' => 'IN',
                'code' => 'MP',
                'name' => 'Madhya Pradesh',
                'country_id' => 106,
            ),
            52 => 
            array (
                'id' => 553,
                'country_code' => 'IN',
                'code' => 'MH',
                'name' => 'Maharashtra',
                'country_id' => 106,
            ),
            53 => 
            array (
                'id' => 554,
                'country_code' => 'IN',
                'code' => 'MN',
                'name' => 'Manipur',
                'country_id' => 106,
            ),
            54 => 
            array (
                'id' => 555,
                'country_code' => 'IN',
                'code' => 'ML',
                'name' => 'Meghalaya',
                'country_id' => 106,
            ),
            55 => 
            array (
                'id' => 556,
                'country_code' => 'IN',
                'code' => 'MZ',
                'name' => 'Mizoram',
                'country_id' => 106,
            ),
            56 => 
            array (
                'id' => 557,
                'country_code' => 'IN',
                'code' => 'NL',
                'name' => 'Nagaland',
                'country_id' => 106,
            ),
            57 => 
            array (
                'id' => 558,
                'country_code' => 'IN',
                'code' => 'OR',
                'name' => 'Odisha',
                'country_id' => 106,
            ),
            58 => 
            array (
                'id' => 559,
                'country_code' => 'IN',
                'code' => 'PY',
                'name' => 'Puducherry',
                'country_id' => 106,
            ),
            59 => 
            array (
                'id' => 560,
                'country_code' => 'IN',
                'code' => 'PB',
                'name' => 'Punjab',
                'country_id' => 106,
            ),
            60 => 
            array (
                'id' => 561,
                'country_code' => 'IN',
                'code' => 'RJ',
                'name' => 'Rajasthan',
                'country_id' => 106,
            ),
            61 => 
            array (
                'id' => 562,
                'country_code' => 'IN',
                'code' => 'SK',
                'name' => 'Sikkim',
                'country_id' => 106,
            ),
            62 => 
            array (
                'id' => 563,
                'country_code' => 'IN',
                'code' => 'TN',
                'name' => 'Tamil Nadu',
                'country_id' => 106,
            ),
            63 => 
            array (
                'id' => 564,
                'country_code' => 'IN',
                'code' => 'TG',
                'name' => 'Telangana',
                'country_id' => 106,
            ),
            64 => 
            array (
                'id' => 565,
                'country_code' => 'IN',
                'code' => 'TR',
                'name' => 'Tripura',
                'country_id' => 106,
            ),
            65 => 
            array (
                'id' => 566,
                'country_code' => 'IN',
                'code' => 'UP',
                'name' => 'Uttar Pradesh',
                'country_id' => 106,
            ),
            66 => 
            array (
                'id' => 567,
                'country_code' => 'IN',
                'code' => 'UT',
                'name' => 'Uttarakhand',
                'country_id' => 106,
            ),
            67 => 
            array (
                'id' => 568,
                'country_code' => 'IN',
                'code' => 'WB',
                'name' => 'West Bengal',
                'country_id' => 106,
            ),
        ));
        
        
    }
}