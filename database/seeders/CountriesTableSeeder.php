<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'AF',
                'name' => 'Afghanistan',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'AX',
                'name' => 'Åland Islands',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'AL',
                'name' => 'Albania',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'DZ',
                'name' => 'Algeria',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'AS',
                'name' => 'American Samoa',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 'AD',
                'name' => 'Andorra',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 'AO',
                'name' => 'Angola',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 'AI',
                'name' => 'Anguilla',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 'AQ',
                'name' => 'Antarctica',
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 'AG',
                'name' => 'Antigua & Barbuda',
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 'AR',
                'name' => 'Argentina',
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 'AM',
                'name' => 'Armenia',
            ),
            12 => 
            array (
                'id' => 13,
                'code' => 'AW',
                'name' => 'Aruba',
            ),
            13 => 
            array (
                'id' => 14,
                'code' => 'AC',
                'name' => 'Ascension Island',
            ),
            14 => 
            array (
                'id' => 15,
                'code' => 'AU',
                'name' => 'Australia',
            ),
            15 => 
            array (
                'id' => 16,
                'code' => 'AT',
                'name' => 'Austria',
            ),
            16 => 
            array (
                'id' => 17,
                'code' => 'AZ',
                'name' => 'Azerbaijan',
            ),
            17 => 
            array (
                'id' => 18,
                'code' => 'BS',
                'name' => 'Bahamas',
            ),
            18 => 
            array (
                'id' => 19,
                'code' => 'BH',
                'name' => 'Bahrain',
            ),
            19 => 
            array (
                'id' => 20,
                'code' => 'BD',
                'name' => 'Bangladesh',
            ),
            20 => 
            array (
                'id' => 21,
                'code' => 'BB',
                'name' => 'Barbados',
            ),
            21 => 
            array (
                'id' => 22,
                'code' => 'BY',
                'name' => 'Belarus',
            ),
            22 => 
            array (
                'id' => 23,
                'code' => 'BE',
                'name' => 'Belgium',
            ),
            23 => 
            array (
                'id' => 24,
                'code' => 'BZ',
                'name' => 'Belize',
            ),
            24 => 
            array (
                'id' => 25,
                'code' => 'BJ',
                'name' => 'Benin',
            ),
            25 => 
            array (
                'id' => 26,
                'code' => 'BM',
                'name' => 'Bermuda',
            ),
            26 => 
            array (
                'id' => 27,
                'code' => 'BT',
                'name' => 'Bhutan',
            ),
            27 => 
            array (
                'id' => 28,
                'code' => 'BO',
                'name' => 'Bolivia',
            ),
            28 => 
            array (
                'id' => 29,
                'code' => 'BA',
                'name' => 'Bosnia & Herzegovina',
            ),
            29 => 
            array (
                'id' => 30,
                'code' => 'BW',
                'name' => 'Botswana',
            ),
            30 => 
            array (
                'id' => 31,
                'code' => 'BR',
                'name' => 'Brazil',
            ),
            31 => 
            array (
                'id' => 32,
                'code' => 'IO',
                'name' => 'British Indian Ocean Territory',
            ),
            32 => 
            array (
                'id' => 33,
                'code' => 'VG',
                'name' => 'British Virgin Islands',
            ),
            33 => 
            array (
                'id' => 34,
                'code' => 'BN',
                'name' => 'Brunei',
            ),
            34 => 
            array (
                'id' => 35,
                'code' => 'BG',
                'name' => 'Bulgaria',
            ),
            35 => 
            array (
                'id' => 36,
                'code' => 'BF',
                'name' => 'Burkina Faso',
            ),
            36 => 
            array (
                'id' => 37,
                'code' => 'BI',
                'name' => 'Burundi',
            ),
            37 => 
            array (
                'id' => 38,
                'code' => 'KH',
                'name' => 'Cambodia',
            ),
            38 => 
            array (
                'id' => 39,
                'code' => 'CM',
                'name' => 'Cameroon',
            ),
            39 => 
            array (
                'id' => 40,
                'code' => 'CA',
                'name' => 'Canada',
            ),
            40 => 
            array (
                'id' => 41,
                'code' => 'IC',
                'name' => 'Canary Islands',
            ),
            41 => 
            array (
                'id' => 42,
                'code' => 'CV',
                'name' => 'Cape Verde',
            ),
            42 => 
            array (
                'id' => 43,
                'code' => 'BQ',
                'name' => 'Caribbean Netherlands',
            ),
            43 => 
            array (
                'id' => 44,
                'code' => 'KY',
                'name' => 'Cayman Islands',
            ),
            44 => 
            array (
                'id' => 45,
                'code' => 'CF',
                'name' => 'Central African Republic',
            ),
            45 => 
            array (
                'id' => 46,
                'code' => 'EA',
                'name' => 'Ceuta & Melilla',
            ),
            46 => 
            array (
                'id' => 47,
                'code' => 'TD',
                'name' => 'Chad',
            ),
            47 => 
            array (
                'id' => 48,
                'code' => 'CL',
                'name' => 'Chile',
            ),
            48 => 
            array (
                'id' => 49,
                'code' => 'CN',
                'name' => 'China',
            ),
            49 => 
            array (
                'id' => 50,
                'code' => 'CX',
                'name' => 'Christmas Island',
            ),
            50 => 
            array (
                'id' => 51,
                'code' => 'CC',
            'name' => 'Cocos (Keeling) Islands',
            ),
            51 => 
            array (
                'id' => 52,
                'code' => 'CO',
                'name' => 'Colombia',
            ),
            52 => 
            array (
                'id' => 53,
                'code' => 'KM',
                'name' => 'Comoros',
            ),
            53 => 
            array (
                'id' => 54,
                'code' => 'CG',
                'name' => 'Congo - Brazzaville',
            ),
            54 => 
            array (
                'id' => 55,
                'code' => 'CD',
                'name' => 'Congo - Kinshasa',
            ),
            55 => 
            array (
                'id' => 56,
                'code' => 'CK',
                'name' => 'Cook Islands',
            ),
            56 => 
            array (
                'id' => 57,
                'code' => 'CR',
                'name' => 'Costa Rica',
            ),
            57 => 
            array (
                'id' => 58,
                'code' => 'CI',
                'name' => 'Côte d’Ivoire',
            ),
            58 => 
            array (
                'id' => 59,
                'code' => 'HR',
                'name' => 'Croatia',
            ),
            59 => 
            array (
                'id' => 60,
                'code' => 'CU',
                'name' => 'Cuba',
            ),
            60 => 
            array (
                'id' => 61,
                'code' => 'CW',
                'name' => 'Curaçao',
            ),
            61 => 
            array (
                'id' => 62,
                'code' => 'CY',
                'name' => 'Cyprus',
            ),
            62 => 
            array (
                'id' => 63,
                'code' => 'CZ',
                'name' => 'Czechia',
            ),
            63 => 
            array (
                'id' => 64,
                'code' => 'DK',
                'name' => 'Denmark',
            ),
            64 => 
            array (
                'id' => 65,
                'code' => 'DG',
                'name' => 'Diego Garcia',
            ),
            65 => 
            array (
                'id' => 66,
                'code' => 'DJ',
                'name' => 'Djibouti',
            ),
            66 => 
            array (
                'id' => 67,
                'code' => 'DM',
                'name' => 'Dominica',
            ),
            67 => 
            array (
                'id' => 68,
                'code' => 'DO',
                'name' => 'Dominican Republic',
            ),
            68 => 
            array (
                'id' => 69,
                'code' => 'EC',
                'name' => 'Ecuador',
            ),
            69 => 
            array (
                'id' => 70,
                'code' => 'EG',
                'name' => 'Egypt',
            ),
            70 => 
            array (
                'id' => 71,
                'code' => 'SV',
                'name' => 'El Salvador',
            ),
            71 => 
            array (
                'id' => 72,
                'code' => 'GQ',
                'name' => 'Equatorial Guinea',
            ),
            72 => 
            array (
                'id' => 73,
                'code' => 'ER',
                'name' => 'Eritrea',
            ),
            73 => 
            array (
                'id' => 74,
                'code' => 'EE',
                'name' => 'Estonia',
            ),
            74 => 
            array (
                'id' => 75,
                'code' => 'ET',
                'name' => 'Ethiopia',
            ),
            75 => 
            array (
                'id' => 76,
                'code' => 'EZ',
                'name' => 'Eurozone',
            ),
            76 => 
            array (
                'id' => 77,
                'code' => 'FK',
                'name' => 'Falkland Islands',
            ),
            77 => 
            array (
                'id' => 78,
                'code' => 'FO',
                'name' => 'Faroe Islands',
            ),
            78 => 
            array (
                'id' => 79,
                'code' => 'FJ',
                'name' => 'Fiji',
            ),
            79 => 
            array (
                'id' => 80,
                'code' => 'FI',
                'name' => 'Finland',
            ),
            80 => 
            array (
                'id' => 81,
                'code' => 'FR',
                'name' => 'France',
            ),
            81 => 
            array (
                'id' => 82,
                'code' => 'GF',
                'name' => 'French Guiana',
            ),
            82 => 
            array (
                'id' => 83,
                'code' => 'PF',
                'name' => 'French Polynesia',
            ),
            83 => 
            array (
                'id' => 84,
                'code' => 'TF',
                'name' => 'French Southern Territories',
            ),
            84 => 
            array (
                'id' => 85,
                'code' => 'GA',
                'name' => 'Gabon',
            ),
            85 => 
            array (
                'id' => 86,
                'code' => 'GM',
                'name' => 'Gambia',
            ),
            86 => 
            array (
                'id' => 87,
                'code' => 'GE',
                'name' => 'Georgia',
            ),
            87 => 
            array (
                'id' => 88,
                'code' => 'DE',
                'name' => 'Germany',
            ),
            88 => 
            array (
                'id' => 89,
                'code' => 'GH',
                'name' => 'Ghana',
            ),
            89 => 
            array (
                'id' => 90,
                'code' => 'GI',
                'name' => 'Gibraltar',
            ),
            90 => 
            array (
                'id' => 91,
                'code' => 'GR',
                'name' => 'Greece',
            ),
            91 => 
            array (
                'id' => 92,
                'code' => 'GL',
                'name' => 'Greenland',
            ),
            92 => 
            array (
                'id' => 93,
                'code' => 'GD',
                'name' => 'Grenada',
            ),
            93 => 
            array (
                'id' => 94,
                'code' => 'GP',
                'name' => 'Guadeloupe',
            ),
            94 => 
            array (
                'id' => 95,
                'code' => 'GU',
                'name' => 'Guam',
            ),
            95 => 
            array (
                'id' => 96,
                'code' => 'GT',
                'name' => 'Guatemala',
            ),
            96 => 
            array (
                'id' => 97,
                'code' => 'GG',
                'name' => 'Guernsey',
            ),
            97 => 
            array (
                'id' => 98,
                'code' => 'GN',
                'name' => 'Guinea',
            ),
            98 => 
            array (
                'id' => 99,
                'code' => 'GW',
                'name' => 'Guinea-Bissau',
            ),
            99 => 
            array (
                'id' => 100,
                'code' => 'GY',
                'name' => 'Guyana',
            ),
            100 => 
            array (
                'id' => 101,
                'code' => 'HT',
                'name' => 'Haiti',
            ),
            101 => 
            array (
                'id' => 102,
                'code' => 'HN',
                'name' => 'Honduras',
            ),
            102 => 
            array (
                'id' => 103,
                'code' => 'HK',
                'name' => 'Hong Kong SAR China',
            ),
            103 => 
            array (
                'id' => 104,
                'code' => 'HU',
                'name' => 'Hungary',
            ),
            104 => 
            array (
                'id' => 105,
                'code' => 'IS',
                'name' => 'Iceland',
            ),
            105 => 
            array (
                'id' => 106,
                'code' => 'IN',
                'name' => 'India',
            ),
            106 => 
            array (
                'id' => 107,
                'code' => 'ID',
                'name' => 'Indonesia',
            ),
            107 => 
            array (
                'id' => 108,
                'code' => 'IR',
                'name' => 'Iran',
            ),
            108 => 
            array (
                'id' => 109,
                'code' => 'IQ',
                'name' => 'Iraq',
            ),
            109 => 
            array (
                'id' => 110,
                'code' => 'IE',
                'name' => 'Ireland',
            ),
            110 => 
            array (
                'id' => 111,
                'code' => 'IM',
                'name' => 'Isle of Man',
            ),
            111 => 
            array (
                'id' => 112,
                'code' => 'IL',
                'name' => 'Israel',
            ),
            112 => 
            array (
                'id' => 113,
                'code' => 'IT',
                'name' => 'Italy',
            ),
            113 => 
            array (
                'id' => 114,
                'code' => 'JM',
                'name' => 'Jamaica',
            ),
            114 => 
            array (
                'id' => 115,
                'code' => 'JP',
                'name' => 'Japan',
            ),
            115 => 
            array (
                'id' => 116,
                'code' => 'JE',
                'name' => 'Jersey',
            ),
            116 => 
            array (
                'id' => 117,
                'code' => 'JO',
                'name' => 'Jordan',
            ),
            117 => 
            array (
                'id' => 118,
                'code' => 'KZ',
                'name' => 'Kazakhstan',
            ),
            118 => 
            array (
                'id' => 119,
                'code' => 'KE',
                'name' => 'Kenya',
            ),
            119 => 
            array (
                'id' => 120,
                'code' => 'KI',
                'name' => 'Kiribati',
            ),
            120 => 
            array (
                'id' => 121,
                'code' => 'XK',
                'name' => 'Kosovo',
            ),
            121 => 
            array (
                'id' => 122,
                'code' => 'KW',
                'name' => 'Kuwait',
            ),
            122 => 
            array (
                'id' => 123,
                'code' => 'KG',
                'name' => 'Kyrgyzstan',
            ),
            123 => 
            array (
                'id' => 124,
                'code' => 'LA',
                'name' => 'Laos',
            ),
            124 => 
            array (
                'id' => 125,
                'code' => 'LV',
                'name' => 'Latvia',
            ),
            125 => 
            array (
                'id' => 126,
                'code' => 'LB',
                'name' => 'Lebanon',
            ),
            126 => 
            array (
                'id' => 127,
                'code' => 'LS',
                'name' => 'Lesotho',
            ),
            127 => 
            array (
                'id' => 128,
                'code' => 'LR',
                'name' => 'Liberia',
            ),
            128 => 
            array (
                'id' => 129,
                'code' => 'LY',
                'name' => 'Libya',
            ),
            129 => 
            array (
                'id' => 130,
                'code' => 'LI',
                'name' => 'Liechtenstein',
            ),
            130 => 
            array (
                'id' => 131,
                'code' => 'LT',
                'name' => 'Lithuania',
            ),
            131 => 
            array (
                'id' => 132,
                'code' => 'LU',
                'name' => 'Luxembourg',
            ),
            132 => 
            array (
                'id' => 133,
                'code' => 'MO',
                'name' => 'Macau SAR China',
            ),
            133 => 
            array (
                'id' => 134,
                'code' => 'MK',
                'name' => 'Macedonia',
            ),
            134 => 
            array (
                'id' => 135,
                'code' => 'MG',
                'name' => 'Madagascar',
            ),
            135 => 
            array (
                'id' => 136,
                'code' => 'MW',
                'name' => 'Malawi',
            ),
            136 => 
            array (
                'id' => 137,
                'code' => 'MY',
                'name' => 'Malaysia',
            ),
            137 => 
            array (
                'id' => 138,
                'code' => 'MV',
                'name' => 'Maldives',
            ),
            138 => 
            array (
                'id' => 139,
                'code' => 'ML',
                'name' => 'Mali',
            ),
            139 => 
            array (
                'id' => 140,
                'code' => 'MT',
                'name' => 'Malta',
            ),
            140 => 
            array (
                'id' => 141,
                'code' => 'MH',
                'name' => 'Marshall Islands',
            ),
            141 => 
            array (
                'id' => 142,
                'code' => 'MQ',
                'name' => 'Martinique',
            ),
            142 => 
            array (
                'id' => 143,
                'code' => 'MR',
                'name' => 'Mauritania',
            ),
            143 => 
            array (
                'id' => 144,
                'code' => 'MU',
                'name' => 'Mauritius',
            ),
            144 => 
            array (
                'id' => 145,
                'code' => 'YT',
                'name' => 'Mayotte',
            ),
            145 => 
            array (
                'id' => 146,
                'code' => 'MX',
                'name' => 'Mexico',
            ),
            146 => 
            array (
                'id' => 147,
                'code' => 'FM',
                'name' => 'Micronesia',
            ),
            147 => 
            array (
                'id' => 148,
                'code' => 'MD',
                'name' => 'Moldova',
            ),
            148 => 
            array (
                'id' => 149,
                'code' => 'MC',
                'name' => 'Monaco',
            ),
            149 => 
            array (
                'id' => 150,
                'code' => 'MN',
                'name' => 'Mongolia',
            ),
            150 => 
            array (
                'id' => 151,
                'code' => 'ME',
                'name' => 'Montenegro',
            ),
            151 => 
            array (
                'id' => 152,
                'code' => 'MS',
                'name' => 'Montserrat',
            ),
            152 => 
            array (
                'id' => 153,
                'code' => 'MA',
                'name' => 'Morocco',
            ),
            153 => 
            array (
                'id' => 154,
                'code' => 'MZ',
                'name' => 'Mozambique',
            ),
            154 => 
            array (
                'id' => 155,
                'code' => 'MM',
            'name' => 'Myanmar (Burma)',
            ),
            155 => 
            array (
                'id' => 156,
                'code' => 'NA',
                'name' => 'Namibia',
            ),
            156 => 
            array (
                'id' => 157,
                'code' => 'NR',
                'name' => 'Nauru',
            ),
            157 => 
            array (
                'id' => 158,
                'code' => 'NP',
                'name' => 'Nepal',
            ),
            158 => 
            array (
                'id' => 159,
                'code' => 'NL',
                'name' => 'Netherlands',
            ),
            159 => 
            array (
                'id' => 160,
                'code' => 'NC',
                'name' => 'New Caledonia',
            ),
            160 => 
            array (
                'id' => 161,
                'code' => 'NZ',
                'name' => 'New Zealand',
            ),
            161 => 
            array (
                'id' => 162,
                'code' => 'NI',
                'name' => 'Nicaragua',
            ),
            162 => 
            array (
                'id' => 163,
                'code' => 'NE',
                'name' => 'Niger',
            ),
            163 => 
            array (
                'id' => 164,
                'code' => 'NG',
                'name' => 'Nigeria',
            ),
            164 => 
            array (
                'id' => 165,
                'code' => 'NU',
                'name' => 'Niue',
            ),
            165 => 
            array (
                'id' => 166,
                'code' => 'NF',
                'name' => 'Norfolk Island',
            ),
            166 => 
            array (
                'id' => 167,
                'code' => 'KP',
                'name' => 'North Korea',
            ),
            167 => 
            array (
                'id' => 168,
                'code' => 'MP',
                'name' => 'Northern Mariana Islands',
            ),
            168 => 
            array (
                'id' => 169,
                'code' => 'NO',
                'name' => 'Norway',
            ),
            169 => 
            array (
                'id' => 170,
                'code' => 'OM',
                'name' => 'Oman',
            ),
            170 => 
            array (
                'id' => 171,
                'code' => 'PK',
                'name' => 'Pakistan',
            ),
            171 => 
            array (
                'id' => 172,
                'code' => 'PW',
                'name' => 'Palau',
            ),
            172 => 
            array (
                'id' => 173,
                'code' => 'PS',
                'name' => 'Palestinian Territories',
            ),
            173 => 
            array (
                'id' => 174,
                'code' => 'PA',
                'name' => 'Panama',
            ),
            174 => 
            array (
                'id' => 175,
                'code' => 'PG',
                'name' => 'Papua New Guinea',
            ),
            175 => 
            array (
                'id' => 176,
                'code' => 'PY',
                'name' => 'Paraguay',
            ),
            176 => 
            array (
                'id' => 177,
                'code' => 'PE',
                'name' => 'Peru',
            ),
            177 => 
            array (
                'id' => 178,
                'code' => 'PH',
                'name' => 'Philippines',
            ),
            178 => 
            array (
                'id' => 179,
                'code' => 'PN',
                'name' => 'Pitcairn Islands',
            ),
            179 => 
            array (
                'id' => 180,
                'code' => 'PL',
                'name' => 'Poland',
            ),
            180 => 
            array (
                'id' => 181,
                'code' => 'PT',
                'name' => 'Portugal',
            ),
            181 => 
            array (
                'id' => 182,
                'code' => 'PR',
                'name' => 'Puerto Rico',
            ),
            182 => 
            array (
                'id' => 183,
                'code' => 'QA',
                'name' => 'Qatar',
            ),
            183 => 
            array (
                'id' => 184,
                'code' => 'RE',
                'name' => 'Réunion',
            ),
            184 => 
            array (
                'id' => 185,
                'code' => 'RO',
                'name' => 'Romania',
            ),
            185 => 
            array (
                'id' => 186,
                'code' => 'RU',
                'name' => 'Russia',
            ),
            186 => 
            array (
                'id' => 187,
                'code' => 'RW',
                'name' => 'Rwanda',
            ),
            187 => 
            array (
                'id' => 188,
                'code' => 'WS',
                'name' => 'Samoa',
            ),
            188 => 
            array (
                'id' => 189,
                'code' => 'SM',
                'name' => 'San Marino',
            ),
            189 => 
            array (
                'id' => 190,
                'code' => 'ST',
                'name' => 'São Tomé & Príncipe',
            ),
            190 => 
            array (
                'id' => 191,
                'code' => 'SA',
                'name' => 'Saudi Arabia',
            ),
            191 => 
            array (
                'id' => 192,
                'code' => 'SN',
                'name' => 'Senegal',
            ),
            192 => 
            array (
                'id' => 193,
                'code' => 'RS',
                'name' => 'Serbia',
            ),
            193 => 
            array (
                'id' => 194,
                'code' => 'SC',
                'name' => 'Seychelles',
            ),
            194 => 
            array (
                'id' => 195,
                'code' => 'SL',
                'name' => 'Sierra Leone',
            ),
            195 => 
            array (
                'id' => 196,
                'code' => 'SG',
                'name' => 'Singapore',
            ),
            196 => 
            array (
                'id' => 197,
                'code' => 'SX',
                'name' => 'Sint Maarten',
            ),
            197 => 
            array (
                'id' => 198,
                'code' => 'SK',
                'name' => 'Slovakia',
            ),
            198 => 
            array (
                'id' => 199,
                'code' => 'SI',
                'name' => 'Slovenia',
            ),
            199 => 
            array (
                'id' => 200,
                'code' => 'SB',
                'name' => 'Solomon Islands',
            ),
            200 => 
            array (
                'id' => 201,
                'code' => 'SO',
                'name' => 'Somalia',
            ),
            201 => 
            array (
                'id' => 202,
                'code' => 'ZA',
                'name' => 'South Africa',
            ),
            202 => 
            array (
                'id' => 203,
                'code' => 'GS',
                'name' => 'South Georgia & South Sandwich Islands',
            ),
            203 => 
            array (
                'id' => 204,
                'code' => 'KR',
                'name' => 'South Korea',
            ),
            204 => 
            array (
                'id' => 205,
                'code' => 'SS',
                'name' => 'South Sudan',
            ),
            205 => 
            array (
                'id' => 206,
                'code' => 'ES',
                'name' => 'Spain',
            ),
            206 => 
            array (
                'id' => 207,
                'code' => 'LK',
                'name' => 'Sri Lanka',
            ),
            207 => 
            array (
                'id' => 208,
                'code' => 'BL',
                'name' => 'St. Barthélemy',
            ),
            208 => 
            array (
                'id' => 209,
                'code' => 'SH',
                'name' => 'St. Helena',
            ),
            209 => 
            array (
                'id' => 210,
                'code' => 'KN',
                'name' => 'St. Kitts & Nevis',
            ),
            210 => 
            array (
                'id' => 211,
                'code' => 'LC',
                'name' => 'St. Lucia',
            ),
            211 => 
            array (
                'id' => 212,
                'code' => 'MF',
                'name' => 'St. Martin',
            ),
            212 => 
            array (
                'id' => 213,
                'code' => 'PM',
                'name' => 'St. Pierre & Miquelon',
            ),
            213 => 
            array (
                'id' => 214,
                'code' => 'VC',
                'name' => 'St. Vincent & Grenadines',
            ),
            214 => 
            array (
                'id' => 215,
                'code' => 'SD',
                'name' => 'Sudan',
            ),
            215 => 
            array (
                'id' => 216,
                'code' => 'SR',
                'name' => 'Suriname',
            ),
            216 => 
            array (
                'id' => 217,
                'code' => 'SJ',
                'name' => 'Svalbard & Jan Mayen',
            ),
            217 => 
            array (
                'id' => 218,
                'code' => 'SZ',
                'name' => 'Swaziland',
            ),
            218 => 
            array (
                'id' => 219,
                'code' => 'SE',
                'name' => 'Sweden',
            ),
            219 => 
            array (
                'id' => 220,
                'code' => 'CH',
                'name' => 'Switzerland',
            ),
            220 => 
            array (
                'id' => 221,
                'code' => 'SY',
                'name' => 'Syria',
            ),
            221 => 
            array (
                'id' => 222,
                'code' => 'TW',
                'name' => 'Taiwan',
            ),
            222 => 
            array (
                'id' => 223,
                'code' => 'TJ',
                'name' => 'Tajikistan',
            ),
            223 => 
            array (
                'id' => 224,
                'code' => 'TZ',
                'name' => 'Tanzania',
            ),
            224 => 
            array (
                'id' => 225,
                'code' => 'TH',
                'name' => 'Thailand',
            ),
            225 => 
            array (
                'id' => 226,
                'code' => 'TL',
                'name' => 'Timor-Leste',
            ),
            226 => 
            array (
                'id' => 227,
                'code' => 'TG',
                'name' => 'Togo',
            ),
            227 => 
            array (
                'id' => 228,
                'code' => 'TK',
                'name' => 'Tokelau',
            ),
            228 => 
            array (
                'id' => 229,
                'code' => 'TO',
                'name' => 'Tonga',
            ),
            229 => 
            array (
                'id' => 230,
                'code' => 'TT',
                'name' => 'Trinidad & Tobago',
            ),
            230 => 
            array (
                'id' => 231,
                'code' => 'TA',
                'name' => 'Tristan da Cunha',
            ),
            231 => 
            array (
                'id' => 232,
                'code' => 'TN',
                'name' => 'Tunisia',
            ),
            232 => 
            array (
                'id' => 233,
                'code' => 'TR',
                'name' => 'Turkey',
            ),
            233 => 
            array (
                'id' => 234,
                'code' => 'TM',
                'name' => 'Turkmenistan',
            ),
            234 => 
            array (
                'id' => 235,
                'code' => 'TC',
                'name' => 'Turks & Caicos Islands',
            ),
            235 => 
            array (
                'id' => 236,
                'code' => 'TV',
                'name' => 'Tuvalu',
            ),
            236 => 
            array (
                'id' => 237,
                'code' => 'UM',
                'name' => 'U.S. Outlying Islands',
            ),
            237 => 
            array (
                'id' => 238,
                'code' => 'VI',
                'name' => 'U.S. Virgin Islands',
            ),
            238 => 
            array (
                'id' => 239,
                'code' => 'UG',
                'name' => 'Uganda',
            ),
            239 => 
            array (
                'id' => 240,
                'code' => 'UA',
                'name' => 'Ukraine',
            ),
            240 => 
            array (
                'id' => 241,
                'code' => 'AE',
                'name' => 'United Arab Emirates',
            ),
            241 => 
            array (
                'id' => 242,
                'code' => 'GB',
                'name' => 'United Kingdom',
            ),
            242 => 
            array (
                'id' => 243,
                'code' => 'UN',
                'name' => 'United Nations',
            ),
            243 => 
            array (
                'id' => 244,
                'code' => 'US',
                'name' => 'United States',
            ),
            244 => 
            array (
                'id' => 245,
                'code' => 'UY',
                'name' => 'Uruguay',
            ),
            245 => 
            array (
                'id' => 246,
                'code' => 'UZ',
                'name' => 'Uzbekistan',
            ),
            246 => 
            array (
                'id' => 247,
                'code' => 'VU',
                'name' => 'Vanuatu',
            ),
            247 => 
            array (
                'id' => 248,
                'code' => 'VA',
                'name' => 'Vatican City',
            ),
            248 => 
            array (
                'id' => 249,
                'code' => 'VE',
                'name' => 'Venezuela',
            ),
            249 => 
            array (
                'id' => 250,
                'code' => 'VN',
                'name' => 'Vietnam',
            ),
            250 => 
            array (
                'id' => 251,
                'code' => 'WF',
                'name' => 'Wallis & Futuna',
            ),
            251 => 
            array (
                'id' => 252,
                'code' => 'EH',
                'name' => 'Western Sahara',
            ),
            252 => 
            array (
                'id' => 253,
                'code' => 'YE',
                'name' => 'Yemen',
            ),
            253 => 
            array (
                'id' => 254,
                'code' => 'ZM',
                'name' => 'Zambia',
            ),
            254 => 
            array (
                'id' => 255,
                'code' => 'ZW',
                'name' => 'Zimbabwe',
            ),
        ));
        
        
    }
}