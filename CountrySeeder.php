<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = array(
            array('id' => '1','name' => 'AFGHANISTAN','phonecode' => '93'),
            array('id' => '2','name' => 'ALBANIA','phonecode' => '355'),
            array('id' => '3','name' => 'ALGERIA','phonecode' => '213'),
            array('id' => '4','name' => 'AMERICAN SAMOA','phonecode' => '1684'),
            array('id' => '5','name' => 'ANDORRA','phonecode' => '376'),
            array('id' => '6','name' => 'ANGOLA','phonecode' => '244'),
            array('id' => '7','name' => 'ANGUILLA','phonecode' => '1264'),
            array('id' => '8','name' => 'ANTARCTICA','phonecode' => '0'),
            array('id' => '9','name' => 'ANTIGUA AND BARBUDA','phonecode' => '1268'),
            array('id' => '10','name' => 'ARGENTINA','phonecode' => '54'),
            array('id' => '11','name' => 'ARMENIA','phonecode' => '374'),
            array('id' => '12','name' => 'ARUBA','phonecode' => '297'),
            array('id' => '13','name' => 'AUSTRALIA','phonecode' => '61'),
            array('id' => '14','name' => 'AUSTRIA','phonecode' => '43'),
            array('id' => '15','name' => 'AZERBAIJAN','phonecode' => '994'),
            array('id' => '16','name' => 'BAHAMAS','phonecode' => '1242'),
            array('id' => '17','name' => 'BAHRAIN','phonecode' => '973'),
            array('id' => '18','name' => 'BANGLADESH','phonecode' => '880'),
            array('id' => '19','name' => 'BARBADOS','phonecode' => '1246'),
            array('id' => '20','name' => 'BELARUS','phonecode' => '375'),
            array('id' => '21','name' => 'BELGIUM','phonecode' => '32'),
            array('id' => '22','name' => 'BELIZE','phonecode' => '501'),
            array('id' => '23','name' => 'BENIN','phonecode' => '229'),
            array('id' => '24','name' => 'BERMUDA','phonecode' => '1441'),
            array('id' => '25','name' => 'BHUTAN','phonecode' => '975'),
            array('id' => '26','name' => 'BOLIVIA','phonecode' => '591'),
            array('id' => '27','name' => 'BOSNIA AND HERZEGOVINA','phonecode' => '387'),
            array('id' => '28','name' => 'BOTSWANA','phonecode' => '267'),
            array('id' => '29','name' => 'BOUVET ISLAND','phonecode' => '0'),
            array('id' => '30','name' => 'BRAZIL','phonecode' => '55'),
            array('id' => '31','name' => 'BRITISH INDIAN OCEAN TERRITORY','phonecode' => '246'),
            array('id' => '32','name' => 'BRUNEI DARUSSALAM','phonecode' => '673'),
            array('id' => '33','name' => 'BULGARIA','phonecode' => '359'),
            array('id' => '34','name' => 'BURKINA FASO','phonecode' => '226'),
            array('id' => '35','name' => 'BURUNDI','phonecode' => '257'),
            array('id' => '36','name' => 'CAMBODIA','phonecode' => '855'),
            array('id' => '37','name' => 'CAMEROON','phonecode' => '237'),
            array('id' => '38','name' => 'CANADA','phonecode' => '1'),
            array('id' => '39','name' => 'CAPE VERDE','phonecode' => '238'),
            array('id' => '40','name' => 'CAYMAN ISLANDS','phonecode' => '1345'),
            array('id' => '41','name' => 'CENTRAL AFRICAN REPUBLIC','phonecode' => '236'),
            array('id' => '42','name' => 'CHAD','phonecode' => '235'),
            array('id' => '43','name' => 'CHILE','phonecode' => '56'),
            array('id' => '44','name' => 'CHINA','phonecode' => '86'),
            array('id' => '45','name' => 'CHRISTMAS ISLAND','phonecode' => '61'),
            array('id' => '46','name' => 'COCOS (KEELING) ISLANDS','phonecode' => '672'),
            array('id' => '47','name' => 'COLOMBIA','phonecode' => '57'),
            array('id' => '48','name' => 'COMOROS','phonecode' => '269'),
            array('id' => '49','name' => 'CONGO','phonecode' => '242'),
            array('id' => '50','name' => 'CONGO', 'phonecode' => '242'),
            array('id' => '51','name' => 'COOK ISLANDS','phonecode' => '682'),
            array('id' => '52','name' => 'COSTA RICA','phonecode' => '506'),
            array('id' => '53','name' => 'COTE D\'IVOIRE','phonecode' => '225'),
            array('id' => '54','name' => 'CROATIA','phonecode' => '385'),
            array('id' => '55','name' => 'CUBA','phonecode' => '53'),
            array('id' => '56','name' => 'CYPRUS','phonecode' => '357'),
            array('id' => '57','name' => 'CZECH REPUBLIC','phonecode' => '420'),
            array('id' => '58','name' => 'DENMARK','phonecode' => '45'),
            array('id' => '59','name' => 'DJIBOUTI','phonecode' => '253'),
            array('id' => '60','name' => 'DOMINICA','phonecode' => '1767'),
            array('id' => '61','name' => 'DOMINICAN REPUBLIC','phonecode' => '1809'),
            array('id' => '62','name' => 'ECUADOR','phonecode' => '593'),
            array('id' => '63','name' => 'EGYPT','phonecode' => '20'),
            array('id' => '64','name' => 'EL SALVADOR','phonecode' => '503'),
            array('id' => '65','name' => 'EQUATORIAL GUINEA','phonecode' => '240'),
            array('id' => '66','name' => 'ERITREA','phonecode' => '291'),
            array('id' => '67','name' => 'ESTONIA','phonecode' => '372'),
            array('id' => '68','name' => 'ETHIOPIA','phonecode' => '251'),
            array('id' => '69','name' => 'FALKLAND ISLANDS (MALVINAS)','phonecode' => '500'),
            array('id' => '70','name' => 'FAROE ISLANDS','phonecode' => '298'),
            array('id' => '71','name' => 'FIJI','phonecode' => '679'),
            array('id' => '72','name' => 'FINLAND','phonecode' => '358'),
            array('id' => '73','name' => 'FRANCE','phonecode' => '33'),
            array('id' => '74','name' => 'FRENCH GUIANA','phonecode' => '594'),
            array('id' => '75','name' => 'FRENCH POLYNESIA','phonecode' => '689'),
            array('id' => '76','name' => 'FRENCH SOUTHERN TERRITORIES','phonecode' => '0'),
            array('id' => '77','name' => 'GABON','phonecode' => '241'),
            array('id' => '78','name' => 'GAMBIA','phonecode' => '220'),
            array('id' => '79','name' => 'GEORGIA','phonecode' => '995'),
            array('id' => '80','name' => 'GERMANY','phonecode' => '49'),
            array('id' => '81','name' => 'GHANA','phonecode' => '233'),
            array('id' => '82','name' => 'GIBRALTAR','phonecode' => '350'),
            array('id' => '83','name' => 'GREECE','phonecode' => '30'),
            array('id' => '84','name' => 'GREENLAND','phonecode' => '299'),
            array('id' => '85','name' => 'GRENADA','phonecode' => '1473'),
            array('id' => '86','name' => 'GUADELOUPE','phonecode' => '590'),
            array('id' => '87','name' => 'GUAM','phonecode' => '1671'),
            array('id' => '88','name' => 'GUATEMALA','phonecode' => '502'),
            array('id' => '89','name' => 'GUINEA','phonecode' => '224'),
            array('id' => '90','name' => 'GUINEA-BISSAU','phonecode' => '245'),
            array('id' => '91','name' => 'GUYANA','phonecode' => '592'),
            array('id' => '92','name' => 'HAITI','phonecode' => '509'),
            array('id' => '93','name' => 'HEARD ISLAND AND MCDONALD ISLANDS','phonecode' => '0'),
            array('id' => '94','name' => 'HOLY SEE (VATICAN CITY STATE)','phonecode' => '39'),
            array('id' => '95','name' => 'HONDURAS','phonecode' => '504'),
            array('id' => '96','name' => 'HONG KONG','phonecode' => '852'),
            array('id' => '97','name' => 'HUNGARY','phonecode' => '36'),
            array('id' => '98','name' => 'ICELAND','phonecode' => '354'),
            array('id' => '99','name' => 'INDIA','phonecode' => '91'),
            array('id' => '100','name' => 'INDONESIA','phonecode' => '62'),
            array('id' => '101','name' => 'IRAN, ISLAMIC REPUBLIC OF','phonecode' => '98'),
            array('id' => '102','name' => 'IRAQ','phonecode' => '964'),
            array('id' => '103','name' => 'IRELAND','phonecode' => '353'),
            array('id' => '104','name' => 'ISRAEL','phonecode' => '972'),
            array('id' => '105','name' => 'ITALY','phonecode' => '39'),
            array('id' => '106','name' => 'JAMAICA','phonecode' => '1876'),
            array('id' => '107','name' => 'JAPAN','phonecode' => '81'),
            array('id' => '108','name' => 'JORDAN','phonecode' => '962'),
            array('id' => '109','name' => 'KAZAKHSTAN','phonecode' => '7'),
            array('id' => '110','name' => 'KENYA','phonecode' => '254'),
            array('id' => '111','name' => 'KIRIBATI','phonecode' => '686'),
            array('id' => '112','name' => 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF','phonecode' => '850'),
            array('id' => '113','name' => 'KOREA, REPUBLIC OF','phonecode' => '82'),
            array('id' => '114','name' => 'KUWAIT','phonecode' => '965'),
            array('id' => '115','name' => 'KYRGYZSTAN','phonecode' => '996'),
            array('id' => '116','name' => 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC','phonecode' => '856'),
            array('id' => '117','name' => 'LATVIA','phonecode' => '371'),
            array('id' => '118','name' => 'LEBANON','phonecode' => '961'),
            array('id' => '119','name' => 'LESOTHO','phonecode' => '266'),
            array('id' => '120','name' => 'LIBERIA','phonecode' => '231'),
            array('id' => '121','name' => 'LIBYAN ARAB JAMAHIRIYA','phonecode' => '218'),
            array('id' => '122','name' => 'LIECHTENSTEIN','phonecode' => '423'),
            array('id' => '123','name' => 'LITHUANIA','phonecode' => '370'),
            array('id' => '124','name' => 'LUXEMBOURG','phonecode' => '352'),
            array('id' => '125','name' => 'MACAO','phonecode' => '853'),
            array('id' => '126','name' => 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF','phonecode' => '389'),
            array('id' => '127','name' => 'MADAGASCAR','phonecode' => '261'),
            array('id' => '128','name' => 'MALAWI','phonecode' => '265'),
            array('id' => '129','name' => 'MALAYSIA','phonecode' => '60'),
            array('id' => '130','name' => 'MALDIVES','phonecode' => '960'),
            array('id' => '131','name' => 'MALI','phonecode' => '223'),
            array('id' => '132','name' => 'MALTA','phonecode' => '356'),
            array('id' => '133','name' => 'MARSHALL ISLANDS','phonecode' => '692'),
            array('id' => '134','name' => 'MARTINIQUE','phonecode' => '596'),
            array('id' => '135','name' => 'MAURITANIA','phonecode' => '222'),
            array('id' => '136','name' => 'MAURITIUS','phonecode' => '230'),
            array('id' => '137','name' => 'MAYOTTE','phonecode' => '269'),
            array('id' => '138','name' => 'MEXICO','phonecode' => '52'),
            array('id' => '139','name' => 'MICRONESIA, FEDERATED STATES OF','phonecode' => '691'),
            array('id' => '140','name' => 'MOLDOVA, REPUBLIC OF','phonecode' => '373'),
            array('id' => '141','name' => 'MONACO','phonecode' => '377'),
            array('id' => '142','name' => 'MONGOLIA','phonecode' => '976'),
            array('id' => '143','name' => 'MONTSERRAT','phonecode' => '1664'),
            array('id' => '144','name' => 'MOROCCO','phonecode' => '212'),
            array('id' => '145','name' => 'MOZAMBIQU','phonecode' => '258'),
            array('id' => '146','name' => 'MYANMAR','phonecode' => '95'),
            array('id' => '147','name' => 'NAMIBIA','phonecode' => '264'),
            array('id' => '148','name' => 'NAURU','phonecode' => '674'),
            array('id' => '149','name' => 'NEPAL','phonecode' => '977'),
            array('id' => '150','name' => 'NETHERLANDS','phonecode' => '31'),
            array('id' => '151','name' => 'NETHERLANDS ANTILLES','phonecode' => '599'),
            array('id' => '152','name' => 'NEW CALEDONIA','phonecode' => '687'),
            array('id' => '153','name' => 'NEW ZEALAND','phonecode' => '64'),
            array('id' => '154','name' => 'NICARAGUA','phonecode' => '505'),
            array('id' => '155','name' => 'NIGER','phonecode' => '227'),
            array('id' => '156','name' => 'NIGERIA','phonecode' => '234'),
            array('id' => '157','name' => 'NIUE','phonecode' => '683'),
            array('id' => '158','name' => 'NORFOLK ISLAND','phonecode' => '672'),
            array('id' => '159','name' => 'NORTHERN MARIANA ISLANDS','phonecode' => '1670'),
            array('id' => '160','name' => 'NORWAY','phonecode' => '47'),
            array('id' => '161','name' => 'OMAN','phonecode' => '968'),
            array('id' => '162','name' => 'PAKISTAN','phonecode' => '92'),
            array('id' => '163','name' => 'PALAU','phonecode' => '680'),
            array('id' => '164','name' => 'PALESTINIAN TERRITORY, OCCUPIED','phonecode' => '970'),
            array('id' => '165','name' => 'PANAMA','phonecode' => '507'),
            array('id' => '166','name' => 'PAPUA NEW GUINEA','phonecode' => '675'),
            array('id' => '167','name' => 'PARAGUAY','phonecode' => '595'),
            array('id' => '168','name' => 'PERU','phonecode' => '51'),
            array('id' => '169','name' => 'PHILIPPINES','phonecode' => '63'),
            array('id' => '170','name' => 'PITCAIRN','phonecode' => '0'),
            array('id' => '171','name' => 'POLAND','phonecode' => '48'),
            array('id' => '172','name' => 'PORTUGAL','phonecode' => '351'),
            array('id' => '173','name' => 'PUERTO RICO','phonecode' => '1787'),
            array('id' => '174','name' => 'QATAR','phonecode' => '974'),
            array('id' => '175','name' => 'REUNION','phonecode' => '262'),
            array('id' => '176','name' => 'ROMANIA','phonecode' => '40'),
            array('id' => '177','name' => 'RUSSIAN FEDERATION','phonecode' => '70'),
            array('id' => '178','name' => 'RWANDA','phonecode' => '250'),
            array('id' => '179','name' => 'SAINT HELENA','phonecode' => '290'),
            array('id' => '180','name' => 'SAINT KITTS AND NEVIS','phonecode' => '1869'),
            array('id' => '181','name' => 'SAINT LUCIA','phonecode' => '1758'),
            array('id' => '182','name' => 'SAINT PIERRE AND MIQUELON','phonecode' => '508'),
            array('id' => '183','name' => 'SAINT VINCENT AND THE GRENADINES','phonecode' => '1784'),
            array('id' => '184','name' => 'SAMOA','phonecode' => '684'),
            array('id' => '185','name' => 'SAN MARINO','phonecode' => '378'),
            array('id' => '186','name' => 'SAO TOME AND PRINCIPE','phonecode' => '239'),
            array('id' => '187','name' => 'SAUDI ARABIA','phonecode' => '966'),
            array('id' => '188','name' => 'SENEGAL','phonecode' => '221'),
            array('id' => '189','name' => 'SERBIA AND MONTENEGRO','phonecode' => '381'),
            array('id' => '190','name' => 'SEYCHELLES','phonecode' => '248'),
            array('id' => '191','name' => 'SIERRA LEONE','phonecode' => '232'),
            array('id' => '192','name' => 'SINGAPORE','phonecode' => '65'),
            array('id' => '193','name' => 'SLOVAKIA','phonecode' => '421'),
            array('id' => '194','name' => 'SLOVENIA','phonecode' => '386'),
            array('id' => '195','name' => 'SOLOMON ISLANDS','phonecode' => '677'),
            array('id' => '196','name' => 'SOMALIA','phonecode' => '252'),
            array('id' => '197','name' => 'SOUTH AFRICA','phonecode' => '27'),
            array('id' => '198','name' => 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS','phonecode' => '0'),
            array('id' => '199','name' => 'SPAIN','phonecode' => '34'),
            array('id' => '200','name' => 'SRI LANKA','phonecode' => '94'),
            array('id' => '201','name' => 'SUDAN','phonecode' => '249'),
            array('id' => '202','name' => 'SURINAME','phonecode' => '597'),
            array('id' => '203','name' => 'SVALBARD AND JAN MAYEN','phonecode' => '47'),
            array('id' => '204','name' => 'SWAZILAND','phonecode' => '268'),
            array('id' => '205','name' => 'SWEDEN','phonecode' => '46'),
            array('id' => '206','name' => 'SWITZERLAND','phonecode' => '41'),
            array('id' => '207','name' => 'SYRIAN ARAB REPUBLIC','phonecode' => '963'),
            array('id' => '208','name' => 'TAIWAN, PROVINCE OF CHINA','phonecode' => '886'),
            array('id' => '209','name' => 'TAJIKISTAN','phonecode' => '992'),
            array('id' => '210','name' => 'TANZANIA, UNITED REPUBLIC OF','phonecode' => '255'),
            array('id' => '211','name' => 'THAILAND','phonecode' => '66'),
            array('id' => '212','name' => 'TIMOR-LESTE','phonecode' => '670'),
            array('id' => '213','name' => 'TOGO','phonecode' => '228'),
            array('id' => '214','name' => 'TOKELAU','phonecode' => '690'),
            array('id' => '215','name' => 'TONGA','phonecode' => '676'),
            array('id' => '216','name' => 'TRINIDAD AND TOBAGO','phonecode' => '1868'),
            array('id' => '217','name' => 'TUNISIA','phonecode' => '216'),
            array('id' => '218','name' => 'TURKEY','phonecode' => '90'),
            array('id' => '219','name' => 'TURKMENISTAN','phonecode' => '7370'),
            array('id' => '220','name' => 'TURKS AND CAICOS ISLANDS','phonecode' => '1649'),
            array('id' => '221','name' => 'TUVALU','phonecode' => '688'),
            array('id' => '222','name' => 'UGANDA','phonecode' => '256'),
            array('id' => '223','name' => 'UKRAINE','phonecode' => '380'),
            array('id' => '224','name' => 'UNITED ARAB EMIRATES','phonecode' => '971'),
            array('id' => '225','name' => 'UNITED KINGDOM','phonecode' => '44'),
            array('id' => '226','name' => 'UNITED STATES','phonecode' => '1'),
            array('id' => '227','name' => 'UNITED STATES MINOR OUTLYING ISLANDS','phonecode' => '1'),
            array('id' => '228','name' => 'URUGUAY','phonecode' => '598'),
            array('id' => '229','name' => 'UZBEKISTAN','phonecode' => '998'),
            array('id' => '230','name' => 'VANUATU','phonecode' => '678'),
            array('id' => '231','name' => 'VENEZUELA','phonecode' => '58'),
            array('id' => '232','name' => 'VIET NAM','phonecode' => '84'),
            array('id' => '233','name' => 'VIRGIN ISLANDS, BRITISH','phonecode' => '1284'),
            array('id' => '234','name' => 'VIRGIN ISLANDS, U.S.','phonecode' => '1340'),
            array('id' => '235','name' => 'WALLIS AND FUTUNA','phonecode' => '681'),
            array('id' => '236','name' => 'WESTERN SAHARA','phonecode' => '212'),
            array('id' => '237','name' => 'YEMEN','phonecode' => '967'),
            array('id' => '238','name' => 'ZAMBIA','phonecode' => '260'),
            array('id' => '239','name' => 'ZIMBABWE','phonecode' => '263'),
            array('id' => '240','name' => 'SERBIA','phonecode' => '381'),
            array('id' => '241','name' => 'ASIA PACIFIC REGION','phonecode' => '0'),
            array('id' => '242','name' => 'MONTENEGRO','phonecode' => '382'),
            array('id' => '243','name' => 'ALAND ISLANDS','phonecode' => '358'),
            array('id' => '244','name' => 'BONAIRE, SINT EUSTATIUS AND SABA','phonecode' => '599'),
            array('id' => '245','name' => 'CURACAO','phonecode' => '599'),
            array('id' => '246','name' => 'GUERNSEY','phonecode' => '44'),
            array('id' => '247','name' => 'ISLE OF MAN','phonecode' => '44'),
            array('id' => '248','name' => 'JERSEY','phonecode' => '44'),
            array('id' => '249','name' => 'KOSOVO','phonecode' => '381'),
            array('id' => '250','name' => 'SAINT BARTHELEMY','phonecode' => '590'),
            array('id' => '251','name' => 'SAINT MARTIN','phonecode' => '590'),
            array('id' => '252','name' => 'SINT MAARTEN','phonecode' => '1'),
            array('id' => '253','name' => 'SOUTH SUDAN', 'phonecode' => '211')
          );

          Country::insert($countries);
    }
}
