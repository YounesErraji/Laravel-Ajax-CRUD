<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      City::query()->delete();
        $cities =  [
            [
                'name' => 'Kabul',
                'country_code' => 'AFG',
                'district' => 'Kabol',
                'population' => 1780000,
            ],
            [
                'name' => 'Qandahar',
                'country_code' => 'AFG',
                'district' => 'Qandahar',
                'population' => 237500,
            ],
            [
                'name' => 'Herat',
                'country_code' => 'AFG',
                'district' => 'Herat',
                'population' => 186800,
            ],
            [
                'name' => 'Mazar-e-Sharif',
                'country_code' => 'AFG',
                'district' => 'Balkh',
                'population' => 127800,
            ],
            [
                'name' => 'Amsterdam',
                'country_code' => 'NLD',
                'district' => 'Noord-Holland',
                'population' => 731200,
            ],
            [
                'name' => 'Rotterdam',
                'country_code' => 'NLD',
                'district' => 'Zuid-Holland',
                'population' => 593321,
            ],
            [
                'name' => 'Haag',
                'country_code' => 'NLD',
                'district' => 'Zuid-Holland',
                'population' => 440900,
            ],
            [
                'name' => 'Utrecht',
                'country_code' => 'NLD',
                'district' => 'Utrecht',
                'population' => 234323,
            ],
            [
                'name' => 'Eindhoven',
                'country_code' => 'NLD',
                'district' => 'Noord-Brabant',
                'population' => 201843,
            ],
            [
                'name' => 'Tilburg',
                'country_code' => 'NLD',
                'district' => 'Noord-Brabant',
                'population' => 193238,
            ],
            [
                'name' => 'Groningen',
                'country_code' => 'NLD',
                'district' => 'Groningen',
                'population' => 172701,
            ],
            [
                'name' => 'Breda',
                'country_code' => 'NLD',
                'district' => 'Noord-Brabant',
                'population' => 160398,
            ],
            [
                'name' => 'Apeldoorn',
                'country_code' => 'NLD',
                'district' => 'Gelderland',
                'population' => 153491,
            ],
            [
                'name' => 'Nijmegen',
                'country_code' => 'NLD',
                'district' => 'Gelderland',
                'population' => 152463,
            ],
            [
                'name' => 'Enschede',
                'country_code' => 'NLD',
                'district' => 'Overijssel',
                'population' => 149544,
            ],
            [
                'name' => 'Haarlem',
                'country_code' => 'NLD',
                'district' => 'Noord-Holland',
                'population' => 148772,
            ],
            [
                'name' => 'Almere',
                'country_code' => 'NLD',
                'district' => 'Flevoland',
                'population' => 142465,
            ],
            [
                'name' => 'Arnhem',
                'country_code' => 'NLD',
                'district' => 'Gelderland',
                'population' => 138020,
            ],
            [
                'name' => 'Zaanstad',
                'country_code' => 'NLD',
                'district' => 'Noord-Holland',
                'population' => 135621,
            ],
            [
                'name' => '´s-Hertogenbosch',
                'country_code' => 'NLD',
                'district' => 'Noord-Brabant',
                'population' => 129170,
            ],
            [
                'name' => 'Amersfoort',
                'country_code' => 'NLD',
                'district' => 'Utrecht',
                'population' => 126270,
            ],
            [
                'name' => 'Maastricht',
                'country_code' => 'NLD',
                'district' => 'Limburg',
                'population' => 122087,
            ],
            [
                'name' => 'Dordrecht',
                'country_code' => 'NLD',
                'district' => 'Zuid-Holland',
                'population' => 119811,
            ],
            [
                'name' => 'Leiden',
                'country_code' => 'NLD',
                'district' => 'Zuid-Holland',
                'population' => 117196,
            ],
            [
                'name' => 'Haarlemmermeer',
                'country_code' => 'NLD',
                'district' => 'Noord-Holland',
                'population' => 110722,
            ],
            [
                'name' => 'Zoetermeer',
                'country_code' => 'NLD',
                'district' => 'Zuid-Holland',
                'population' => 110214,
            ],
            [

                'name' => 'Emmen',
                'country_code' => 'NLD',
                'district' => 'Drenthe',
                'population' => 105853,
            ],
            [

                'name' => 'Zwolle',
                'country_code' => 'NLD',
                'district' => 'Overijssel',
                'population' => 105819,
            ],
            [

                'name' => 'Ede',
                'country_code' => 'NLD',
                'district' => 'Gelderland',
                'population' => 101574,
            ],
            [

                'name' => 'Delft',
                'country_code' => 'NLD',
                'district' => 'Zuid-Holland',
                'population' => 95268,
            ],
            [

                'name' => 'Heerlen',
                'country_code' => 'NLD',
                'district' => 'Limburg',
                'population' => 95052,
            ],
            [

                'name' => 'Alkmaar',
                'country_code' => 'NLD',
                'district' => 'Noord-Holland',
                'population' => 92713,
            ],
            [

                'name' => 'Willemstad',
                'country_code' => 'ANT',
                'district' => 'Curaçao',
                'population' => 2345,
            ],
            [

                'name' => 'Tirana',
                'country_code' => 'ALB',
                'district' => 'Tirana',
                'population' => 270000,
            ],
            [

                'name' => 'Alger',
                'country_code' => 'DZA',
                'district' => 'Alger',
                'population' => 2168000,
            ],
            [

                'name' => 'Oran',
                'country_code' => 'DZA',
                'district' => 'Oran',
                'population' => 609823,
            ],
            [

                'name' => 'Constantine',
                'country_code' => 'DZA',
                'district' => 'Constantine',
                'population' => 443727,
            ],
            [

                'name' => 'Annaba',
                'country_code' => 'DZA',
                'district' => 'Annaba',
                'population' => 222518,
            ],
            [

                'name' => 'Batna',
                'country_code' => 'DZA',
                'district' => 'Batna',
                'population' => 183377,
            ],
            [

                'name' => 'Sétif',
                'country_code' => 'DZA',
                'district' => 'Sétif',
                'population' => 179055,
            ],
            [

                'name' => 'Sidi Bel Abbès',
                'country_code' => 'DZA',
                'district' => 'Sidi Bel Abbès',
                'population' => 153106,
            ],
            [

                'name' => 'Skikda',
                'country_code' => 'DZA',
                'district' => 'Skikda',
                'population' => 128747,
            ],
            [

                'name' => 'Biskra',
                'country_code' => 'DZA',
                'district' => 'Biskra',
                'population' => 128281,
            ],
            [

                'name' => 'Blida (el-Boulaida)',
                'country_code' => 'DZA',
                'district' => 'Blida',
                'population' => 127284,
            ],
            [

                'name' => 'Béjaïa',
                'country_code' => 'DZA',
                'district' => 'Béjaïa',
                'population' => 117162,
            ],
            [

                'name' => 'Mostaganem',
                'country_code' => 'DZA',
                'district' => 'Mostaganem',
                'population' => 115212,
            ],
            [

                'name' => 'Tébessa',
                'country_code' => 'DZA',
                'district' => 'Tébessa',
                'population' => 112007,
            ],
            [

                'name' => 'Tlemcen (Tilimsen)',
                'country_code' => 'DZA',
                'district' => 'Tlemcen',
                'population' => 110242,
            ],
            [

                'name' => 'Béchar',
                'country_code' => 'DZA',
                'district' => 'Béchar',
                'population' => 107311,
            ],
            [

                'name' => 'Tiaret',
                'country_code' => 'DZA',
                'district' => 'Tiaret',
                'population' => 100118,
            ],
            [

                'name' => 'Ech-Chleff (el-Asnam)',
                'country_code' => 'DZA',
                'district' => 'Chlef',
                'population' => 96794,
            ],
            [

                'name' => 'Ghardaïa',
                'country_code' => 'DZA',
                'district' => 'Ghardaïa',
                'population' => 89415,
            ],
            [

                'name' => 'Tafuna',
                'country_code' => 'ASM',
                'district' => 'Tutuila',
                'population' => 5200,
            ],
            [

                'name' => 'Fagatogo',
                'country_code' => 'ASM',
                'district' => 'Tutuila',
                'population' => 2323,
            ],
            [

                'name' => 'Andorra la Vella',
                'country_code' => 'AND',
                'district' => 'Andorra la Vella',
                'population' => 21189,
            ],
            [

                'name' => 'Luanda',
                'country_code' => 'AGO',
                'district' => 'Luanda',
                'population' => 2022000,
            ],
            [

                'name' => 'Huambo',
                'country_code' => 'AGO',
                'district' => 'Huambo',
                'population' => 163100,
            ],
            [

                'name' => 'Lobito',
                'country_code' => 'AGO',
                'district' => 'Benguela',
                'population' => 130000,
            ],
            [

                'name' => 'Benguela',
                'country_code' => 'AGO',
                'district' => 'Benguela',
                'population' => 128300,
            ],
            [

                'name' => 'Namibe',
                'country_code' => 'AGO',
                'district' => 'Namibe',
                'population' => 118200,
            ],
            [

                'name' => 'South Hill',
                'country_code' => 'AIA',
                'district' => '–',
                'population' => 961,
            ],
            [

                'name' => 'The Valley',
                'country_code' => 'AIA',
                'district' => '–',
                'population' => 595,
            ],
            [

                'name' => 'Saint John´s',
                'country_code' => 'ATG',
                'district' => 'St John',
                'population' => 24000,
            ],
            [

                'name' => 'Dubai',
                'country_code' => 'ARE',
                'district' => 'Dubai',
                'population' => 669181,
            ],
            [

                'name' => 'Abu Dhabi',
                'country_code' => 'ARE',
                'district' => 'Abu Dhabi',
                'population' => 398695,
            ],
            [

                'name' => 'Sharja',
                'country_code' => 'ARE',
                'district' => 'Sharja',
                'population' => 320095,
            ],
            [

                'name' => 'al-Ayn',
                'country_code' => 'ARE',
                'district' => 'Abu Dhabi',
                'population' => 225970,
            ],
            [

                'name' => 'Ajman',
                'country_code' => 'ARE',
                'district' => 'Ajman',
                'population' => 114395,
            ],
            [

                'name' => 'Buenos Aires',
                'country_code' => 'ARG',
                'district' => 'Distrito Federal',
                'population' => 2982146,
            ],
            [

                'name' => 'La Matanza',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 1266461,
            ],
            [

                'name' => 'Córdoba',
                'country_code' => 'ARG',
                'district' => 'Córdoba',
                'population' => 1157507,
            ],
            [

                'name' => 'Rosario',
                'country_code' => 'ARG',
                'district' => 'Santa Fé',
                'population' => 907718,
            ],
            [

                'name' => 'Lomas de Zamora',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 622013,
            ],
            [

                'name' => 'Quilmes',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 559249,
            ],
            [

                'name' => 'Almirante Brown',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 538918,
            ],
            [

                'name' => 'La Plata',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 521936,
            ],
            [

                'name' => 'Mar del Plata',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 512880,
            ],
            [

                'name' => 'San Miguel de Tucumán',
                'country_code' => 'ARG',
                'district' => 'Tucumán',
                'population' => 470809,
            ],
            [

                'name' => 'Lanús',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 469735,
            ],
            [

                'name' => 'Merlo',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 463846,
            ],
            [

                'name' => 'General San Martín',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 422542,
            ],
            [

                'name' => 'Salta',
                'country_code' => 'ARG',
                'district' => 'Salta',
                'population' => 367550,
            ],
            [

                'name' => 'Moreno',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 356993,
            ],
            [

                'name' => 'Santa Fé',
                'country_code' => 'ARG',
                'district' => 'Santa Fé',
                'population' => 353063,
            ],
            [

                'name' => 'Avellaneda',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 353046,
            ],
            [

                'name' => 'Tres de Febrero',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 352311,
            ],
            [

                'name' => 'Morón',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 349246,
            ],
            [

                'name' => 'Florencio Varela',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 315432,
            ],
            [

                'name' => 'San Isidro',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 306341,
            ],
            [

                'name' => 'Tigre',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 296226,
            ],
            [

                'name' => 'Malvinas Argentinas',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 290335,
            ],
            [

                'name' => 'Vicente López',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 288341,
            ],
            [

                'name' => 'Berazategui',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 276916,
            ],
            [

                'name' => 'Corrientes',
                'country_code' => 'ARG',
                'district' => 'Corrientes',
                'population' => 258103,
            ],
            [

                'name' => 'San Miguel',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 248700,
            ],
            [

                'name' => 'Bahía Blanca',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 239810,
            ],
            [

                'name' => 'Esteban Echeverría',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 235760,
            ],
            [

                'name' => 'Resistencia',
                'country_code' => 'ARG',
                'district' => 'Chaco',
                'population' => 229212,
            ],
            [

                'name' => 'José C. Paz',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 221754,
            ],
            [

                'name' => 'Paraná',
                'country_code' => 'ARG',
                'district' => 'Entre Rios',
                'population' => 207041,
            ],
            [

                'name' => 'Godoy Cruz',
                'country_code' => 'ARG',
                'district' => 'Mendoza',
                'population' => 206998,
            ],
            [

                'name' => 'Posadas',
                'country_code' => 'ARG',
                'district' => 'Misiones',
                'population' => 201273,
            ],
            [

                'name' => 'Guaymallén',
                'country_code' => 'ARG',
                'district' => 'Mendoza',
                'population' => 200595,
            ],
            [

                'name' => 'Santiago del Estero',
                'country_code' => 'ARG',
                'district' => 'Santiago del Estero',
                'population' => 189947,
            ],
            [

                'name' => 'San Salvador de Jujuy',
                'country_code' => 'ARG',
                'district' => 'Jujuy',
                'population' => 178748,
            ],
            [

                'name' => 'Hurlingham',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 170028,
            ],
            [

                'name' => 'Neuquén',
                'country_code' => 'ARG',
                'district' => 'Neuquén',
                'population' => 167296,
            ],
            [

                'name' => 'Ituzaingó',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 158197,
            ],
            [

                'name' => 'San Fernando',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 153036,
            ],
            [

                'name' => 'Formosa',
                'country_code' => 'ARG',
                'district' => 'Formosa',
                'population' => 147636,
            ],
            [

                'name' => 'Las Heras',
                'country_code' => 'ARG',
                'district' => 'Mendoza',
                'population' => 145823,
            ],
            [

                'name' => 'La Rioja',
                'country_code' => 'ARG',
                'district' => 'La Rioja',
                'population' => 138117,
            ],
            [

                'name' => 'San Fernando del Valle de Cata',
                'country_code' => 'ARG',
                'district' => 'Catamarca',
                'population' => 134935,
            ],
            [

                'name' => 'Río Cuarto',
                'country_code' => 'ARG',
                'district' => 'Córdoba',
                'population' => 134355,
            ],
            [

                'name' => 'Comodoro Rivadavia',
                'country_code' => 'ARG',
                'district' => 'Chubut',
                'population' => 124104,
            ],
            [

                'name' => 'Mendoza',
                'country_code' => 'ARG',
                'district' => 'Mendoza',
                'population' => 123027,
            ],
            [

                'name' => 'San Nicolás de los Arroyos',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 119302,
            ],
            [

                'name' => 'San Juan',
                'country_code' => 'ARG',
                'district' => 'San Juan',
                'population' => 119152,
            ],
            [

                'name' => 'Escobar',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 116675,
            ],
            [

                'name' => 'Concordia',
                'country_code' => 'ARG',
                'district' => 'Entre Rios',
                'population' => 116485,
            ],
            [

                'name' => 'Pilar',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 113428,
            ],
            [

                'name' => 'San Luis',
                'country_code' => 'ARG',
                'district' => 'San Luis',
                'population' => 110136,
            ],
            [

                'name' => 'Ezeiza',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 99578,
            ],
            [

                'name' => 'San Rafael',
                'country_code' => 'ARG',
                'district' => 'Mendoza',
                'population' => 94651,
            ],
            [

                'name' => 'Tandil',
                'country_code' => 'ARG',
                'district' => 'Buenos Aires',
                'population' => 91101,
            ],
            [

                'name' => 'Yerevan',
                'country_code' => 'ARM',
                'district' => 'Yerevan',
                'population' => 1248700,
            ],
            [

                'name' => 'Gjumri',
                'country_code' => 'ARM',
                'district' => 'Širak',
                'population' => 211700,
            ],
            [

                'name' => 'Vanadzor',
                'country_code' => 'ARM',
                'district' => 'Lori',
                'population' => 172700,
            ],
            [

                'name' => 'Oranjestad',
                'country_code' => 'ABW',
                'district' => '–',
                'population' => 29034,
            ],
            [

                'name' => 'Sydney',
                'country_code' => 'AUS',
                'district' => 'New South Wales',
                'population' => 3276207,
            ],
            [

                'name' => 'Melbourne',
                'country_code' => 'AUS',
                'district' => 'Victoria',
                'population' => 2865329,
            ],
            [

                'name' => 'Brisbane',
                'country_code' => 'AUS',
                'district' => 'Queensland',
                'population' => 1291117,
            ],
            [

                'name' => 'Perth',
                'country_code' => 'AUS',
                'district' => 'West Australia',
                'population' => 1096829,
            ],
            [

                'name' => 'Adelaide',
                'country_code' => 'AUS',
                'district' => 'South Australia',
                'population' => 978100,
            ],
            [

                'name' => 'Canberra',
                'country_code' => 'AUS',
                'district' => 'Capital Region',
                'population' => 322723,
            ],
            [

                'name' => 'Gold Coast',
                'country_code' => 'AUS',
                'district' => 'Queensland',
                'population' => 311932,
            ],
            [

                'name' => 'Newcastle',
                'country_code' => 'AUS',
                'district' => 'New South Wales',
                'population' => 270324,
            ],
            [

                'name' => 'Central Coast',
                'country_code' => 'AUS',
                'district' => 'New South Wales',
                'population' => 227657,
            ],
            [

                'name' => 'Wollongong',
                'country_code' => 'AUS',
                'district' => 'New South Wales',
                'population' => 219761,
            ],
            [

                'name' => 'Hobart',
                'country_code' => 'AUS',
                'district' => 'Tasmania',
                'population' => 126118,
            ],
            [

                'name' => 'Geelong',
                'country_code' => 'AUS',
                'district' => 'Victoria',
                'population' => 125382,
            ],
            [

                'name' => 'Townsville',
                'country_code' => 'AUS',
                'district' => 'Queensland',
                'population' => 109914,
            ],
            [

                'name' => 'Cairns',
                'country_code' => 'AUS',
                'district' => 'Queensland',
                'population' => 92273,
            ],
            [

                'name' => 'Baku',
                'country_code' => 'AZE',
                'district' => 'Baki',
                'population' => 1787800,
            ],
            [

                'name' => 'Gäncä',
                'country_code' => 'AZE',
                'district' => 'Gäncä',
                'population' => 299300,
            ],
            [

                'name' => 'Sumqayit',
                'country_code' => 'AZE',
                'district' => 'Sumqayit',
                'population' => 283000,
            ],
            [

                'name' => 'Mingäçevir',
                'country_code' => 'AZE',
                'district' => 'Mingäçevir',
                'population' => 93900,
            ],
            [

                'name' => 'Nassau',
                'country_code' => 'BHS',
                'district' => 'New Providence',
                'population' => 172000,
            ],
            [

                'name' => 'al-Manama',
                'country_code' => 'BHR',
                'district' => 'al-Manama',
                'population' => 148000,
            ],
            [

                'name' => 'Dhaka',
                'country_code' => 'BGD',
                'district' => 'Dhaka',
                'population' => 3612850,
            ],
            [

                'name' => 'Chittagong',
                'country_code' => 'BGD',
                'district' => 'Chittagong',
                'population' => 1392860,
            ],
            [

                'name' => 'Khulna',
                'country_code' => 'BGD',
                'district' => 'Khulna',
                'population' => 663340,
            ],
            [

                'name' => 'Rajshahi',
                'country_code' => 'BGD',
                'district' => 'Rajshahi',
                'population' => 294056,
            ],
            [

                'name' => 'Narayanganj',
                'country_code' => 'BGD',
                'district' => 'Dhaka',
                'population' => 202134,
            ],
            [

                'name' => 'Rangpur',
                'country_code' => 'BGD',
                'district' => 'Rajshahi',
                'population' => 191398,
            ],
            [

                'name' => 'Mymensingh',
                'country_code' => 'BGD',
                'district' => 'Dhaka',
                'population' => 188713,
            ],
            [

                'name' => 'Barisal',
                'country_code' => 'BGD',
                'district' => 'Barisal',
                'population' => 170232,
            ],
            [

                'name' => 'Tungi',
                'country_code' => 'BGD',
                'district' => 'Dhaka',
                'population' => 168702,
            ],
            [

                'name' => 'Jessore',
                'country_code' => 'BGD',
                'district' => 'Khulna',
                'population' => 139710,
            ],
            [

                'name' => 'Comilla',
                'country_code' => 'BGD',
                'district' => 'Chittagong',
                'population' => 135313,
            ],
            [

                'name' => 'Nawabganj',
                'country_code' => 'BGD',
                'district' => 'Rajshahi',
                'population' => 130577,
            ],
            [

                'name' => 'Dinajpur',
                'country_code' => 'BGD',
                'district' => 'Rajshahi',
                'population' => 127815,
            ],
            [

                'name' => 'Bogra',
                'country_code' => 'BGD',
                'district' => 'Rajshahi',
                'population' => 120170,
            ],
            [

                'name' => 'Sylhet',
                'country_code' => 'BGD',
                'district' => 'Sylhet',
                'population' => 117396,
            ],
            [

                'name' => 'Brahmanbaria',
                'country_code' => 'BGD',
                'district' => 'Chittagong',
                'population' => 109032,
            ],
            [

                'name' => 'Tangail',
                'country_code' => 'BGD',
                'district' => 'Dhaka',
                'population' => 106004,
            ],
            [

                'name' => 'Jamalpur',
                'country_code' => 'BGD',
                'district' => 'Dhaka',
                'population' => 103556,
            ],
            [

                'name' => 'Pabna',
                'country_code' => 'BGD',
                'district' => 'Rajshahi',
                'population' => 103277,
            ],
            [

                'name' => 'Naogaon',
                'country_code' => 'BGD',
                'district' => 'Rajshahi',
                'population' => 101266,
            ],
            [

                'name' => 'Sirajganj',
                'country_code' => 'BGD',
                'district' => 'Rajshahi',
                'population' => 99669,
            ],
            [

                'name' => 'Narsinghdi',
                'country_code' => 'BGD',
                'district' => 'Dhaka',
                'population' => 98342,
            ],
            [

                'name' => 'Saidpur',
                'country_code' => 'BGD',
                'district' => 'Rajshahi',
                'population' => 96777,
            ],
            [

                'name' => 'Gazipur',
                'country_code' => 'BGD',
                'district' => 'Dhaka',
                'population' => 96717,
            ],
            [

                'name' => 'Bridgetown',
                'country_code' => 'BRB',
                'district' => 'St Michael',
                'population' => 6070,
            ],
            [

                'name' => 'Antwerpen',
                'country_code' => 'BEL',
                'district' => 'Antwerpen',
                'population' => 446525,
            ],
            [

                'name' => 'Gent',
                'country_code' => 'BEL',
                'district' => 'East Flanderi',
                'population' => 224180,
            ],
            [

                'name' => 'Charleroi',
                'country_code' => 'BEL',
                'district' => 'Hainaut',
                'population' => 200827,
            ],
            [

                'name' => 'Liège',
                'country_code' => 'BEL',
                'district' => 'Liège',
                'population' => 185639,
            ],
            [

                'name' => 'Bruxelles [Brussel]',
                'country_code' => 'BEL',
                'district' => 'Bryssel',
                'population' => 133859,
            ],
            [

                'name' => 'Brugge',
                'country_code' => 'BEL',
                'district' => 'West Flanderi',
                'population' => 116246,
            ],
            [

                'name' => 'Schaerbeek',
                'country_code' => 'BEL',
                'district' => 'Bryssel',
                'population' => 105692,
            ],
            [

                'name' => 'Namur',
                'country_code' => 'BEL',
                'district' => 'Namur',
                'population' => 105419,
            ],
            [

                'name' => 'Mons',
                'country_code' => 'BEL',
                'district' => 'Hainaut',
                'population' => 90935,
            ],
            [

                'name' => 'Belize City',
                'country_code' => 'BLZ',
                'district' => 'Belize City',
                'population' => 55810,
            ],
            [

                'name' => 'Belmopan',
                'country_code' => 'BLZ',
                'district' => 'Cayo',
                'population' => 7105,
            ],
            [

                'name' => 'Cotonou',
                'country_code' => 'BEN',
                'district' => 'Atlantique',
                'population' => 536827,
            ],
            [

                'name' => 'Porto-Novo',
                'country_code' => 'BEN',
                'district' => 'Ouémé',
                'population' => 194000,
            ],
            [

                'name' => 'Djougou',
                'country_code' => 'BEN',
                'district' => 'Atacora',
                'population' => 134099,
            ],
            [

                'name' => 'Parakou',
                'country_code' => 'BEN',
                'district' => 'Borgou',
                'population' => 103577,
            ],
            [

                'name' => 'Saint George',
                'country_code' => 'BMU',
                'district' => 'Saint George´s',
                'population' => 1800,
            ],
            [

                'name' => 'Hamilton',
                'country_code' => 'BMU',
                'district' => 'Hamilton',
                'population' => 1200,
            ],
            [

                'name' => 'Thimphu',
                'country_code' => 'BTN',
                'district' => 'Thimphu',
                'population' => 22000,
            ],
            [

                'name' => 'Santa Cruz de la Sierra',
                'country_code' => 'BOL',
                'district' => 'Santa Cruz',
                'population' => 935361,
            ],
            [

                'name' => 'La Paz',
                'country_code' => 'BOL',
                'district' => 'La Paz',
                'population' => 758141,
            ],
            [

                'name' => 'El Alto',
                'country_code' => 'BOL',
                'district' => 'La Paz',
                'population' => 534466,
            ],
            [

                'name' => 'Cochabamba',
                'country_code' => 'BOL',
                'district' => 'Cochabamba',
                'population' => 482800,
            ],
            [

                'name' => 'Oruro',
                'country_code' => 'BOL',
                'district' => 'Oruro',
                'population' => 223553,
            ],
            [

                'name' => 'Sucre',
                'country_code' => 'BOL',
                'district' => 'Chuquisaca',
                'population' => 178426,
            ],
            [

                'name' => 'Potosí',
                'country_code' => 'BOL',
                'district' => 'Potosí',
                'population' => 140642,
            ],
            [

                'name' => 'Tarija',
                'country_code' => 'BOL',
                'district' => 'Tarija',
                'population' => 125255,
            ],
            [

                'name' => 'Sarajevo',
                'country_code' => 'BIH',
                'district' => 'Federaatio',
                'population' => 360000,
            ],
            [

                'name' => 'Banja Luka',
                'country_code' => 'BIH',
                'district' => 'Republika Srpska',
                'population' => 143079,
            ],
            [

                'name' => 'Zenica',
                'country_code' => 'BIH',
                'district' => 'Federaatio',
                'population' => 96027,
            ],
            [

                'name' => 'Gaborone',
                'country_code' => 'BWA',
                'district' => 'Gaborone',
                'population' => 213017,
            ],
            [

                'name' => 'Francistown',
                'country_code' => 'BWA',
                'district' => 'Francistown',
                'population' => 101805,
            ],
            [

                'name' => 'São Paulo',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 9968485,
            ],
            [

                'name' => 'Rio de Janeiro',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 5598953,
            ],
            [

                'name' => 'Salvador',
                'country_code' => 'BRA',
                'district' => 'Bahia',
                'population' => 2302832,
            ],
            [

                'name' => 'Belo Horizonte',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 2139125,
            ],
            [

                'name' => 'Fortaleza',
                'country_code' => 'BRA',
                'district' => 'Ceará',
                'population' => 2097757,
            ],
            [

                'name' => 'Brasília',
                'country_code' => 'BRA',
                'district' => 'Distrito Federal',
                'population' => 1969868,
            ],
            [

                'name' => 'Curitiba',
                'country_code' => 'BRA',
                'district' => 'Paraná',
                'population' => 1584232,
            ],
            [

                'name' => 'Recife',
                'country_code' => 'BRA',
                'district' => 'Pernambuco',
                'population' => 1378087,
            ],
            [

                'name' => 'Porto Alegre',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 1314032,
            ],
            [

                'name' => 'Manaus',
                'country_code' => 'BRA',
                'district' => 'Amazonas',
                'population' => 1255049,
            ],
            [

                'name' => 'Belém',
                'country_code' => 'BRA',
                'district' => 'Pará',
                'population' => 1186926,
            ],
            [

                'name' => 'Guarulhos',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 1095874,
            ],
            [

                'name' => 'Goiânia',
                'country_code' => 'BRA',
                'district' => 'Goiás',
                'population' => 1056330,
            ],
            [

                'name' => 'Campinas',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 950043,
            ],
            [

                'name' => 'São Gonçalo',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 869254,
            ],
            [

                'name' => 'Nova Iguaçu',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 862225,
            ],
            [

                'name' => 'São Luís',
                'country_code' => 'BRA',
                'district' => 'Maranhão',
                'population' => 837588,
            ],
            [

                'name' => 'Maceió',
                'country_code' => 'BRA',
                'district' => 'Alagoas',
                'population' => 786288,
            ],
            [

                'name' => 'Duque de Caxias',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 746758,
            ],
            [

                'name' => 'São Bernardo do Campo',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 723132,
            ],
            [

                'name' => 'Teresina',
                'country_code' => 'BRA',
                'district' => 'Piauí',
                'population' => 691942,
            ],
            [

                'name' => 'Natal',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Norte',
                'population' => 688955,
            ],
            [

                'name' => 'Osasco',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 659604,
            ],
            [

                'name' => 'Campo Grande',
                'country_code' => 'BRA',
                'district' => 'Mato Grosso do Sul',
                'population' => 649593,
            ],
            [

                'name' => 'Santo André',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 630073,
            ],
            [

                'name' => 'João Pessoa',
                'country_code' => 'BRA',
                'district' => 'Paraíba',
                'population' => 584029,
            ],
            [

                'name' => 'Jaboatão dos Guararapes',
                'country_code' => 'BRA',
                'district' => 'Pernambuco',
                'population' => 558680,
            ],
            [

                'name' => 'Contagem',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 520801,
            ],
            [

                'name' => 'São José dos Campos',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 515553,
            ],
            [

                'name' => 'Uberlândia',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 487222,
            ],
            [

                'name' => 'Feira de Santana',
                'country_code' => 'BRA',
                'district' => 'Bahia',
                'population' => 479992,
            ],
            [

                'name' => 'Ribeirão Preto',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 473276,
            ],
            [

                'name' => 'Sorocaba',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 466823,
            ],
            [

                'name' => 'Niterói',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 459884,
            ],
            [

                'name' => 'Cuiabá',
                'country_code' => 'BRA',
                'district' => 'Mato Grosso',
                'population' => 453813,
            ],
            [

                'name' => 'Juiz de Fora',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 450288,
            ],
            [

                'name' => 'Aracaju',
                'country_code' => 'BRA',
                'district' => 'Sergipe',
                'population' => 445555,
            ],
            [

                'name' => 'São João de Meriti',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 440052,
            ],
            [

                'name' => 'Londrina',
                'country_code' => 'BRA',
                'district' => 'Paraná',
                'population' => 432257,
            ],
            [

                'name' => 'Joinville',
                'country_code' => 'BRA',
                'district' => 'Santa Catarina',
                'population' => 428011,
            ],
            [

                'name' => 'Belford Roxo',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 425194,
            ],
            [

                'name' => 'Santos',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 408748,
            ],
            [

                'name' => 'Ananindeua',
                'country_code' => 'BRA',
                'district' => 'Pará',
                'population' => 400940,
            ],
            [

                'name' => 'Campos dos Goytacazes',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 398418,
            ],
            [

                'name' => 'Mauá',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 375055,
            ],
            [

                'name' => 'Carapicuíba',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 357552,
            ],
            [

                'name' => 'Olinda',
                'country_code' => 'BRA',
                'district' => 'Pernambuco',
                'population' => 354732,
            ],
            [

                'name' => 'Campina Grande',
                'country_code' => 'BRA',
                'district' => 'Paraíba',
                'population' => 352497,
            ],
            [

                'name' => 'São José do Rio Preto',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 351944,
            ],
            [

                'name' => 'Caxias do Sul',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 349581,
            ],
            [

                'name' => 'Moji das Cruzes',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 339194,
            ],
            [

                'name' => 'Diadema',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 335078,
            ],
            [

                'name' => 'Aparecida de Goiânia',
                'country_code' => 'BRA',
                'district' => 'Goiás',
                'population' => 324662,
            ],
            [

                'name' => 'Piracicaba',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 319104,
            ],
            [

                'name' => 'Cariacica',
                'country_code' => 'BRA',
                'district' => 'Espírito Santo',
                'population' => 319033,
            ],
            [

                'name' => 'Vila Velha',
                'country_code' => 'BRA',
                'district' => 'Espírito Santo',
                'population' => 318758,
            ],
            [

                'name' => 'Pelotas',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 315415,
            ],
            [

                'name' => 'Bauru',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 313670,
            ],
            [

                'name' => 'Porto Velho',
                'country_code' => 'BRA',
                'district' => 'Rondônia',
                'population' => 309750,
            ],
            [

                'name' => 'Serra',
                'country_code' => 'BRA',
                'district' => 'Espírito Santo',
                'population' => 302666,
            ],
            [

                'name' => 'Betim',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 302108,
            ],
            [

                'name' => 'Jundíaí',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 296127,
            ],
            [

                'name' => 'Canoas',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 294125,
            ],
            [

                'name' => 'Franca',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 290139,
            ],
            [

                'name' => 'São Vicente',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 286848,
            ],
            [

                'name' => 'Maringá',
                'country_code' => 'BRA',
                'district' => 'Paraná',
                'population' => 286461,
            ],
            [

                'name' => 'Montes Claros',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 286058,
            ],
            [

                'name' => 'Anápolis',
                'country_code' => 'BRA',
                'district' => 'Goiás',
                'population' => 282197,
            ],
            [

                'name' => 'Florianópolis',
                'country_code' => 'BRA',
                'district' => 'Santa Catarina',
                'population' => 281928,
            ],
            [

                'name' => 'Petrópolis',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 279183,
            ],
            [

                'name' => 'Itaquaquecetuba',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 270874,
            ],
            [

                'name' => 'Vitória',
                'country_code' => 'BRA',
                'district' => 'Espírito Santo',
                'population' => 270626,
            ],
            [

                'name' => 'Ponta Grossa',
                'country_code' => 'BRA',
                'district' => 'Paraná',
                'population' => 268013,
            ],
            [

                'name' => 'Rio Branco',
                'country_code' => 'BRA',
                'district' => 'Acre',
                'population' => 259537,
            ],
            [

                'name' => 'Foz do Iguaçu',
                'country_code' => 'BRA',
                'district' => 'Paraná',
                'population' => 259425,
            ],
            [

                'name' => 'Macapá',
                'country_code' => 'BRA',
                'district' => 'Amapá',
                'population' => 256033,
            ],
            [

                'name' => 'Ilhéus',
                'country_code' => 'BRA',
                'district' => 'Bahia',
                'population' => 254970,
            ],
            [

                'name' => 'Vitória da Conquista',
                'country_code' => 'BRA',
                'district' => 'Bahia',
                'population' => 253587,
            ],
            [

                'name' => 'Uberaba',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 249225,
            ],
            [

                'name' => 'Paulista',
                'country_code' => 'BRA',
                'district' => 'Pernambuco',
                'population' => 248473,
            ],
            [

                'name' => 'Limeira',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 245497,
            ],
            [

                'name' => 'Blumenau',
                'country_code' => 'BRA',
                'district' => 'Santa Catarina',
                'population' => 244379,
            ],
            [

                'name' => 'Caruaru',
                'country_code' => 'BRA',
                'district' => 'Pernambuco',
                'population' => 244247,
            ],
            [

                'name' => 'Santarém',
                'country_code' => 'BRA',
                'district' => 'Pará',
                'population' => 241771,
            ],
            [

                'name' => 'Volta Redonda',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 240315,
            ],
            [

                'name' => 'Novo Hamburgo',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 239940,
            ],
            [

                'name' => 'Caucaia',
                'country_code' => 'BRA',
                'district' => 'Ceará',
                'population' => 238738,
            ],
            [

                'name' => 'Santa Maria',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 238473,
            ],
            [

                'name' => 'Cascavel',
                'country_code' => 'BRA',
                'district' => 'Paraná',
                'population' => 237510,
            ],
            [

                'name' => 'Guarujá',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 237206,
            ],
            [

                'name' => 'Ribeirão das Neves',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 232685,
            ],
            [

                'name' => 'Governador Valadares',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 231724,
            ],
            [

                'name' => 'Taubaté',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 229130,
            ],
            [

                'name' => 'Imperatriz',
                'country_code' => 'BRA',
                'district' => 'Maranhão',
                'population' => 224564,
            ],
            [

                'name' => 'Gravataí',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 223011,
            ],
            [

                'name' => 'Embu',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 222223,
            ],
            [

                'name' => 'Mossoró',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Norte',
                'population' => 214901,
            ],
            [

                'name' => 'Várzea Grande',
                'country_code' => 'BRA',
                'district' => 'Mato Grosso',
                'population' => 214435,
            ],
            [

                'name' => 'Petrolina',
                'country_code' => 'BRA',
                'district' => 'Pernambuco',
                'population' => 210540,
            ],
            [

                'name' => 'Barueri',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 208426,
            ],
            [

                'name' => 'Viamão',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 207557,
            ],
            [

                'name' => 'Ipatinga',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 206338,
            ],
            [

                'name' => 'Juazeiro',
                'country_code' => 'BRA',
                'district' => 'Bahia',
                'population' => 201073,
            ],
            [

                'name' => 'Juazeiro do Norte',
                'country_code' => 'BRA',
                'district' => 'Ceará',
                'population' => 199636,
            ],
            [

                'name' => 'Taboão da Serra',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 197550,
            ],
            [

                'name' => 'São José dos Pinhais',
                'country_code' => 'BRA',
                'district' => 'Paraná',
                'population' => 196884,
            ],
            [

                'name' => 'Magé',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 196147,
            ],
            [

                'name' => 'Suzano',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 195434,
            ],
            [

                'name' => 'São Leopoldo',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 189258,
            ],
            [

                'name' => 'Marília',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 188691,
            ],
            [

                'name' => 'São Carlos',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 187122,
            ],
            [

                'name' => 'Sumaré',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 186205,
            ],
            [

                'name' => 'Presidente Prudente',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 185340,
            ],
            [

                'name' => 'Divinópolis',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 185047,
            ],
            [

                'name' => 'Sete Lagoas',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 182984,
            ],
            [

                'name' => 'Rio Grande',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 182222,
            ],
            [

                'name' => 'Itabuna',
                'country_code' => 'BRA',
                'district' => 'Bahia',
                'population' => 182148,
            ],
            [

                'name' => 'Jequié',
                'country_code' => 'BRA',
                'district' => 'Bahia',
                'population' => 179128,
            ],
            [

                'name' => 'Arapiraca',
                'country_code' => 'BRA',
                'district' => 'Alagoas',
                'population' => 178988,
            ],
            [

                'name' => 'Colombo',
                'country_code' => 'BRA',
                'district' => 'Paraná',
                'population' => 177764,
            ],
            [

                'name' => 'Americana',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 177409,
            ],
            [

                'name' => 'Alvorada',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 175574,
            ],
            [

                'name' => 'Araraquara',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 174381,
            ],
            [

                'name' => 'Itaboraí',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 173977,
            ],
            [

                'name' => 'Santa Bárbara d´Oeste',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 171657,
            ],
            [

                'name' => 'Nova Friburgo',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 170697,
            ],
            [

                'name' => 'Jacareí',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 170356,
            ],
            [

                'name' => 'Araçatuba',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 169303,
            ],
            [

                'name' => 'Barra Mansa',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 168953,
            ],
            [

                'name' => 'Praia Grande',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 168434,
            ],
            [

                'name' => 'Marabá',
                'country_code' => 'BRA',
                'district' => 'Pará',
                'population' => 167795,
            ],
            [

                'name' => 'Criciúma',
                'country_code' => 'BRA',
                'district' => 'Santa Catarina',
                'population' => 167661,
            ],
            [

                'name' => 'Boa Vista',
                'country_code' => 'BRA',
                'district' => 'Roraima',
                'population' => 167185,
            ],
            [

                'name' => 'Passo Fundo',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 166343,
            ],
            [

                'name' => 'Dourados',
                'country_code' => 'BRA',
                'district' => 'Mato Grosso do Sul',
                'population' => 164716,
            ],
            [

                'name' => 'Santa Luzia',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 164704,
            ],
            [

                'name' => 'Rio Claro',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 163551,
            ],
            [

                'name' => 'Maracanaú',
                'country_code' => 'BRA',
                'district' => 'Ceará',
                'population' => 162022,
            ],
            [

                'name' => 'Guarapuava',
                'country_code' => 'BRA',
                'district' => 'Paraná',
                'population' => 160510,
            ],
            [

                'name' => 'Rondonópolis',
                'country_code' => 'BRA',
                'district' => 'Mato Grosso',
                'population' => 155115,
            ],
            [

                'name' => 'São José',
                'country_code' => 'BRA',
                'district' => 'Santa Catarina',
                'population' => 155105,
            ],
            [

                'name' => 'Cachoeiro de Itapemirim',
                'country_code' => 'BRA',
                'district' => 'Espírito Santo',
                'population' => 155024,
            ],
            [

                'name' => 'Nilópolis',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 153383,
            ],
            [

                'name' => 'Itapevi',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 150664,
            ],
            [

                'name' => 'Cabo de Santo Agostinho',
                'country_code' => 'BRA',
                'district' => 'Pernambuco',
                'population' => 149964,
            ],
            [

                'name' => 'Camaçari',
                'country_code' => 'BRA',
                'district' => 'Bahia',
                'population' => 149146,
            ],
            [

                'name' => 'Sobral',
                'country_code' => 'BRA',
                'district' => 'Ceará',
                'population' => 146005,
            ],
            [

                'name' => 'Itajaí',
                'country_code' => 'BRA',
                'district' => 'Santa Catarina',
                'population' => 145197,
            ],
            [

                'name' => 'Chapecó',
                'country_code' => 'BRA',
                'district' => 'Santa Catarina',
                'population' => 144158,
            ],
            [

                'name' => 'Cotia',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 140042,
            ],
            [

                'name' => 'Lages',
                'country_code' => 'BRA',
                'district' => 'Santa Catarina',
                'population' => 139570,
            ],
            [

                'name' => 'Ferraz de Vasconcelos',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 139283,
            ],
            [

                'name' => 'Indaiatuba',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 135968,
            ],
            [

                'name' => 'Hortolândia',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 135755,
            ],
            [

                'name' => 'Caxias',
                'country_code' => 'BRA',
                'district' => 'Maranhão',
                'population' => 133980,
            ],
            [

                'name' => 'São Caetano do Sul',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 133321,
            ],
            [

                'name' => 'Itu',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 132736,
            ],
            [

                'name' => 'Nossa Senhora do Socorro',
                'country_code' => 'BRA',
                'district' => 'Sergipe',
                'population' => 131351,
            ],
            [

                'name' => 'Parnaíba',
                'country_code' => 'BRA',
                'district' => 'Piauí',
                'population' => 129756,
            ],
            [

                'name' => 'Poços de Caldas',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 129683,
            ],
            [

                'name' => 'Teresópolis',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 128079,
            ],
            [

                'name' => 'Barreiras',
                'country_code' => 'BRA',
                'district' => 'Bahia',
                'population' => 127801,
            ],
            [

                'name' => 'Castanhal',
                'country_code' => 'BRA',
                'district' => 'Pará',
                'population' => 127634,
            ],
            [

                'name' => 'Alagoinhas',
                'country_code' => 'BRA',
                'district' => 'Bahia',
                'population' => 126820,
            ],
            [

                'name' => 'Itapecerica da Serra',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 126672,
            ],
            [

                'name' => 'Uruguaiana',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 126305,
            ],
            [

                'name' => 'Paranaguá',
                'country_code' => 'BRA',
                'district' => 'Paraná',
                'population' => 126076,
            ],
            [

                'name' => 'Ibirité',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 125982,
            ],
            [

                'name' => 'Timon',
                'country_code' => 'BRA',
                'district' => 'Maranhão',
                'population' => 125812,
            ],
            [

                'name' => 'Luziânia',
                'country_code' => 'BRA',
                'district' => 'Goiás',
                'population' => 125597,
            ],
            [

                'name' => 'Macaé',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 125597,
            ],
            [

                'name' => 'Teófilo Otoni',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 124489,
            ],
            [

                'name' => 'Moji-Guaçu',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 123782,
            ],
            [

                'name' => 'Palmas',
                'country_code' => 'BRA',
                'district' => 'Tocantins',
                'population' => 121919,
            ],
            [

                'name' => 'Pindamonhangaba',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 121904,
            ],
            [

                'name' => 'Francisco Morato',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 121197,
            ],
            [

                'name' => 'Bagé',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 120793,
            ],
            [

                'name' => 'Sapucaia do Sul',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 120217,
            ],
            [

                'name' => 'Cabo Frio',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 119503,
            ],
            [

                'name' => 'Itapetininga',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 119391,
            ],
            [

                'name' => 'Patos de Minas',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 119262,
            ],
            [

                'name' => 'Camaragibe',
                'country_code' => 'BRA',
                'district' => 'Pernambuco',
                'population' => 118968,
            ],
            [

                'name' => 'Bragança Paulista',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 116929,
            ],
            [

                'name' => 'Queimados',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 115020,
            ],
            [

                'name' => 'Araguaína',
                'country_code' => 'BRA',
                'district' => 'Tocantins',
                'population' => 114948,
            ],
            [

                'name' => 'Garanhuns',
                'country_code' => 'BRA',
                'district' => 'Pernambuco',
                'population' => 114603,
            ],
            [

                'name' => 'Vitória de Santo Antão',
                'country_code' => 'BRA',
                'district' => 'Pernambuco',
                'population' => 113595,
            ],
            [

                'name' => 'Santa Rita',
                'country_code' => 'BRA',
                'district' => 'Paraíba',
                'population' => 113135,
            ],
            [

                'name' => 'Barbacena',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 113079,
            ],
            [

                'name' => 'Abaetetuba',
                'country_code' => 'BRA',
                'district' => 'Pará',
                'population' => 111258,
            ],
            [

                'name' => 'Jaú',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 109965,
            ],
            [

                'name' => 'Lauro de Freitas',
                'country_code' => 'BRA',
                'district' => 'Bahia',
                'population' => 109236,
            ],
            [

                'name' => 'Franco da Rocha',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 108964,
            ],
            [

                'name' => 'Teixeira de Freitas',
                'country_code' => 'BRA',
                'district' => 'Bahia',
                'population' => 108441,
            ],
            [

                'name' => 'Varginha',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 108314,
            ],
            [

                'name' => 'Ribeirão Pires',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 108121,
            ],
            [

                'name' => 'Sabará',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 107781,
            ],
            [

                'name' => 'Catanduva',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 107761,
            ],
            [

                'name' => 'Rio Verde',
                'country_code' => 'BRA',
                'district' => 'Goiás',
                'population' => 107755,
            ],
            [

                'name' => 'Botucatu',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 107663,
            ],
            [

                'name' => 'Colatina',
                'country_code' => 'BRA',
                'district' => 'Espírito Santo',
                'population' => 107354,
            ],
            [

                'name' => 'Santa Cruz do Sul',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 106734,
            ],
            [

                'name' => 'Linhares',
                'country_code' => 'BRA',
                'district' => 'Espírito Santo',
                'population' => 106278,
            ],
            [

                'name' => 'Apucarana',
                'country_code' => 'BRA',
                'district' => 'Paraná',
                'population' => 105114,
            ],
            [

                'name' => 'Barretos',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 104156,
            ],
            [

                'name' => 'Guaratinguetá',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 103433,
            ],
            [

                'name' => 'Cachoeirinha',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 103240,
            ],
            [

                'name' => 'Codó',
                'country_code' => 'BRA',
                'district' => 'Maranhão',
                'population' => 103153,
            ],
            [

                'name' => 'Jaraguá do Sul',
                'country_code' => 'BRA',
                'district' => 'Santa Catarina',
                'population' => 102580,
            ],
            [

                'name' => 'Cubatão',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 102372,
            ],
            [

                'name' => 'Itabira',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 102217,
            ],
            [

                'name' => 'Itaituba',
                'country_code' => 'BRA',
                'district' => 'Pará',
                'population' => 101320,
            ],
            [

                'name' => 'Araras',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 101046,
            ],
            [

                'name' => 'Resende',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 100627,
            ],
            [

                'name' => 'Atibaia',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 100356,
            ],
            [

                'name' => 'Pouso Alegre',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 100028,
            ],
            [

                'name' => 'Toledo',
                'country_code' => 'BRA',
                'district' => 'Paraná',
                'population' => 99387,
            ],
            [

                'name' => 'Crato',
                'country_code' => 'BRA',
                'district' => 'Ceará',
                'population' => 98965,
            ],
            [

                'name' => 'Passos',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 98570,
            ],
            [

                'name' => 'Araguari',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 98399,
            ],
            [

                'name' => 'São José de Ribamar',
                'country_code' => 'BRA',
                'district' => 'Maranhão',
                'population' => 98318,
            ],
            [

                'name' => 'Pinhais',
                'country_code' => 'BRA',
                'district' => 'Paraná',
                'population' => 98198,
            ],
            [

                'name' => 'Sertãozinho',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 98140,
            ],
            [

                'name' => 'Conselheiro Lafaiete',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 97507,
            ],
            [

                'name' => 'Paulo Afonso',
                'country_code' => 'BRA',
                'district' => 'Bahia',
                'population' => 97291,
            ],
            [

                'name' => 'Angra dos Reis',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 96864,
            ],
            [

                'name' => 'Eunápolis',
                'country_code' => 'BRA',
                'district' => 'Bahia',
                'population' => 96610,
            ],
            [

                'name' => 'Salto',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 96348,
            ],
            [

                'name' => 'Ourinhos',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 96291,
            ],
            [

                'name' => 'Parnamirim',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Norte',
                'population' => 96210,
            ],
            [

                'name' => 'Jacobina',
                'country_code' => 'BRA',
                'district' => 'Bahia',
                'population' => 96131,
            ],
            [

                'name' => 'Coronel Fabriciano',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 95933,
            ],
            [

                'name' => 'Birigui',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 94685,
            ],
            [

                'name' => 'Tatuí',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 93897,
            ],
            [

                'name' => 'Ji-Paraná',
                'country_code' => 'BRA',
                'district' => 'Rondônia',
                'population' => 93346,
            ],
            [

                'name' => 'Bacabal',
                'country_code' => 'BRA',
                'district' => 'Maranhão',
                'population' => 93121,
            ],
            [

                'name' => 'Cametá',
                'country_code' => 'BRA',
                'district' => 'Pará',
                'population' => 92779,
            ],
            [

                'name' => 'Guaíba',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 92224,
            ],
            [

                'name' => 'São Lourenço da Mata',
                'country_code' => 'BRA',
                'district' => 'Pernambuco',
                'population' => 91999,
            ],
            [

                'name' => 'Santana do Livramento',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 91779,
            ],
            [

                'name' => 'Votorantim',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 91777,
            ],
            [

                'name' => 'Campo Largo',
                'country_code' => 'BRA',
                'district' => 'Paraná',
                'population' => 91203,
            ],
            [

                'name' => 'Patos',
                'country_code' => 'BRA',
                'district' => 'Paraíba',
                'population' => 90519,
            ],
            [

                'name' => 'Ituiutaba',
                'country_code' => 'BRA',
                'district' => 'Minas Gerais',
                'population' => 90507,
            ],
            [

                'name' => 'Corumbá',
                'country_code' => 'BRA',
                'district' => 'Mato Grosso do Sul',
                'population' => 90111,
            ],
            [

                'name' => 'Palhoça',
                'country_code' => 'BRA',
                'district' => 'Santa Catarina',
                'population' => 89465,
            ],
            [

                'name' => 'Barra do Piraí',
                'country_code' => 'BRA',
                'district' => 'Rio de Janeiro',
                'population' => 89388,
            ],
            [

                'name' => 'Bento Gonçalves',
                'country_code' => 'BRA',
                'district' => 'Rio Grande do Sul',
                'population' => 89254,
            ],
            [

                'name' => 'Poá',
                'country_code' => 'BRA',
                'district' => 'São Paulo',
                'population' => 89236,
            ],
            [

                'name' => 'Águas Lindas de Goiás',
                'country_code' => 'BRA',
                'district' => 'Goiás',
                'population' => 89200,
            ],
            [

                'name' => 'London',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 7285000,
            ],
            [

                'name' => 'Birmingham',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 1013000,
            ],
            [

                'name' => 'Glasgow',
                'country_code' => 'GBR',
                'district' => 'Scotland',
                'population' => 619680,
            ],
            [

                'name' => 'Liverpool',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 461000,
            ],
            [

                'name' => 'Edinburgh',
                'country_code' => 'GBR',
                'district' => 'Scotland',
                'population' => 450180,
            ],
            [

                'name' => 'Sheffield',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 431607,
            ],
            [

                'name' => 'Manchester',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 430000,
            ],
            [

                'name' => 'Leeds',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 424194,
            ],
            [

                'name' => 'Bristol',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 402000,
            ],
            [

                'name' => 'Cardiff',
                'country_code' => 'GBR',
                'district' => 'Wales',
                'population' => 321000,
            ],
            [

                'name' => 'Coventry',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 304000,
            ],
            [

                'name' => 'Leicester',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 294000,
            ],
            [

                'name' => 'Bradford',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 289376,
            ],
            [

                'name' => 'Belfast',
                'country_code' => 'GBR',
                'district' => 'North Ireland',
                'population' => 287500,
            ],
            [

                'name' => 'Nottingham',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 287000,
            ],
            [

                'name' => 'Kingston upon Hull',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 262000,
            ],
            [

                'name' => 'Plymouth',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 253000,
            ],
            [

                'name' => 'Stoke-on-Trent',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 252000,
            ],
            [

                'name' => 'Wolverhampton',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 242000,
            ],
            [

                'name' => 'Derby',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 236000,
            ],
            [

                'name' => 'Swansea',
                'country_code' => 'GBR',
                'district' => 'Wales',
                'population' => 230000,
            ],
            [

                'name' => 'Southampton',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 216000,
            ],
            [

                'name' => 'Aberdeen',
                'country_code' => 'GBR',
                'district' => 'Scotland',
                'population' => 213070,
            ],
            [

                'name' => 'Northampton',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 196000,
            ],
            [

                'name' => 'Dudley',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 192171,
            ],
            [

                'name' => 'Portsmouth',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 190000,
            ],
            [

                'name' => 'Newcastle upon Tyne',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 189150,
            ],
            [

                'name' => 'Sunderland',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 183310,
            ],
            [

                'name' => 'Luton',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 183000,
            ],
            [

                'name' => 'Swindon',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 180000,
            ],
            [

                'name' => 'Southend-on-Sea',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 176000,
            ],
            [

                'name' => 'Walsall',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 174739,
            ],
            [

                'name' => 'Bournemouth',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 162000,
            ],
            [

                'name' => 'Peterborough',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 156000,
            ],
            [

                'name' => 'Brighton',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 156124,
            ],
            [

                'name' => 'Blackpool',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 151000,
            ],
            [

                'name' => 'Dundee',
                'country_code' => 'GBR',
                'district' => 'Scotland',
                'population' => 146690,
            ],
            [

                'name' => 'West Bromwich',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 146386,
            ],
            [

                'name' => 'Reading',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 148000,
            ],
            [

                'name' => 'Oldbury/Smethwick (Warley)',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 145542,
            ],
            [

                'name' => 'Middlesbrough',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 145000,
            ],
            [

                'name' => 'Huddersfield',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 143726,
            ],
            [

                'name' => 'Oxford',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 144000,
            ],
            [

                'name' => 'Poole',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 141000,
            ],
            [

                'name' => 'Bolton',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 139020,
            ],
            [

                'name' => 'Blackburn',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 140000,
            ],
            [

                'name' => 'Newport',
                'country_code' => 'GBR',
                'district' => 'Wales',
                'population' => 139000,
            ],
            [

                'name' => 'Preston',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 135000,
            ],
            [

                'name' => 'Stockport',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 132813,
            ],
            [

                'name' => 'Norwich',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 124000,
            ],
            [

                'name' => 'Rotherham',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 121380,
            ],
            [

                'name' => 'Cambridge',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 121000,
            ],
            [

                'name' => 'Watford',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 113080,
            ],
            [

                'name' => 'Ipswich',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 114000,
            ],
            [

                'name' => 'Slough',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 112000,
            ],
            [

                'name' => 'Exeter',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 111000,
            ],
            [

                'name' => 'Cheltenham',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 106000,
            ],
            [

                'name' => 'Gloucester',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 107000,
            ],
            [

                'name' => 'Saint Helens',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 106293,
            ],
            [

                'name' => 'Sutton Coldfield',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 106001,
            ],
            [

                'name' => 'York',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 104425,
            ],
            [

                'name' => 'Oldham',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 103931,
            ],
            [

                'name' => 'Basildon',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 100924,
            ],
            [

                'name' => 'Worthing',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 100000,
            ],
            [

                'name' => 'Chelmsford',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 97451,
            ],
            [

                'name' => 'Colchester',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 96063,
            ],
            [

                'name' => 'Crawley',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 97000,
            ],
            [

                'name' => 'Gillingham',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 92000,
            ],
            [

                'name' => 'Solihull',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 94531,
            ],
            [

                'name' => 'Rochdale',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 94313,
            ],
            [

                'name' => 'Birkenhead',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 93087,
            ],
            [

                'name' => 'Worcester',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 95000,
            ],
            [

                'name' => 'Hartlepool',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 92000,
            ],
            [

                'name' => 'Halifax',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 91069,
            ],
            [

                'name' => 'Woking/Byfleet',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 92000,
            ],
            [

                'name' => 'Southport',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 90959,
            ],
            [

                'name' => 'Maidstone',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 90878,
            ],
            [

                'name' => 'Eastbourne',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 90000,
            ],
            [

                'name' => 'Grimsby',
                'country_code' => 'GBR',
                'district' => 'England',
                'population' => 89000,
            ],
            [

                'name' => 'Saint Helier',
                'country_code' => 'GBR',
                'district' => 'Jersey',
                'population' => 27523,
            ],
            [

                'name' => 'Douglas',
                'country_code' => 'GBR',
                'district' => '–',
                'population' => 23487,
            ],
            [

                'name' => 'Road Town',
                'country_code' => 'VGB',
                'district' => 'Tortola',
                'population' => 8000,
            ],
            [

                'name' => 'Bandar Seri Begawan',
                'country_code' => 'BRN',
                'district' => 'Brunei and Muara',
                'population' => 21484,
            ],
            [

                'name' => 'Sofija',
                'country_code' => 'BGR',
                'district' => 'Grad Sofija',
                'population' => 1122302,
            ],
            [

                'name' => 'Plovdiv',
                'country_code' => 'BGR',
                'district' => 'Plovdiv',
                'population' => 342584,
            ],
            [

                'name' => 'Varna',
                'country_code' => 'BGR',
                'district' => 'Varna',
                'population' => 299801,
            ],
            [

                'name' => 'Burgas',
                'country_code' => 'BGR',
                'district' => 'Burgas',
                'population' => 195255,
            ],
            [

                'name' => 'Ruse',
                'country_code' => 'BGR',
                'district' => 'Ruse',
                'population' => 166467,
            ],
            [

                'name' => 'Stara Zagora',
                'country_code' => 'BGR',
                'district' => 'Haskovo',
                'population' => 147939,
            ],
            [

                'name' => 'Pleven',
                'country_code' => 'BGR',
                'district' => 'Lovec',
                'population' => 121952,
            ],
            [

                'name' => 'Sliven',
                'country_code' => 'BGR',
                'district' => 'Burgas',
                'population' => 105530,
            ],
            [

                'name' => 'Dobric',
                'country_code' => 'BGR',
                'district' => 'Varna',
                'population' => 100399,
            ],
            [

                'name' => 'Šumen',
                'country_code' => 'BGR',
                'district' => 'Varna',
                'population' => 94686,
            ],
            [

                'name' => 'Ouagadougou',
                'country_code' => 'BFA',
                'district' => 'Kadiogo',
                'population' => 824000,
            ],
            [

                'name' => 'Bobo-Dioulasso',
                'country_code' => 'BFA',
                'district' => 'Houet',
                'population' => 300000,
            ],
            [

                'name' => 'Koudougou',
                'country_code' => 'BFA',
                'district' => 'Boulkiemdé',
                'population' => 105000,
            ],
            [

                'name' => 'Bujumbura',
                'country_code' => 'BDI',
                'district' => 'Bujumbura',
                'population' => 300000,
            ],
            [

                'name' => 'George Town',
                'country_code' => 'CYM',
                'district' => 'Grand Cayman',
                'population' => 19600,
            ],
            [

                'name' => 'Santiago de Chile',
                'country_code' => 'CHL',
                'district' => 'Santiago',
                'population' => 4703954,
            ],
            [

                'name' => 'Puente Alto',
                'country_code' => 'CHL',
                'district' => 'Santiago',
                'population' => 386236,
            ],
            [

                'name' => 'Viña del Mar',
                'country_code' => 'CHL',
                'district' => 'Valparaíso',
                'population' => 312493,
            ],
            [

                'name' => 'Valparaíso',
                'country_code' => 'CHL',
                'district' => 'Valparaíso',
                'population' => 293800,
            ],
            [

                'name' => 'Talcahuano',
                'country_code' => 'CHL',
                'district' => 'Bíobío',
                'population' => 277752,
            ],
            [

                'name' => 'Antofagasta',
                'country_code' => 'CHL',
                'district' => 'Antofagasta',
                'population' => 251429,
            ],
            [

                'name' => 'San Bernardo',
                'country_code' => 'CHL',
                'district' => 'Santiago',
                'population' => 241910,
            ],
            [

                'name' => 'Temuco',
                'country_code' => 'CHL',
                'district' => 'La Araucanía',
                'population' => 233041,
            ],
            [

                'name' => 'Concepción',
                'country_code' => 'CHL',
                'district' => 'Bíobío',
                'population' => 217664,
            ],
            [

                'name' => 'Rancagua',
                'country_code' => 'CHL',
                'district' => 'O´Higgins',
                'population' => 212977,
            ],
            [

                'name' => 'Arica',
                'country_code' => 'CHL',
                'district' => 'Tarapacá',
                'population' => 189036,
            ],
            [

                'name' => 'Talca',
                'country_code' => 'CHL',
                'district' => 'Maule',
                'population' => 187557,
            ],
            [

                'name' => 'Chillán',
                'country_code' => 'CHL',
                'district' => 'Bíobío',
                'population' => 178182,
            ],
            [

                'name' => 'Iquique',
                'country_code' => 'CHL',
                'district' => 'Tarapacá',
                'population' => 177892,
            ],
            [

                'name' => 'Los Angeles',
                'country_code' => 'CHL',
                'district' => 'Bíobío',
                'population' => 158215,
            ],
            [

                'name' => 'Puerto Montt',
                'country_code' => 'CHL',
                'district' => 'Los Lagos',
                'population' => 152194,
            ],
            [

                'name' => 'Coquimbo',
                'country_code' => 'CHL',
                'district' => 'Coquimbo',
                'population' => 143353,
            ],
            [

                'name' => 'Osorno',
                'country_code' => 'CHL',
                'district' => 'Los Lagos',
                'population' => 141468,
            ],
            [

                'name' => 'La Serena',
                'country_code' => 'CHL',
                'district' => 'Coquimbo',
                'population' => 137409,
            ],
            [

                'name' => 'Calama',
                'country_code' => 'CHL',
                'district' => 'Antofagasta',
                'population' => 137265,
            ],
            [

                'name' => 'Valdivia',
                'country_code' => 'CHL',
                'district' => 'Los Lagos',
                'population' => 133106,
            ],
            [

                'name' => 'Punta Arenas',
                'country_code' => 'CHL',
                'district' => 'Magallanes',
                'population' => 125631,
            ],
            [

                'name' => 'Copiapó',
                'country_code' => 'CHL',
                'district' => 'Atacama',
                'population' => 120128,
            ],
            [

                'name' => 'Quilpué',
                'country_code' => 'CHL',
                'district' => 'Valparaíso',
                'population' => 118857,
            ],
            [

                'name' => 'Curicó',
                'country_code' => 'CHL',
                'district' => 'Maule',
                'population' => 115766,
            ],
            [

                'name' => 'Ovalle',
                'country_code' => 'CHL',
                'district' => 'Coquimbo',
                'population' => 94854,
            ],
            [

                'name' => 'Coronel',
                'country_code' => 'CHL',
                'district' => 'Bíobío',
                'population' => 93061,
            ],
            [

                'name' => 'San Pedro de la Paz',
                'country_code' => 'CHL',
                'district' => 'Bíobío',
                'population' => 91684,
            ],
            [

                'name' => 'Melipilla',
                'country_code' => 'CHL',
                'district' => 'Santiago',
                'population' => 91056,
            ],
            [

                'name' => 'Avarua',
                'country_code' => 'COK',
                'district' => 'Rarotonga',
                'population' => 11900,
            ],
            [

                'name' => 'San José',
                'country_code' => 'CRI',
                'district' => 'San José',
                'population' => 339131,
            ],
            [

                'name' => 'Djibouti',
                'country_code' => 'DJI',
                'district' => 'Djibouti',
                'population' => 383000,
            ],
            [

                'name' => 'Roseau',
                'country_code' => 'DMA',
                'district' => 'St George',
                'population' => 16243,
            ],
            [

                'name' => 'Santo Domingo de Guzmán',
                'country_code' => 'DOM',
                'district' => 'Distrito Nacional',
                'population' => 1609966,
            ],
            [

                'name' => 'Santiago de los Caballeros',
                'country_code' => 'DOM',
                'district' => 'Santiago',
                'population' => 365463,
            ],
            [

                'name' => 'La Romana',
                'country_code' => 'DOM',
                'district' => 'La Romana',
                'population' => 140204,
            ],
            [

                'name' => 'San Pedro de Macorís',
                'country_code' => 'DOM',
                'district' => 'San Pedro de Macorís',
                'population' => 124735,
            ],
            [

                'name' => 'San Francisco de Macorís',
                'country_code' => 'DOM',
                'district' => 'Duarte',
                'population' => 108485,
            ],
            [

                'name' => 'San Felipe de Puerto Plata',
                'country_code' => 'DOM',
                'district' => 'Puerto Plata',
                'population' => 89423,
            ],
            [

                'name' => 'Guayaquil',
                'country_code' => 'ECU',
                'district' => 'Guayas',
                'population' => 2070040,
            ],
            [

                'name' => 'Quito',
                'country_code' => 'ECU',
                'district' => 'Pichincha',
                'population' => 1573458,
            ],
            [

                'name' => 'Cuenca',
                'country_code' => 'ECU',
                'district' => 'Azuay',
                'population' => 270353,
            ],
            [

                'name' => 'Machala',
                'country_code' => 'ECU',
                'district' => 'El Oro',
                'population' => 210368,
            ],
            [

                'name' => 'Santo Domingo de los Colorados',
                'country_code' => 'ECU',
                'district' => 'Pichincha',
                'population' => 202111,
            ],
            [

                'name' => 'Portoviejo',
                'country_code' => 'ECU',
                'district' => 'Manabí',
                'population' => 176413,
            ],
            [

                'name' => 'Ambato',
                'country_code' => 'ECU',
                'district' => 'Tungurahua',
                'population' => 169612,
            ],
            [

                'name' => 'Manta',
                'country_code' => 'ECU',
                'district' => 'Manabí',
                'population' => 164739,
            ],
            [

                'name' => 'Duran [Eloy Alfaro]',
                'country_code' => 'ECU',
                'district' => 'Guayas',
                'population' => 152514,
            ],
            [

                'name' => 'Ibarra',
                'country_code' => 'ECU',
                'district' => 'Imbabura',
                'population' => 130643,
            ],
            [

                'name' => 'Quevedo',
                'country_code' => 'ECU',
                'district' => 'Los Ríos',
                'population' => 129631,
            ],
            [

                'name' => 'Milagro',
                'country_code' => 'ECU',
                'district' => 'Guayas',
                'population' => 124177,
            ],
            [

                'name' => 'Loja',
                'country_code' => 'ECU',
                'district' => 'Loja',
                'population' => 123875,
            ],
            [

                'name' => 'Ríobamba',
                'country_code' => 'ECU',
                'district' => 'Chimborazo',
                'population' => 123163,
            ],
            [

                'name' => 'Esmeraldas',
                'country_code' => 'ECU',
                'district' => 'Esmeraldas',
                'population' => 123045,
            ],
            [

                'name' => 'Cairo',
                'country_code' => 'EGY',
                'district' => 'Kairo',
                'population' => 6789479,
            ],
            [

                'name' => 'Alexandria',
                'country_code' => 'EGY',
                'district' => 'Aleksandria',
                'population' => 3328196,
            ],
            [

                'name' => 'Giza',
                'country_code' => 'EGY',
                'district' => 'Giza',
                'population' => 2221868,
            ],
            [

                'name' => 'Shubra al-Khayma',
                'country_code' => 'EGY',
                'district' => 'al-Qalyubiya',
                'population' => 870716,
            ],
            [

                'name' => 'Port Said',
                'country_code' => 'EGY',
                'district' => 'Port Said',
                'population' => 469533,
            ],
            [

                'name' => 'Suez',
                'country_code' => 'EGY',
                'district' => 'Suez',
                'population' => 417610,
            ],
            [

                'name' => 'al-Mahallat al-Kubra',
                'country_code' => 'EGY',
                'district' => 'al-Gharbiya',
                'population' => 395402,
            ],
            [

                'name' => 'Tanta',
                'country_code' => 'EGY',
                'district' => 'al-Gharbiya',
                'population' => 371010,
            ],
            [

                'name' => 'al-Mansura',
                'country_code' => 'EGY',
                'district' => 'al-Daqahliya',
                'population' => 369621,
            ],
            [

                'name' => 'Luxor',
                'country_code' => 'EGY',
                'district' => 'Luxor',
                'population' => 360503,
            ],
            [

                'name' => 'Asyut',
                'country_code' => 'EGY',
                'district' => 'Asyut',
                'population' => 343498,
            ],
            [

                'name' => 'Bahtim',
                'country_code' => 'EGY',
                'district' => 'al-Qalyubiya',
                'population' => 275807,
            ],
            [

                'name' => 'Zagazig',
                'country_code' => 'EGY',
                'district' => 'al-Sharqiya',
                'population' => 267351,
            ],
            [

                'name' => 'al-Faiyum',
                'country_code' => 'EGY',
                'district' => 'al-Faiyum',
                'population' => 260964,
            ],
            [

                'name' => 'Ismailia',
                'country_code' => 'EGY',
                'district' => 'Ismailia',
                'population' => 254477,
            ],
            [

                'name' => 'Kafr al-Dawwar',
                'country_code' => 'EGY',
                'district' => 'al-Buhayra',
                'population' => 231978,
            ],
            [

                'name' => 'Assuan',
                'country_code' => 'EGY',
                'district' => 'Assuan',
                'population' => 219017,
            ],
            [

                'name' => 'Damanhur',
                'country_code' => 'EGY',
                'district' => 'al-Buhayra',
                'population' => 212203,
            ],
            [

                'name' => 'al-Minya',
                'country_code' => 'EGY',
                'district' => 'al-Minya',
                'population' => 201360,
            ],
            [

                'name' => 'Bani Suwayf',
                'country_code' => 'EGY',
                'district' => 'Bani Suwayf',
                'population' => 172032,
            ],
            [

                'name' => 'Qina',
                'country_code' => 'EGY',
                'district' => 'Qina',
                'population' => 171275,
            ],
            [

                'name' => 'Sawhaj',
                'country_code' => 'EGY',
                'district' => 'Sawhaj',
                'population' => 170125,
            ],
            [

                'name' => 'Shibin al-Kawm',
                'country_code' => 'EGY',
                'district' => 'al-Minufiya',
                'population' => 159909,
            ],
            [

                'name' => 'Bulaq al-Dakrur',
                'country_code' => 'EGY',
                'district' => 'Giza',
                'population' => 148787,
            ],
            [

                'name' => 'Banha',
                'country_code' => 'EGY',
                'district' => 'al-Qalyubiya',
                'population' => 145792,
            ],
            [

                'name' => 'Warraq al-Arab',
                'country_code' => 'EGY',
                'district' => 'Giza',
                'population' => 127108,
            ],
            [

                'name' => 'Kafr al-Shaykh',
                'country_code' => 'EGY',
                'district' => 'Kafr al-Shaykh',
                'population' => 124819,
            ],
            [

                'name' => 'Mallawi',
                'country_code' => 'EGY',
                'district' => 'al-Minya',
                'population' => 119283,
            ],
            [

                'name' => 'Bilbays',
                'country_code' => 'EGY',
                'district' => 'al-Sharqiya',
                'population' => 113608,
            ],
            [

                'name' => 'Mit Ghamr',
                'country_code' => 'EGY',
                'district' => 'al-Daqahliya',
                'population' => 101801,
            ],
            [

                'name' => 'al-Arish',
                'country_code' => 'EGY',
                'district' => 'Shamal Sina',
                'population' => 100447,
            ],
            [

                'name' => 'Talkha',
                'country_code' => 'EGY',
                'district' => 'al-Daqahliya',
                'population' => 97700,
            ],
            [

                'name' => 'Qalyub',
                'country_code' => 'EGY',
                'district' => 'al-Qalyubiya',
                'population' => 97200,
            ],
            [

                'name' => 'Jirja',
                'country_code' => 'EGY',
                'district' => 'Sawhaj',
                'population' => 95400,
            ],
            [

                'name' => 'Idfu',
                'country_code' => 'EGY',
                'district' => 'Qina',
                'population' => 94200,
            ],
            [

                'name' => 'al-Hawamidiya',
                'country_code' => 'EGY',
                'district' => 'Giza',
                'population' => 91700,
            ],
            [

                'name' => 'Disuq',
                'country_code' => 'EGY',
                'district' => 'Kafr al-Shaykh',
                'population' => 91300,
            ],
            [

                'name' => 'San Salvador',
                'country_code' => 'SLV',
                'district' => 'San Salvador',
                'population' => 415346,
            ],
            [

                'name' => 'Santa Ana',
                'country_code' => 'SLV',
                'district' => 'Santa Ana',
                'population' => 139389,
            ],
            [

                'name' => 'Mejicanos',
                'country_code' => 'SLV',
                'district' => 'San Salvador',
                'population' => 138800,
            ],
            [

                'name' => 'Soyapango',
                'country_code' => 'SLV',
                'district' => 'San Salvador',
                'population' => 129800,
            ],
            [

                'name' => 'San Miguel',
                'country_code' => 'SLV',
                'district' => 'San Miguel',
                'population' => 127696,
            ],
            [

                'name' => 'Nueva San Salvador',
                'country_code' => 'SLV',
                'district' => 'La Libertad',
                'population' => 98400,
            ],
            [

                'name' => 'Apopa',
                'country_code' => 'SLV',
                'district' => 'San Salvador',
                'population' => 88800,
            ],
            [

                'name' => 'Asmara',
                'country_code' => 'ERI',
                'district' => 'Maekel',
                'population' => 431000,
            ],
            [

                'name' => 'Madrid',
                'country_code' => 'ESP',
                'district' => 'Madrid',
                'population' => 2879052,
            ],
            [

                'name' => 'Barcelona',
                'country_code' => 'ESP',
                'district' => 'Katalonia',
                'population' => 1503451,
            ],
            [

                'name' => 'Valencia',
                'country_code' => 'ESP',
                'district' => 'Valencia',
                'population' => 739412,
            ],
            [

                'name' => 'Sevilla',
                'country_code' => 'ESP',
                'district' => 'Andalusia',
                'population' => 701927,
            ],
            [

                'name' => 'Zaragoza',
                'country_code' => 'ESP',
                'district' => 'Aragonia',
                'population' => 603367,
            ],
            [

                'name' => 'Málaga',
                'country_code' => 'ESP',
                'district' => 'Andalusia',
                'population' => 530553,
            ],
            [

                'name' => 'Bilbao',
                'country_code' => 'ESP',
                'district' => 'Baskimaa',
                'population' => 357589,
            ],
            [

                'name' => 'Las Palmas de Gran Canaria',
                'country_code' => 'ESP',
                'district' => 'Canary Islands',
                'population' => 354757,
            ],
            [

                'name' => 'Murcia',
                'country_code' => 'ESP',
                'district' => 'Murcia',
                'population' => 353504,
            ],
            [

                'name' => 'Palma de Mallorca',
                'country_code' => 'ESP',
                'district' => 'Balears',
                'population' => 326993,
            ],
            [

                'name' => 'Valladolid',
                'country_code' => 'ESP',
                'district' => 'Castilla and León',
                'population' => 319998,
            ],
            [

                'name' => 'Córdoba',
                'country_code' => 'ESP',
                'district' => 'Andalusia',
                'population' => 311708,
            ],
            [

                'name' => 'Vigo',
                'country_code' => 'ESP',
                'district' => 'Galicia',
                'population' => 283670,
            ],
            [

                'name' => 'Alicante [Alacant]',
                'country_code' => 'ESP',
                'district' => 'Valencia',
                'population' => 272432,
            ],
            [

                'name' => 'Gijón',
                'country_code' => 'ESP',
                'district' => 'Asturia',
                'population' => 267980,
            ],
            [

                'name' => 'L´Hospitalet de Llobregat',
                'country_code' => 'ESP',
                'district' => 'Katalonia',
                'population' => 247986,
            ],
            [

                'name' => 'Granada',
                'country_code' => 'ESP',
                'district' => 'Andalusia',
                'population' => 244767,
            ],
            [

                'name' => 'A Coruña (La Coruña)',
                'country_code' => 'ESP',
                'district' => 'Galicia',
                'population' => 243402,
            ],
            [

                'name' => 'Vitoria-Gasteiz',
                'country_code' => 'ESP',
                'district' => 'Baskimaa',
                'population' => 217154,
            ],
            [

                'name' => 'Santa Cruz de Tenerife',
                'country_code' => 'ESP',
                'district' => 'Canary Islands',
                'population' => 213050,
            ],
            [

                'name' => 'Badalona',
                'country_code' => 'ESP',
                'district' => 'Katalonia',
                'population' => 209635,
            ],
            [

                'name' => 'Oviedo',
                'country_code' => 'ESP',
                'district' => 'Asturia',
                'population' => 200453,
            ],
            [

                'name' => 'Móstoles',
                'country_code' => 'ESP',
                'district' => 'Madrid',
                'population' => 195351,
            ],
            [

                'name' => 'Elche [Elx]',
                'country_code' => 'ESP',
                'district' => 'Valencia',
                'population' => 193174,
            ],
            [

                'name' => 'Sabadell',
                'country_code' => 'ESP',
                'district' => 'Katalonia',
                'population' => 184859,
            ],
            [

                'name' => 'Santander',
                'country_code' => 'ESP',
                'district' => 'Cantabria',
                'population' => 184165,
            ],
            [

                'name' => 'Jerez de la Frontera',
                'country_code' => 'ESP',
                'district' => 'Andalusia',
                'population' => 182660,
            ],
            [

                'name' => 'Pamplona [Iruña]',
                'country_code' => 'ESP',
                'district' => 'Navarra',
                'population' => 180483,
            ],
            [

                'name' => 'Donostia-San Sebastián',
                'country_code' => 'ESP',
                'district' => 'Baskimaa',
                'population' => 179208,
            ],
            [

                'name' => 'Cartagena',
                'country_code' => 'ESP',
                'district' => 'Murcia',
                'population' => 177709,
            ],
            [

                'name' => 'Leganés',
                'country_code' => 'ESP',
                'district' => 'Madrid',
                'population' => 173163,
            ],
            [

                'name' => 'Fuenlabrada',
                'country_code' => 'ESP',
                'district' => 'Madrid',
                'population' => 171173,
            ],
            [

                'name' => 'Almería',
                'country_code' => 'ESP',
                'district' => 'Andalusia',
                'population' => 169027,
            ],
            [

                'name' => 'Terrassa',
                'country_code' => 'ESP',
                'district' => 'Katalonia',
                'population' => 168695,
            ],
            [

                'name' => 'Alcalá de Henares',
                'country_code' => 'ESP',
                'district' => 'Madrid',
                'population' => 164463,
            ],
            [

                'name' => 'Burgos',
                'country_code' => 'ESP',
                'district' => 'Castilla and León',
                'population' => 162802,
            ],
            [

                'name' => 'Salamanca',
                'country_code' => 'ESP',
                'district' => 'Castilla and León',
                'population' => 158720,
            ],
            [

                'name' => 'Albacete',
                'country_code' => 'ESP',
                'district' => 'Kastilia-La Mancha',
                'population' => 147527,
            ],
            [

                'name' => 'Getafe',
                'country_code' => 'ESP',
                'district' => 'Madrid',
                'population' => 145371,
            ],
            [

                'name' => 'Cádiz',
                'country_code' => 'ESP',
                'district' => 'Andalusia',
                'population' => 142449,
            ],
            [

                'name' => 'Alcorcón',
                'country_code' => 'ESP',
                'district' => 'Madrid',
                'population' => 142048,
            ],
            [

                'name' => 'Huelva',
                'country_code' => 'ESP',
                'district' => 'Andalusia',
                'population' => 140583,
            ],
            [

                'name' => 'León',
                'country_code' => 'ESP',
                'district' => 'Castilla and León',
                'population' => 139809,
            ],
            [

                'name' => 'Castellón de la Plana [Castell',
                'country_code' => 'ESP',
                'district' => 'Valencia',
                'population' => 139712,
            ],
            [

                'name' => 'Badajoz',
                'country_code' => 'ESP',
                'district' => 'Extremadura',
                'population' => 136613,
            ],
            [

                'name' => '[San Cristóbal de] la Laguna',
                'country_code' => 'ESP',
                'district' => 'Canary Islands',
                'population' => 127945,
            ],
            [

                'name' => 'Logroño',
                'country_code' => 'ESP',
                'district' => 'La Rioja',
                'population' => 127093,
            ],
            [

                'name' => 'Santa Coloma de Gramenet',
                'country_code' => 'ESP',
                'district' => 'Katalonia',
                'population' => 120802,
            ],
            [

                'name' => 'Tarragona',
                'country_code' => 'ESP',
                'district' => 'Katalonia',
                'population' => 113016,
            ],
            [

                'name' => 'Lleida (Lérida)',
                'country_code' => 'ESP',
                'district' => 'Katalonia',
                'population' => 112207,
            ],
            [

                'name' => 'Jaén',
                'country_code' => 'ESP',
                'district' => 'Andalusia',
                'population' => 109247,
            ],
            [

                'name' => 'Ourense (Orense)',
                'country_code' => 'ESP',
                'district' => 'Galicia',
                'population' => 109120,
            ],
            [

                'name' => 'Mataró',
                'country_code' => 'ESP',
                'district' => 'Katalonia',
                'population' => 104095,
            ],
            [

                'name' => 'Algeciras',
                'country_code' => 'ESP',
                'district' => 'Andalusia',
                'population' => 103106,
            ],
            [

                'name' => 'Marbella',
                'country_code' => 'ESP',
                'district' => 'Andalusia',
                'population' => 101144,
            ],
            [

                'name' => 'Barakaldo',
                'country_code' => 'ESP',
                'district' => 'Baskimaa',
                'population' => 98212,
            ],
            [

                'name' => 'Dos Hermanas',
                'country_code' => 'ESP',
                'district' => 'Andalusia',
                'population' => 94591,
            ],
            [

                'name' => 'Santiago de Compostela',
                'country_code' => 'ESP',
                'district' => 'Galicia',
                'population' => 93745,
            ],
            [

                'name' => 'Torrejón de Ardoz',
                'country_code' => 'ESP',
                'district' => 'Madrid',
                'population' => 92262,
            ],
            [

                'name' => 'Cape Town',
                'country_code' => 'ZAF',
                'district' => 'Western Cape',
                'population' => 2352121,
            ],
            [

                'name' => 'Soweto',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 904165,
            ],
            [

                'name' => 'Johannesburg',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 756653,
            ],
            [

                'name' => 'Port Elizabeth',
                'country_code' => 'ZAF',
                'district' => 'Eastern Cape',
                'population' => 752319,
            ],
            [

                'name' => 'Pretoria',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 658630,
            ],
            [

                'name' => 'Inanda',
                'country_code' => 'ZAF',
                'district' => 'KwaZulu-Natal',
                'population' => 634065,
            ],
            [

                'name' => 'Durban',
                'country_code' => 'ZAF',
                'district' => 'KwaZulu-Natal',
                'population' => 566120,
            ],
            [

                'name' => 'Vanderbijlpark',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 468931,
            ],
            [

                'name' => 'Kempton Park',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 442633,
            ],
            [

                'name' => 'Alberton',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 410102,
            ],
            [

                'name' => 'Pinetown',
                'country_code' => 'ZAF',
                'district' => 'KwaZulu-Natal',
                'population' => 378810,
            ],
            [

                'name' => 'Pietermaritzburg',
                'country_code' => 'ZAF',
                'district' => 'KwaZulu-Natal',
                'population' => 370190,
            ],
            [

                'name' => 'Benoni',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 365467,
            ],
            [

                'name' => 'Randburg',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 341288,
            ],
            [

                'name' => 'Umlazi',
                'country_code' => 'ZAF',
                'district' => 'KwaZulu-Natal',
                'population' => 339233,
            ],
            [

                'name' => 'Bloemfontein',
                'country_code' => 'ZAF',
                'district' => 'Free State',
                'population' => 334341,
            ],
            [

                'name' => 'Vereeniging',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 328535,
            ],
            [

                'name' => 'Wonderboom',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 283289,
            ],
            [

                'name' => 'Roodepoort',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 279340,
            ],
            [

                'name' => 'Boksburg',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 262648,
            ],
            [

                'name' => 'Klerksdorp',
                'country_code' => 'ZAF',
                'district' => 'North West',
                'population' => 261911,
            ],
            [

                'name' => 'Soshanguve',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 242727,
            ],
            [

                'name' => 'Newcastle',
                'country_code' => 'ZAF',
                'district' => 'KwaZulu-Natal',
                'population' => 222993,
            ],
            [

                'name' => 'East London',
                'country_code' => 'ZAF',
                'district' => 'Eastern Cape',
                'population' => 221047,
            ],
            [

                'name' => 'Welkom',
                'country_code' => 'ZAF',
                'district' => 'Free State',
                'population' => 203296,
            ],
            [

                'name' => 'Kimberley',
                'country_code' => 'ZAF',
                'district' => 'Northern Cape',
                'population' => 197254,
            ],
            [

                'name' => 'Uitenhage',
                'country_code' => 'ZAF',
                'district' => 'Eastern Cape',
                'population' => 192120,
            ],
            [

                'name' => 'Chatsworth',
                'country_code' => 'ZAF',
                'district' => 'KwaZulu-Natal',
                'population' => 189885,
            ],
            [

                'name' => 'Mdantsane',
                'country_code' => 'ZAF',
                'district' => 'Eastern Cape',
                'population' => 182639,
            ],
            [

                'name' => 'Krugersdorp',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 181503,
            ],
            [

                'name' => 'Botshabelo',
                'country_code' => 'ZAF',
                'district' => 'Free State',
                'population' => 177971,
            ],
            [

                'name' => 'Brakpan',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 171363,
            ],
            [

                'name' => 'Witbank',
                'country_code' => 'ZAF',
                'district' => 'Mpumalanga',
                'population' => 167183,
            ],
            [

                'name' => 'Oberholzer',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 164367,
            ],
            [

                'name' => 'Germiston',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 164252,
            ],
            [

                'name' => 'Springs',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 162072,
            ],
            [

                'name' => 'Westonaria',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 159632,
            ],
            [

                'name' => 'Randfontein',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 120838,
            ],
            [

                'name' => 'Paarl',
                'country_code' => 'ZAF',
                'district' => 'Western Cape',
                'population' => 105768,
            ],
            [

                'name' => 'Potchefstroom',
                'country_code' => 'ZAF',
                'district' => 'North West',
                'population' => 101817,
            ],
            [

                'name' => 'Rustenburg',
                'country_code' => 'ZAF',
                'district' => 'North West',
                'population' => 97008,
            ],
            [

                'name' => 'Nigel',
                'country_code' => 'ZAF',
                'district' => 'Gauteng',
                'population' => 96734,
            ],
            [

                'name' => 'George',
                'country_code' => 'ZAF',
                'district' => 'Western Cape',
                'population' => 93818,
            ],
            [

                'name' => 'Ladysmith',
                'country_code' => 'ZAF',
                'district' => 'KwaZulu-Natal',
                'population' => 89292,
            ],
            [

                'name' => 'Addis Abeba',
                'country_code' => 'ETH',
                'district' => 'Addis Abeba',
                'population' => 2495000,
            ],
            [

                'name' => 'Dire Dawa',
                'country_code' => 'ETH',
                'district' => 'Dire Dawa',
                'population' => 164851,
            ],
            [

                'name' => 'Nazret',
                'country_code' => 'ETH',
                'district' => 'Oromia',
                'population' => 127842,
            ],
            [

                'name' => 'Gonder',
                'country_code' => 'ETH',
                'district' => 'Amhara',
                'population' => 112249,
            ],
            [

                'name' => 'Dese',
                'country_code' => 'ETH',
                'district' => 'Amhara',
                'population' => 97314,
            ],
            [

                'name' => 'Mekele',
                'country_code' => 'ETH',
                'district' => 'Tigray',
                'population' => 96938,
            ],
            [

                'name' => 'Bahir Dar',
                'country_code' => 'ETH',
                'district' => 'Amhara',
                'population' => 96140,
            ],
            [

                'name' => 'Stanley',
                'country_code' => 'FLK',
                'district' => 'East Falkland',
                'population' => 1636,
            ],
            [

                'name' => 'Suva',
                'country_code' => 'FJI',
                'district' => 'Central',
                'population' => 77366,
            ],
            [

                'name' => 'Quezon',
                'country_code' => 'PHL',
                'district' => 'National Capital Reg',
                'population' => 2173831,
            ],
            [

                'name' => 'Manila',
                'country_code' => 'PHL',
                'district' => 'National Capital Reg',
                'population' => 1581082,
            ],
            [

                'name' => 'Kalookan',
                'country_code' => 'PHL',
                'district' => 'National Capital Reg',
                'population' => 1177604,
            ],
            [

                'name' => 'Davao',
                'country_code' => 'PHL',
                'district' => 'Southern Mindanao',
                'population' => 1147116,
            ],
            [

                'name' => 'Cebu',
                'country_code' => 'PHL',
                'district' => 'Central Visayas',
                'population' => 718821,
            ],
            [

                'name' => 'Zamboanga',
                'country_code' => 'PHL',
                'district' => 'Western Mindanao',
                'population' => 601794,
            ],
            [

                'name' => 'Pasig',
                'country_code' => 'PHL',
                'district' => 'National Capital Reg',
                'population' => 505058,
            ],
            [

                'name' => 'Valenzuela',
                'country_code' => 'PHL',
                'district' => 'National Capital Reg',
                'population' => 485433,
            ],
            [

                'name' => 'Las Piñas',
                'country_code' => 'PHL',
                'district' => 'National Capital Reg',
                'population' => 472780,
            ],
            [

                'name' => 'Antipolo',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 470866,
            ],
            [

                'name' => 'Taguig',
                'country_code' => 'PHL',
                'district' => 'National Capital Reg',
                'population' => 467375,
            ],
            [

                'name' => 'Cagayan de Oro',
                'country_code' => 'PHL',
                'district' => 'Northern Mindanao',
                'population' => 461877,
            ],
            [

                'name' => 'Parañaque',
                'country_code' => 'PHL',
                'district' => 'National Capital Reg',
                'population' => 449811,
            ],
            [

                'name' => 'Makati',
                'country_code' => 'PHL',
                'district' => 'National Capital Reg',
                'population' => 444867,
            ],
            [

                'name' => 'Bacolod',
                'country_code' => 'PHL',
                'district' => 'Western Visayas',
                'population' => 429076,
            ],
            [

                'name' => 'General Santos',
                'country_code' => 'PHL',
                'district' => 'Southern Mindanao',
                'population' => 411822,
            ],
            [

                'name' => 'Marikina',
                'country_code' => 'PHL',
                'district' => 'National Capital Reg',
                'population' => 391170,
            ],
            [

                'name' => 'Dasmariñas',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 379520,
            ],
            [

                'name' => 'Muntinlupa',
                'country_code' => 'PHL',
                'district' => 'National Capital Reg',
                'population' => 379310,
            ],
            [

                'name' => 'Iloilo',
                'country_code' => 'PHL',
                'district' => 'Western Visayas',
                'population' => 365820,
            ],
            [

                'name' => 'Pasay',
                'country_code' => 'PHL',
                'district' => 'National Capital Reg',
                'population' => 354908,
            ],
            [

                'name' => 'Malabon',
                'country_code' => 'PHL',
                'district' => 'National Capital Reg',
                'population' => 338855,
            ],
            [

                'name' => 'San José del Monte',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 315807,
            ],
            [

                'name' => 'Bacoor',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 305699,
            ],
            [

                'name' => 'Iligan',
                'country_code' => 'PHL',
                'district' => 'Central Mindanao',
                'population' => 285061,
            ],
            [

                'name' => 'Calamba',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 281146,
            ],
            [

                'name' => 'Mandaluyong',
                'country_code' => 'PHL',
                'district' => 'National Capital Reg',
                'population' => 278474,
            ],
            [

                'name' => 'Butuan',
                'country_code' => 'PHL',
                'district' => 'Caraga',
                'population' => 267279,
            ],
            [

                'name' => 'Angeles',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 263971,
            ],
            [

                'name' => 'Tarlac',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 262481,
            ],
            [

                'name' => 'Mandaue',
                'country_code' => 'PHL',
                'district' => 'Central Visayas',
                'population' => 259728,
            ],
            [

                'name' => 'Baguio',
                'country_code' => 'PHL',
                'district' => 'CAR',
                'population' => 252386,
            ],
            [

                'name' => 'Batangas',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 247588,
            ],
            [

                'name' => 'Cainta',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 242511,
            ],
            [

                'name' => 'San Pedro',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 231403,
            ],
            [

                'name' => 'Navotas',
                'country_code' => 'PHL',
                'district' => 'National Capital Reg',
                'population' => 230403,
            ],
            [

                'name' => 'Cabanatuan',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 222859,
            ],
            [

                'name' => 'San Fernando',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 221857,
            ],
            [

                'name' => 'Lipa',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 218447,
            ],
            [

                'name' => 'Lapu-Lapu',
                'country_code' => 'PHL',
                'district' => 'Central Visayas',
                'population' => 217019,
            ],
            [

                'name' => 'San Pablo',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 207927,
            ],
            [

                'name' => 'Biñan',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 201186,
            ],
            [

                'name' => 'Taytay',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 198183,
            ],
            [

                'name' => 'Lucena',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 196075,
            ],
            [

                'name' => 'Imus',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 195482,
            ],
            [

                'name' => 'Olongapo',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 194260,
            ],
            [

                'name' => 'Binangonan',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 187691,
            ],
            [

                'name' => 'Santa Rosa',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 185633,
            ],
            [

                'name' => 'Tagum',
                'country_code' => 'PHL',
                'district' => 'Southern Mindanao',
                'population' => 179531,
            ],
            [

                'name' => 'Tacloban',
                'country_code' => 'PHL',
                'district' => 'Eastern Visayas',
                'population' => 178639,
            ],
            [

                'name' => 'Malolos',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 175291,
            ],
            [

                'name' => 'Mabalacat',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 171045,
            ],
            [

                'name' => 'Cotabato',
                'country_code' => 'PHL',
                'district' => 'Central Mindanao',
                'population' => 163849,
            ],
            [

                'name' => 'Meycauayan',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 163037,
            ],
            [

                'name' => 'Puerto Princesa',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 161912,
            ],
            [

                'name' => 'Legazpi',
                'country_code' => 'PHL',
                'district' => 'Bicol',
                'population' => 157010,
            ],
            [

                'name' => 'Silang',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 156137,
            ],
            [

                'name' => 'Ormoc',
                'country_code' => 'PHL',
                'district' => 'Eastern Visayas',
                'population' => 154297,
            ],
            [

                'name' => 'San Carlos',
                'country_code' => 'PHL',
                'district' => 'Ilocos',
                'population' => 154264,
            ],
            [

                'name' => 'Kabankalan',
                'country_code' => 'PHL',
                'district' => 'Western Visayas',
                'population' => 149769,
            ],
            [

                'name' => 'Talisay',
                'country_code' => 'PHL',
                'district' => 'Central Visayas',
                'population' => 148110,
            ],
            [

                'name' => 'Valencia',
                'country_code' => 'PHL',
                'district' => 'Northern Mindanao',
                'population' => 147924,
            ],
            [

                'name' => 'Calbayog',
                'country_code' => 'PHL',
                'district' => 'Eastern Visayas',
                'population' => 147187,
            ],
            [

                'name' => 'Santa Maria',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 144282,
            ],
            [

                'name' => 'Pagadian',
                'country_code' => 'PHL',
                'district' => 'Western Mindanao',
                'population' => 142515,
            ],
            [

                'name' => 'Cadiz',
                'country_code' => 'PHL',
                'district' => 'Western Visayas',
                'population' => 141954,
            ],
            [

                'name' => 'Bago',
                'country_code' => 'PHL',
                'district' => 'Western Visayas',
                'population' => 141721,
            ],
            [

                'name' => 'Toledo',
                'country_code' => 'PHL',
                'district' => 'Central Visayas',
                'population' => 141174,
            ],
            [

                'name' => 'Naga',
                'country_code' => 'PHL',
                'district' => 'Bicol',
                'population' => 137810,
            ],
            [

                'name' => 'San Mateo',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 135603,
            ],
            [

                'name' => 'Panabo',
                'country_code' => 'PHL',
                'district' => 'Southern Mindanao',
                'population' => 133950,
            ],
            [

                'name' => 'Koronadal',
                'country_code' => 'PHL',
                'district' => 'Southern Mindanao',
                'population' => 133786,
            ],
            [

                'name' => 'Marawi',
                'country_code' => 'PHL',
                'district' => 'Central Mindanao',
                'population' => 131090,
            ],
            [

                'name' => 'Dagupan',
                'country_code' => 'PHL',
                'district' => 'Ilocos',
                'population' => 130328,
            ],
            [

                'name' => 'Sagay',
                'country_code' => 'PHL',
                'district' => 'Western Visayas',
                'population' => 129765,
            ],
            [

                'name' => 'Roxas',
                'country_code' => 'PHL',
                'district' => 'Western Visayas',
                'population' => 126352,
            ],
            [

                'name' => 'Lubao',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 125699,
            ],
            [

                'name' => 'Digos',
                'country_code' => 'PHL',
                'district' => 'Southern Mindanao',
                'population' => 125171,
            ],
            [

                'name' => 'San Miguel',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 123824,
            ],
            [

                'name' => 'Malaybalay',
                'country_code' => 'PHL',
                'district' => 'Northern Mindanao',
                'population' => 123672,
            ],
            [

                'name' => 'Tuguegarao',
                'country_code' => 'PHL',
                'district' => 'Cagayan Valley',
                'population' => 120645,
            ],
            [

                'name' => 'Ilagan',
                'country_code' => 'PHL',
                'district' => 'Cagayan Valley',
                'population' => 119990,
            ],
            [

                'name' => 'Baliuag',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 119675,
            ],
            [

                'name' => 'Surigao',
                'country_code' => 'PHL',
                'district' => 'Caraga',
                'population' => 118534,
            ],
            [

                'name' => 'San Carlos',
                'country_code' => 'PHL',
                'district' => 'Western Visayas',
                'population' => 118259,
            ],
            [

                'name' => 'San Juan del Monte',
                'country_code' => 'PHL',
                'district' => 'National Capital Reg',
                'population' => 117680,
            ],
            [

                'name' => 'Tanauan',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 117539,
            ],
            [

                'name' => 'Concepcion',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 115171,
            ],
            [

                'name' => 'Rodriguez (Montalban)',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 115167,
            ],
            [

                'name' => 'Sariaya',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 114568,
            ],
            [

                'name' => 'Malasiqui',
                'country_code' => 'PHL',
                'district' => 'Ilocos',
                'population' => 113190,
            ],
            [

                'name' => 'General Mariano Alvarez',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 112446,
            ],
            [

                'name' => 'Urdaneta',
                'country_code' => 'PHL',
                'district' => 'Ilocos',
                'population' => 111582,
            ],
            [

                'name' => 'Hagonoy',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 111425,
            ],
            [

                'name' => 'San Jose',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 111009,
            ],
            [

                'name' => 'Polomolok',
                'country_code' => 'PHL',
                'district' => 'Southern Mindanao',
                'population' => 110709,
            ],
            [

                'name' => 'Santiago',
                'country_code' => 'PHL',
                'district' => 'Cagayan Valley',
                'population' => 110531,
            ],
            [

                'name' => 'Tanza',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 110517,
            ],
            [

                'name' => 'Ozamis',
                'country_code' => 'PHL',
                'district' => 'Northern Mindanao',
                'population' => 110420,
            ],
            [

                'name' => 'Mexico',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 109481,
            ],
            [

                'name' => 'San Jose',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 108254,
            ],
            [

                'name' => 'Silay',
                'country_code' => 'PHL',
                'district' => 'Western Visayas',
                'population' => 107722,
            ],
            [

                'name' => 'General Trias',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 107691,
            ],
            [

                'name' => 'Tabaco',
                'country_code' => 'PHL',
                'district' => 'Bicol',
                'population' => 107166,
            ],
            [

                'name' => 'Cabuyao',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 106630,
            ],
            [

                'name' => 'Calapan',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 105910,
            ],
            [

                'name' => 'Mati',
                'country_code' => 'PHL',
                'district' => 'Southern Mindanao',
                'population' => 105908,
            ],
            [

                'name' => 'Midsayap',
                'country_code' => 'PHL',
                'district' => 'Central Mindanao',
                'population' => 105760,
            ],
            [

                'name' => 'Cauayan',
                'country_code' => 'PHL',
                'district' => 'Cagayan Valley',
                'population' => 103952,
            ],
            [

                'name' => 'Gingoog',
                'country_code' => 'PHL',
                'district' => 'Northern Mindanao',
                'population' => 102379,
            ],
            [

                'name' => 'Dumaguete',
                'country_code' => 'PHL',
                'district' => 'Central Visayas',
                'population' => 102265,
            ],
            [

                'name' => 'San Fernando',
                'country_code' => 'PHL',
                'district' => 'Ilocos',
                'population' => 102082,
            ],
            [

                'name' => 'Arayat',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 101792,
            ],
            [

                'name' => 'Bayawan (Tulong)',
                'country_code' => 'PHL',
                'district' => 'Central Visayas',
                'population' => 101391,
            ],
            [

                'name' => 'Kidapawan',
                'country_code' => 'PHL',
                'district' => 'Central Mindanao',
                'population' => 101205,
            ],
            [

                'name' => 'Daraga (Locsin)',
                'country_code' => 'PHL',
                'district' => 'Bicol',
                'population' => 101031,
            ],
            [

                'name' => 'Marilao',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 101017,
            ],
            [

                'name' => 'Malita',
                'country_code' => 'PHL',
                'district' => 'Southern Mindanao',
                'population' => 100000,
            ],
            [

                'name' => 'Dipolog',
                'country_code' => 'PHL',
                'district' => 'Western Mindanao',
                'population' => 99862,
            ],
            [

                'name' => 'Cavite',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 99367,
            ],
            [

                'name' => 'Danao',
                'country_code' => 'PHL',
                'district' => 'Central Visayas',
                'population' => 98781,
            ],
            [

                'name' => 'Bislig',
                'country_code' => 'PHL',
                'district' => 'Caraga',
                'population' => 97860,
            ],
            [

                'name' => 'Talavera',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 97329,
            ],
            [

                'name' => 'Guagua',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 96858,
            ],
            [

                'name' => 'Bayambang',
                'country_code' => 'PHL',
                'district' => 'Ilocos',
                'population' => 96609,
            ],
            [

                'name' => 'Nasugbu',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 96113,
            ],
            [

                'name' => 'Baybay',
                'country_code' => 'PHL',
                'district' => 'Eastern Visayas',
                'population' => 95630,
            ],
            [

                'name' => 'Capas',
                'country_code' => 'PHL',
                'district' => 'Central Luzon',
                'population' => 95219,
            ],
            [

                'name' => 'Sultan Kudarat',
                'country_code' => 'PHL',
                'district' => 'ARMM',
                'population' => 94861,
            ],
            [

                'name' => 'Laoag',
                'country_code' => 'PHL',
                'district' => 'Ilocos',
                'population' => 94466,
            ],
            [

                'name' => 'Bayugan',
                'country_code' => 'PHL',
                'district' => 'Caraga',
                'population' => 93623,
            ],
            [

                'name' => 'Malungon',
                'country_code' => 'PHL',
                'district' => 'Southern Mindanao',
                'population' => 93232,
            ],
            [

                'name' => 'Santa Cruz',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 92694,
            ],
            [

                'name' => 'Sorsogon',
                'country_code' => 'PHL',
                'district' => 'Bicol',
                'population' => 92512,
            ],
            [

                'name' => 'Candelaria',
                'country_code' => 'PHL',
                'district' => 'Southern Tagalog',
                'population' => 92429,
            ],
            [

                'name' => 'Ligao',
                'country_code' => 'PHL',
                'district' => 'Bicol',
                'population' => 90603,
            ],
            [

                'name' => 'Tórshavn',
                'country_code' => 'FRO',
                'district' => 'Streymoyar',
                'population' => 14542,
            ],
            [

                'name' => 'Libreville',
                'country_code' => 'GAB',
                'district' => 'Estuaire',
                'population' => 419000,
            ],
            [

                'name' => 'Serekunda',
                'country_code' => 'GMB',
                'district' => 'Kombo St Mary',
                'population' => 102600,
            ],
            [

                'name' => 'Banjul',
                'country_code' => 'GMB',
                'district' => 'Banjul',
                'population' => 42326,
            ],
            [

                'name' => 'Tbilisi',
                'country_code' => 'GEO',
                'district' => 'Tbilisi',
                'population' => 1235200,
            ],
            [

                'name' => 'Kutaisi',
                'country_code' => 'GEO',
                'district' => 'Imereti',
                'population' => 240900,
            ],
            [

                'name' => 'Rustavi',
                'country_code' => 'GEO',
                'district' => 'Kvemo Kartli',
                'population' => 155400,
            ],
            [

                'name' => 'Batumi',
                'country_code' => 'GEO',
                'district' => 'Adzaria [Atšara]',
                'population' => 137700,
            ],
            [

                'name' => 'Sohumi',
                'country_code' => 'GEO',
                'district' => 'Abhasia [Aphazeti]',
                'population' => 111700,
            ],
            [

                'name' => 'Accra',
                'country_code' => 'GHA',
                'district' => 'Greater Accra',
                'population' => 1070000,
            ],
            [

                'name' => 'Kumasi',
                'country_code' => 'GHA',
                'district' => 'Ashanti',
                'population' => 385192,
            ],
            [

                'name' => 'Tamale',
                'country_code' => 'GHA',
                'district' => 'Northern',
                'population' => 151069,
            ],
            [

                'name' => 'Tema',
                'country_code' => 'GHA',
                'district' => 'Greater Accra',
                'population' => 109975,
            ],
            [

                'name' => 'Sekondi-Takoradi',
                'country_code' => 'GHA',
                'district' => 'Western',
                'population' => 103653,
            ],
            [

                'name' => 'Gibraltar',
                'country_code' => 'GIB',
                'district' => '–',
                'population' => 27025,
            ],
            [

                'name' => 'Saint George´s',
                'country_code' => 'GRD',
                'district' => 'St George',
                'population' => 4621,
            ],
            [

                'name' => 'Nuuk',
                'country_code' => 'GRL',
                'district' => 'Kitaa',
                'population' => 13445,
            ],
            [

                'name' => 'Les Abymes',
                'country_code' => 'GLP',
                'district' => 'Grande-Terre',
                'population' => 62947,
            ],
            [

                'name' => 'Basse-Terre',
                'country_code' => 'GLP',
                'district' => 'Basse-Terre',
                'population' => 12433,
            ],
            [

                'name' => 'Tamuning',
                'country_code' => 'GUM',
                'district' => '–',
                'population' => 9500,
            ],
            [

                'name' => 'Agaña',
                'country_code' => 'GUM',
                'district' => '–',
                'population' => 1139,
            ],
            [

                'name' => 'Ciudad de Guatemala',
                'country_code' => 'GTM',
                'district' => 'Guatemala',
                'population' => 823301,
            ],
            [

                'name' => 'Mixco',
                'country_code' => 'GTM',
                'district' => 'Guatemala',
                'population' => 209791,
            ],
            [

                'name' => 'Villa Nueva',
                'country_code' => 'GTM',
                'district' => 'Guatemala',
                'population' => 101295,
            ],
            [

                'name' => 'Quetzaltenango',
                'country_code' => 'GTM',
                'district' => 'Quetzaltenango',
                'population' => 90801,
            ],
            [

                'name' => 'Conakry',
                'country_code' => 'GIN',
                'district' => 'Conakry',
                'population' => 1090610,
            ],
            [

                'name' => 'Bissau',
                'country_code' => 'GNB',
                'district' => 'Bissau',
                'population' => 241000,
            ],
            [

                'name' => 'Georgetown',
                'country_code' => 'GUY',
                'district' => 'Georgetown',
                'population' => 254000,
            ],
            [

                'name' => 'Port-au-Prince',
                'country_code' => 'HTI',
                'district' => 'Ouest',
                'population' => 884472,
            ],
            [

                'name' => 'Carrefour',
                'country_code' => 'HTI',
                'district' => 'Ouest',
                'population' => 290204,
            ],
            [

                'name' => 'Delmas',
                'country_code' => 'HTI',
                'district' => 'Ouest',
                'population' => 240429,
            ],
            [

                'name' => 'Le-Cap-Haïtien',
                'country_code' => 'HTI',
                'district' => 'Nord',
                'population' => 102233,
            ],
            [

                'name' => 'Tegucigalpa',
                'country_code' => 'HND',
                'district' => 'Distrito Central',
                'population' => 813900,
            ],
            [

                'name' => 'San Pedro Sula',
                'country_code' => 'HND',
                'district' => 'Cortés',
                'population' => 383900,
            ],
            [

                'name' => 'La Ceiba',
                'country_code' => 'HND',
                'district' => 'Atlántida',
                'population' => 89200,
            ],
            [

                'name' => 'Kowloon and New Kowloon',
                'country_code' => 'HKG',
                'district' => 'Kowloon and New Kowl',
                'population' => 1987996,
            ],
            [

                'name' => 'Victoria',
                'country_code' => 'HKG',
                'district' => 'Hongkong',
                'population' => 1312637,
            ],
            [

                'name' => 'Longyearbyen',
                'country_code' => 'SJM',
                'district' => 'Länsimaa',
                'population' => 1438,
            ],
            [

                'name' => 'Jakarta',
                'country_code' => 'idN',
                'district' => 'Jakarta Raya',
                'population' => 9604900,
            ],
            [

                'name' => 'Surabaya',
                'country_code' => 'idN',
                'district' => 'East Java',
                'population' => 2663820,
            ],
            [

                'name' => 'Bandung',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 2429000,
            ],
            [

                'name' => 'Medan',
                'country_code' => 'idN',
                'district' => 'Sumatera Utara',
                'population' => 1843919,
            ],
            [

                'name' => 'Palembang',
                'country_code' => 'idN',
                'district' => 'Sumatera Selatan',
                'population' => 1222764,
            ],
            [

                'name' => 'Tangerang',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 1198300,
            ],
            [

                'name' => 'Semarang',
                'country_code' => 'idN',
                'district' => 'Central Java',
                'population' => 1104405,
            ],
            [

                'name' => 'Ujung Pandang',
                'country_code' => 'idN',
                'district' => 'Sulawesi Selatan',
                'population' => 1060257,
            ],
            [

                'name' => 'Malang',
                'country_code' => 'idN',
                'district' => 'East Java',
                'population' => 716862,
            ],
            [

                'name' => 'Bandar Lampung',
                'country_code' => 'idN',
                'district' => 'Lampung',
                'population' => 680332,
            ],
            [

                'name' => 'Bekasi',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 644300,
            ],
            [

                'name' => 'Padang',
                'country_code' => 'idN',
                'district' => 'Sumatera Barat',
                'population' => 534474,
            ],
            [

                'name' => 'Surakarta',
                'country_code' => 'idN',
                'district' => 'Central Java',
                'population' => 518600,
            ],
            [

                'name' => 'Banjarmasin',
                'country_code' => 'idN',
                'district' => 'Kalimantan Selatan',
                'population' => 482931,
            ],
            [

                'name' => 'Pekan Baru',
                'country_code' => 'idN',
                'district' => 'Riau',
                'population' => 438638,
            ],
            [

                'name' => 'Denpasar',
                'country_code' => 'idN',
                'district' => 'Bali',
                'population' => 435000,
            ],
            [

                'name' => 'Yogyakarta',
                'country_code' => 'idN',
                'district' => 'Yogyakarta',
                'population' => 418944,
            ],
            [

                'name' => 'Pontianak',
                'country_code' => 'idN',
                'district' => 'Kalimantan Barat',
                'population' => 409632,
            ],
            [

                'name' => 'Samarinda',
                'country_code' => 'idN',
                'district' => 'Kalimantan Timur',
                'population' => 399175,
            ],
            [

                'name' => 'Jambi',
                'country_code' => 'idN',
                'district' => 'Jambi',
                'population' => 385201,
            ],
            [

                'name' => 'Depok',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 365200,
            ],
            [

                'name' => 'Cimahi',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 344600,
            ],
            [

                'name' => 'Balikpapan',
                'country_code' => 'idN',
                'district' => 'Kalimantan Timur',
                'population' => 338752,
            ],
            [

                'name' => 'Manado',
                'country_code' => 'idN',
                'district' => 'Sulawesi Utara',
                'population' => 332288,
            ],
            [

                'name' => 'Mataram',
                'country_code' => 'idN',
                'district' => 'Nusa Tenggara Barat',
                'population' => 306600,
            ],
            [

                'name' => 'Pekalongan',
                'country_code' => 'idN',
                'district' => 'Central Java',
                'population' => 301504,
            ],
            [

                'name' => 'Tegal',
                'country_code' => 'idN',
                'district' => 'Central Java',
                'population' => 289744,
            ],
            [

                'name' => 'Bogor',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 285114,
            ],
            [

                'name' => 'Ciputat',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 270800,
            ],
            [

                'name' => 'Pondokgede',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 263200,
            ],
            [

                'name' => 'Cirebon',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 254406,
            ],
            [

                'name' => 'Kediri',
                'country_code' => 'idN',
                'district' => 'East Java',
                'population' => 253760,
            ],
            [

                'name' => 'Ambon',
                'country_code' => 'idN',
                'district' => 'Molukit',
                'population' => 249312,
            ],
            [

                'name' => 'Jember',
                'country_code' => 'idN',
                'district' => 'East Java',
                'population' => 218500,
            ],
            [

                'name' => 'Cilacap',
                'country_code' => 'idN',
                'district' => 'Central Java',
                'population' => 206900,
            ],
            [

                'name' => 'Cimanggis',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 205100,
            ],
            [

                'name' => 'Pematang Siantar',
                'country_code' => 'idN',
                'district' => 'Sumatera Utara',
                'population' => 203056,
            ],
            [

                'name' => 'Purwokerto',
                'country_code' => 'idN',
                'district' => 'Central Java',
                'population' => 202500,
            ],
            [

                'name' => 'Ciomas',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 187400,
            ],
            [

                'name' => 'Tasikmalaya',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 179800,
            ],
            [

                'name' => 'Madiun',
                'country_code' => 'idN',
                'district' => 'East Java',
                'population' => 171532,
            ],
            [

                'name' => 'Bengkulu',
                'country_code' => 'idN',
                'district' => 'Bengkulu',
                'population' => 146439,
            ],
            [

                'name' => 'Karawang',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 145000,
            ],
            [

                'name' => 'Banda Aceh',
                'country_code' => 'idN',
                'district' => 'Aceh',
                'population' => 143409,
            ],
            [

                'name' => 'Palu',
                'country_code' => 'idN',
                'district' => 'Sulawesi Tengah',
                'population' => 142800,
            ],
            [

                'name' => 'Pasuruan',
                'country_code' => 'idN',
                'district' => 'East Java',
                'population' => 134019,
            ],
            [

                'name' => 'Kupang',
                'country_code' => 'idN',
                'district' => 'Nusa Tenggara Timur',
                'population' => 129300,
            ],
            [

                'name' => 'Tebing Tinggi',
                'country_code' => 'idN',
                'district' => 'Sumatera Utara',
                'population' => 129300,
            ],
            [

                'name' => 'Percut Sei Tuan',
                'country_code' => 'idN',
                'district' => 'Sumatera Utara',
                'population' => 129000,
            ],
            [

                'name' => 'Binjai',
                'country_code' => 'idN',
                'district' => 'Sumatera Utara',
                'population' => 127222,
            ],
            [

                'name' => 'Sukabumi',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 125766,
            ],
            [

                'name' => 'Waru',
                'country_code' => 'idN',
                'district' => 'East Java',
                'population' => 124300,
            ],
            [

                'name' => 'Pangkal Pinang',
                'country_code' => 'idN',
                'district' => 'Sumatera Selatan',
                'population' => 124000,
            ],
            [

                'name' => 'Magelang',
                'country_code' => 'idN',
                'district' => 'Central Java',
                'population' => 123800,
            ],
            [

                'name' => 'Blitar',
                'country_code' => 'idN',
                'district' => 'East Java',
                'population' => 122600,
            ],
            [

                'name' => 'Serang',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 122400,
            ],
            [

                'name' => 'Probolinggo',
                'country_code' => 'idN',
                'district' => 'East Java',
                'population' => 120770,
            ],
            [

                'name' => 'Cilegon',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 117000,
            ],
            [

                'name' => 'Cianjur',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 114300,
            ],
            [

                'name' => 'Ciparay',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 111500,
            ],
            [

                'name' => 'Lhokseumawe',
                'country_code' => 'idN',
                'district' => 'Aceh',
                'population' => 109600,
            ],
            [

                'name' => 'Taman',
                'country_code' => 'idN',
                'district' => 'East Java',
                'population' => 107000,
            ],
            [

                'name' => 'Depok',
                'country_code' => 'idN',
                'district' => 'Yogyakarta',
                'population' => 106800,
            ],
            [

                'name' => 'Citeureup',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 105100,
            ],
            [

                'name' => 'Pemalang',
                'country_code' => 'idN',
                'district' => 'Central Java',
                'population' => 103500,
            ],
            [

                'name' => 'Klaten',
                'country_code' => 'idN',
                'district' => 'Central Java',
                'population' => 103300,
            ],
            [

                'name' => 'Salatiga',
                'country_code' => 'idN',
                'district' => 'Central Java',
                'population' => 103000,
            ],
            [

                'name' => 'Cibinong',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 101300,
            ],
            [

                'name' => 'Palangka Raya',
                'country_code' => 'idN',
                'district' => 'Kalimantan Tengah',
                'population' => 99693,
            ],
            [

                'name' => 'Mojokerto',
                'country_code' => 'idN',
                'district' => 'East Java',
                'population' => 96626,
            ],
            [

                'name' => 'Purwakarta',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 95900,
            ],
            [

                'name' => 'Garut',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 95800,
            ],
            [

                'name' => 'Kudus',
                'country_code' => 'idN',
                'district' => 'Central Java',
                'population' => 95300,
            ],
            [

                'name' => 'Kendari',
                'country_code' => 'idN',
                'district' => 'Sulawesi Tenggara',
                'population' => 94800,
            ],
            [

                'name' => 'Jaya Pura',
                'country_code' => 'idN',
                'district' => 'West Irian',
                'population' => 94700,
            ],
            [

                'name' => 'Gorontalo',
                'country_code' => 'idN',
                'district' => 'Sulawesi Utara',
                'population' => 94058,
            ],
            [

                'name' => 'Majalaya',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 93200,
            ],
            [

                'name' => 'Pondok Aren',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 92700,
            ],
            [

                'name' => 'Jombang',
                'country_code' => 'idN',
                'district' => 'East Java',
                'population' => 92600,
            ],
            [

                'name' => 'Sunggal',
                'country_code' => 'idN',
                'district' => 'Sumatera Utara',
                'population' => 92300,
            ],
            [

                'name' => 'Batam',
                'country_code' => 'idN',
                'district' => 'Riau',
                'population' => 91871,
            ],
            [

                'name' => 'Padang Sidempuan',
                'country_code' => 'idN',
                'district' => 'Sumatera Utara',
                'population' => 91200,
            ],
            [

                'name' => 'Sawangan',
                'country_code' => 'idN',
                'district' => 'West Java',
                'population' => 91100,
            ],
            [

                'name' => 'Banyuwangi',
                'country_code' => 'idN',
                'district' => 'East Java',
                'population' => 89900,
            ],
            [

                'name' => 'Tanjung Pinang',
                'country_code' => 'idN',
                'district' => 'Riau',
                'population' => 89900,
            ],
            [

                'name' => 'Mumbai (Bombay)',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 10500000,
            ],
            [

                'name' => 'Delhi',
                'country_code' => 'IND',
                'district' => 'Delhi',
                'population' => 7206704,
            ],
            [

                'name' => 'Calcutta [Kolkata]',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 4399819,
            ],
            [

                'name' => 'Chennai (Madras)',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 3841396,
            ],
            [

                'name' => 'Hyderabad',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 2964638,
            ],
            [

                'name' => 'Ahmedabad',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 2876710,
            ],
            [

                'name' => 'Bangalore',
                'country_code' => 'IND',
                'district' => 'Karnataka',
                'population' => 2660088,
            ],
            [

                'name' => 'Kanpur',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 1874409,
            ],
            [

                'name' => 'Nagpur',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 1624752,
            ],
            [

                'name' => 'Lucknow',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 1619115,
            ],
            [

                'name' => 'Pune',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 1566651,
            ],
            [

                'name' => 'Surat',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 1498817,
            ],
            [

                'name' => 'Jaipur',
                'country_code' => 'IND',
                'district' => 'Rajasthan',
                'population' => 1458483,
            ],
            [

                'name' => 'Indore',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 1091674,
            ],
            [

                'name' => 'Bhopal',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 1062771,
            ],
            [

                'name' => 'Ludhiana',
                'country_code' => 'IND',
                'district' => 'Punjab',
                'population' => 1042740,
            ],
            [

                'name' => 'Vadodara (Baroda)',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 1031346,
            ],
            [

                'name' => 'Kalyan',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 1014557,
            ],
            [

                'name' => 'Madurai',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 977856,
            ],
            [

                'name' => 'Haora (Howrah)',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 950435,
            ],
            [

                'name' => 'Varanasi (Benares)',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 929270,
            ],
            [

                'name' => 'Patna',
                'country_code' => 'IND',
                'district' => 'Bihar',
                'population' => 917243,
            ],
            [

                'name' => 'Srinagar',
                'country_code' => 'IND',
                'district' => 'Jammu and Kashmir',
                'population' => 892506,
            ],
            [

                'name' => 'Agra',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 891790,
            ],
            [

                'name' => 'Coimbatore',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 816321,
            ],
            [

                'name' => 'Thane (Thana)',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 803389,
            ],
            [

                'name' => 'Allahabad',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 792858,
            ],
            [

                'name' => 'Meerut',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 753778,
            ],
            [

                'name' => 'Vishakhapatnam',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 752037,
            ],
            [

                'name' => 'Jabalpur',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 741927,
            ],
            [

                'name' => 'Amritsar',
                'country_code' => 'IND',
                'district' => 'Punjab',
                'population' => 708835,
            ],
            [

                'name' => 'Faridabad',
                'country_code' => 'IND',
                'district' => 'Haryana',
                'population' => 703592,
            ],
            [

                'name' => 'Vijayawada',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 701827,
            ],
            [

                'name' => 'Gwalior',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 690765,
            ],
            [

                'name' => 'Jodhpur',
                'country_code' => 'IND',
                'district' => 'Rajasthan',
                'population' => 666279,
            ],
            [

                'name' => 'Nashik (Nasik)',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 656925,
            ],
            [

                'name' => 'Hubli-Dharwad',
                'country_code' => 'IND',
                'district' => 'Karnataka',
                'population' => 648298,
            ],
            [

                'name' => 'Solapur (Sholapur)',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 604215,
            ],
            [

                'name' => 'Ranchi',
                'country_code' => 'IND',
                'district' => 'Jharkhand',
                'population' => 599306,
            ],
            [

                'name' => 'Bareilly',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 587211,
            ],
            [

                'name' => 'Guwahati (Gauhati)',
                'country_code' => 'IND',
                'district' => 'Assam',
                'population' => 584342,
            ],
            [

                'name' => 'Shambajinagar (Aurangabad)',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 573272,
            ],
            [

                'name' => 'Cochin (Kochi)',
                'country_code' => 'IND',
                'district' => 'Kerala',
                'population' => 564589,
            ],
            [

                'name' => 'Rajkot',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 559407,
            ],
            [

                'name' => 'Kota',
                'country_code' => 'IND',
                'district' => 'Rajasthan',
                'population' => 537371,
            ],
            [

                'name' => 'Thiruvananthapuram (Trivandrum',
                'country_code' => 'IND',
                'district' => 'Kerala',
                'population' => 524006,
            ],
            [

                'name' => 'Pimpri-Chinchwad',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 517083,
            ],
            [

                'name' => 'Jalandhar (Jullundur)',
                'country_code' => 'IND',
                'district' => 'Punjab',
                'population' => 509510,
            ],
            [

                'name' => 'Gorakhpur',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 505566,
            ],
            [

                'name' => 'Chandigarh',
                'country_code' => 'IND',
                'district' => 'Chandigarh',
                'population' => 504094,
            ],
            [

                'name' => 'Mysore',
                'country_code' => 'IND',
                'district' => 'Karnataka',
                'population' => 480692,
            ],
            [

                'name' => 'Aligarh',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 480520,
            ],
            [

                'name' => 'Guntur',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 471051,
            ],
            [

                'name' => 'Jamshedpur',
                'country_code' => 'IND',
                'district' => 'Jharkhand',
                'population' => 460577,
            ],
            [

                'name' => 'Ghaziabad',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 454156,
            ],
            [

                'name' => 'Warangal',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 447657,
            ],
            [

                'name' => 'Raipur',
                'country_code' => 'IND',
                'district' => 'Chhatisgarh',
                'population' => 438639,
            ],
            [

                'name' => 'Moradabad',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 429214,
            ],
            [

                'name' => 'Durgapur',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 425836,
            ],
            [

                'name' => 'Amravati',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 421576,
            ],
            [

                'name' => 'Calicut (Kozhikode)',
                'country_code' => 'IND',
                'district' => 'Kerala',
                'population' => 419831,
            ],
            [

                'name' => 'Bikaner',
                'country_code' => 'IND',
                'district' => 'Rajasthan',
                'population' => 416289,
            ],
            [

                'name' => 'Bhubaneswar',
                'country_code' => 'IND',
                'district' => 'Orissa',
                'population' => 411542,
            ],
            [

                'name' => 'Kolhapur',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 406370,
            ],
            [

                'name' => 'Kataka (Cuttack)',
                'country_code' => 'IND',
                'district' => 'Orissa',
                'population' => 403418,
            ],
            [

                'name' => 'Ajmer',
                'country_code' => 'IND',
                'district' => 'Rajasthan',
                'population' => 402700,
            ],
            [

                'name' => 'Bhavnagar',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 402338,
            ],
            [

                'name' => 'Tiruchirapalli',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 387223,
            ],
            [

                'name' => 'Bhilai',
                'country_code' => 'IND',
                'district' => 'Chhatisgarh',
                'population' => 386159,
            ],
            [

                'name' => 'Bhiwandi',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 379070,
            ],
            [

                'name' => 'Saharanpur',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 374945,
            ],
            [

                'name' => 'Ulhasnagar',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 369077,
            ],
            [

                'name' => 'Salem',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 366712,
            ],
            [

                'name' => 'Ujjain',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 362266,
            ],
            [

                'name' => 'Malegaon',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 342595,
            ],
            [

                'name' => 'Jamnagar',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 341637,
            ],
            [

                'name' => 'Bokaro Steel City',
                'country_code' => 'IND',
                'district' => 'Jharkhand',
                'population' => 333683,
            ],
            [

                'name' => 'Akola',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 328034,
            ],
            [

                'name' => 'Belgaum',
                'country_code' => 'IND',
                'district' => 'Karnataka',
                'population' => 326399,
            ],
            [

                'name' => 'Rajahmundry',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 324851,
            ],
            [

                'name' => 'Nellore',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 316606,
            ],
            [

                'name' => 'Udaipur',
                'country_code' => 'IND',
                'district' => 'Rajasthan',
                'population' => 308571,
            ],
            [

                'name' => 'New Bombay',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 307297,
            ],
            [

                'name' => 'Bhatpara',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 304952,
            ],
            [

                'name' => 'Gulbarga',
                'country_code' => 'IND',
                'district' => 'Karnataka',
                'population' => 304099,
            ],
            [

                'name' => 'New Delhi',
                'country_code' => 'IND',
                'district' => 'Delhi',
                'population' => 301297,
            ],
            [

                'name' => 'Jhansi',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 300850,
            ],
            [

                'name' => 'Gaya',
                'country_code' => 'IND',
                'district' => 'Bihar',
                'population' => 291675,
            ],
            [

                'name' => 'Kakinada',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 279980,
            ],
            [

                'name' => 'Dhule (Dhulia)',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 278317,
            ],
            [

                'name' => 'Panihati',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 275990,
            ],
            [

                'name' => 'Nanded (Nander)',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 275083,
            ],
            [

                'name' => 'Mangalore',
                'country_code' => 'IND',
                'district' => 'Karnataka',
                'population' => 273304,
            ],
            [

                'name' => 'Dehra Dun',
                'country_code' => 'IND',
                'district' => 'Uttaranchal',
                'population' => 270159,
            ],
            [

                'name' => 'Kamarhati',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 266889,
            ],
            [

                'name' => 'Davangere',
                'country_code' => 'IND',
                'district' => 'Karnataka',
                'population' => 266082,
            ],
            [

                'name' => 'Asansol',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 262188,
            ],
            [

                'name' => 'Bhagalpur',
                'country_code' => 'IND',
                'district' => 'Bihar',
                'population' => 253225,
            ],
            [

                'name' => 'Bellary',
                'country_code' => 'IND',
                'district' => 'Karnataka',
                'population' => 245391,
            ],
            [

                'name' => 'Barddhaman (Burdwan)',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 245079,
            ],
            [

                'name' => 'Rampur',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 243742,
            ],
            [

                'name' => 'Jalgaon',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 242193,
            ],
            [

                'name' => 'Muzaffarpur',
                'country_code' => 'IND',
                'district' => 'Bihar',
                'population' => 241107,
            ],
            [

                'name' => 'Nizamabad',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 241034,
            ],
            [

                'name' => 'Muzaffarnagar',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 240609,
            ],
            [

                'name' => 'Patiala',
                'country_code' => 'IND',
                'district' => 'Punjab',
                'population' => 238368,
            ],
            [

                'name' => 'Shahjahanpur',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 237713,
            ],
            [

                'name' => 'Kurnool',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 236800,
            ],
            [

                'name' => 'Tiruppur (Tirupper)',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 235661,
            ],
            [

                'name' => 'Rohtak',
                'country_code' => 'IND',
                'district' => 'Haryana',
                'population' => 233400,
            ],
            [

                'name' => 'South Dum Dum',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 232811,
            ],
            [

                'name' => 'Mathura',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 226691,
            ],
            [

                'name' => 'Chandrapur',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 226105,
            ],
            [

                'name' => 'Barahanagar (Baranagar)',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 224821,
            ],
            [

                'name' => 'Darbhanga',
                'country_code' => 'IND',
                'district' => 'Bihar',
                'population' => 218391,
            ],
            [

                'name' => 'Siliguri (Shiliguri)',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 216950,
            ],
            [

                'name' => 'Raurkela',
                'country_code' => 'IND',
                'district' => 'Orissa',
                'population' => 215489,
            ],
            [

                'name' => 'Ambattur',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 215424,
            ],
            [

                'name' => 'Panipat',
                'country_code' => 'IND',
                'district' => 'Haryana',
                'population' => 215218,
            ],
            [

                'name' => 'Firozabad',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 215128,
            ],
            [

                'name' => 'Ichalkaranji',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 214950,
            ],
            [

                'name' => 'Jammu',
                'country_code' => 'IND',
                'district' => 'Jammu and Kashmir',
                'population' => 214737,
            ],
            [

                'name' => 'Ramagundam',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 214384,
            ],
            [

                'name' => 'Eluru',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 212866,
            ],
            [

                'name' => 'Brahmapur',
                'country_code' => 'IND',
                'district' => 'Orissa',
                'population' => 210418,
            ],
            [

                'name' => 'Alwar',
                'country_code' => 'IND',
                'district' => 'Rajasthan',
                'population' => 205086,
            ],
            [

                'name' => 'Pondicherry',
                'country_code' => 'IND',
                'district' => 'Pondicherry',
                'population' => 203065,
            ],
            [

                'name' => 'Thanjavur',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 202013,
            ],
            [

                'name' => 'Bihar Sharif',
                'country_code' => 'IND',
                'district' => 'Bihar',
                'population' => 201323,
            ],
            [

                'name' => 'Tuticorin',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 199854,
            ],
            [

                'name' => 'Imphal',
                'country_code' => 'IND',
                'district' => 'Manipur',
                'population' => 198535,
            ],
            [

                'name' => 'Latur',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 197408,
            ],
            [

                'name' => 'Sagar',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 195346,
            ],
            [

                'name' => 'Farrukhabad-cum-Fatehgarh',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 194567,
            ],
            [

                'name' => 'Sangli',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 193197,
            ],
            [

                'name' => 'Parbhani',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 190255,
            ],
            [

                'name' => 'Nagar Coil',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 190084,
            ],
            [

                'name' => 'Bijapur',
                'country_code' => 'IND',
                'district' => 'Karnataka',
                'population' => 186939,
            ],
            [

                'name' => 'Kukatpalle',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 185378,
            ],
            [

                'name' => 'Bally',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 184474,
            ],
            [

                'name' => 'Bhilwara',
                'country_code' => 'IND',
                'district' => 'Rajasthan',
                'population' => 183965,
            ],
            [

                'name' => 'Ratlam',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 183375,
            ],
            [

                'name' => 'Avadi',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 183215,
            ],
            [

                'name' => 'Dindigul',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 182477,
            ],
            [

                'name' => 'Ahmadnagar',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 181339,
            ],
            [

                'name' => 'Bilaspur',
                'country_code' => 'IND',
                'district' => 'Chhatisgarh',
                'population' => 179833,
            ],
            [

                'name' => 'Shimoga',
                'country_code' => 'IND',
                'district' => 'Karnataka',
                'population' => 179258,
            ],
            [

                'name' => 'Kharagpur',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 177989,
            ],
            [

                'name' => 'Mira Bhayandar',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 175372,
            ],
            [

                'name' => 'Vellore',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 175061,
            ],
            [

                'name' => 'Jalna',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 174985,
            ],
            [

                'name' => 'Burnpur',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 174933,
            ],
            [

                'name' => 'Anantapur',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 174924,
            ],
            [

                'name' => 'Allappuzha (Alleppey)',
                'country_code' => 'IND',
                'district' => 'Kerala',
                'population' => 174666,
            ],
            [

                'name' => 'Tirupati',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 174369,
            ],
            [

                'name' => 'Karnal',
                'country_code' => 'IND',
                'district' => 'Haryana',
                'population' => 173751,
            ],
            [

                'name' => 'Burhanpur',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 172710,
            ],
            [

                'name' => 'Hisar (Hissar)',
                'country_code' => 'IND',
                'district' => 'Haryana',
                'population' => 172677,
            ],
            [

                'name' => 'Tiruvottiyur',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 172562,
            ],
            [

                'name' => 'Mirzapur-cum-Vindhyachal',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 169336,
            ],
            [

                'name' => 'Secunderabad',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 167461,
            ],
            [

                'name' => 'Nadiad',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 167051,
            ],
            [

                'name' => 'Dewas',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 164364,
            ],
            [

                'name' => 'Murwara (Katni)',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 163431,
            ],
            [

                'name' => 'Ganganagar',
                'country_code' => 'IND',
                'district' => 'Rajasthan',
                'population' => 161482,
            ],
            [

                'name' => 'Vizianagaram',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 160359,
            ],
            [

                'name' => 'Erode',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 159232,
            ],
            [

                'name' => 'Machilipatnam (Masulipatam)',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 159110,
            ],
            [

                'name' => 'Bhatinda (Bathinda)',
                'country_code' => 'IND',
                'district' => 'Punjab',
                'population' => 159042,
            ],
            [

                'name' => 'Raichur',
                'country_code' => 'IND',
                'district' => 'Karnataka',
                'population' => 157551,
            ],
            [

                'name' => 'Agartala',
                'country_code' => 'IND',
                'district' => 'Tripura',
                'population' => 157358,
            ],
            [

                'name' => 'Arrah (Ara)',
                'country_code' => 'IND',
                'district' => 'Bihar',
                'population' => 157082,
            ],
            [

                'name' => 'Satna',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 156630,
            ],
            [

                'name' => 'Lalbahadur Nagar',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 155500,
            ],
            [

                'name' => 'Aizawl',
                'country_code' => 'IND',
                'district' => 'Mizoram',
                'population' => 155240,
            ],
            [

                'name' => 'Uluberia',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 155172,
            ],
            [

                'name' => 'Katihar',
                'country_code' => 'IND',
                'district' => 'Bihar',
                'population' => 154367,
            ],
            [

                'name' => 'Cuddalore',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 153086,
            ],
            [

                'name' => 'Hugli-Chinsurah',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 151806,
            ],
            [

                'name' => 'Dhanbad',
                'country_code' => 'IND',
                'district' => 'Jharkhand',
                'population' => 151789,
            ],
            [

                'name' => 'Raiganj',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 151045,
            ],
            [

                'name' => 'Sambhal',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 150869,
            ],
            [

                'name' => 'Durg',
                'country_code' => 'IND',
                'district' => 'Chhatisgarh',
                'population' => 150645,
            ],
            [

                'name' => 'Munger (Monghyr)',
                'country_code' => 'IND',
                'district' => 'Bihar',
                'population' => 150112,
            ],
            [

                'name' => 'Kanchipuram',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 150100,
            ],
            [

                'name' => 'North Dum Dum',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 149965,
            ],
            [

                'name' => 'Karimnagar',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 148583,
            ],
            [

                'name' => 'Bharatpur',
                'country_code' => 'IND',
                'district' => 'Rajasthan',
                'population' => 148519,
            ],
            [

                'name' => 'Sikar',
                'country_code' => 'IND',
                'district' => 'Rajasthan',
                'population' => 148272,
            ],
            [

                'name' => 'Hardwar (Haridwar)',
                'country_code' => 'IND',
                'district' => 'Uttaranchal',
                'population' => 147305,
            ],
            [

                'name' => 'Dabgram',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 147217,
            ],
            [

                'name' => 'Morena',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 147124,
            ],
            [

                'name' => 'Noida',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 146514,
            ],
            [

                'name' => 'Hapur',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 146262,
            ],
            [

                'name' => 'Bhusawal',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 145143,
            ],
            [

                'name' => 'Khandwa',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 145133,
            ],
            [

                'name' => 'Yamuna Nagar',
                'country_code' => 'IND',
                'district' => 'Haryana',
                'population' => 144346,
            ],
            [

                'name' => 'Sonipat (Sonepat)',
                'country_code' => 'IND',
                'district' => 'Haryana',
                'population' => 143922,
            ],
            [

                'name' => 'Tenali',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 143726,
            ],
            [

                'name' => 'Raurkela Civil Township',
                'country_code' => 'IND',
                'district' => 'Orissa',
                'population' => 140408,
            ],
            [

                'name' => 'Kollam (Quilon)',
                'country_code' => 'IND',
                'district' => 'Kerala',
                'population' => 139852,
            ],
            [

                'name' => 'Kumbakonam',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 139483,
            ],
            [

                'name' => 'Ingraj Bazar (English Bazar)',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 139204,
            ],
            [

                'name' => 'Timkur',
                'country_code' => 'IND',
                'district' => 'Karnataka',
                'population' => 138903,
            ],
            [

                'name' => 'Amroha',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 137061,
            ],
            [

                'name' => 'Serampore',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 137028,
            ],
            [

                'name' => 'Chapra',
                'country_code' => 'IND',
                'district' => 'Bihar',
                'population' => 136877,
            ],
            [

                'name' => 'Pali',
                'country_code' => 'IND',
                'district' => 'Rajasthan',
                'population' => 136842,
            ],
            [

                'name' => 'Maunath Bhanjan',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 136697,
            ],
            [

                'name' => 'Adoni',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 136182,
            ],
            [

                'name' => 'Jaunpur',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 136062,
            ],
            [

                'name' => 'Tirunelveli',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 135825,
            ],
            [

                'name' => 'Bahraich',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 135400,
            ],
            [

                'name' => 'Gadag Betigeri',
                'country_code' => 'IND',
                'district' => 'Karnataka',
                'population' => 134051,
            ],
            [

                'name' => 'Proddatur',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 133914,
            ],
            [

                'name' => 'Chittoor',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 133462,
            ],
            [

                'name' => 'Barrackpur',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 133265,
            ],
            [

                'name' => 'Bharuch (Broach)',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 133102,
            ],
            [

                'name' => 'Naihati',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 132701,
            ],
            [

                'name' => 'Shillong',
                'country_code' => 'IND',
                'district' => 'Meghalaya',
                'population' => 131719,
            ],
            [

                'name' => 'Sambalpur',
                'country_code' => 'IND',
                'district' => 'Orissa',
                'population' => 131138,
            ],
            [

                'name' => 'Junagadh',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 130484,
            ],
            [

                'name' => 'Rae Bareli',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 129904,
            ],
            [

                'name' => 'Rewa',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 128981,
            ],
            [

                'name' => 'Gurgaon',
                'country_code' => 'IND',
                'district' => 'Haryana',
                'population' => 128608,
            ],
            [

                'name' => 'Khammam',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 127992,
            ],
            [

                'name' => 'Bulandshahr',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 127201,
            ],
            [

                'name' => 'Navsari',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 126089,
            ],
            [

                'name' => 'Malkajgiri',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 126066,
            ],
            [

                'name' => 'Midnapore (Medinipur)',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 125498,
            ],
            [

                'name' => 'Miraj',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 125407,
            ],
            [

                'name' => 'Raj Nandgaon',
                'country_code' => 'IND',
                'district' => 'Chhatisgarh',
                'population' => 125371,
            ],
            [

                'name' => 'Alandur',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 125244,
            ],
            [

                'name' => 'Puri',
                'country_code' => 'IND',
                'district' => 'Orissa',
                'population' => 125199,
            ],
            [

                'name' => 'Navadwip',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 125037,
            ],
            [

                'name' => 'Sirsa',
                'country_code' => 'IND',
                'district' => 'Haryana',
                'population' => 125000,
            ],
            [

                'name' => 'Korba',
                'country_code' => 'IND',
                'district' => 'Chhatisgarh',
                'population' => 124501,
            ],
            [

                'name' => 'Faizabad',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 124437,
            ],
            [

                'name' => 'Etawah',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 124072,
            ],
            [

                'name' => 'Pathankot',
                'country_code' => 'IND',
                'district' => 'Punjab',
                'population' => 123930,
            ],
            [

                'name' => 'Gandhinagar',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 123359,
            ],
            [

                'name' => 'Palghat (Palakkad)',
                'country_code' => 'IND',
                'district' => 'Kerala',
                'population' => 123289,
            ],
            [

                'name' => 'Veraval',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 123000,
            ],
            [

                'name' => 'Hoshiarpur',
                'country_code' => 'IND',
                'district' => 'Punjab',
                'population' => 122705,
            ],
            [

                'name' => 'Ambala',
                'country_code' => 'IND',
                'district' => 'Haryana',
                'population' => 122596,
            ],
            [

                'name' => 'Sitapur',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 121842,
            ],
            [

                'name' => 'Bhiwani',
                'country_code' => 'IND',
                'district' => 'Haryana',
                'population' => 121629,
            ],
            [

                'name' => 'Cuddapah',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 121463,
            ],
            [

                'name' => 'Bhimavaram',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 121314,
            ],
            [

                'name' => 'Krishnanagar',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 121110,
            ],
            [

                'name' => 'Chandannagar',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 120378,
            ],
            [

                'name' => 'Mandya',
                'country_code' => 'IND',
                'district' => 'Karnataka',
                'population' => 120265,
            ],
            [

                'name' => 'Dibrugarh',
                'country_code' => 'IND',
                'district' => 'Assam',
                'population' => 120127,
            ],
            [

                'name' => 'Nandyal',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 119813,
            ],
            [

                'name' => 'Balurghat',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 119796,
            ],
            [

                'name' => 'Neyveli',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 118080,
            ],
            [

                'name' => 'Fatehpur',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 117675,
            ],
            [

                'name' => 'Mahbubnagar',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 116833,
            ],
            [

                'name' => 'Budaun',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 116695,
            ],
            [

                'name' => 'Porbandar',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 116671,
            ],
            [

                'name' => 'Silchar',
                'country_code' => 'IND',
                'district' => 'Assam',
                'population' => 115483,
            ],
            [

                'name' => 'Berhampore (Baharampur)',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 115144,
            ],
            [

                'name' => 'Purnea (Purnia)',
                'country_code' => 'IND',
                'district' => 'Jharkhand',
                'population' => 114912,
            ],
            [

                'name' => 'Bankura',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 114876,
            ],
            [

                'name' => 'Rajapalaiyam',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 114202,
            ],
            [

                'name' => 'Titagarh',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 114085,
            ],
            [

                'name' => 'Halisahar',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 114028,
            ],
            [

                'name' => 'Hathras',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 113285,
            ],
            [

                'name' => 'Bhir (Bid)',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 112434,
            ],
            [

                'name' => 'Pallavaram',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 111866,
            ],
            [

                'name' => 'Anand',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 110266,
            ],
            [

                'name' => 'Mango',
                'country_code' => 'IND',
                'district' => 'Jharkhand',
                'population' => 110024,
            ],
            [

                'name' => 'Santipur',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 109956,
            ],
            [

                'name' => 'Bhind',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 109755,
            ],
            [

                'name' => 'Gondiya',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 109470,
            ],
            [

                'name' => 'Tiruvannamalai',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 109196,
            ],
            [

                'name' => 'Yeotmal (Yavatmal)',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 108578,
            ],
            [

                'name' => 'Kulti-Barakar',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 108518,
            ],
            [

                'name' => 'Moga',
                'country_code' => 'IND',
                'district' => 'Punjab',
                'population' => 108304,
            ],
            [

                'name' => 'Shivapuri',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 108277,
            ],
            [

                'name' => 'Bidar',
                'country_code' => 'IND',
                'district' => 'Karnataka',
                'population' => 108016,
            ],
            [

                'name' => 'Guntakal',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 107592,
            ],
            [

                'name' => 'Unnao',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 107425,
            ],
            [

                'name' => 'Barasat',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 107365,
            ],
            [

                'name' => 'Tambaram',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 107187,
            ],
            [

                'name' => 'Abohar',
                'country_code' => 'IND',
                'district' => 'Punjab',
                'population' => 107163,
            ],
            [

                'name' => 'Pilibhit',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 106605,
            ],
            [

                'name' => 'Valparai',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 106523,
            ],
            [

                'name' => 'Gonda',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 106078,
            ],
            [

                'name' => 'Surendranagar',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 105973,
            ],
            [

                'name' => 'Qutubullapur',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 105380,
            ],
            [

                'name' => 'Beawar',
                'country_code' => 'IND',
                'district' => 'Rajasthan',
                'population' => 105363,
            ],
            [

                'name' => 'Hindupur',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 104651,
            ],
            [

                'name' => 'Gandhidham',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 104585,
            ],
            [

                'name' => 'Haldwani-cum-Kathgodam',
                'country_code' => 'IND',
                'district' => 'Uttaranchal',
                'population' => 104195,
            ],
            [

                'name' => 'Tellicherry (Thalassery)',
                'country_code' => 'IND',
                'district' => 'Kerala',
                'population' => 103579,
            ],
            [

                'name' => 'Wardha',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 102985,
            ],
            [

                'name' => 'Rishra',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 102649,
            ],
            [

                'name' => 'Bhuj',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 102176,
            ],
            [

                'name' => 'Modinagar',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 101660,
            ],
            [

                'name' => 'Gudivada',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 101656,
            ],
            [

                'name' => 'Basirhat',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 101409,
            ],
            [

                'name' => 'Uttarpara-Kotrung',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 100867,
            ],
            [

                'name' => 'Ongole',
                'country_code' => 'IND',
                'district' => 'Andhra Pradesh',
                'population' => 100836,
            ],
            [

                'name' => 'North Barrackpur',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 100513,
            ],
            [

                'name' => 'Guna',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 100490,
            ],
            [

                'name' => 'Haldia',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 100347,
            ],
            [

                'name' => 'Habra',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 100223,
            ],
            [

                'name' => 'Kanchrapara',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 100194,
            ],
            [

                'name' => 'Tonk',
                'country_code' => 'IND',
                'district' => 'Rajasthan',
                'population' => 100079,
            ],
            [

                'name' => 'Champdani',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 98818,
            ],
            [

                'name' => 'Orai',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 98640,
            ],
            [

                'name' => 'Pudukkottai',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 98619,
            ],
            [

                'name' => 'Sasaram',
                'country_code' => 'IND',
                'district' => 'Bihar',
                'population' => 98220,
            ],
            [

                'name' => 'Hazaribag',
                'country_code' => 'IND',
                'district' => 'Jharkhand',
                'population' => 97712,
            ],
            [

                'name' => 'Palayankottai',
                'country_code' => 'IND',
                'district' => 'Tamil Nadu',
                'population' => 97662,
            ],
            [

                'name' => 'Banda',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 97227,
            ],
            [

                'name' => 'Godhra',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 96813,
            ],
            [

                'name' => 'Hospet',
                'country_code' => 'IND',
                'district' => 'Karnataka',
                'population' => 96322,
            ],
            [

                'name' => 'Ashoknagar-Kalyangarh',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 96315,
            ],
            [

                'name' => 'Achalpur',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 96216,
            ],
            [

                'name' => 'Patan',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 96109,
            ],
            [

                'name' => 'Mandasor',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 95758,
            ],
            [

                'name' => 'Damoh',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 95661,
            ],
            [

                'name' => 'Satara',
                'country_code' => 'IND',
                'district' => 'Maharashtra',
                'population' => 95133,
            ],
            [

                'name' => 'Meerut Cantonment',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 94876,
            ],
            [

                'name' => 'Dehri',
                'country_code' => 'IND',
                'district' => 'Bihar',
                'population' => 94526,
            ],
            [

                'name' => 'Delhi Cantonment',
                'country_code' => 'IND',
                'district' => 'Delhi',
                'population' => 94326,
            ],
            [

                'name' => 'Chhindwara',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 93731,
            ],
            [

                'name' => 'Bansberia',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 93447,
            ],
            [

                'name' => 'Nagaon',
                'country_code' => 'IND',
                'district' => 'Assam',
                'population' => 93350,
            ],
            [

                'name' => 'Kanpur Cantonment',
                'country_code' => 'IND',
                'district' => 'Uttar Pradesh',
                'population' => 93109,
            ],
            [

                'name' => 'Vidisha',
                'country_code' => 'IND',
                'district' => 'Madhya Pradesh',
                'population' => 92917,
            ],
            [

                'name' => 'Bettiah',
                'country_code' => 'IND',
                'district' => 'Bihar',
                'population' => 92583,
            ],
            [

                'name' => 'Purulia',
                'country_code' => 'IND',
                'district' => 'Jharkhand',
                'population' => 92574,
            ],
            [

                'name' => 'Hassan',
                'country_code' => 'IND',
                'district' => 'Karnataka',
                'population' => 90803,
            ],
            [

                'name' => 'Ambala Sadar',
                'country_code' => 'IND',
                'district' => 'Haryana',
                'population' => 90712,
            ],
            [

                'name' => 'Baidyabati',
                'country_code' => 'IND',
                'district' => 'West Bengali',
                'population' => 90601,
            ],
            [

                'name' => 'Morvi',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 90357,
            ],
            [

                'name' => 'Raigarh',
                'country_code' => 'IND',
                'district' => 'Chhatisgarh',
                'population' => 89166,
            ],
            [

                'name' => 'Vejalpur',
                'country_code' => 'IND',
                'district' => 'Gujarat',
                'population' => 89053,
            ],
            [

                'name' => 'Baghdad',
                'country_code' => 'IRQ',
                'district' => 'Baghdad',
                'population' => 4336000,
            ],
            [

                'name' => 'Mosul',
                'country_code' => 'IRQ',
                'district' => 'Ninawa',
                'population' => 879000,
            ],
            [

                'name' => 'Irbil',
                'country_code' => 'IRQ',
                'district' => 'Irbil',
                'population' => 485968,
            ],
            [

                'name' => 'Kirkuk',
                'country_code' => 'IRQ',
                'district' => 'al-Tamim',
                'population' => 418624,
            ],
            [

                'name' => 'Basra',
                'country_code' => 'IRQ',
                'district' => 'Basra',
                'population' => 406296,
            ],
            [

                'name' => 'al-Sulaymaniya',
                'country_code' => 'IRQ',
                'district' => 'al-Sulaymaniya',
                'population' => 364096,
            ],
            [

                'name' => 'al-Najaf',
                'country_code' => 'IRQ',
                'district' => 'al-Najaf',
                'population' => 309010,
            ],
            [

                'name' => 'Karbala',
                'country_code' => 'IRQ',
                'district' => 'Karbala',
                'population' => 296705,
            ],
            [

                'name' => 'al-Hilla',
                'country_code' => 'IRQ',
                'district' => 'Babil',
                'population' => 268834,
            ],
            [

                'name' => 'al-Nasiriya',
                'country_code' => 'IRQ',
                'district' => 'DhiQar',
                'population' => 265937,
            ],
            [

                'name' => 'al-Amara',
                'country_code' => 'IRQ',
                'district' => 'Maysan',
                'population' => 208797,
            ],
            [

                'name' => 'al-Diwaniya',
                'country_code' => 'IRQ',
                'district' => 'al-Qadisiya',
                'population' => 196519,
            ],
            [

                'name' => 'al-Ramadi',
                'country_code' => 'IRQ',
                'district' => 'al-Anbar',
                'population' => 192556,
            ],
            [

                'name' => 'al-Kut',
                'country_code' => 'IRQ',
                'district' => 'Wasit',
                'population' => 183183,
            ],
            [

                'name' => 'Baquba',
                'country_code' => 'IRQ',
                'district' => 'Diyala',
                'population' => 114516,
            ],
            [

                'name' => 'Teheran',
                'country_code' => 'IRN',
                'district' => 'Teheran',
                'population' => 6758845,
            ],
            [

                'name' => 'Mashhad',
                'country_code' => 'IRN',
                'district' => 'Khorasan',
                'population' => 1887405,
            ],
            [

                'name' => 'Esfahan',
                'country_code' => 'IRN',
                'district' => 'Esfahan',
                'population' => 1266072,
            ],
            [

                'name' => 'Tabriz',
                'country_code' => 'IRN',
                'district' => 'East Azerbaidzan',
                'population' => 1191043,
            ],
            [

                'name' => 'Shiraz',
                'country_code' => 'IRN',
                'district' => 'Fars',
                'population' => 1053025,
            ],
            [

                'name' => 'Karaj',
                'country_code' => 'IRN',
                'district' => 'Teheran',
                'population' => 940968,
            ],
            [

                'name' => 'Ahvaz',
                'country_code' => 'IRN',
                'district' => 'Khuzestan',
                'population' => 804980,
            ],
            [

                'name' => 'Qom',
                'country_code' => 'IRN',
                'district' => 'Qom',
                'population' => 777677,
            ],
            [

                'name' => 'Kermanshah',
                'country_code' => 'IRN',
                'district' => 'Kermanshah',
                'population' => 692986,
            ],
            [

                'name' => 'Urmia',
                'country_code' => 'IRN',
                'district' => 'West Azerbaidzan',
                'population' => 435200,
            ],
            [

                'name' => 'Zahedan',
                'country_code' => 'IRN',
                'district' => 'Sistan va Baluchesta',
                'population' => 419518,
            ],
            [

                'name' => 'Rasht',
                'country_code' => 'IRN',
                'district' => 'Gilan',
                'population' => 417748,
            ],
            [

                'name' => 'Hamadan',
                'country_code' => 'IRN',
                'district' => 'Hamadan',
                'population' => 401281,
            ],
            [

                'name' => 'Kerman',
                'country_code' => 'IRN',
                'district' => 'Kerman',
                'population' => 384991,
            ],
            [

                'name' => 'Arak',
                'country_code' => 'IRN',
                'district' => 'Markazi',
                'population' => 380755,
            ],
            [

                'name' => 'Ardebil',
                'country_code' => 'IRN',
                'district' => 'Ardebil',
                'population' => 340386,
            ],
            [

                'name' => 'Yazd',
                'country_code' => 'IRN',
                'district' => 'Yazd',
                'population' => 326776,
            ],
            [

                'name' => 'Qazvin',
                'country_code' => 'IRN',
                'district' => 'Qazvin',
                'population' => 291117,
            ],
            [

                'name' => 'Zanjan',
                'country_code' => 'IRN',
                'district' => 'Zanjan',
                'population' => 286295,
            ],
            [

                'name' => 'Sanandaj',
                'country_code' => 'IRN',
                'district' => 'Kordestan',
                'population' => 277808,
            ],
            [

                'name' => 'Bandar-e-Abbas',
                'country_code' => 'IRN',
                'district' => 'Hormozgan',
                'population' => 273578,
            ],
            [

                'name' => 'Khorramabad',
                'country_code' => 'IRN',
                'district' => 'Lorestan',
                'population' => 272815,
            ],
            [

                'name' => 'Eslamshahr',
                'country_code' => 'IRN',
                'district' => 'Teheran',
                'population' => 265450,
            ],
            [

                'name' => 'Borujerd',
                'country_code' => 'IRN',
                'district' => 'Lorestan',
                'population' => 217804,
            ],
            [

                'name' => 'Abadan',
                'country_code' => 'IRN',
                'district' => 'Khuzestan',
                'population' => 206073,
            ],
            [

                'name' => 'Dezful',
                'country_code' => 'IRN',
                'district' => 'Khuzestan',
                'population' => 202639,
            ],
            [

                'name' => 'Kashan',
                'country_code' => 'IRN',
                'district' => 'Esfahan',
                'population' => 201372,
            ],
            [

                'name' => 'Sari',
                'country_code' => 'IRN',
                'district' => 'Mazandaran',
                'population' => 195882,
            ],
            [

                'name' => 'Gorgan',
                'country_code' => 'IRN',
                'district' => 'Golestan',
                'population' => 188710,
            ],
            [

                'name' => 'Najafabad',
                'country_code' => 'IRN',
                'district' => 'Esfahan',
                'population' => 178498,
            ],
            [

                'name' => 'Sabzevar',
                'country_code' => 'IRN',
                'district' => 'Khorasan',
                'population' => 170738,
            ],
            [

                'name' => 'Khomeynishahr',
                'country_code' => 'IRN',
                'district' => 'Esfahan',
                'population' => 165888,
            ],
            [

                'name' => 'Amol',
                'country_code' => 'IRN',
                'district' => 'Mazandaran',
                'population' => 159092,
            ],
            [

                'name' => 'Neyshabur',
                'country_code' => 'IRN',
                'district' => 'Khorasan',
                'population' => 158847,
            ],
            [

                'name' => 'Babol',
                'country_code' => 'IRN',
                'district' => 'Mazandaran',
                'population' => 158346,
            ],
            [

                'name' => 'Khoy',
                'country_code' => 'IRN',
                'district' => 'West Azerbaidzan',
                'population' => 148944,
            ],
            [

                'name' => 'Malayer',
                'country_code' => 'IRN',
                'district' => 'Hamadan',
                'population' => 144373,
            ],
            [

                'name' => 'Bushehr',
                'country_code' => 'IRN',
                'district' => 'Bushehr',
                'population' => 143641,
            ],
            [

                'name' => 'Qaemshahr',
                'country_code' => 'IRN',
                'district' => 'Mazandaran',
                'population' => 143286,
            ],
            [

                'name' => 'Qarchak',
                'country_code' => 'IRN',
                'district' => 'Teheran',
                'population' => 142690,
            ],
            [

                'name' => 'Qods',
                'country_code' => 'IRN',
                'district' => 'Teheran',
                'population' => 138278,
            ],
            [

                'name' => 'Sirjan',
                'country_code' => 'IRN',
                'district' => 'Kerman',
                'population' => 135024,
            ],
            [

                'name' => 'Bojnurd',
                'country_code' => 'IRN',
                'district' => 'Khorasan',
                'population' => 134835,
            ],
            [

                'name' => 'Maragheh',
                'country_code' => 'IRN',
                'district' => 'East Azerbaidzan',
                'population' => 132318,
            ],
            [

                'name' => 'Birjand',
                'country_code' => 'IRN',
                'district' => 'Khorasan',
                'population' => 127608,
            ],
            [

                'name' => 'Ilam',
                'country_code' => 'IRN',
                'district' => 'Ilam',
                'population' => 126346,
            ],
            [

                'name' => 'Bukan',
                'country_code' => 'IRN',
                'district' => 'West Azerbaidzan',
                'population' => 120020,
            ],
            [

                'name' => 'Masjed-e-Soleyman',
                'country_code' => 'IRN',
                'district' => 'Khuzestan',
                'population' => 116883,
            ],
            [

                'name' => 'Saqqez',
                'country_code' => 'IRN',
                'district' => 'Kordestan',
                'population' => 115394,
            ],
            [

                'name' => 'Gonbad-e Qabus',
                'country_code' => 'IRN',
                'district' => 'Mazandaran',
                'population' => 111253,
            ],
            [

                'name' => 'Saveh',
                'country_code' => 'IRN',
                'district' => 'Qom',
                'population' => 111245,
            ],
            [

                'name' => 'Mahabad',
                'country_code' => 'IRN',
                'district' => 'West Azerbaidzan',
                'population' => 107799,
            ],
            [

                'name' => 'Varamin',
                'country_code' => 'IRN',
                'district' => 'Teheran',
                'population' => 107233,
            ],
            [

                'name' => 'Andimeshk',
                'country_code' => 'IRN',
                'district' => 'Khuzestan',
                'population' => 106923,
            ],
            [

                'name' => 'Khorramshahr',
                'country_code' => 'IRN',
                'district' => 'Khuzestan',
                'population' => 105636,
            ],
            [

                'name' => 'Shahrud',
                'country_code' => 'IRN',
                'district' => 'Semnan',
                'population' => 104765,
            ],
            [

                'name' => 'Marv Dasht',
                'country_code' => 'IRN',
                'district' => 'Fars',
                'population' => 103579,
            ],
            [

                'name' => 'Zabol',
                'country_code' => 'IRN',
                'district' => 'Sistan va Baluchesta',
                'population' => 100887,
            ],
            [

                'name' => 'Shahr-e Kord',
                'country_code' => 'IRN',
                'district' => 'Chaharmahal va Bakht',
                'population' => 100477,
            ],
            [

                'name' => 'Bandar-e Anzali',
                'country_code' => 'IRN',
                'district' => 'Gilan',
                'population' => 98500,
            ],
            [

                'name' => 'Rafsanjan',
                'country_code' => 'IRN',
                'district' => 'Kerman',
                'population' => 98300,
            ],
            [

                'name' => 'Marand',
                'country_code' => 'IRN',
                'district' => 'East Azerbaidzan',
                'population' => 96400,
            ],
            [

                'name' => 'Torbat-e Heydariyeh',
                'country_code' => 'IRN',
                'district' => 'Khorasan',
                'population' => 94600,
            ],
            [

                'name' => 'Jahrom',
                'country_code' => 'IRN',
                'district' => 'Fars',
                'population' => 94200,
            ],
            [

                'name' => 'Semnan',
                'country_code' => 'IRN',
                'district' => 'Semnan',
                'population' => 91045,
            ],
            [

                'name' => 'Miandoab',
                'country_code' => 'IRN',
                'district' => 'West Azerbaidzan',
                'population' => 90100,
            ],
            [

                'name' => 'Qomsheh',
                'country_code' => 'IRN',
                'district' => 'Esfahan',
                'population' => 89800,
            ],
            [

                'name' => 'Dublin',
                'country_code' => 'IRL',
                'district' => 'Leinster',
                'population' => 481854,
            ],
            [

                'name' => 'Cork',
                'country_code' => 'IRL',
                'district' => 'Munster',
                'population' => 127187,
            ],
            [

                'name' => 'Reykjavík',
                'country_code' => 'ISL',
                'district' => 'Höfuðborgarsvæði',
                'population' => 109184,
            ],
            [

                'name' => 'Jerusalem',
                'country_code' => 'ISR',
                'district' => 'Jerusalem',
                'population' => 633700,
            ],
            [

                'name' => 'Tel Aviv-Jaffa',
                'country_code' => 'ISR',
                'district' => 'Tel Aviv',
                'population' => 348100,
            ],
            [

                'name' => 'Haifa',
                'country_code' => 'ISR',
                'district' => 'Haifa',
                'population' => 265700,
            ],
            [

                'name' => 'Rishon Le Ziyyon',
                'country_code' => 'ISR',
                'district' => 'Ha Merkaz',
                'population' => 188200,
            ],
            [

                'name' => 'Beerseba',
                'country_code' => 'ISR',
                'district' => 'Ha Darom',
                'population' => 163700,
            ],
            [

                'name' => 'Holon',
                'country_code' => 'ISR',
                'district' => 'Tel Aviv',
                'population' => 163100,
            ],
            [

                'name' => 'Petah Tiqwa',
                'country_code' => 'ISR',
                'district' => 'Ha Merkaz',
                'population' => 159400,
            ],
            [

                'name' => 'Ashdod',
                'country_code' => 'ISR',
                'district' => 'Ha Darom',
                'population' => 155800,
            ],
            [

                'name' => 'Netanya',
                'country_code' => 'ISR',
                'district' => 'Ha Merkaz',
                'population' => 154900,
            ],
            [

                'name' => 'Bat Yam',
                'country_code' => 'ISR',
                'district' => 'Tel Aviv',
                'population' => 137000,
            ],
            [

                'name' => 'Bene Beraq',
                'country_code' => 'ISR',
                'district' => 'Tel Aviv',
                'population' => 133900,
            ],
            [

                'name' => 'Ramat Gan',
                'country_code' => 'ISR',
                'district' => 'Tel Aviv',
                'population' => 126900,
            ],
            [

                'name' => 'Ashqelon',
                'country_code' => 'ISR',
                'district' => 'Ha Darom',
                'population' => 92300,
            ],
            [

                'name' => 'Rehovot',
                'country_code' => 'ISR',
                'district' => 'Ha Merkaz',
                'population' => 90300,
            ],
            [

                'name' => 'Roma',
                'country_code' => 'ITA',
                'district' => 'Latium',
                'population' => 2643581,
            ],
            [

                'name' => 'Milano',
                'country_code' => 'ITA',
                'district' => 'Lombardia',
                'population' => 1300977,
            ],
            [

                'name' => 'Napoli',
                'country_code' => 'ITA',
                'district' => 'Campania',
                'population' => 1002619,
            ],
            [

                'name' => 'Torino',
                'country_code' => 'ITA',
                'district' => 'Piemonte',
                'population' => 903705,
            ],
            [

                'name' => 'Palermo',
                'country_code' => 'ITA',
                'district' => 'Sisilia',
                'population' => 683794,
            ],
            [

                'name' => 'Genova',
                'country_code' => 'ITA',
                'district' => 'Liguria',
                'population' => 636104,
            ],
            [

                'name' => 'Bologna',
                'country_code' => 'ITA',
                'district' => 'Emilia-Romagna',
                'population' => 381161,
            ],
            [

                'name' => 'Firenze',
                'country_code' => 'ITA',
                'district' => 'Toscana',
                'population' => 376662,
            ],
            [

                'name' => 'Catania',
                'country_code' => 'ITA',
                'district' => 'Sisilia',
                'population' => 337862,
            ],
            [

                'name' => 'Bari',
                'country_code' => 'ITA',
                'district' => 'Apulia',
                'population' => 331848,
            ],
            [

                'name' => 'Venezia',
                'country_code' => 'ITA',
                'district' => 'Veneto',
                'population' => 277305,
            ],
            [

                'name' => 'Messina',
                'country_code' => 'ITA',
                'district' => 'Sisilia',
                'population' => 259156,
            ],
            [

                'name' => 'Verona',
                'country_code' => 'ITA',
                'district' => 'Veneto',
                'population' => 255268,
            ],
            [

                'name' => 'Trieste',
                'country_code' => 'ITA',
                'district' => 'Friuli-Venezia Giuli',
                'population' => 216459,
            ],
            [

                'name' => 'Padova',
                'country_code' => 'ITA',
                'district' => 'Veneto',
                'population' => 211391,
            ],
            [

                'name' => 'Taranto',
                'country_code' => 'ITA',
                'district' => 'Apulia',
                'population' => 208214,
            ],
            [

                'name' => 'Brescia',
                'country_code' => 'ITA',
                'district' => 'Lombardia',
                'population' => 191317,
            ],
            [

                'name' => 'Reggio di Calabria',
                'country_code' => 'ITA',
                'district' => 'Calabria',
                'population' => 179617,
            ],
            [

                'name' => 'Modena',
                'country_code' => 'ITA',
                'district' => 'Emilia-Romagna',
                'population' => 176022,
            ],
            [

                'name' => 'Prato',
                'country_code' => 'ITA',
                'district' => 'Toscana',
                'population' => 172473,
            ],
            [

                'name' => 'Parma',
                'country_code' => 'ITA',
                'district' => 'Emilia-Romagna',
                'population' => 168717,
            ],
            [

                'name' => 'Cagliari',
                'country_code' => 'ITA',
                'district' => 'Sardinia',
                'population' => 165926,
            ],
            [

                'name' => 'Livorno',
                'country_code' => 'ITA',
                'district' => 'Toscana',
                'population' => 161673,
            ],
            [

                'name' => 'Perugia',
                'country_code' => 'ITA',
                'district' => 'Umbria',
                'population' => 156673,
            ],
            [

                'name' => 'Foggia',
                'country_code' => 'ITA',
                'district' => 'Apulia',
                'population' => 154891,
            ],
            [

                'name' => 'Reggio nell´ Emilia',
                'country_code' => 'ITA',
                'district' => 'Emilia-Romagna',
                'population' => 143664,
            ],
            [

                'name' => 'Salerno',
                'country_code' => 'ITA',
                'district' => 'Campania',
                'population' => 142055,
            ],
            [

                'name' => 'Ravenna',
                'country_code' => 'ITA',
                'district' => 'Emilia-Romagna',
                'population' => 138418,
            ],
            [

                'name' => 'Ferrara',
                'country_code' => 'ITA',
                'district' => 'Emilia-Romagna',
                'population' => 132127,
            ],
            [

                'name' => 'Rimini',
                'country_code' => 'ITA',
                'district' => 'Emilia-Romagna',
                'population' => 131062,
            ],
            [

                'name' => 'Syrakusa',
                'country_code' => 'ITA',
                'district' => 'Sisilia',
                'population' => 126282,
            ],
            [

                'name' => 'Sassari',
                'country_code' => 'ITA',
                'district' => 'Sardinia',
                'population' => 120803,
            ],
            [

                'name' => 'Monza',
                'country_code' => 'ITA',
                'district' => 'Lombardia',
                'population' => 119516,
            ],
            [

                'name' => 'Bergamo',
                'country_code' => 'ITA',
                'district' => 'Lombardia',
                'population' => 117837,
            ],
            [

                'name' => 'Pescara',
                'country_code' => 'ITA',
                'district' => 'Abruzzit',
                'population' => 115698,
            ],
            [

                'name' => 'Latina',
                'country_code' => 'ITA',
                'district' => 'Latium',
                'population' => 114099,
            ],
            [

                'name' => 'Vicenza',
                'country_code' => 'ITA',
                'district' => 'Veneto',
                'population' => 109738,
            ],
            [

                'name' => 'Terni',
                'country_code' => 'ITA',
                'district' => 'Umbria',
                'population' => 107770,
            ],
            [

                'name' => 'Forlì',
                'country_code' => 'ITA',
                'district' => 'Emilia-Romagna',
                'population' => 107475,
            ],
            [

                'name' => 'Trento',
                'country_code' => 'ITA',
                'district' => 'Trentino-Alto Adige',
                'population' => 104906,
            ],
            [

                'name' => 'Novara',
                'country_code' => 'ITA',
                'district' => 'Piemonte',
                'population' => 102037,
            ],
            [

                'name' => 'Piacenza',
                'country_code' => 'ITA',
                'district' => 'Emilia-Romagna',
                'population' => 98384,
            ],
            [

                'name' => 'Ancona',
                'country_code' => 'ITA',
                'district' => 'Marche',
                'population' => 98329,
            ],
            [

                'name' => 'Lecce',
                'country_code' => 'ITA',
                'district' => 'Apulia',
                'population' => 98208,
            ],
            [

                'name' => 'Bolzano',
                'country_code' => 'ITA',
                'district' => 'Trentino-Alto Adige',
                'population' => 97232,
            ],
            [

                'name' => 'Catanzaro',
                'country_code' => 'ITA',
                'district' => 'Calabria',
                'population' => 96700,
            ],
            [

                'name' => 'La Spezia',
                'country_code' => 'ITA',
                'district' => 'Liguria',
                'population' => 95504,
            ],
            [

                'name' => 'Udine',
                'country_code' => 'ITA',
                'district' => 'Friuli-Venezia Giuli',
                'population' => 94932,
            ],
            [

                'name' => 'Torre del Greco',
                'country_code' => 'ITA',
                'district' => 'Campania',
                'population' => 94505,
            ],
            [

                'name' => 'Andria',
                'country_code' => 'ITA',
                'district' => 'Apulia',
                'population' => 94443,
            ],
            [

                'name' => 'Brindisi',
                'country_code' => 'ITA',
                'district' => 'Apulia',
                'population' => 93454,
            ],
            [

                'name' => 'Giugliano in Campania',
                'country_code' => 'ITA',
                'district' => 'Campania',
                'population' => 93286,
            ],
            [

                'name' => 'Pisa',
                'country_code' => 'ITA',
                'district' => 'Toscana',
                'population' => 92379,
            ],
            [

                'name' => 'Barletta',
                'country_code' => 'ITA',
                'district' => 'Apulia',
                'population' => 91904,
            ],
            [

                'name' => 'Arezzo',
                'country_code' => 'ITA',
                'district' => 'Toscana',
                'population' => 91729,
            ],
            [

                'name' => 'Alessandria',
                'country_code' => 'ITA',
                'district' => 'Piemonte',
                'population' => 90289,
            ],
            [

                'name' => 'Cesena',
                'country_code' => 'ITA',
                'district' => 'Emilia-Romagna',
                'population' => 89852,
            ],
            [

                'name' => 'Pesaro',
                'country_code' => 'ITA',
                'district' => 'Marche',
                'population' => 88987,
            ],
            [

                'name' => 'Dili',
                'country_code' => 'TMP',
                'district' => 'Dili',
                'population' => 47900,
            ],
            [

                'name' => 'Wien',
                'country_code' => 'AUT',
                'district' => 'Wien',
                'population' => 1608144,
            ],
            [

                'name' => 'Graz',
                'country_code' => 'AUT',
                'district' => 'Steiermark',
                'population' => 240967,
            ],
            [

                'name' => 'Linz',
                'country_code' => 'AUT',
                'district' => 'North Austria',
                'population' => 188022,
            ],
            [

                'name' => 'Salzburg',
                'country_code' => 'AUT',
                'district' => 'Salzburg',
                'population' => 144247,
            ],
            [

                'name' => 'Innsbruck',
                'country_code' => 'AUT',
                'district' => 'Tiroli',
                'population' => 111752,
            ],
            [

                'name' => 'Klagenfurt',
                'country_code' => 'AUT',
                'district' => 'Kärnten',
                'population' => 91141,
            ],
            [

                'name' => 'Spanish Town',
                'country_code' => 'JAM',
                'district' => 'St. Catherine',
                'population' => 110379,
            ],
            [

                'name' => 'Kingston',
                'country_code' => 'JAM',
                'district' => 'St. Andrew',
                'population' => 103962,
            ],
            [

                'name' => 'Portmore',
                'country_code' => 'JAM',
                'district' => 'St. Andrew',
                'population' => 99799,
            ],
            [

                'name' => 'Tokyo',
                'country_code' => 'JPN',
                'district' => 'Tokyo-to',
                'population' => 7980230,
            ],
            [

                'name' => 'Jokohama [Yokohama]',
                'country_code' => 'JPN',
                'district' => 'Kanagawa',
                'population' => 3339594,
            ],
            [

                'name' => 'Osaka',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 2595674,
            ],
            [

                'name' => 'Nagoya',
                'country_code' => 'JPN',
                'district' => 'Aichi',
                'population' => 2154376,
            ],
            [

                'name' => 'Sapporo',
                'country_code' => 'JPN',
                'district' => 'Hokkaido',
                'population' => 1790886,
            ],
            [

                'name' => 'Kioto',
                'country_code' => 'JPN',
                'district' => 'Kyoto',
                'population' => 1461974,
            ],
            [

                'name' => 'Kobe',
                'country_code' => 'JPN',
                'district' => 'Hyogo',
                'population' => 1425139,
            ],
            [

                'name' => 'Fukuoka',
                'country_code' => 'JPN',
                'district' => 'Fukuoka',
                'population' => 1308379,
            ],
            [

                'name' => 'Kawasaki',
                'country_code' => 'JPN',
                'district' => 'Kanagawa',
                'population' => 1217359,
            ],
            [

                'name' => 'Hiroshima',
                'country_code' => 'JPN',
                'district' => 'Hiroshima',
                'population' => 1119117,
            ],
            [

                'name' => 'Kitakyushu',
                'country_code' => 'JPN',
                'district' => 'Fukuoka',
                'population' => 1016264,
            ],
            [

                'name' => 'Sendai',
                'country_code' => 'JPN',
                'district' => 'Miyagi',
                'population' => 989975,
            ],
            [

                'name' => 'Chiba',
                'country_code' => 'JPN',
                'district' => 'Chiba',
                'population' => 863930,
            ],
            [

                'name' => 'Sakai',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 797735,
            ],
            [

                'name' => 'Kumamoto',
                'country_code' => 'JPN',
                'district' => 'Kumamoto',
                'population' => 656734,
            ],
            [

                'name' => 'Okayama',
                'country_code' => 'JPN',
                'district' => 'Okayama',
                'population' => 624269,
            ],
            [

                'name' => 'Sagamihara',
                'country_code' => 'JPN',
                'district' => 'Kanagawa',
                'population' => 586300,
            ],
            [

                'name' => 'Hamamatsu',
                'country_code' => 'JPN',
                'district' => 'Shizuoka',
                'population' => 568796,
            ],
            [

                'name' => 'Kagoshima',
                'country_code' => 'JPN',
                'district' => 'Kagoshima',
                'population' => 549977,
            ],
            [

                'name' => 'Funabashi',
                'country_code' => 'JPN',
                'district' => 'Chiba',
                'population' => 545299,
            ],
            [

                'name' => 'Higashiosaka',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 517785,
            ],
            [

                'name' => 'Hachioji',
                'country_code' => 'JPN',
                'district' => 'Tokyo-to',
                'population' => 513451,
            ],
            [

                'name' => 'Niigata',
                'country_code' => 'JPN',
                'district' => 'Niigata',
                'population' => 497464,
            ],
            [

                'name' => 'Amagasaki',
                'country_code' => 'JPN',
                'district' => 'Hyogo',
                'population' => 481434,
            ],
            [

                'name' => 'Himeji',
                'country_code' => 'JPN',
                'district' => 'Hyogo',
                'population' => 475167,
            ],
            [

                'name' => 'Shizuoka',
                'country_code' => 'JPN',
                'district' => 'Shizuoka',
                'population' => 473854,
            ],
            [

                'name' => 'Urawa',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 469675,
            ],
            [

                'name' => 'Matsuyama',
                'country_code' => 'JPN',
                'district' => 'Ehime',
                'population' => 466133,
            ],
            [

                'name' => 'Matsudo',
                'country_code' => 'JPN',
                'district' => 'Chiba',
                'population' => 461126,
            ],
            [

                'name' => 'Kanazawa',
                'country_code' => 'JPN',
                'district' => 'Ishikawa',
                'population' => 455386,
            ],
            [

                'name' => 'Kawaguchi',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 452155,
            ],
            [

                'name' => 'Ichikawa',
                'country_code' => 'JPN',
                'district' => 'Chiba',
                'population' => 441893,
            ],
            [

                'name' => 'Omiya',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 441649,
            ],
            [

                'name' => 'Utsunomiya',
                'country_code' => 'JPN',
                'district' => 'Tochigi',
                'population' => 440353,
            ],
            [

                'name' => 'Oita',
                'country_code' => 'JPN',
                'district' => 'Oita',
                'population' => 433401,
            ],
            [

                'name' => 'Nagasaki',
                'country_code' => 'JPN',
                'district' => 'Nagasaki',
                'population' => 432759,
            ],
            [

                'name' => 'Yokosuka',
                'country_code' => 'JPN',
                'district' => 'Kanagawa',
                'population' => 430200,
            ],
            [

                'name' => 'Kurashiki',
                'country_code' => 'JPN',
                'district' => 'Okayama',
                'population' => 425103,
            ],
            [

                'name' => 'Gifu',
                'country_code' => 'JPN',
                'district' => 'Gifu',
                'population' => 408007,
            ],
            [

                'name' => 'Hirakata',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 403151,
            ],
            [

                'name' => 'Nishinomiya',
                'country_code' => 'JPN',
                'district' => 'Hyogo',
                'population' => 397618,
            ],
            [

                'name' => 'Toyonaka',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 396689,
            ],
            [

                'name' => 'Wakayama',
                'country_code' => 'JPN',
                'district' => 'Wakayama',
                'population' => 391233,
            ],
            [

                'name' => 'Fukuyama',
                'country_code' => 'JPN',
                'district' => 'Hiroshima',
                'population' => 376921,
            ],
            [

                'name' => 'Fujisawa',
                'country_code' => 'JPN',
                'district' => 'Kanagawa',
                'population' => 372840,
            ],
            [

                'name' => 'Asahikawa',
                'country_code' => 'JPN',
                'district' => 'Hokkaido',
                'population' => 364813,
            ],
            [

                'name' => 'Machida',
                'country_code' => 'JPN',
                'district' => 'Tokyo-to',
                'population' => 364197,
            ],
            [

                'name' => 'Nara',
                'country_code' => 'JPN',
                'district' => 'Nara',
                'population' => 362812,
            ],
            [

                'name' => 'Takatsuki',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 361747,
            ],
            [

                'name' => 'Iwaki',
                'country_code' => 'JPN',
                'district' => 'Fukushima',
                'population' => 361737,
            ],
            [

                'name' => 'Nagano',
                'country_code' => 'JPN',
                'district' => 'Nagano',
                'population' => 361391,
            ],
            [

                'name' => 'Toyohashi',
                'country_code' => 'JPN',
                'district' => 'Aichi',
                'population' => 360066,
            ],
            [

                'name' => 'Toyota',
                'country_code' => 'JPN',
                'district' => 'Aichi',
                'population' => 346090,
            ],
            [

                'name' => 'Suita',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 345750,
            ],
            [

                'name' => 'Takamatsu',
                'country_code' => 'JPN',
                'district' => 'Kagawa',
                'population' => 332471,
            ],
            [

                'name' => 'Koriyama',
                'country_code' => 'JPN',
                'district' => 'Fukushima',
                'population' => 330335,
            ],
            [

                'name' => 'Okazaki',
                'country_code' => 'JPN',
                'district' => 'Aichi',
                'population' => 328711,
            ],
            [

                'name' => 'Kawagoe',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 327211,
            ],
            [

                'name' => 'Tokorozawa',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 325809,
            ],
            [

                'name' => 'Toyama',
                'country_code' => 'JPN',
                'district' => 'Toyama',
                'population' => 325790,
            ],
            [

                'name' => 'Kochi',
                'country_code' => 'JPN',
                'district' => 'Kochi',
                'population' => 324710,
            ],
            [

                'name' => 'Kashiwa',
                'country_code' => 'JPN',
                'district' => 'Chiba',
                'population' => 320296,
            ],
            [

                'name' => 'Akita',
                'country_code' => 'JPN',
                'district' => 'Akita',
                'population' => 314440,
            ],
            [

                'name' => 'Miyazaki',
                'country_code' => 'JPN',
                'district' => 'Miyazaki',
                'population' => 303784,
            ],
            [

                'name' => 'Koshigaya',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 301446,
            ],
            [

                'name' => 'Naha',
                'country_code' => 'JPN',
                'district' => 'Okinawa',
                'population' => 299851,
            ],
            [

                'name' => 'Aomori',
                'country_code' => 'JPN',
                'district' => 'Aomori',
                'population' => 295969,
            ],
            [

                'name' => 'Hakodate',
                'country_code' => 'JPN',
                'district' => 'Hokkaido',
                'population' => 294788,
            ],
            [

                'name' => 'Akashi',
                'country_code' => 'JPN',
                'district' => 'Hyogo',
                'population' => 292253,
            ],
            [

                'name' => 'Yokkaichi',
                'country_code' => 'JPN',
                'district' => 'Mie',
                'population' => 288173,
            ],
            [

                'name' => 'Fukushima',
                'country_code' => 'JPN',
                'district' => 'Fukushima',
                'population' => 287525,
            ],
            [

                'name' => 'Morioka',
                'country_code' => 'JPN',
                'district' => 'Iwate',
                'population' => 287353,
            ],
            [

                'name' => 'Maebashi',
                'country_code' => 'JPN',
                'district' => 'Gumma',
                'population' => 284473,
            ],
            [

                'name' => 'Kasugai',
                'country_code' => 'JPN',
                'district' => 'Aichi',
                'population' => 282348,
            ],
            [

                'name' => 'Otsu',
                'country_code' => 'JPN',
                'district' => 'Shiga',
                'population' => 282070,
            ],
            [

                'name' => 'Ichihara',
                'country_code' => 'JPN',
                'district' => 'Chiba',
                'population' => 279280,
            ],
            [

                'name' => 'Yao',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 276421,
            ],
            [

                'name' => 'Ichinomiya',
                'country_code' => 'JPN',
                'district' => 'Aichi',
                'population' => 270828,
            ],
            [

                'name' => 'Tokushima',
                'country_code' => 'JPN',
                'district' => 'Tokushima',
                'population' => 269649,
            ],
            [

                'name' => 'Kakogawa',
                'country_code' => 'JPN',
                'district' => 'Hyogo',
                'population' => 266281,
            ],
            [

                'name' => 'Ibaraki',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 261020,
            ],
            [

                'name' => 'Neyagawa',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 257315,
            ],
            [

                'name' => 'Shimonoseki',
                'country_code' => 'JPN',
                'district' => 'Yamaguchi',
                'population' => 257263,
            ],
            [

                'name' => 'Yamagata',
                'country_code' => 'JPN',
                'district' => 'Yamagata',
                'population' => 255617,
            ],
            [

                'name' => 'Fukui',
                'country_code' => 'JPN',
                'district' => 'Fukui',
                'population' => 254818,
            ],
            [

                'name' => 'Hiratsuka',
                'country_code' => 'JPN',
                'district' => 'Kanagawa',
                'population' => 254207,
            ],
            [

                'name' => 'Mito',
                'country_code' => 'JPN',
                'district' => 'Ibaragi',
                'population' => 246559,
            ],
            [

                'name' => 'Sasebo',
                'country_code' => 'JPN',
                'district' => 'Nagasaki',
                'population' => 244240,
            ],
            [

                'name' => 'Hachinohe',
                'country_code' => 'JPN',
                'district' => 'Aomori',
                'population' => 242979,
            ],
            [

                'name' => 'Takasaki',
                'country_code' => 'JPN',
                'district' => 'Gumma',
                'population' => 239124,
            ],
            [

                'name' => 'Shimizu',
                'country_code' => 'JPN',
                'district' => 'Shizuoka',
                'population' => 239123,
            ],
            [

                'name' => 'Kurume',
                'country_code' => 'JPN',
                'district' => 'Fukuoka',
                'population' => 235611,
            ],
            [

                'name' => 'Fuji',
                'country_code' => 'JPN',
                'district' => 'Shizuoka',
                'population' => 231527,
            ],
            [

                'name' => 'Soka',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 222768,
            ],
            [

                'name' => 'Fuchu',
                'country_code' => 'JPN',
                'district' => 'Tokyo-to',
                'population' => 220576,
            ],
            [

                'name' => 'Chigasaki',
                'country_code' => 'JPN',
                'district' => 'Kanagawa',
                'population' => 216015,
            ],
            [

                'name' => 'Atsugi',
                'country_code' => 'JPN',
                'district' => 'Kanagawa',
                'population' => 212407,
            ],
            [

                'name' => 'Numazu',
                'country_code' => 'JPN',
                'district' => 'Shizuoka',
                'population' => 211382,
            ],
            [

                'name' => 'Ageo',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 209442,
            ],
            [

                'name' => 'Yamato',
                'country_code' => 'JPN',
                'district' => 'Kanagawa',
                'population' => 208234,
            ],
            [

                'name' => 'Matsumoto',
                'country_code' => 'JPN',
                'district' => 'Nagano',
                'population' => 206801,
            ],
            [

                'name' => 'Kure',
                'country_code' => 'JPN',
                'district' => 'Hiroshima',
                'population' => 206504,
            ],
            [

                'name' => 'Takarazuka',
                'country_code' => 'JPN',
                'district' => 'Hyogo',
                'population' => 205993,
            ],
            [

                'name' => 'Kasukabe',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 201838,
            ],
            [

                'name' => 'Chofu',
                'country_code' => 'JPN',
                'district' => 'Tokyo-to',
                'population' => 201585,
            ],
            [

                'name' => 'Odawara',
                'country_code' => 'JPN',
                'district' => 'Kanagawa',
                'population' => 200171,
            ],
            [

                'name' => 'Kofu',
                'country_code' => 'JPN',
                'district' => 'Yamanashi',
                'population' => 199753,
            ],
            [

                'name' => 'Kushiro',
                'country_code' => 'JPN',
                'district' => 'Hokkaido',
                'population' => 197608,
            ],
            [

                'name' => 'Kishiwada',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 197276,
            ],
            [

                'name' => 'Hitachi',
                'country_code' => 'JPN',
                'district' => 'Ibaragi',
                'population' => 196622,
            ],
            [

                'name' => 'Nagaoka',
                'country_code' => 'JPN',
                'district' => 'Niigata',
                'population' => 192407,
            ],
            [

                'name' => 'Itami',
                'country_code' => 'JPN',
                'district' => 'Hyogo',
                'population' => 190886,
            ],
            [

                'name' => 'Uji',
                'country_code' => 'JPN',
                'district' => 'Kyoto',
                'population' => 188735,
            ],
            [

                'name' => 'Suzuka',
                'country_code' => 'JPN',
                'district' => 'Mie',
                'population' => 184061,
            ],
            [

                'name' => 'Hirosaki',
                'country_code' => 'JPN',
                'district' => 'Aomori',
                'population' => 177522,
            ],
            [

                'name' => 'Ube',
                'country_code' => 'JPN',
                'district' => 'Yamaguchi',
                'population' => 175206,
            ],
            [

                'name' => 'Kodaira',
                'country_code' => 'JPN',
                'district' => 'Tokyo-to',
                'population' => 174984,
            ],
            [

                'name' => 'Takaoka',
                'country_code' => 'JPN',
                'district' => 'Toyama',
                'population' => 174380,
            ],
            [

                'name' => 'Obihiro',
                'country_code' => 'JPN',
                'district' => 'Hokkaido',
                'population' => 173685,
            ],
            [

                'name' => 'Tomakomai',
                'country_code' => 'JPN',
                'district' => 'Hokkaido',
                'population' => 171958,
            ],
            [

                'name' => 'Saga',
                'country_code' => 'JPN',
                'district' => 'Saga',
                'population' => 170034,
            ],
            [

                'name' => 'Sakura',
                'country_code' => 'JPN',
                'district' => 'Chiba',
                'population' => 168072,
            ],
            [

                'name' => 'Kamakura',
                'country_code' => 'JPN',
                'district' => 'Kanagawa',
                'population' => 167661,
            ],
            [

                'name' => 'Mitaka',
                'country_code' => 'JPN',
                'district' => 'Tokyo-to',
                'population' => 167268,
            ],
            [

                'name' => 'Izumi',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 166979,
            ],
            [

                'name' => 'Hino',
                'country_code' => 'JPN',
                'district' => 'Tokyo-to',
                'population' => 166770,
            ],
            [

                'name' => 'Hadano',
                'country_code' => 'JPN',
                'district' => 'Kanagawa',
                'population' => 166512,
            ],
            [

                'name' => 'Ashikaga',
                'country_code' => 'JPN',
                'district' => 'Tochigi',
                'population' => 165243,
            ],
            [

                'name' => 'Tsu',
                'country_code' => 'JPN',
                'district' => 'Mie',
                'population' => 164543,
            ],
            [

                'name' => 'Sayama',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 162472,
            ],
            [

                'name' => 'Yachiyo',
                'country_code' => 'JPN',
                'district' => 'Chiba',
                'population' => 161222,
            ],
            [

                'name' => 'Tsukuba',
                'country_code' => 'JPN',
                'district' => 'Ibaragi',
                'population' => 160768,
            ],
            [

                'name' => 'Tachikawa',
                'country_code' => 'JPN',
                'district' => 'Tokyo-to',
                'population' => 159430,
            ],
            [

                'name' => 'Kumagaya',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 157171,
            ],
            [

                'name' => 'Moriguchi',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 155941,
            ],
            [

                'name' => 'Otaru',
                'country_code' => 'JPN',
                'district' => 'Hokkaido',
                'population' => 155784,
            ],
            [

                'name' => 'Anjo',
                'country_code' => 'JPN',
                'district' => 'Aichi',
                'population' => 153823,
            ],
            [

                'name' => 'Narashino',
                'country_code' => 'JPN',
                'district' => 'Chiba',
                'population' => 152849,
            ],
            [

                'name' => 'Oyama',
                'country_code' => 'JPN',
                'district' => 'Tochigi',
                'population' => 152820,
            ],
            [

                'name' => 'Ogaki',
                'country_code' => 'JPN',
                'district' => 'Gifu',
                'population' => 151758,
            ],
            [

                'name' => 'Matsue',
                'country_code' => 'JPN',
                'district' => 'Shimane',
                'population' => 149821,
            ],
            [

                'name' => 'Kawanishi',
                'country_code' => 'JPN',
                'district' => 'Hyogo',
                'population' => 149794,
            ],
            [

                'name' => 'Hitachinaka',
                'country_code' => 'JPN',
                'district' => 'Tokyo-to',
                'population' => 148006,
            ],
            [

                'name' => 'Niiza',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 147744,
            ],
            [

                'name' => 'Nagareyama',
                'country_code' => 'JPN',
                'district' => 'Chiba',
                'population' => 147738,
            ],
            [

                'name' => 'Tottori',
                'country_code' => 'JPN',
                'district' => 'Tottori',
                'population' => 147523,
            ],
            [

                'name' => 'Tama',
                'country_code' => 'JPN',
                'district' => 'Ibaragi',
                'population' => 146712,
            ],
            [

                'name' => 'Iruma',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 145922,
            ],
            [

                'name' => 'Ota',
                'country_code' => 'JPN',
                'district' => 'Gumma',
                'population' => 145317,
            ],
            [

                'name' => 'Omuta',
                'country_code' => 'JPN',
                'district' => 'Fukuoka',
                'population' => 142889,
            ],
            [

                'name' => 'Komaki',
                'country_code' => 'JPN',
                'district' => 'Aichi',
                'population' => 139827,
            ],
            [

                'name' => 'Ome',
                'country_code' => 'JPN',
                'district' => 'Tokyo-to',
                'population' => 139216,
            ],
            [

                'name' => 'Kadoma',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 138953,
            ],
            [

                'name' => 'Yamaguchi',
                'country_code' => 'JPN',
                'district' => 'Yamaguchi',
                'population' => 138210,
            ],
            [

                'name' => 'Higashimurayama',
                'country_code' => 'JPN',
                'district' => 'Tokyo-to',
                'population' => 136970,
            ],
            [

                'name' => 'Yonago',
                'country_code' => 'JPN',
                'district' => 'Tottori',
                'population' => 136461,
            ],
            [

                'name' => 'Matsubara',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 135010,
            ],
            [

                'name' => 'Musashino',
                'country_code' => 'JPN',
                'district' => 'Tokyo-to',
                'population' => 134426,
            ],
            [

                'name' => 'Tsuchiura',
                'country_code' => 'JPN',
                'district' => 'Ibaragi',
                'population' => 134072,
            ],
            [

                'name' => 'Joetsu',
                'country_code' => 'JPN',
                'district' => 'Niigata',
                'population' => 133505,
            ],
            [

                'name' => 'Miyakonojo',
                'country_code' => 'JPN',
                'district' => 'Miyazaki',
                'population' => 133183,
            ],
            [

                'name' => 'Misato',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 132957,
            ],
            [

                'name' => 'Kakamigahara',
                'country_code' => 'JPN',
                'district' => 'Gifu',
                'population' => 131831,
            ],
            [

                'name' => 'Daito',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 130594,
            ],
            [

                'name' => 'Seto',
                'country_code' => 'JPN',
                'district' => 'Aichi',
                'population' => 130470,
            ],
            [

                'name' => 'Kariya',
                'country_code' => 'JPN',
                'district' => 'Aichi',
                'population' => 127969,
            ],
            [

                'name' => 'Urayasu',
                'country_code' => 'JPN',
                'district' => 'Chiba',
                'population' => 127550,
            ],
            [

                'name' => 'Beppu',
                'country_code' => 'JPN',
                'district' => 'Oita',
                'population' => 127486,
            ],
            [

                'name' => 'Niihama',
                'country_code' => 'JPN',
                'district' => 'Ehime',
                'population' => 127207,
            ],
            [

                'name' => 'Minoo',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 127026,
            ],
            [

                'name' => 'Fujieda',
                'country_code' => 'JPN',
                'district' => 'Shizuoka',
                'population' => 126897,
            ],
            [

                'name' => 'Abiko',
                'country_code' => 'JPN',
                'district' => 'Chiba',
                'population' => 126670,
            ],
            [

                'name' => 'Nobeoka',
                'country_code' => 'JPN',
                'district' => 'Miyazaki',
                'population' => 125547,
            ],
            [

                'name' => 'Tondabayashi',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 125094,
            ],
            [

                'name' => 'Ueda',
                'country_code' => 'JPN',
                'district' => 'Nagano',
                'population' => 124217,
            ],
            [

                'name' => 'Kashihara',
                'country_code' => 'JPN',
                'district' => 'Nara',
                'population' => 124013,
            ],
            [

                'name' => 'Matsusaka',
                'country_code' => 'JPN',
                'district' => 'Mie',
                'population' => 123582,
            ],
            [

                'name' => 'Isesaki',
                'country_code' => 'JPN',
                'district' => 'Gumma',
                'population' => 123285,
            ],
            [

                'name' => 'Zama',
                'country_code' => 'JPN',
                'district' => 'Kanagawa',
                'population' => 122046,
            ],
            [

                'name' => 'Kisarazu',
                'country_code' => 'JPN',
                'district' => 'Chiba',
                'population' => 121967,
            ],
            [

                'name' => 'Noda',
                'country_code' => 'JPN',
                'district' => 'Chiba',
                'population' => 121030,
            ],
            [

                'name' => 'Ishinomaki',
                'country_code' => 'JPN',
                'district' => 'Miyagi',
                'population' => 120963,
            ],
            [

                'name' => 'Fujinomiya',
                'country_code' => 'JPN',
                'district' => 'Shizuoka',
                'population' => 119714,
            ],
            [

                'name' => 'Kawachinagano',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 119666,
            ],
            [

                'name' => 'Imabari',
                'country_code' => 'JPN',
                'district' => 'Ehime',
                'population' => 119357,
            ],
            [

                'name' => 'Aizuwakamatsu',
                'country_code' => 'JPN',
                'district' => 'Fukushima',
                'population' => 119287,
            ],
            [

                'name' => 'Higashihiroshima',
                'country_code' => 'JPN',
                'district' => 'Hiroshima',
                'population' => 119166,
            ],
            [

                'name' => 'Habikino',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 118968,
            ],
            [

                'name' => 'Ebetsu',
                'country_code' => 'JPN',
                'district' => 'Hokkaido',
                'population' => 118805,
            ],
            [

                'name' => 'Hofu',
                'country_code' => 'JPN',
                'district' => 'Yamaguchi',
                'population' => 118751,
            ],
            [

                'name' => 'Kiryu',
                'country_code' => 'JPN',
                'district' => 'Gumma',
                'population' => 118326,
            ],
            [

                'name' => 'Okinawa',
                'country_code' => 'JPN',
                'district' => 'Okinawa',
                'population' => 117748,
            ],
            [

                'name' => 'Yaizu',
                'country_code' => 'JPN',
                'district' => 'Shizuoka',
                'population' => 117258,
            ],
            [

                'name' => 'Toyokawa',
                'country_code' => 'JPN',
                'district' => 'Aichi',
                'population' => 115781,
            ],
            [

                'name' => 'Ebina',
                'country_code' => 'JPN',
                'district' => 'Kanagawa',
                'population' => 115571,
            ],
            [

                'name' => 'Asaka',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 114815,
            ],
            [

                'name' => 'Higashikurume',
                'country_code' => 'JPN',
                'district' => 'Tokyo-to',
                'population' => 111666,
            ],
            [

                'name' => 'Ikoma',
                'country_code' => 'JPN',
                'district' => 'Nara',
                'population' => 111645,
            ],
            [

                'name' => 'Kitami',
                'country_code' => 'JPN',
                'district' => 'Hokkaido',
                'population' => 111295,
            ],
            [

                'name' => 'Koganei',
                'country_code' => 'JPN',
                'district' => 'Tokyo-to',
                'population' => 110969,
            ],
            [

                'name' => 'Iwatsuki',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 110034,
            ],
            [

                'name' => 'Mishima',
                'country_code' => 'JPN',
                'district' => 'Shizuoka',
                'population' => 109699,
            ],
            [

                'name' => 'Handa',
                'country_code' => 'JPN',
                'district' => 'Aichi',
                'population' => 108600,
            ],
            [

                'name' => 'Muroran',
                'country_code' => 'JPN',
                'district' => 'Hokkaido',
                'population' => 108275,
            ],
            [

                'name' => 'Komatsu',
                'country_code' => 'JPN',
                'district' => 'Ishikawa',
                'population' => 107937,
            ],
            [

                'name' => 'Yatsushiro',
                'country_code' => 'JPN',
                'district' => 'Kumamoto',
                'population' => 107661,
            ],
            [

                'name' => 'Iida',
                'country_code' => 'JPN',
                'district' => 'Nagano',
                'population' => 107583,
            ],
            [

                'name' => 'Tokuyama',
                'country_code' => 'JPN',
                'district' => 'Yamaguchi',
                'population' => 107078,
            ],
            [

                'name' => 'Kokubunji',
                'country_code' => 'JPN',
                'district' => 'Tokyo-to',
                'population' => 106996,
            ],
            [

                'name' => 'Akishima',
                'country_code' => 'JPN',
                'district' => 'Tokyo-to',
                'population' => 106914,
            ],
            [

                'name' => 'Iwakuni',
                'country_code' => 'JPN',
                'district' => 'Yamaguchi',
                'population' => 106647,
            ],
            [

                'name' => 'Kusatsu',
                'country_code' => 'JPN',
                'district' => 'Shiga',
                'population' => 106232,
            ],
            [

                'name' => 'Kuwana',
                'country_code' => 'JPN',
                'district' => 'Mie',
                'population' => 106121,
            ],
            [

                'name' => 'Sanda',
                'country_code' => 'JPN',
                'district' => 'Hyogo',
                'population' => 105643,
            ],
            [

                'name' => 'Hikone',
                'country_code' => 'JPN',
                'district' => 'Shiga',
                'population' => 105508,
            ],
            [

                'name' => 'Toda',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 103969,
            ],
            [

                'name' => 'Tajimi',
                'country_code' => 'JPN',
                'district' => 'Gifu',
                'population' => 103171,
            ],
            [

                'name' => 'Ikeda',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 102710,
            ],
            [

                'name' => 'Fukaya',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 102156,
            ],
            [

                'name' => 'Ise',
                'country_code' => 'JPN',
                'district' => 'Mie',
                'population' => 101732,
            ],
            [

                'name' => 'Sakata',
                'country_code' => 'JPN',
                'district' => 'Yamagata',
                'population' => 101651,
            ],
            [

                'name' => 'Kasuga',
                'country_code' => 'JPN',
                'district' => 'Fukuoka',
                'population' => 101344,
            ],
            [

                'name' => 'Kamagaya',
                'country_code' => 'JPN',
                'district' => 'Chiba',
                'population' => 100821,
            ],
            [

                'name' => 'Tsuruoka',
                'country_code' => 'JPN',
                'district' => 'Yamagata',
                'population' => 100713,
            ],
            [

                'name' => 'Hoya',
                'country_code' => 'JPN',
                'district' => 'Tokyo-to',
                'population' => 100313,
            ],
            [

                'name' => 'Nishio',
                'country_code' => 'JPN',
                'district' => 'Chiba',
                'population' => 100032,
            ],
            [

                'name' => 'Tokai',
                'country_code' => 'JPN',
                'district' => 'Aichi',
                'population' => 99738,
            ],
            [

                'name' => 'Inazawa',
                'country_code' => 'JPN',
                'district' => 'Aichi',
                'population' => 98746,
            ],
            [

                'name' => 'Sakado',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 98221,
            ],
            [

                'name' => 'Isehara',
                'country_code' => 'JPN',
                'district' => 'Kanagawa',
                'population' => 98123,
            ],
            [

                'name' => 'Takasago',
                'country_code' => 'JPN',
                'district' => 'Hyogo',
                'population' => 97632,
            ],
            [

                'name' => 'Fujimi',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 96972,
            ],
            [

                'name' => 'Urasoe',
                'country_code' => 'JPN',
                'district' => 'Okinawa',
                'population' => 96002,
            ],
            [

                'name' => 'Yonezawa',
                'country_code' => 'JPN',
                'district' => 'Yamagata',
                'population' => 95592,
            ],
            [

                'name' => 'Konan',
                'country_code' => 'JPN',
                'district' => 'Aichi',
                'population' => 95521,
            ],
            [

                'name' => 'Yamatokoriyama',
                'country_code' => 'JPN',
                'district' => 'Nara',
                'population' => 95165,
            ],
            [

                'name' => 'Maizuru',
                'country_code' => 'JPN',
                'district' => 'Kyoto',
                'population' => 94784,
            ],
            [

                'name' => 'Onomichi',
                'country_code' => 'JPN',
                'district' => 'Hiroshima',
                'population' => 93756,
            ],
            [

                'name' => 'Higashimatsuyama',
                'country_code' => 'JPN',
                'district' => 'Saitama',
                'population' => 93342,
            ],
            [

                'name' => 'Kimitsu',
                'country_code' => 'JPN',
                'district' => 'Chiba',
                'population' => 93216,
            ],
            [

                'name' => 'Isahaya',
                'country_code' => 'JPN',
                'district' => 'Nagasaki',
                'population' => 93058,
            ],
            [

                'name' => 'Kanuma',
                'country_code' => 'JPN',
                'district' => 'Tochigi',
                'population' => 93053,
            ],
            [

                'name' => 'Izumisano',
                'country_code' => 'JPN',
                'district' => 'Osaka',
                'population' => 92583,
            ],
            [

                'name' => 'Kameoka',
                'country_code' => 'JPN',
                'district' => 'Kyoto',
                'population' => 92398,
            ],
            [

                'name' => 'Mobara',
                'country_code' => 'JPN',
                'district' => 'Chiba',
                'population' => 91664,
            ],
            [

                'name' => 'Narita',
                'country_code' => 'JPN',
                'district' => 'Chiba',
                'population' => 91470,
            ],
            [

                'name' => 'Kashiwazaki',
                'country_code' => 'JPN',
                'district' => 'Niigata',
                'population' => 91229,
            ],
            [

                'name' => 'Tsuyama',
                'country_code' => 'JPN',
                'district' => 'Okayama',
                'population' => 91170,
            ],
            [

                'name' => 'Sanaa',
                'country_code' => 'YEM',
                'district' => 'Sanaa',
                'population' => 503600,
            ],
            [

                'name' => 'Aden',
                'country_code' => 'YEM',
                'district' => 'Aden',
                'population' => 398300,
            ],
            [

                'name' => 'Taizz',
                'country_code' => 'YEM',
                'district' => 'Taizz',
                'population' => 317600,
            ],
            [

                'name' => 'Hodeida',
                'country_code' => 'YEM',
                'district' => 'Hodeida',
                'population' => 298500,
            ],
            [

                'name' => 'al-Mukalla',
                'country_code' => 'YEM',
                'district' => 'Hadramawt',
                'population' => 122400,
            ],
            [

                'name' => 'Ibb',
                'country_code' => 'YEM',
                'district' => 'Ibb',
                'population' => 103300,
            ],
            [

                'name' => 'Amman',
                'country_code' => 'JOR',
                'district' => 'Amman',
                'population' => 1000000,
            ],
            [

                'name' => 'al-Zarqa',
                'country_code' => 'JOR',
                'district' => 'al-Zarqa',
                'population' => 389815,
            ],
            [

                'name' => 'Irbid',
                'country_code' => 'JOR',
                'district' => 'Irbid',
                'population' => 231511,
            ],
            [

                'name' => 'al-Rusayfa',
                'country_code' => 'JOR',
                'district' => 'al-Zarqa',
                'population' => 137247,
            ],
            [

                'name' => 'Wadi al-Sir',
                'country_code' => 'JOR',
                'district' => 'Amman',
                'population' => 89104,
            ],
            [

                'name' => 'Flying Fish Cove',
                'country_code' => 'CXR',
                'district' => '–',
                'population' => 700,
            ],
            [

                'name' => 'Beograd',
                'country_code' => 'YUG',
                'district' => 'Central Serbia',
                'population' => 1204000,
            ],
            [

                'name' => 'Novi Sad',
                'country_code' => 'YUG',
                'district' => 'Vojvodina',
                'population' => 179626,
            ],
            [

                'name' => 'Niš',
                'country_code' => 'YUG',
                'district' => 'Central Serbia',
                'population' => 175391,
            ],
            [

                'name' => 'Priština',
                'country_code' => 'YUG',
                'district' => 'Kosovo and Metohija',
                'population' => 155496,
            ],
            [

                'name' => 'Kragujevac',
                'country_code' => 'YUG',
                'district' => 'Central Serbia',
                'population' => 147305,
            ],
            [

                'name' => 'Podgorica',
                'country_code' => 'YUG',
                'district' => 'Montenegro',
                'population' => 135000,
            ],
            [

                'name' => 'Subotica',
                'country_code' => 'YUG',
                'district' => 'Vojvodina',
                'population' => 100386,
            ],
            [

                'name' => 'Prizren',
                'country_code' => 'YUG',
                'district' => 'Kosovo and Metohija',
                'population' => 92303,
            ],
            [

                'name' => 'Phnom Penh',
                'country_code' => 'KHM',
                'district' => 'Phnom Penh',
                'population' => 570155,
            ],
            [

                'name' => 'Battambang',
                'country_code' => 'KHM',
                'district' => 'Battambang',
                'population' => 129800,
            ],
            [

                'name' => 'Siem Reap',
                'country_code' => 'KHM',
                'district' => 'Siem Reap',
                'population' => 105100,
            ],
            [

                'name' => 'Douala',
                'country_code' => 'CMR',
                'district' => 'Littoral',
                'population' => 1448300,
            ],
            [

                'name' => 'Yaoundé',
                'country_code' => 'CMR',
                'district' => 'Centre',
                'population' => 1372800,
            ],
            [

                'name' => 'Garoua',
                'country_code' => 'CMR',
                'district' => 'Nord',
                'population' => 177000,
            ],
            [

                'name' => 'Maroua',
                'country_code' => 'CMR',
                'district' => 'Extrême-Nord',
                'population' => 143000,
            ],
            [

                'name' => 'Bamenda',
                'country_code' => 'CMR',
                'district' => 'Nord-Ouest',
                'population' => 138000,
            ],
            [

                'name' => 'Bafoussam',
                'country_code' => 'CMR',
                'district' => 'Ouest',
                'population' => 131000,
            ],
            [

                'name' => 'Nkongsamba',
                'country_code' => 'CMR',
                'district' => 'Littoral',
                'population' => 112454,
            ],
            [

                'name' => 'Montréal',
                'country_code' => 'CAN',
                'district' => 'Québec',
                'population' => 1016376,
            ],
            [

                'name' => 'Calgary',
                'country_code' => 'CAN',
                'district' => 'Alberta',
                'population' => 768082,
            ],
            [

                'name' => 'Toronto',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 688275,
            ],
            [

                'name' => 'North York',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 622632,
            ],
            [

                'name' => 'Winnipeg',
                'country_code' => 'CAN',
                'district' => 'Manitoba',
                'population' => 618477,
            ],
            [

                'name' => 'Edmonton',
                'country_code' => 'CAN',
                'district' => 'Alberta',
                'population' => 616306,
            ],
            [

                'name' => 'Mississauga',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 608072,
            ],
            [

                'name' => 'Scarborough',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 594501,
            ],
            [

                'name' => 'Vancouver',
                'country_code' => 'CAN',
                'district' => 'British Colombia',
                'population' => 514008,
            ],
            [

                'name' => 'Etobicoke',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 348845,
            ],
            [

                'name' => 'London',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 339917,
            ],
            [

                'name' => 'Hamilton',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 335614,
            ],
            [

                'name' => 'Ottawa',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 335277,
            ],
            [

                'name' => 'Laval',
                'country_code' => 'CAN',
                'district' => 'Québec',
                'population' => 330393,
            ],
            [

                'name' => 'Surrey',
                'country_code' => 'CAN',
                'district' => 'British Colombia',
                'population' => 304477,
            ],
            [

                'name' => 'Brampton',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 296711,
            ],
            [

                'name' => 'Windsor',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 207588,
            ],
            [

                'name' => 'Saskatoon',
                'country_code' => 'CAN',
                'district' => 'Saskatchewan',
                'population' => 193647,
            ],
            [

                'name' => 'Kitchener',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 189959,
            ],
            [

                'name' => 'Markham',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 189098,
            ],
            [

                'name' => 'Regina',
                'country_code' => 'CAN',
                'district' => 'Saskatchewan',
                'population' => 180400,
            ],
            [

                'name' => 'Burnaby',
                'country_code' => 'CAN',
                'district' => 'British Colombia',
                'population' => 179209,
            ],
            [

                'name' => 'Québec',
                'country_code' => 'CAN',
                'district' => 'Québec',
                'population' => 167264,
            ],
            [

                'name' => 'York',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 154980,
            ],
            [

                'name' => 'Richmond',
                'country_code' => 'CAN',
                'district' => 'British Colombia',
                'population' => 148867,
            ],
            [

                'name' => 'Vaughan',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 147889,
            ],
            [

                'name' => 'Burlington',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 145150,
            ],
            [

                'name' => 'Oshawa',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 140173,
            ],
            [

                'name' => 'Oakville',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 139192,
            ],
            [

                'name' => 'Saint Catharines',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 136216,
            ],
            [

                'name' => 'Longueuil',
                'country_code' => 'CAN',
                'district' => 'Québec',
                'population' => 127977,
            ],
            [

                'name' => 'Richmond Hill',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 116428,
            ],
            [

                'name' => 'Thunder Bay',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 115913,
            ],
            [

                'name' => 'Nepean',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 115100,
            ],
            [

                'name' => 'Cape Breton',
                'country_code' => 'CAN',
                'district' => 'Nova Scotia',
                'population' => 114733,
            ],
            [

                'name' => 'East York',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 114034,
            ],
            [

                'name' => 'Halifax',
                'country_code' => 'CAN',
                'district' => 'Nova Scotia',
                'population' => 113910,
            ],
            [

                'name' => 'Cambridge',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 109186,
            ],
            [

                'name' => 'Gloucester',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 107314,
            ],
            [

                'name' => 'Abbotsford',
                'country_code' => 'CAN',
                'district' => 'British Colombia',
                'population' => 105403,
            ],
            [

                'name' => 'Guelph',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 103593,
            ],
            [

                'name' => 'Saint John´s',
                'country_code' => 'CAN',
                'district' => 'Newfoundland',
                'population' => 101936,
            ],
            [

                'name' => 'Coquitlam',
                'country_code' => 'CAN',
                'district' => 'British Colombia',
                'population' => 101820,
            ],
            [

                'name' => 'Saanich',
                'country_code' => 'CAN',
                'district' => 'British Colombia',
                'population' => 101388,
            ],
            [

                'name' => 'Gatineau',
                'country_code' => 'CAN',
                'district' => 'Québec',
                'population' => 100702,
            ],
            [

                'name' => 'Delta',
                'country_code' => 'CAN',
                'district' => 'British Colombia',
                'population' => 95411,
            ],
            [

                'name' => 'Sudbury',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 92686,
            ],
            [

                'name' => 'Kelowna',
                'country_code' => 'CAN',
                'district' => 'British Colombia',
                'population' => 89442,
            ],
            [

                'name' => 'Barrie',
                'country_code' => 'CAN',
                'district' => 'Ontario',
                'population' => 89269,
            ],
            [

                'name' => 'Praia',
                'country_code' => 'CPV',
                'district' => 'São Tiago',
                'population' => 94800,
            ],
            [

                'name' => 'Almaty',
                'country_code' => 'KAZ',
                'district' => 'Almaty Qalasy',
                'population' => 1129400,
            ],
            [

                'name' => 'Qaraghandy',
                'country_code' => 'KAZ',
                'district' => 'Qaraghandy',
                'population' => 436900,
            ],
            [

                'name' => 'Shymkent',
                'country_code' => 'KAZ',
                'district' => 'South Kazakstan',
                'population' => 360100,
            ],
            [

                'name' => 'Taraz',
                'country_code' => 'KAZ',
                'district' => 'Taraz',
                'population' => 330100,
            ],
            [

                'name' => 'Astana',
                'country_code' => 'KAZ',
                'district' => 'Astana',
                'population' => 311200,
            ],
            [

                'name' => 'Öskemen',
                'country_code' => 'KAZ',
                'district' => 'East Kazakstan',
                'population' => 311000,
            ],
            [

                'name' => 'Pavlodar',
                'country_code' => 'KAZ',
                'district' => 'Pavlodar',
                'population' => 300500,
            ],
            [

                'name' => 'Semey',
                'country_code' => 'KAZ',
                'district' => 'East Kazakstan',
                'population' => 269600,
            ],
            [

                'name' => 'Aqtöbe',
                'country_code' => 'KAZ',
                'district' => 'Aqtöbe',
                'population' => 253100,
            ],
            [

                'name' => 'Qostanay',
                'country_code' => 'KAZ',
                'district' => 'Qostanay',
                'population' => 221400,
            ],
            [

                'name' => 'Petropavl',
                'country_code' => 'KAZ',
                'district' => 'North Kazakstan',
                'population' => 203500,
            ],
            [

                'name' => 'Oral',
                'country_code' => 'KAZ',
                'district' => 'West Kazakstan',
                'population' => 195500,
            ],
            [

                'name' => 'Temirtau',
                'country_code' => 'KAZ',
                'district' => 'Qaraghandy',
                'population' => 170500,
            ],
            [

                'name' => 'Qyzylorda',
                'country_code' => 'KAZ',
                'district' => 'Qyzylorda',
                'population' => 157400,
            ],
            [

                'name' => 'Aqtau',
                'country_code' => 'KAZ',
                'district' => 'Mangghystau',
                'population' => 143400,
            ],
            [

                'name' => 'Atyrau',
                'country_code' => 'KAZ',
                'district' => 'Atyrau',
                'population' => 142500,
            ],
            [

                'name' => 'Ekibastuz',
                'country_code' => 'KAZ',
                'district' => 'Pavlodar',
                'population' => 127200,
            ],
            [

                'name' => 'Kökshetau',
                'country_code' => 'KAZ',
                'district' => 'North Kazakstan',
                'population' => 123400,
            ],
            [

                'name' => 'Rudnyy',
                'country_code' => 'KAZ',
                'district' => 'Qostanay',
                'population' => 109500,
            ],
            [

                'name' => 'Taldyqorghan',
                'country_code' => 'KAZ',
                'district' => 'Almaty',
                'population' => 98000,
            ],
            [

                'name' => 'Zhezqazghan',
                'country_code' => 'KAZ',
                'district' => 'Qaraghandy',
                'population' => 90000,
            ],
            [

                'name' => 'Nairobi',
                'country_code' => 'KEN',
                'district' => 'Nairobi',
                'population' => 2290000,
            ],
            [

                'name' => 'Mombasa',
                'country_code' => 'KEN',
                'district' => 'Coast',
                'population' => 461753,
            ],
            [

                'name' => 'Kisumu',
                'country_code' => 'KEN',
                'district' => 'Nyanza',
                'population' => 192733,
            ],
            [

                'name' => 'Nakuru',
                'country_code' => 'KEN',
                'district' => 'Rift Valley',
                'population' => 163927,
            ],
            [

                'name' => 'Machakos',
                'country_code' => 'KEN',
                'district' => 'Eastern',
                'population' => 116293,
            ],
            [

                'name' => 'Eldoret',
                'country_code' => 'KEN',
                'district' => 'Rift Valley',
                'population' => 111882,
            ],
            [

                'name' => 'Meru',
                'country_code' => 'KEN',
                'district' => 'Eastern',
                'population' => 94947,
            ],
            [

                'name' => 'Nyeri',
                'country_code' => 'KEN',
                'district' => 'Central',
                'population' => 91258,
            ],
            [

                'name' => 'Bangui',
                'country_code' => 'CAF',
                'district' => 'Bangui',
                'population' => 524000,
            ],
            [

                'name' => 'Shanghai',
                'country_code' => 'CHN',
                'district' => 'Shanghai',
                'population' => 9696300,
            ],
            [

                'name' => 'Peking',
                'country_code' => 'CHN',
                'district' => 'Peking',
                'population' => 7472000,
            ],
            [

                'name' => 'Chongqing',
                'country_code' => 'CHN',
                'district' => 'Chongqing',
                'population' => 6351600,
            ],
            [

                'name' => 'Tianjin',
                'country_code' => 'CHN',
                'district' => 'Tianjin',
                'population' => 5286800,
            ],
            [

                'name' => 'Wuhan',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 4344600,
            ],
            [

                'name' => 'Harbin',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 4289800,
            ],
            [

                'name' => 'Shenyang',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 4265200,
            ],
            [

                'name' => 'Kanton [Guangzhou]',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 4256300,
            ],
            [

                'name' => 'Chengdu',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 3361500,
            ],
            [

                'name' => 'Nanking [Nanjing]',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 2870300,
            ],
            [

                'name' => 'Changchun',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 2812000,
            ],
            [

                'name' => 'Xi´an',
                'country_code' => 'CHN',
                'district' => 'Shaanxi',
                'population' => 2761400,
            ],
            [

                'name' => 'Dalian',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 2697000,
            ],
            [

                'name' => 'Qingdao',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 2596000,
            ],
            [

                'name' => 'Jinan',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 2278100,
            ],
            [

                'name' => 'Hangzhou',
                'country_code' => 'CHN',
                'district' => 'Zhejiang',
                'population' => 2190500,
            ],
            [

                'name' => 'Zhengzhou',
                'country_code' => 'CHN',
                'district' => 'Henan',
                'population' => 2107200,
            ],
            [

                'name' => 'Shijiazhuang',
                'country_code' => 'CHN',
                'district' => 'Hebei',
                'population' => 2041500,
            ],
            [

                'name' => 'Taiyuan',
                'country_code' => 'CHN',
                'district' => 'Shanxi',
                'population' => 1968400,
            ],
            [

                'name' => 'Kunming',
                'country_code' => 'CHN',
                'district' => 'Yunnan',
                'population' => 1829500,
            ],
            [

                'name' => 'Changsha',
                'country_code' => 'CHN',
                'district' => 'Hunan',
                'population' => 1809800,
            ],
            [

                'name' => 'Nanchang',
                'country_code' => 'CHN',
                'district' => 'Jiangxi',
                'population' => 1691600,
            ],
            [

                'name' => 'Fuzhou',
                'country_code' => 'CHN',
                'district' => 'Fujian',
                'population' => 1593800,
            ],
            [

                'name' => 'Lanzhou',
                'country_code' => 'CHN',
                'district' => 'Gansu',
                'population' => 1565800,
            ],
            [

                'name' => 'Guiyang',
                'country_code' => 'CHN',
                'district' => 'Guizhou',
                'population' => 1465200,
            ],
            [

                'name' => 'Ningbo',
                'country_code' => 'CHN',
                'district' => 'Zhejiang',
                'population' => 1371200,
            ],
            [

                'name' => 'Hefei',
                'country_code' => 'CHN',
                'district' => 'Anhui',
                'population' => 1369100,
            ],
            [

                'name' => 'Urumtši [Ürümqi]',
                'country_code' => 'CHN',
                'district' => 'Xinxiang',
                'population' => 1310100,
            ],
            [

                'name' => 'Anshan',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 1200000,
            ],
            [

                'name' => 'Fushun',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 1200000,
            ],
            [

                'name' => 'Nanning',
                'country_code' => 'CHN',
                'district' => 'Guangxi',
                'population' => 1161800,
            ],
            [

                'name' => 'Zibo',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 1140000,
            ],
            [

                'name' => 'Qiqihar',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 1070000,
            ],
            [

                'name' => 'Jilin',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 1040000,
            ],
            [

                'name' => 'Tangshan',
                'country_code' => 'CHN',
                'district' => 'Hebei',
                'population' => 1040000,
            ],
            [

                'name' => 'Baotou',
                'country_code' => 'CHN',
                'district' => 'Inner Mongolia',
                'population' => 980000,
            ],
            [

                'name' => 'Shenzhen',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 950500,
            ],
            [

                'name' => 'Hohhot',
                'country_code' => 'CHN',
                'district' => 'Inner Mongolia',
                'population' => 916700,
            ],
            [

                'name' => 'Handan',
                'country_code' => 'CHN',
                'district' => 'Hebei',
                'population' => 840000,
            ],
            [

                'name' => 'Wuxi',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 830000,
            ],
            [

                'name' => 'Xuzhou',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 810000,
            ],
            [

                'name' => 'Datong',
                'country_code' => 'CHN',
                'district' => 'Shanxi',
                'population' => 800000,
            ],
            [

                'name' => 'Yichun',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 800000,
            ],
            [

                'name' => 'Benxi',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 770000,
            ],
            [

                'name' => 'Luoyang',
                'country_code' => 'CHN',
                'district' => 'Henan',
                'population' => 760000,
            ],
            [

                'name' => 'Suzhou',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 710000,
            ],
            [

                'name' => 'Xining',
                'country_code' => 'CHN',
                'district' => 'Qinghai',
                'population' => 700200,
            ],
            [

                'name' => 'Huainan',
                'country_code' => 'CHN',
                'district' => 'Anhui',
                'population' => 700000,
            ],
            [

                'name' => 'Jixi',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 683885,
            ],
            [

                'name' => 'Daqing',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 660000,
            ],
            [

                'name' => 'Fuxin',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 640000,
            ],
            [

                'name' => 'Amoy [Xiamen]',
                'country_code' => 'CHN',
                'district' => 'Fujian',
                'population' => 627500,
            ],
            [

                'name' => 'Liuzhou',
                'country_code' => 'CHN',
                'district' => 'Guangxi',
                'population' => 610000,
            ],
            [

                'name' => 'Shantou',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 580000,
            ],
            [

                'name' => 'Jinzhou',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 570000,
            ],
            [

                'name' => 'Mudanjiang',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 570000,
            ],
            [

                'name' => 'Yinchuan',
                'country_code' => 'CHN',
                'district' => 'Ningxia',
                'population' => 544500,
            ],
            [

                'name' => 'Changzhou',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 530000,
            ],
            [

                'name' => 'Zhangjiakou',
                'country_code' => 'CHN',
                'district' => 'Hebei',
                'population' => 530000,
            ],
            [

                'name' => 'Dandong',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 520000,
            ],
            [

                'name' => 'Hegang',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 520000,
            ],
            [

                'name' => 'Kaifeng',
                'country_code' => 'CHN',
                'district' => 'Henan',
                'population' => 510000,
            ],
            [

                'name' => 'Jiamusi',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 493409,
            ],
            [

                'name' => 'Liaoyang',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 492559,
            ],
            [

                'name' => 'Hengyang',
                'country_code' => 'CHN',
                'district' => 'Hunan',
                'population' => 487148,
            ],
            [

                'name' => 'Baoding',
                'country_code' => 'CHN',
                'district' => 'Hebei',
                'population' => 483155,
            ],
            [

                'name' => 'Hunjiang',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 482043,
            ],
            [

                'name' => 'Xinxiang',
                'country_code' => 'CHN',
                'district' => 'Henan',
                'population' => 473762,
            ],
            [

                'name' => 'Huangshi',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 457601,
            ],
            [

                'name' => 'Haikou',
                'country_code' => 'CHN',
                'district' => 'Hainan',
                'population' => 454300,
            ],
            [

                'name' => 'Yantai',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 452127,
            ],
            [

                'name' => 'Bengbu',
                'country_code' => 'CHN',
                'district' => 'Anhui',
                'population' => 449245,
            ],
            [

                'name' => 'Xiangtan',
                'country_code' => 'CHN',
                'district' => 'Hunan',
                'population' => 441968,
            ],
            [

                'name' => 'Weifang',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 428522,
            ],
            [

                'name' => 'Wuhu',
                'country_code' => 'CHN',
                'district' => 'Anhui',
                'population' => 425740,
            ],
            [

                'name' => 'Pingxiang',
                'country_code' => 'CHN',
                'district' => 'Jiangxi',
                'population' => 425579,
            ],
            [

                'name' => 'Yingkou',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 421589,
            ],
            [

                'name' => 'Anyang',
                'country_code' => 'CHN',
                'district' => 'Henan',
                'population' => 420332,
            ],
            [

                'name' => 'Panzhihua',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 415466,
            ],
            [

                'name' => 'Pingdingshan',
                'country_code' => 'CHN',
                'district' => 'Henan',
                'population' => 410775,
            ],
            [

                'name' => 'Xiangfan',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 410407,
            ],
            [

                'name' => 'Zhuzhou',
                'country_code' => 'CHN',
                'district' => 'Hunan',
                'population' => 409924,
            ],
            [

                'name' => 'Jiaozuo',
                'country_code' => 'CHN',
                'district' => 'Henan',
                'population' => 409100,
            ],
            [

                'name' => 'Wenzhou',
                'country_code' => 'CHN',
                'district' => 'Zhejiang',
                'population' => 401871,
            ],
            [

                'name' => 'Zhangjiang',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 400997,
            ],
            [

                'name' => 'Zigong',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 393184,
            ],
            [

                'name' => 'Shuangyashan',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 386081,
            ],
            [

                'name' => 'Zaozhuang',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 380846,
            ],
            [

                'name' => 'Yakeshi',
                'country_code' => 'CHN',
                'district' => 'Inner Mongolia',
                'population' => 377869,
            ],
            [

                'name' => 'Yichang',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 371601,
            ],
            [

                'name' => 'Zhenjiang',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 368316,
            ],
            [

                'name' => 'Huaibei',
                'country_code' => 'CHN',
                'district' => 'Anhui',
                'population' => 366549,
            ],
            [

                'name' => 'Qinhuangdao',
                'country_code' => 'CHN',
                'district' => 'Hebei',
                'population' => 364972,
            ],
            [

                'name' => 'Guilin',
                'country_code' => 'CHN',
                'district' => 'Guangxi',
                'population' => 364130,
            ],
            [

                'name' => 'Liupanshui',
                'country_code' => 'CHN',
                'district' => 'Guizhou',
                'population' => 363954,
            ],
            [

                'name' => 'Panjin',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 362773,
            ],
            [

                'name' => 'Yangquan',
                'country_code' => 'CHN',
                'district' => 'Shanxi',
                'population' => 362268,
            ],
            [

                'name' => 'Jinxi',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 357052,
            ],
            [

                'name' => 'Liaoyuan',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 354141,
            ],
            [

                'name' => 'Lianyungang',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 354139,
            ],
            [

                'name' => 'Xianyang',
                'country_code' => 'CHN',
                'district' => 'Shaanxi',
                'population' => 352125,
            ],
            [

                'name' => 'Tai´an',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 350696,
            ],
            [

                'name' => 'Chifeng',
                'country_code' => 'CHN',
                'district' => 'Inner Mongolia',
                'population' => 350077,
            ],
            [

                'name' => 'Shaoguan',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 350043,
            ],
            [

                'name' => 'Nantong',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 343341,
            ],
            [

                'name' => 'Leshan',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 341128,
            ],
            [

                'name' => 'Baoji',
                'country_code' => 'CHN',
                'district' => 'Shaanxi',
                'population' => 337765,
            ],
            [

                'name' => 'Linyi',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 324720,
            ],
            [

                'name' => 'Tonghua',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 324600,
            ],
            [

                'name' => 'Siping',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 317223,
            ],
            [

                'name' => 'Changzhi',
                'country_code' => 'CHN',
                'district' => 'Shanxi',
                'population' => 317144,
            ],
            [

                'name' => 'Tengzhou',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 315083,
            ],
            [

                'name' => 'Chaozhou',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 313469,
            ],
            [

                'name' => 'Yangzhou',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 312892,
            ],
            [

                'name' => 'Dongwan',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 308669,
            ],
            [

                'name' => 'Ma´anshan',
                'country_code' => 'CHN',
                'district' => 'Anhui',
                'population' => 305421,
            ],
            [

                'name' => 'Foshan',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 303160,
            ],
            [

                'name' => 'Yueyang',
                'country_code' => 'CHN',
                'district' => 'Hunan',
                'population' => 302800,
            ],
            [

                'name' => 'Xingtai',
                'country_code' => 'CHN',
                'district' => 'Hebei',
                'population' => 302789,
            ],
            [

                'name' => 'Changde',
                'country_code' => 'CHN',
                'district' => 'Hunan',
                'population' => 301276,
            ],
            [

                'name' => 'Shihezi',
                'country_code' => 'CHN',
                'district' => 'Xinxiang',
                'population' => 299676,
            ],
            [

                'name' => 'Yancheng',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 296831,
            ],
            [

                'name' => 'Jiujiang',
                'country_code' => 'CHN',
                'district' => 'Jiangxi',
                'population' => 291187,
            ],
            [

                'name' => 'Dongying',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 281728,
            ],
            [

                'name' => 'Shashi',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 281352,
            ],
            [

                'name' => 'Xintai',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 281248,
            ],
            [

                'name' => 'Jingdezhen',
                'country_code' => 'CHN',
                'district' => 'Jiangxi',
                'population' => 281183,
            ],
            [

                'name' => 'Tongchuan',
                'country_code' => 'CHN',
                'district' => 'Shaanxi',
                'population' => 280657,
            ],
            [

                'name' => 'Zhongshan',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 278829,
            ],
            [

                'name' => 'Shiyan',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 273786,
            ],
            [

                'name' => 'Tieli',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 265683,
            ],
            [

                'name' => 'Jining',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 265248,
            ],
            [

                'name' => 'Wuhai',
                'country_code' => 'CHN',
                'district' => 'Inner Mongolia',
                'population' => 264081,
            ],
            [

                'name' => 'Mianyang',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 262947,
            ],
            [

                'name' => 'Luzhou',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 262892,
            ],
            [

                'name' => 'Zunyi',
                'country_code' => 'CHN',
                'district' => 'Guizhou',
                'population' => 261862,
            ],
            [

                'name' => 'Shizuishan',
                'country_code' => 'CHN',
                'district' => 'Ningxia',
                'population' => 257862,
            ],
            [

                'name' => 'Neijiang',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 256012,
            ],
            [

                'name' => 'Tongliao',
                'country_code' => 'CHN',
                'district' => 'Inner Mongolia',
                'population' => 255129,
            ],
            [

                'name' => 'Tieling',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 254842,
            ],
            [

                'name' => 'Wafangdian',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 251733,
            ],
            [

                'name' => 'Anqing',
                'country_code' => 'CHN',
                'district' => 'Anhui',
                'population' => 250718,
            ],
            [

                'name' => 'Shaoyang',
                'country_code' => 'CHN',
                'district' => 'Hunan',
                'population' => 247227,
            ],
            [

                'name' => 'Laiwu',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 246833,
            ],
            [

                'name' => 'Chengde',
                'country_code' => 'CHN',
                'district' => 'Hebei',
                'population' => 246799,
            ],
            [

                'name' => 'Tianshui',
                'country_code' => 'CHN',
                'district' => 'Gansu',
                'population' => 244974,
            ],
            [

                'name' => 'Nanyang',
                'country_code' => 'CHN',
                'district' => 'Henan',
                'population' => 243303,
            ],
            [

                'name' => 'Cangzhou',
                'country_code' => 'CHN',
                'district' => 'Hebei',
                'population' => 242708,
            ],
            [

                'name' => 'Yibin',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 241019,
            ],
            [

                'name' => 'Huaiyin',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 239675,
            ],
            [

                'name' => 'Dunhua',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 235100,
            ],
            [

                'name' => 'Yanji',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 230892,
            ],
            [

                'name' => 'Jiangmen',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 230587,
            ],
            [

                'name' => 'Tongling',
                'country_code' => 'CHN',
                'district' => 'Anhui',
                'population' => 228017,
            ],
            [

                'name' => 'Suihua',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 227881,
            ],
            [

                'name' => 'Gongziling',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 226569,
            ],
            [

                'name' => 'Xiantao',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 222884,
            ],
            [

                'name' => 'Chaoyang',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 222394,
            ],
            [

                'name' => 'Ganzhou',
                'country_code' => 'CHN',
                'district' => 'Jiangxi',
                'population' => 220129,
            ],
            [

                'name' => 'Huzhou',
                'country_code' => 'CHN',
                'district' => 'Zhejiang',
                'population' => 218071,
            ],
            [

                'name' => 'Baicheng',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 217987,
            ],
            [

                'name' => 'Shangzi',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 215373,
            ],
            [

                'name' => 'Yangjiang',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 215196,
            ],
            [

                'name' => 'Qitaihe',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 214957,
            ],
            [

                'name' => 'Gejiu',
                'country_code' => 'CHN',
                'district' => 'Yunnan',
                'population' => 214294,
            ],
            [

                'name' => 'Jiangyin',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 213659,
            ],
            [

                'name' => 'Hebi',
                'country_code' => 'CHN',
                'district' => 'Henan',
                'population' => 212976,
            ],
            [

                'name' => 'Jiaxing',
                'country_code' => 'CHN',
                'district' => 'Zhejiang',
                'population' => 211526,
            ],
            [

                'name' => 'Wuzhou',
                'country_code' => 'CHN',
                'district' => 'Guangxi',
                'population' => 210452,
            ],
            [

                'name' => 'Meihekou',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 209038,
            ],
            [

                'name' => 'Xuchang',
                'country_code' => 'CHN',
                'district' => 'Henan',
                'population' => 208815,
            ],
            [

                'name' => 'Liaocheng',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 207844,
            ],
            [

                'name' => 'Haicheng',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 205560,
            ],
            [

                'name' => 'Qianjiang',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 205504,
            ],
            [

                'name' => 'Baiyin',
                'country_code' => 'CHN',
                'district' => 'Gansu',
                'population' => 204970,
            ],
            [

                'name' => 'Bei´an',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 204899,
            ],
            [

                'name' => 'Yixing',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 200824,
            ],
            [

                'name' => 'Laizhou',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 198664,
            ],
            [

                'name' => 'Qaramay',
                'country_code' => 'CHN',
                'district' => 'Xinxiang',
                'population' => 197602,
            ],
            [

                'name' => 'Acheng',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 197595,
            ],
            [

                'name' => 'Dezhou',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 195485,
            ],
            [

                'name' => 'Nanping',
                'country_code' => 'CHN',
                'district' => 'Fujian',
                'population' => 195064,
            ],
            [

                'name' => 'Zhaoqing',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 194784,
            ],
            [

                'name' => 'Beipiao',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 194301,
            ],
            [

                'name' => 'Fengcheng',
                'country_code' => 'CHN',
                'district' => 'Jiangxi',
                'population' => 193784,
            ],
            [

                'name' => 'Fuyu',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 192981,
            ],
            [

                'name' => 'Xinyang',
                'country_code' => 'CHN',
                'district' => 'Henan',
                'population' => 192509,
            ],
            [

                'name' => 'Dongtai',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 192247,
            ],
            [

                'name' => 'Yuci',
                'country_code' => 'CHN',
                'district' => 'Shanxi',
                'population' => 191356,
            ],
            [

                'name' => 'Honghu',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 190772,
            ],
            [

                'name' => 'Ezhou',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 190123,
            ],
            [

                'name' => 'Heze',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 189293,
            ],
            [

                'name' => 'Daxian',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 188101,
            ],
            [

                'name' => 'Linfen',
                'country_code' => 'CHN',
                'district' => 'Shanxi',
                'population' => 187309,
            ],
            [

                'name' => 'Tianmen',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 186332,
            ],
            [

                'name' => 'Yiyang',
                'country_code' => 'CHN',
                'district' => 'Hunan',
                'population' => 185818,
            ],
            [

                'name' => 'Quanzhou',
                'country_code' => 'CHN',
                'district' => 'Fujian',
                'population' => 185154,
            ],
            [

                'name' => 'Rizhao',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 185048,
            ],
            [

                'name' => 'Deyang',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 182488,
            ],
            [

                'name' => 'Guangyuan',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 182241,
            ],
            [

                'name' => 'Changshu',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 181805,
            ],
            [

                'name' => 'Zhangzhou',
                'country_code' => 'CHN',
                'district' => 'Fujian',
                'population' => 181424,
            ],
            [

                'name' => 'Hailar',
                'country_code' => 'CHN',
                'district' => 'Inner Mongolia',
                'population' => 180650,
            ],
            [

                'name' => 'Nanchong',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 180273,
            ],
            [

                'name' => 'Jiutai',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 180130,
            ],
            [

                'name' => 'Zhaodong',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 179976,
            ],
            [

                'name' => 'Shaoxing',
                'country_code' => 'CHN',
                'district' => 'Zhejiang',
                'population' => 179818,
            ],
            [

                'name' => 'Fuyang',
                'country_code' => 'CHN',
                'district' => 'Anhui',
                'population' => 179572,
            ],
            [

                'name' => 'Maoming',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 178683,
            ],
            [

                'name' => 'Qujing',
                'country_code' => 'CHN',
                'district' => 'Yunnan',
                'population' => 178669,
            ],
            [

                'name' => 'Ghulja',
                'country_code' => 'CHN',
                'district' => 'Xinxiang',
                'population' => 177193,
            ],
            [

                'name' => 'Jiaohe',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 176367,
            ],
            [

                'name' => 'Puyang',
                'country_code' => 'CHN',
                'district' => 'Henan',
                'population' => 175988,
            ],
            [

                'name' => 'Huadian',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 175873,
            ],
            [

                'name' => 'Jiangyou',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 175753,
            ],
            [

                'name' => 'Qashqar',
                'country_code' => 'CHN',
                'district' => 'Xinxiang',
                'population' => 174570,
            ],
            [

                'name' => 'Anshun',
                'country_code' => 'CHN',
                'district' => 'Guizhou',
                'population' => 174142,
            ],
            [

                'name' => 'Fuling',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 173878,
            ],
            [

                'name' => 'Xinyu',
                'country_code' => 'CHN',
                'district' => 'Jiangxi',
                'population' => 173524,
            ],
            [

                'name' => 'Hanzhong',
                'country_code' => 'CHN',
                'district' => 'Shaanxi',
                'population' => 169930,
            ],
            [

                'name' => 'Danyang',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 169603,
            ],
            [

                'name' => 'Chenzhou',
                'country_code' => 'CHN',
                'district' => 'Hunan',
                'population' => 169400,
            ],
            [

                'name' => 'Xiaogan',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 166280,
            ],
            [

                'name' => 'Shangqiu',
                'country_code' => 'CHN',
                'district' => 'Henan',
                'population' => 164880,
            ],
            [

                'name' => 'Zhuhai',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 164747,
            ],
            [

                'name' => 'Qingyuan',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 164641,
            ],
            [

                'name' => 'Aqsu',
                'country_code' => 'CHN',
                'district' => 'Xinxiang',
                'population' => 164092,
            ],
            [

                'name' => 'Jining',
                'country_code' => 'CHN',
                'district' => 'Inner Mongolia',
                'population' => 163552,
            ],
            [

                'name' => 'Xiaoshan',
                'country_code' => 'CHN',
                'district' => 'Zhejiang',
                'population' => 162930,
            ],
            [

                'name' => 'Zaoyang',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 162198,
            ],
            [

                'name' => 'Xinghua',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 161910,
            ],
            [

                'name' => 'Hami',
                'country_code' => 'CHN',
                'district' => 'Xinxiang',
                'population' => 161315,
            ],
            [

                'name' => 'Huizhou',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 161023,
            ],
            [

                'name' => 'Jinmen',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 160794,
            ],
            [

                'name' => 'Sanming',
                'country_code' => 'CHN',
                'district' => 'Fujian',
                'population' => 160691,
            ],
            [

                'name' => 'Ulanhot',
                'country_code' => 'CHN',
                'district' => 'Inner Mongolia',
                'population' => 159538,
            ],
            [

                'name' => 'Korla',
                'country_code' => 'CHN',
                'district' => 'Xinxiang',
                'population' => 159344,
            ],
            [

                'name' => 'Wanxian',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 156823,
            ],
            [

                'name' => 'Rui´an',
                'country_code' => 'CHN',
                'district' => 'Zhejiang',
                'population' => 156468,
            ],
            [

                'name' => 'Zhoushan',
                'country_code' => 'CHN',
                'district' => 'Zhejiang',
                'population' => 156317,
            ],
            [

                'name' => 'Liangcheng',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 156307,
            ],
            [

                'name' => 'Jiaozhou',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 153364,
            ],
            [

                'name' => 'Taizhou',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 152442,
            ],
            [

                'name' => 'Suzhou',
                'country_code' => 'CHN',
                'district' => 'Anhui',
                'population' => 151862,
            ],
            [

                'name' => 'Yichun',
                'country_code' => 'CHN',
                'district' => 'Jiangxi',
                'population' => 151585,
            ],
            [

                'name' => 'Taonan',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 150168,
            ],
            [

                'name' => 'Pingdu',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 150123,
            ],
            [

                'name' => 'Ji´an',
                'country_code' => 'CHN',
                'district' => 'Jiangxi',
                'population' => 148583,
            ],
            [

                'name' => 'Longkou',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 148362,
            ],
            [

                'name' => 'Langfang',
                'country_code' => 'CHN',
                'district' => 'Hebei',
                'population' => 148105,
            ],
            [

                'name' => 'Zhoukou',
                'country_code' => 'CHN',
                'district' => 'Henan',
                'population' => 146288,
            ],
            [

                'name' => 'Suining',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 146086,
            ],
            [

                'name' => 'Yulin',
                'country_code' => 'CHN',
                'district' => 'Guangxi',
                'population' => 144467,
            ],
            [

                'name' => 'Jinhua',
                'country_code' => 'CHN',
                'district' => 'Zhejiang',
                'population' => 144280,
            ],
            [

                'name' => 'Liu´an',
                'country_code' => 'CHN',
                'district' => 'Anhui',
                'population' => 144248,
            ],
            [

                'name' => 'Shuangcheng',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 142659,
            ],
            [

                'name' => 'Suizhou',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 142302,
            ],
            [

                'name' => 'Ankang',
                'country_code' => 'CHN',
                'district' => 'Shaanxi',
                'population' => 142170,
            ],
            [

                'name' => 'Weinan',
                'country_code' => 'CHN',
                'district' => 'Shaanxi',
                'population' => 140169,
            ],
            [

                'name' => 'Longjing',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 139417,
            ],
            [

                'name' => 'Da´an',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 138963,
            ],
            [

                'name' => 'Lengshuijiang',
                'country_code' => 'CHN',
                'district' => 'Hunan',
                'population' => 137994,
            ],
            [

                'name' => 'Laiyang',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 137080,
            ],
            [

                'name' => 'Xianning',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 136811,
            ],
            [

                'name' => 'Dali',
                'country_code' => 'CHN',
                'district' => 'Yunnan',
                'population' => 136554,
            ],
            [

                'name' => 'Anda',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 136446,
            ],
            [

                'name' => 'Jincheng',
                'country_code' => 'CHN',
                'district' => 'Shanxi',
                'population' => 136396,
            ],
            [

                'name' => 'Longyan',
                'country_code' => 'CHN',
                'district' => 'Fujian',
                'population' => 134481,
            ],
            [

                'name' => 'Xichang',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 134419,
            ],
            [

                'name' => 'Wendeng',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 133910,
            ],
            [

                'name' => 'Hailun',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 133565,
            ],
            [

                'name' => 'Binzhou',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 133555,
            ],
            [

                'name' => 'Linhe',
                'country_code' => 'CHN',
                'district' => 'Inner Mongolia',
                'population' => 133183,
            ],
            [

                'name' => 'Wuwei',
                'country_code' => 'CHN',
                'district' => 'Gansu',
                'population' => 133101,
            ],
            [

                'name' => 'Duyun',
                'country_code' => 'CHN',
                'district' => 'Guizhou',
                'population' => 132971,
            ],
            [

                'name' => 'Mishan',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 132744,
            ],
            [

                'name' => 'Shangrao',
                'country_code' => 'CHN',
                'district' => 'Jiangxi',
                'population' => 132455,
            ],
            [

                'name' => 'Changji',
                'country_code' => 'CHN',
                'district' => 'Xinxiang',
                'population' => 132260,
            ],
            [

                'name' => 'Meixian',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 132156,
            ],
            [

                'name' => 'Yushu',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 131861,
            ],
            [

                'name' => 'Tiefa',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 131807,
            ],
            [

                'name' => 'Huai´an',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 131149,
            ],
            [

                'name' => 'Leiyang',
                'country_code' => 'CHN',
                'district' => 'Hunan',
                'population' => 130115,
            ],
            [

                'name' => 'Zalantun',
                'country_code' => 'CHN',
                'district' => 'Inner Mongolia',
                'population' => 130031,
            ],
            [

                'name' => 'Weihai',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 128888,
            ],
            [

                'name' => 'Loudi',
                'country_code' => 'CHN',
                'district' => 'Hunan',
                'population' => 128418,
            ],
            [

                'name' => 'Qingzhou',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 128258,
            ],
            [

                'name' => 'Qidong',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 126872,
            ],
            [

                'name' => 'Huaihua',
                'country_code' => 'CHN',
                'district' => 'Hunan',
                'population' => 126785,
            ],
            [

                'name' => 'Luohe',
                'country_code' => 'CHN',
                'district' => 'Henan',
                'population' => 126438,
            ],
            [

                'name' => 'Chuzhou',
                'country_code' => 'CHN',
                'district' => 'Anhui',
                'population' => 125341,
            ],
            [

                'name' => 'Kaiyuan',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 124219,
            ],
            [

                'name' => 'Linqing',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 123958,
            ],
            [

                'name' => 'Chaohu',
                'country_code' => 'CHN',
                'district' => 'Anhui',
                'population' => 123676,
            ],
            [

                'name' => 'Laohekou',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 123366,
            ],
            [

                'name' => 'Dujiangyan',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 123357,
            ],
            [

                'name' => 'Zhumadian',
                'country_code' => 'CHN',
                'district' => 'Henan',
                'population' => 123232,
            ],
            [

                'name' => 'Linchuan',
                'country_code' => 'CHN',
                'district' => 'Jiangxi',
                'population' => 121949,
            ],
            [

                'name' => 'Jiaonan',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 121397,
            ],
            [

                'name' => 'Sanmenxia',
                'country_code' => 'CHN',
                'district' => 'Henan',
                'population' => 120523,
            ],
            [

                'name' => 'Heyuan',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 120101,
            ],
            [

                'name' => 'Manzhouli',
                'country_code' => 'CHN',
                'district' => 'Inner Mongolia',
                'population' => 120023,
            ],
            [

                'name' => 'Lhasa',
                'country_code' => 'CHN',
                'district' => 'Tibet',
                'population' => 120000,
            ],
            [

                'name' => 'Lianyuan',
                'country_code' => 'CHN',
                'district' => 'Hunan',
                'population' => 118858,
            ],
            [

                'name' => 'Kuytun',
                'country_code' => 'CHN',
                'district' => 'Xinxiang',
                'population' => 118553,
            ],
            [

                'name' => 'Puqi',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 117264,
            ],
            [

                'name' => 'Hongjiang',
                'country_code' => 'CHN',
                'district' => 'Hunan',
                'population' => 116188,
            ],
            [

                'name' => 'Qinzhou',
                'country_code' => 'CHN',
                'district' => 'Guangxi',
                'population' => 114586,
            ],
            [

                'name' => 'Renqiu',
                'country_code' => 'CHN',
                'district' => 'Hebei',
                'population' => 114256,
            ],
            [

                'name' => 'Yuyao',
                'country_code' => 'CHN',
                'district' => 'Zhejiang',
                'population' => 114065,
            ],
            [

                'name' => 'Guigang',
                'country_code' => 'CHN',
                'district' => 'Guangxi',
                'population' => 114025,
            ],
            [

                'name' => 'Kaili',
                'country_code' => 'CHN',
                'district' => 'Guizhou',
                'population' => 113958,
            ],
            [

                'name' => 'Yan´an',
                'country_code' => 'CHN',
                'district' => 'Shaanxi',
                'population' => 113277,
            ],
            [

                'name' => 'Beihai',
                'country_code' => 'CHN',
                'district' => 'Guangxi',
                'population' => 112673,
            ],
            [

                'name' => 'Xuangzhou',
                'country_code' => 'CHN',
                'district' => 'Anhui',
                'population' => 112673,
            ],
            [

                'name' => 'Quzhou',
                'country_code' => 'CHN',
                'district' => 'Zhejiang',
                'population' => 112373,
            ],
            [

                'name' => 'Yong´an',
                'country_code' => 'CHN',
                'district' => 'Fujian',
                'population' => 111762,
            ],
            [

                'name' => 'Zixing',
                'country_code' => 'CHN',
                'district' => 'Hunan',
                'population' => 110048,
            ],
            [

                'name' => 'Liyang',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 109520,
            ],
            [

                'name' => 'Yizheng',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 109268,
            ],
            [

                'name' => 'Yumen',
                'country_code' => 'CHN',
                'district' => 'Gansu',
                'population' => 109234,
            ],
            [

                'name' => 'Liling',
                'country_code' => 'CHN',
                'district' => 'Hunan',
                'population' => 108504,
            ],
            [

                'name' => 'Yuncheng',
                'country_code' => 'CHN',
                'district' => 'Shanxi',
                'population' => 108359,
            ],
            [

                'name' => 'Shanwei',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 107847,
            ],
            [

                'name' => 'Cixi',
                'country_code' => 'CHN',
                'district' => 'Zhejiang',
                'population' => 107329,
            ],
            [

                'name' => 'Yuanjiang',
                'country_code' => 'CHN',
                'district' => 'Hunan',
                'population' => 107004,
            ],
            [

                'name' => 'Bozhou',
                'country_code' => 'CHN',
                'district' => 'Anhui',
                'population' => 106346,
            ],
            [

                'name' => 'Jinchang',
                'country_code' => 'CHN',
                'district' => 'Gansu',
                'population' => 105287,
            ],
            [

                'name' => 'Fu´an',
                'country_code' => 'CHN',
                'district' => 'Fujian',
                'population' => 105265,
            ],
            [

                'name' => 'Suqian',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 105021,
            ],
            [

                'name' => 'Shishou',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 104571,
            ],
            [

                'name' => 'Hengshui',
                'country_code' => 'CHN',
                'district' => 'Hebei',
                'population' => 104269,
            ],
            [

                'name' => 'Danjiangkou',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 103211,
            ],
            [

                'name' => 'Fujin',
                'country_code' => 'CHN',
                'district' => 'Heilongjiang',
                'population' => 103104,
            ],
            [

                'name' => 'Sanya',
                'country_code' => 'CHN',
                'district' => 'Hainan',
                'population' => 102820,
            ],
            [

                'name' => 'Guangshui',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 102770,
            ],
            [

                'name' => 'Huangshan',
                'country_code' => 'CHN',
                'district' => 'Anhui',
                'population' => 102628,
            ],
            [

                'name' => 'Xingcheng',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 102384,
            ],
            [

                'name' => 'Zhucheng',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 102134,
            ],
            [

                'name' => 'Kunshan',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 102052,
            ],
            [

                'name' => 'Haining',
                'country_code' => 'CHN',
                'district' => 'Zhejiang',
                'population' => 100478,
            ],
            [

                'name' => 'Pingliang',
                'country_code' => 'CHN',
                'district' => 'Gansu',
                'population' => 99265,
            ],
            [

                'name' => 'Fuqing',
                'country_code' => 'CHN',
                'district' => 'Fujian',
                'population' => 99193,
            ],
            [

                'name' => 'Xinzhou',
                'country_code' => 'CHN',
                'district' => 'Shanxi',
                'population' => 98667,
            ],
            [

                'name' => 'Jieyang',
                'country_code' => 'CHN',
                'district' => 'Guangdong',
                'population' => 98531,
            ],
            [

                'name' => 'Zhangjiagang',
                'country_code' => 'CHN',
                'district' => 'Jiangsu',
                'population' => 97994,
            ],
            [

                'name' => 'Tong Xian',
                'country_code' => 'CHN',
                'district' => 'Peking',
                'population' => 97168,
            ],
            [

                'name' => 'Ya´an',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 95900,
            ],
            [

                'name' => 'Jinzhou',
                'country_code' => 'CHN',
                'district' => 'Liaoning',
                'population' => 95761,
            ],
            [

                'name' => 'Emeishan',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 94000,
            ],
            [

                'name' => 'Enshi',
                'country_code' => 'CHN',
                'district' => 'Hubei',
                'population' => 93056,
            ],
            [

                'name' => 'Bose',
                'country_code' => 'CHN',
                'district' => 'Guangxi',
                'population' => 93009,
            ],
            [

                'name' => 'Yuzhou',
                'country_code' => 'CHN',
                'district' => 'Henan',
                'population' => 92889,
            ],
            [

                'name' => 'Kaiyuan',
                'country_code' => 'CHN',
                'district' => 'Yunnan',
                'population' => 91999,
            ],
            [

                'name' => 'Tumen',
                'country_code' => 'CHN',
                'district' => 'Jilin',
                'population' => 91471,
            ],
            [

                'name' => 'Putian',
                'country_code' => 'CHN',
                'district' => 'Fujian',
                'population' => 91030,
            ],
            [

                'name' => 'Linhai',
                'country_code' => 'CHN',
                'district' => 'Zhejiang',
                'population' => 90870,
            ],
            [

                'name' => 'Xilin Hot',
                'country_code' => 'CHN',
                'district' => 'Inner Mongolia',
                'population' => 90646,
            ],
            [

                'name' => 'Shaowu',
                'country_code' => 'CHN',
                'district' => 'Fujian',
                'population' => 90286,
            ],
            [

                'name' => 'Junan',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 90222,
            ],
            [

                'name' => 'Huaying',
                'country_code' => 'CHN',
                'district' => 'Sichuan',
                'population' => 89400,
            ],
            [

                'name' => 'Pingyi',
                'country_code' => 'CHN',
                'district' => 'Shandong',
                'population' => 89373,
            ],
            [

                'name' => 'Huangyan',
                'country_code' => 'CHN',
                'district' => 'Zhejiang',
                'population' => 89288,
            ],
            [

                'name' => 'Bishkek',
                'country_code' => 'KGZ',
                'district' => 'Bishkek shaary',
                'population' => 589400,
            ],
            [

                'name' => 'Osh',
                'country_code' => 'KGZ',
                'district' => 'Osh',
                'population' => 222700,
            ],
            [

                'name' => 'Bikenibeu',
                'country_code' => 'KIR',
                'district' => 'South Tarawa',
                'population' => 5055,
            ],
            [

                'name' => 'Bairiki',
                'country_code' => 'KIR',
                'district' => 'South Tarawa',
                'population' => 2226,
            ],
            [

                'name' => 'Santafé de Bogotá',
                'country_code' => 'COL',
                'district' => 'Santafé de Bogotá',
                'population' => 6260862,
            ],
            [

                'name' => 'Cali',
                'country_code' => 'COL',
                'district' => 'Valle',
                'population' => 2077386,
            ],
            [

                'name' => 'Medellín',
                'country_code' => 'COL',
                'district' => 'Antioquia',
                'population' => 1861265,
            ],
            [

                'name' => 'Barranquilla',
                'country_code' => 'COL',
                'district' => 'Atlántico',
                'population' => 1223260,
            ],
            [

                'name' => 'Cartagena',
                'country_code' => 'COL',
                'district' => 'Bolívar',
                'population' => 805757,
            ],
            [

                'name' => 'Cúcuta',
                'country_code' => 'COL',
                'district' => 'Norte de Santander',
                'population' => 606932,
            ],
            [

                'name' => 'Bucaramanga',
                'country_code' => 'COL',
                'district' => 'Santander',
                'population' => 515555,
            ],
            [

                'name' => 'Ibagué',
                'country_code' => 'COL',
                'district' => 'Tolima',
                'population' => 393664,
            ],
            [

                'name' => 'Pereira',
                'country_code' => 'COL',
                'district' => 'Risaralda',
                'population' => 381725,
            ],
            [

                'name' => 'Santa Marta',
                'country_code' => 'COL',
                'district' => 'Magdalena',
                'population' => 359147,
            ],
            [

                'name' => 'Manizales',
                'country_code' => 'COL',
                'district' => 'Caldas',
                'population' => 337580,
            ],
            [

                'name' => 'Bello',
                'country_code' => 'COL',
                'district' => 'Antioquia',
                'population' => 333470,
            ],
            [

                'name' => 'Pasto',
                'country_code' => 'COL',
                'district' => 'Nariño',
                'population' => 332396,
            ],
            [

                'name' => 'Neiva',
                'country_code' => 'COL',
                'district' => 'Huila',
                'population' => 300052,
            ],
            [

                'name' => 'Soledad',
                'country_code' => 'COL',
                'district' => 'Atlántico',
                'population' => 295058,
            ],
            [

                'name' => 'Armenia',
                'country_code' => 'COL',
                'district' => 'Quindío',
                'population' => 288977,
            ],
            [

                'name' => 'Villavicencio',
                'country_code' => 'COL',
                'district' => 'Meta',
                'population' => 273140,
            ],
            [

                'name' => 'Soacha',
                'country_code' => 'COL',
                'district' => 'Cundinamarca',
                'population' => 272058,
            ],
            [

                'name' => 'Valledupar',
                'country_code' => 'COL',
                'district' => 'Cesar',
                'population' => 263247,
            ],
            [

                'name' => 'Montería',
                'country_code' => 'COL',
                'district' => 'Córdoba',
                'population' => 248245,
            ],
            [

                'name' => 'Itagüí',
                'country_code' => 'COL',
                'district' => 'Antioquia',
                'population' => 228985,
            ],
            [

                'name' => 'Palmira',
                'country_code' => 'COL',
                'district' => 'Valle',
                'population' => 226509,
            ],
            [

                'name' => 'Buenaventura',
                'country_code' => 'COL',
                'district' => 'Valle',
                'population' => 224336,
            ],
            [

                'name' => 'Floridablanca',
                'country_code' => 'COL',
                'district' => 'Santander',
                'population' => 221913,
            ],
            [

                'name' => 'Sincelejo',
                'country_code' => 'COL',
                'district' => 'Sucre',
                'population' => 220704,
            ],
            [

                'name' => 'Popayán',
                'country_code' => 'COL',
                'district' => 'Cauca',
                'population' => 200719,
            ],
            [

                'name' => 'Barrancabermeja',
                'country_code' => 'COL',
                'district' => 'Santander',
                'population' => 178020,
            ],
            [

                'name' => 'Dos Quebradas',
                'country_code' => 'COL',
                'district' => 'Risaralda',
                'population' => 159363,
            ],
            [

                'name' => 'Tuluá',
                'country_code' => 'COL',
                'district' => 'Valle',
                'population' => 152488,
            ],
            [

                'name' => 'Envigado',
                'country_code' => 'COL',
                'district' => 'Antioquia',
                'population' => 135848,
            ],
            [

                'name' => 'Cartago',
                'country_code' => 'COL',
                'district' => 'Valle',
                'population' => 125884,
            ],
            [

                'name' => 'Girardot',
                'country_code' => 'COL',
                'district' => 'Cundinamarca',
                'population' => 110963,
            ],
            [

                'name' => 'Buga',
                'country_code' => 'COL',
                'district' => 'Valle',
                'population' => 110699,
            ],
            [

                'name' => 'Tunja',
                'country_code' => 'COL',
                'district' => 'Boyacá',
                'population' => 109740,
            ],
            [

                'name' => 'Florencia',
                'country_code' => 'COL',
                'district' => 'Caquetá',
                'population' => 108574,
            ],
            [

                'name' => 'Maicao',
                'country_code' => 'COL',
                'district' => 'La Guajira',
                'population' => 108053,
            ],
            [

                'name' => 'Sogamoso',
                'country_code' => 'COL',
                'district' => 'Boyacá',
                'population' => 107728,
            ],
            [

                'name' => 'Giron',
                'country_code' => 'COL',
                'district' => 'Santander',
                'population' => 90688,
            ],
            [

                'name' => 'Moroni',
                'country_code' => 'COM',
                'district' => 'Njazidja',
                'population' => 36000,
            ],
            [

                'name' => 'Brazzaville',
                'country_code' => 'COG',
                'district' => 'Brazzaville',
                'population' => 950000,
            ],
            [

                'name' => 'Pointe-Noire',
                'country_code' => 'COG',
                'district' => 'Kouilou',
                'population' => 500000,
            ],
            [

                'name' => 'Kinshasa',
                'country_code' => 'COD',
                'district' => 'Kinshasa',
                'population' => 5064000,
            ],
            [

                'name' => 'Lubumbashi',
                'country_code' => 'COD',
                'district' => 'Shaba',
                'population' => 851381,
            ],
            [

                'name' => 'Mbuji-Mayi',
                'country_code' => 'COD',
                'district' => 'East Kasai',
                'population' => 806475,
            ],
            [

                'name' => 'Kolwezi',
                'country_code' => 'COD',
                'district' => 'Shaba',
                'population' => 417810,
            ],
            [

                'name' => 'Kisangani',
                'country_code' => 'COD',
                'district' => 'Haute-Zaïre',
                'population' => 417517,
            ],
            [

                'name' => 'Kananga',
                'country_code' => 'COD',
                'district' => 'West Kasai',
                'population' => 393030,
            ],
            [

                'name' => 'Likasi',
                'country_code' => 'COD',
                'district' => 'Shaba',
                'population' => 299118,
            ],
            [

                'name' => 'Bukavu',
                'country_code' => 'COD',
                'district' => 'South Kivu',
                'population' => 201569,
            ],
            [

                'name' => 'Kikwit',
                'country_code' => 'COD',
                'district' => 'Bandundu',
                'population' => 182142,
            ],
            [

                'name' => 'Tshikapa',
                'country_code' => 'COD',
                'district' => 'West Kasai',
                'population' => 180860,
            ],
            [

                'name' => 'Matadi',
                'country_code' => 'COD',
                'district' => 'Bas-Zaïre',
                'population' => 172730,
            ],
            [

                'name' => 'Mbandaka',
                'country_code' => 'COD',
                'district' => 'Equateur',
                'population' => 169841,
            ],
            [

                'name' => 'Mwene-Ditu',
                'country_code' => 'COD',
                'district' => 'East Kasai',
                'population' => 137459,
            ],
            [

                'name' => 'Boma',
                'country_code' => 'COD',
                'district' => 'Bas-Zaïre',
                'population' => 135284,
            ],
            [

                'name' => 'Uvira',
                'country_code' => 'COD',
                'district' => 'South Kivu',
                'population' => 115590,
            ],
            [

                'name' => 'Butembo',
                'country_code' => 'COD',
                'district' => 'North Kivu',
                'population' => 109406,
            ],
            [

                'name' => 'Goma',
                'country_code' => 'COD',
                'district' => 'North Kivu',
                'population' => 109094,
            ],
            [

                'name' => 'Kalemie',
                'country_code' => 'COD',
                'district' => 'Shaba',
                'population' => 101309,
            ],
            [

                'name' => 'Bantam',
                'country_code' => 'CCK',
                'district' => 'Home Island',
                'population' => 503,
            ],
            [

                'name' => 'West Island',
                'country_code' => 'CCK',
                'district' => 'West Island',
                'population' => 167,
            ],
            [

                'name' => 'Pyongyang',
                'country_code' => 'PRK',
                'district' => 'Pyongyang-si',
                'population' => 2484000,
            ],
            [

                'name' => 'Hamhung',
                'country_code' => 'PRK',
                'district' => 'Hamgyong N',
                'population' => 709730,
            ],
            [

                'name' => 'Chongjin',
                'country_code' => 'PRK',
                'district' => 'Hamgyong P',
                'population' => 582480,
            ],
            [

                'name' => 'Nampo',
                'country_code' => 'PRK',
                'district' => 'Nampo-si',
                'population' => 566200,
            ],
            [

                'name' => 'Sinuiju',
                'country_code' => 'PRK',
                'district' => 'Pyongan P',
                'population' => 326011,
            ],
            [

                'name' => 'Wonsan',
                'country_code' => 'PRK',
                'district' => 'Kangwon',
                'population' => 300148,
            ],
            [

                'name' => 'Phyongsong',
                'country_code' => 'PRK',
                'district' => 'Pyongan N',
                'population' => 272934,
            ],
            [

                'name' => 'Sariwon',
                'country_code' => 'PRK',
                'district' => 'Hwanghae P',
                'population' => 254146,
            ],
            [

                'name' => 'Haeju',
                'country_code' => 'PRK',
                'district' => 'Hwanghae N',
                'population' => 229172,
            ],
            [

                'name' => 'Kanggye',
                'country_code' => 'PRK',
                'district' => 'Chagang',
                'population' => 223410,
            ],
            [

                'name' => 'Kimchaek',
                'country_code' => 'PRK',
                'district' => 'Hamgyong P',
                'population' => 179000,
            ],
            [

                'name' => 'Hyesan',
                'country_code' => 'PRK',
                'district' => 'Yanggang',
                'population' => 178020,
            ],
            [

                'name' => 'Kaesong',
                'country_code' => 'PRK',
                'district' => 'Kaesong-si',
                'population' => 171500,
            ],
            [

                'name' => 'Seoul',
                'country_code' => 'KOR',
                'district' => 'Seoul',
                'population' => 9981619,
            ],
            [

                'name' => 'Pusan',
                'country_code' => 'KOR',
                'district' => 'Pusan',
                'population' => 3804522,
            ],
            [

                'name' => 'Inchon',
                'country_code' => 'KOR',
                'district' => 'Inchon',
                'population' => 2559424,
            ],
            [

                'name' => 'Taegu',
                'country_code' => 'KOR',
                'district' => 'Taegu',
                'population' => 2548568,
            ],
            [

                'name' => 'Taejon',
                'country_code' => 'KOR',
                'district' => 'Taejon',
                'population' => 1425835,
            ],
            [

                'name' => 'Kwangju',
                'country_code' => 'KOR',
                'district' => 'Kwangju',
                'population' => 1368341,
            ],
            [

                'name' => 'Ulsan',
                'country_code' => 'KOR',
                'district' => 'Kyongsangnam',
                'population' => 1084891,
            ],
            [

                'name' => 'Songnam',
                'country_code' => 'KOR',
                'district' => 'Kyonggi',
                'population' => 869094,
            ],
            [

                'name' => 'Puchon',
                'country_code' => 'KOR',
                'district' => 'Kyonggi',
                'population' => 779412,
            ],
            [

                'name' => 'Suwon',
                'country_code' => 'KOR',
                'district' => 'Kyonggi',
                'population' => 755550,
            ],
            [

                'name' => 'Anyang',
                'country_code' => 'KOR',
                'district' => 'Kyonggi',
                'population' => 591106,
            ],
            [

                'name' => 'Chonju',
                'country_code' => 'KOR',
                'district' => 'Chollabuk',
                'population' => 563153,
            ],
            [

                'name' => 'Chongju',
                'country_code' => 'KOR',
                'district' => 'Chungchongbuk',
                'population' => 531376,
            ],
            [

                'name' => 'Koyang',
                'country_code' => 'KOR',
                'district' => 'Kyonggi',
                'population' => 518282,
            ],
            [

                'name' => 'Ansan',
                'country_code' => 'KOR',
                'district' => 'Kyonggi',
                'population' => 510314,
            ],
            [

                'name' => 'Pohang',
                'country_code' => 'KOR',
                'district' => 'Kyongsangbuk',
                'population' => 508899,
            ],
            [

                'name' => 'Chang-won',
                'country_code' => 'KOR',
                'district' => 'Kyongsangnam',
                'population' => 481694,
            ],
            [

                'name' => 'Masan',
                'country_code' => 'KOR',
                'district' => 'Kyongsangnam',
                'population' => 441242,
            ],
            [

                'name' => 'Kwangmyong',
                'country_code' => 'KOR',
                'district' => 'Kyonggi',
                'population' => 350914,
            ],
            [

                'name' => 'Chonan',
                'country_code' => 'KOR',
                'district' => 'Chungchongnam',
                'population' => 330259,
            ],
            [

                'name' => 'Chinju',
                'country_code' => 'KOR',
                'district' => 'Kyongsangnam',
                'population' => 329886,
            ],
            [

                'name' => 'Iksan',
                'country_code' => 'KOR',
                'district' => 'Chollabuk',
                'population' => 322685,
            ],
            [

                'name' => 'Pyongtaek',
                'country_code' => 'KOR',
                'district' => 'Kyonggi',
                'population' => 312927,
            ],
            [

                'name' => 'Kumi',
                'country_code' => 'KOR',
                'district' => 'Kyongsangbuk',
                'population' => 311431,
            ],
            [

                'name' => 'Uijongbu',
                'country_code' => 'KOR',
                'district' => 'Kyonggi',
                'population' => 276111,
            ],
            [

                'name' => 'Kyongju',
                'country_code' => 'KOR',
                'district' => 'Kyongsangbuk',
                'population' => 272968,
            ],
            [

                'name' => 'Kunsan',
                'country_code' => 'KOR',
                'district' => 'Chollabuk',
                'population' => 266569,
            ],
            [

                'name' => 'Cheju',
                'country_code' => 'KOR',
                'district' => 'Cheju',
                'population' => 258511,
            ],
            [

                'name' => 'Kimhae',
                'country_code' => 'KOR',
                'district' => 'Kyongsangnam',
                'population' => 256370,
            ],
            [

                'name' => 'Sunchon',
                'country_code' => 'KOR',
                'district' => 'Chollanam',
                'population' => 249263,
            ],
            [

                'name' => 'Mokpo',
                'country_code' => 'KOR',
                'district' => 'Chollanam',
                'population' => 247452,
            ],
            [

                'name' => 'Yong-in',
                'country_code' => 'KOR',
                'district' => 'Kyonggi',
                'population' => 242643,
            ],
            [

                'name' => 'Wonju',
                'country_code' => 'KOR',
                'district' => 'Kang-won',
                'population' => 237460,
            ],
            [

                'name' => 'Kunpo',
                'country_code' => 'KOR',
                'district' => 'Kyonggi',
                'population' => 235233,
            ],
            [

                'name' => 'Chunchon',
                'country_code' => 'KOR',
                'district' => 'Kang-won',
                'population' => 234528,
            ],
            [

                'name' => 'Namyangju',
                'country_code' => 'KOR',
                'district' => 'Kyonggi',
                'population' => 229060,
            ],
            [

                'name' => 'Kangnung',
                'country_code' => 'KOR',
                'district' => 'Kang-won',
                'population' => 220403,
            ],
            [

                'name' => 'Chungju',
                'country_code' => 'KOR',
                'district' => 'Chungchongbuk',
                'population' => 205206,
            ],
            [

                'name' => 'Andong',
                'country_code' => 'KOR',
                'district' => 'Kyongsangbuk',
                'population' => 188443,
            ],
            [

                'name' => 'Yosu',
                'country_code' => 'KOR',
                'district' => 'Chollanam',
                'population' => 183596,
            ],
            [

                'name' => 'Kyongsan',
                'country_code' => 'KOR',
                'district' => 'Kyongsangbuk',
                'population' => 173746,
            ],
            [

                'name' => 'Paju',
                'country_code' => 'KOR',
                'district' => 'Kyonggi',
                'population' => 163379,
            ],
            [

                'name' => 'Yangsan',
                'country_code' => 'KOR',
                'district' => 'Kyongsangnam',
                'population' => 163351,
            ],
            [

                'name' => 'Ichon',
                'country_code' => 'KOR',
                'district' => 'Kyonggi',
                'population' => 155332,
            ],
            [

                'name' => 'Asan',
                'country_code' => 'KOR',
                'district' => 'Chungchongnam',
                'population' => 154663,
            ],
            [

                'name' => 'Koje',
                'country_code' => 'KOR',
                'district' => 'Kyongsangnam',
                'population' => 147562,
            ],
            [

                'name' => 'Kimchon',
                'country_code' => 'KOR',
                'district' => 'Kyongsangbuk',
                'population' => 147027,
            ],
            [

                'name' => 'Nonsan',
                'country_code' => 'KOR',
                'district' => 'Chungchongnam',
                'population' => 146619,
            ],
            [

                'name' => 'Kuri',
                'country_code' => 'KOR',
                'district' => 'Kyonggi',
                'population' => 142173,
            ],
            [

                'name' => 'Chong-up',
                'country_code' => 'KOR',
                'district' => 'Chollabuk',
                'population' => 139111,
            ],
            [

                'name' => 'Chechon',
                'country_code' => 'KOR',
                'district' => 'Chungchongbuk',
                'population' => 137070,
            ],
            [

                'name' => 'Sosan',
                'country_code' => 'KOR',
                'district' => 'Chungchongnam',
                'population' => 134746,
            ],
            [

                'name' => 'Shihung',
                'country_code' => 'KOR',
                'district' => 'Kyonggi',
                'population' => 133443,
            ],
            [

                'name' => 'Tong-yong',
                'country_code' => 'KOR',
                'district' => 'Kyongsangnam',
                'population' => 131717,
            ],
            [

                'name' => 'Kongju',
                'country_code' => 'KOR',
                'district' => 'Chungchongnam',
                'population' => 131229,
            ],
            [

                'name' => 'Yongju',
                'country_code' => 'KOR',
                'district' => 'Kyongsangbuk',
                'population' => 131097,
            ],
            [

                'name' => 'Chinhae',
                'country_code' => 'KOR',
                'district' => 'Kyongsangnam',
                'population' => 125997,
            ],
            [

                'name' => 'Sangju',
                'country_code' => 'KOR',
                'district' => 'Kyongsangbuk',
                'population' => 124116,
            ],
            [

                'name' => 'Poryong',
                'country_code' => 'KOR',
                'district' => 'Chungchongnam',
                'population' => 122604,
            ],
            [

                'name' => 'Kwang-yang',
                'country_code' => 'KOR',
                'district' => 'Chollanam',
                'population' => 122052,
            ],
            [

                'name' => 'Miryang',
                'country_code' => 'KOR',
                'district' => 'Kyongsangnam',
                'population' => 121501,
            ],
            [

                'name' => 'Hanam',
                'country_code' => 'KOR',
                'district' => 'Kyonggi',
                'population' => 115812,
            ],
            [

                'name' => 'Kimje',
                'country_code' => 'KOR',
                'district' => 'Chollabuk',
                'population' => 115427,
            ],
            [

                'name' => 'Yongchon',
                'country_code' => 'KOR',
                'district' => 'Kyongsangbuk',
                'population' => 113511,
            ],
            [

                'name' => 'Sachon',
                'country_code' => 'KOR',
                'district' => 'Kyongsangnam',
                'population' => 113494,
            ],
            [

                'name' => 'Uiwang',
                'country_code' => 'KOR',
                'district' => 'Kyonggi',
                'population' => 108788,
            ],
            [

                'name' => 'Naju',
                'country_code' => 'KOR',
                'district' => 'Chollanam',
                'population' => 107831,
            ],
            [

                'name' => 'Namwon',
                'country_code' => 'KOR',
                'district' => 'Chollabuk',
                'population' => 103544,
            ],
            [

                'name' => 'Tonghae',
                'country_code' => 'KOR',
                'district' => 'Kang-won',
                'population' => 95472,
            ],
            [

                'name' => 'Mun-gyong',
                'country_code' => 'KOR',
                'district' => 'Kyongsangbuk',
                'population' => 92239,
            ],
            [

                'name' => 'Athenai',
                'country_code' => 'GRC',
                'district' => 'Attika',
                'population' => 772072,
            ],
            [

                'name' => 'Thessaloniki',
                'country_code' => 'GRC',
                'district' => 'Central Macedonia',
                'population' => 383967,
            ],
            [

                'name' => 'Pireus',
                'country_code' => 'GRC',
                'district' => 'Attika',
                'population' => 182671,
            ],
            [

                'name' => 'Patras',
                'country_code' => 'GRC',
                'district' => 'West Greece',
                'population' => 153344,
            ],
            [

                'name' => 'Peristerion',
                'country_code' => 'GRC',
                'district' => 'Attika',
                'population' => 137288,
            ],
            [

                'name' => 'Herakleion',
                'country_code' => 'GRC',
                'district' => 'Crete',
                'population' => 116178,
            ],
            [

                'name' => 'Kallithea',
                'country_code' => 'GRC',
                'district' => 'Attika',
                'population' => 114233,
            ],
            [

                'name' => 'Larisa',
                'country_code' => 'GRC',
                'district' => 'Thessalia',
                'population' => 113090,
            ],
            [

                'name' => 'Zagreb',
                'country_code' => 'HRV',
                'district' => 'Grad Zagreb',
                'population' => 706770,
            ],
            [

                'name' => 'Split',
                'country_code' => 'HRV',
                'district' => 'Split-Dalmatia',
                'population' => 189388,
            ],
            [

                'name' => 'Rijeka',
                'country_code' => 'HRV',
                'district' => 'Primorje-Gorski Kota',
                'population' => 167964,
            ],
            [

                'name' => 'Osijek',
                'country_code' => 'HRV',
                'district' => 'Osijek-Baranja',
                'population' => 104761,
            ],
            [

                'name' => 'La Habana',
                'country_code' => 'CUB',
                'district' => 'La Habana',
                'population' => 2256000,
            ],
            [

                'name' => 'Santiago de Cuba',
                'country_code' => 'CUB',
                'district' => 'Santiago de Cuba',
                'population' => 433180,
            ],
            [

                'name' => 'Camagüey',
                'country_code' => 'CUB',
                'district' => 'Camagüey',
                'population' => 298726,
            ],
            [

                'name' => 'Holguín',
                'country_code' => 'CUB',
                'district' => 'Holguín',
                'population' => 249492,
            ],
            [

                'name' => 'Santa Clara',
                'country_code' => 'CUB',
                'district' => 'Villa Clara',
                'population' => 207350,
            ],
            [

                'name' => 'Guantánamo',
                'country_code' => 'CUB',
                'district' => 'Guantánamo',
                'population' => 205078,
            ],
            [

                'name' => 'Pinar del Río',
                'country_code' => 'CUB',
                'district' => 'Pinar del Río',
                'population' => 142100,
            ],
            [

                'name' => 'Bayamo',
                'country_code' => 'CUB',
                'district' => 'Granma',
                'population' => 141000,
            ],
            [

                'name' => 'Cienfuegos',
                'country_code' => 'CUB',
                'district' => 'Cienfuegos',
                'population' => 132770,
            ],
            [

                'name' => 'Victoria de las Tunas',
                'country_code' => 'CUB',
                'district' => 'Las Tunas',
                'population' => 132350,
            ],
            [

                'name' => 'Matanzas',
                'country_code' => 'CUB',
                'district' => 'Matanzas',
                'population' => 123273,
            ],
            [

                'name' => 'Manzanillo',
                'country_code' => 'CUB',
                'district' => 'Granma',
                'population' => 109350,
            ],
            [

                'name' => 'Sancti-Spíritus',
                'country_code' => 'CUB',
                'district' => 'Sancti-Spíritus',
                'population' => 100751,
            ],
            [

                'name' => 'Ciego de Ávila',
                'country_code' => 'CUB',
                'district' => 'Ciego de Ávila',
                'population' => 98505,
            ],
            [

                'name' => 'al-Salimiya',
                'country_code' => 'KWT',
                'district' => 'Hawalli',
                'population' => 130215,
            ],
            [

                'name' => 'Jalib al-Shuyukh',
                'country_code' => 'KWT',
                'district' => 'Hawalli',
                'population' => 102178,
            ],
            [

                'name' => 'Kuwait',
                'country_code' => 'KWT',
                'district' => 'al-Asima',
                'population' => 28859,
            ],
            [

                'name' => 'Nicosia',
                'country_code' => 'CYP',
                'district' => 'Nicosia',
                'population' => 195000,
            ],
            [

                'name' => 'Limassol',
                'country_code' => 'CYP',
                'district' => 'Limassol',
                'population' => 154400,
            ],
            [

                'name' => 'Vientiane',
                'country_code' => 'LAO',
                'district' => 'Viangchan',
                'population' => 531800,
            ],
            [

                'name' => 'Savannakhet',
                'country_code' => 'LAO',
                'district' => 'Savannakhet',
                'population' => 96652,
            ],
            [

                'name' => 'Riga',
                'country_code' => 'LVA',
                'district' => 'Riika',
                'population' => 764328,
            ],
            [

                'name' => 'Daugavpils',
                'country_code' => 'LVA',
                'district' => 'Daugavpils',
                'population' => 114829,
            ],
            [

                'name' => 'Liepaja',
                'country_code' => 'LVA',
                'district' => 'Liepaja',
                'population' => 89439,
            ],
            [

                'name' => 'Maseru',
                'country_code' => 'LSO',
                'district' => 'Maseru',
                'population' => 297000,
            ],
            [

                'name' => 'Beirut',
                'country_code' => 'LBN',
                'district' => 'Beirut',
                'population' => 1100000,
            ],
            [

                'name' => 'Tripoli',
                'country_code' => 'LBN',
                'district' => 'al-Shamal',
                'population' => 240000,
            ],
            [

                'name' => 'Monrovia',
                'country_code' => 'LBR',
                'district' => 'Montserrado',
                'population' => 850000,
            ],
            [

                'name' => 'Tripoli',
                'country_code' => 'LBY',
                'district' => 'Tripoli',
                'population' => 1682000,
            ],
            [

                'name' => 'Bengasi',
                'country_code' => 'LBY',
                'district' => 'Bengasi',
                'population' => 804000,
            ],
            [

                'name' => 'Misrata',
                'country_code' => 'LBY',
                'district' => 'Misrata',
                'population' => 121669,
            ],
            [

                'name' => 'al-Zawiya',
                'country_code' => 'LBY',
                'district' => 'al-Zawiya',
                'population' => 89338,
            ],
            [

                'name' => 'Schaan',
                'country_code' => 'LIE',
                'district' => 'Schaan',
                'population' => 5346,
            ],
            [

                'name' => 'Vaduz',
                'country_code' => 'LIE',
                'district' => 'Vaduz',
                'population' => 5043,
            ],
            [

                'name' => 'Vilnius',
                'country_code' => 'LTU',
                'district' => 'Vilna',
                'population' => 577969,
            ],
            [

                'name' => 'Kaunas',
                'country_code' => 'LTU',
                'district' => 'Kaunas',
                'population' => 412639,
            ],
            [

                'name' => 'Klaipeda',
                'country_code' => 'LTU',
                'district' => 'Klaipeda',
                'population' => 202451,
            ],
            [

                'name' => 'Šiauliai',
                'country_code' => 'LTU',
                'district' => 'Šiauliai',
                'population' => 146563,
            ],
            [

                'name' => 'Panevezys',
                'country_code' => 'LTU',
                'district' => 'Panevezys',
                'population' => 133695,
            ],
            [

                'name' => 'Luxembourg [Luxemburg/Lëtzebuerg]',
                'country_code' => 'LUX',
                'district' => 'Luxembourg',
                'population' => 80700,
            ],
            [

                'name' => 'El-Aaiún',
                'country_code' => 'ESH',
                'district' => 'El-Aaiún',
                'population' => 169000,
            ],
            [

                'name' => 'Macao',
                'country_code' => 'MAC',
                'district' => 'Macau',
                'population' => 437500,
            ],
            [

                'name' => 'Antananarivo',
                'country_code' => 'MDG',
                'district' => 'Antananarivo',
                'population' => 675669,
            ],
            [

                'name' => 'Toamasina',
                'country_code' => 'MDG',
                'district' => 'Toamasina',
                'population' => 127441,
            ],
            [

                'name' => 'Antsirabé',
                'country_code' => 'MDG',
                'district' => 'Antananarivo',
                'population' => 120239,
            ],
            [

                'name' => 'Mahajanga',
                'country_code' => 'MDG',
                'district' => 'Mahajanga',
                'population' => 100807,
            ],
            [

                'name' => 'Fianarantsoa',
                'country_code' => 'MDG',
                'district' => 'Fianarantsoa',
                'population' => 99005,
            ],
            [

                'name' => 'Skopje',
                'country_code' => 'MKD',
                'district' => 'Skopje',
                'population' => 444299,
            ],
            [

                'name' => 'Blantyre',
                'country_code' => 'MWI',
                'district' => 'Blantyre',
                'population' => 478155,
            ],
            [

                'name' => 'Lilongwe',
                'country_code' => 'MWI',
                'district' => 'Lilongwe',
                'population' => 435964,
            ],
            [

                'name' => 'Male',
                'country_code' => 'MDV',
                'district' => 'Maale',
                'population' => 71000,
            ],
            [

                'name' => 'Kuala Lumpur',
                'country_code' => 'MYS',
                'district' => 'Wilayah Persekutuan',
                'population' => 1297526,
            ],
            [

                'name' => 'Ipoh',
                'country_code' => 'MYS',
                'district' => 'Perak',
                'population' => 382853,
            ],
            [

                'name' => 'Johor Baharu',
                'country_code' => 'MYS',
                'district' => 'Johor',
                'population' => 328436,
            ],
            [

                'name' => 'Petaling Jaya',
                'country_code' => 'MYS',
                'district' => 'Selangor',
                'population' => 254350,
            ],
            [

                'name' => 'Kelang',
                'country_code' => 'MYS',
                'district' => 'Selangor',
                'population' => 243355,
            ],
            [

                'name' => 'Kuala Terengganu',
                'country_code' => 'MYS',
                'district' => 'Terengganu',
                'population' => 228119,
            ],
            [

                'name' => 'Pinang',
                'country_code' => 'MYS',
                'district' => 'Pulau Pinang',
                'population' => 219603,
            ],
            [

                'name' => 'Kota Bharu',
                'country_code' => 'MYS',
                'district' => 'Kelantan',
                'population' => 219582,
            ],
            [

                'name' => 'Kuantan',
                'country_code' => 'MYS',
                'district' => 'Pahang',
                'population' => 199484,
            ],
            [

                'name' => 'Taiping',
                'country_code' => 'MYS',
                'district' => 'Perak',
                'population' => 183261,
            ],
            [

                'name' => 'Seremban',
                'country_code' => 'MYS',
                'district' => 'Negeri Sembilan',
                'population' => 182869,
            ],
            [

                'name' => 'Kuching',
                'country_code' => 'MYS',
                'district' => 'Sarawak',
                'population' => 148059,
            ],
            [

                'name' => 'Sibu',
                'country_code' => 'MYS',
                'district' => 'Sarawak',
                'population' => 126381,
            ],
            [

                'name' => 'Sandakan',
                'country_code' => 'MYS',
                'district' => 'Sabah',
                'population' => 125841,
            ],
            [

                'name' => 'Alor Setar',
                'country_code' => 'MYS',
                'district' => 'Kedah',
                'population' => 124412,
            ],
            [

                'name' => 'Selayang Baru',
                'country_code' => 'MYS',
                'district' => 'Selangor',
                'population' => 124228,
            ],
            [

                'name' => 'Sungai Petani',
                'country_code' => 'MYS',
                'district' => 'Kedah',
                'population' => 114763,
            ],
            [

                'name' => 'Shah Alam',
                'country_code' => 'MYS',
                'district' => 'Selangor',
                'population' => 102019,
            ],
            [

                'name' => 'Bamako',
                'country_code' => 'MLI',
                'district' => 'Bamako',
                'population' => 809552,
            ],
            [

                'name' => 'Birkirkara',
                'country_code' => 'MLT',
                'district' => 'Outer Harbour',
                'population' => 21445,
            ],
            [

                'name' => 'Valletta',
                'country_code' => 'MLT',
                'district' => 'Inner Harbour',
                'population' => 7073,
            ],
            [

                'name' => 'Casablanca',
                'country_code' => 'MAR',
                'district' => 'Casablanca',
                'population' => 2940623,
            ],
            [

                'name' => 'Rabat',
                'country_code' => 'MAR',
                'district' => 'Rabat-Salé-Zammour-Z',
                'population' => 623457,
            ],
            [

                'name' => 'Marrakech',
                'country_code' => 'MAR',
                'district' => 'Marrakech-Tensift-Al',
                'population' => 621914,
            ],
            [
                'name' => 'Fès',
                'country_code' => 'MAR',
                'district' => 'Fès-Boulemane',
                'population' => 541162,
            ],
            [
                'name' => 'Tanger',
                'country_code' => 'MAR',
                'district' => 'Tanger-Tétouan',
                'population' => 521735,
            ],
            [
                'name' => 'Salé',
                'country_code' => 'MAR',
                'district' => 'Rabat-Salé-Zammour-Z',
                'population' => 504420,
            ],
            [
                'name' => 'Meknès',
                'country_code' => 'MAR',
                'district' => 'Meknès-Tafilalet',
                'population' => 460000,
            ],
            [
                'name' => 'Oujda',
                'country_code' => 'MAR',
                'district' => 'Oriental',
                'population' => 365382,
            ],
            [
                'name' => 'Kénitra',
                'country_code' => 'MAR',
                'district' => 'Gharb-Chrarda-Béni H',
                'population' => 292600,
            ],
            [
                'name' => 'Tétouan',
                'country_code' => 'MAR',
                'district' => 'Tanger-Tétouan',
                'population' => 277516,
            ],
            [
                'name' => 'Safi',
                'country_code' => 'MAR',
                'district' => 'Doukkala-Abda',
                'population' => 262300,
            ],
            [
                'name' => 'Agadir',
                'country_code' => 'MAR',
                'district' => 'Souss Massa-Draâ',
                'population' => 155244,
            ],
            [
                'name' => 'Mohammedia',
                'country_code' => 'MAR',
                'district' => 'Casablanca',
                'population' => 154706,
            ],
            [
                'name' => 'Khouribga',
                'country_code' => 'MAR',
                'district' => 'Chaouia-Ouardigha',
                'population' => 152090,
            ],
            [
                'name' => 'Beni-Mellal',
                'country_code' => 'MAR',
                'district' => 'Tadla-Azilal',
                'population' => 140212,
            ],
            [
                'name' => 'Témara',
                'country_code' => 'MAR',
                'district' => 'Rabat-Salé-Zammour-Z',
                'population' => 126303,
            ],
            [
                'name' => 'El Jadida',
                'country_code' => 'MAR',
                'district' => 'Doukkala-Abda',
                'population' => 119083,
            ],
            [
                'name' => 'Nador',
                'country_code' => 'MAR',
                'district' => 'Oriental',
                'population' => 112450,
            ],
            [
                'name' => 'Ksar el Kebir',
                'country_code' => 'MAR',
                'district' => 'Tanger-Tétouan',
                'population' => 107065,
            ],
            [
                'name' => 'Settat',
                'country_code' => 'MAR',
                'district' => 'Chaouia-Ouardigha',
                'population' => 96200,
            ],
            [
                'name' => 'Taza',
                'country_code' => 'MAR',
                'district' => 'Taza-Al Hoceima-Taou',
                'population' => 92700,
            ],
            [
                'name' => 'El Araich',
                'country_code' => 'MAR',
                'district' => 'Tanger-Tétouan',
                'population' => 90400,
            ],
            [
                'name' => 'Dalap-Uliga-Darrit',
                'country_code' => 'MHL',
                'district' => 'Majuro',
                'population' => 28000,
            ],
            [
                'name' => 'Fort-de-France',
                'country_code' => 'MTQ',
                'district' => 'Fort-de-France',
                'population' => 94050,
            ],
            [
                'name' => 'Nouakchott',
                'country_code' => 'MRT',
                'district' => 'Nouakchott',
                'population' => 667300,
            ],
            [
                'name' => 'Nouâdhibou',
                'country_code' => 'MRT',
                'district' => 'Dakhlet Nouâdhibou',
                'population' => 97600,
            ],
            [
                'name' => 'Port-Louis',
                'country_code' => 'MUS',
                'district' => 'Port-Louis',
                'population' => 138200,
            ],
            [

                'name' => 'Beau Bassin-Rose Hill',
                'country_code' => 'MUS',
                'district' => 'Plaines Wilhelms',
                'population' => 100616,
            ],
            [

                'name' => 'Vacoas-Phoenix',
                'country_code' => 'MUS',
                'district' => 'Plaines Wilhelms',
                'population' => 98464,
            ],
            [

                'name' => 'Mamoutzou',
                'country_code' => 'MYT',
                'district' => 'Mamoutzou',
                'population' => 12000,
            ],
            [

                'name' => 'Ciudad de México',
                'country_code' => 'MEX',
                'district' => 'Distrito Federal',
                'population' => 8591309,
            ],
            [

                'name' => 'Guadalajara',
                'country_code' => 'MEX',
                'district' => 'Jalisco',
                'population' => 1647720,
            ],
            [

                'name' => 'Ecatepec de Morelos',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 1620303,
            ],
            [

                'name' => 'Puebla',
                'country_code' => 'MEX',
                'district' => 'Puebla',
                'population' => 1346176,
            ],
            [

                'name' => 'Nezahualcóyotl',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 1224924,
            ],
            [

                'name' => 'Juárez',
                'country_code' => 'MEX',
                'district' => 'Chihuahua',
                'population' => 1217818,
            ],
            [

                'name' => 'Tijuana',
                'country_code' => 'MEX',
                'district' => 'Baja California',
                'population' => 1212232,
            ],
            [

                'name' => 'León',
                'country_code' => 'MEX',
                'district' => 'Guanajuato',
                'population' => 1133576,
            ],
            [

                'name' => 'Monterrey',
                'country_code' => 'MEX',
                'district' => 'Nuevo León',
                'population' => 1108499,
            ],
            [
                'name' => 'Zapopan',
                'country_code' => 'MEX',
                'district' => 'Jalisco',
                'population' => 1002239,
            ],
            [
                'name' => 'Naucalpan de Juárez',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 857511,
            ],
            [
                'name' => 'Mexicali',
                'country_code' => 'MEX',
                'district' => 'Baja California',
                'population' => 764902,
            ],
            [
                'name' => 'Culiacán',
                'country_code' => 'MEX',
                'district' => 'Sinaloa',
                'population' => 744859,
            ],
            [
                'name' => 'Acapulco de Juárez',
                'country_code' => 'MEX',
                'district' => 'Guerrero',
                'population' => 721011,
            ],
            [
                'name' => 'Tlalnepantla de Baz',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 720755,
            ],
            [
                'name' => 'Mérida',
                'country_code' => 'MEX',
                'district' => 'Yucatán',
                'population' => 703324,
            ],
            [
                'name' => 'Chihuahua',
                'country_code' => 'MEX',
                'district' => 'Chihuahua',
                'population' => 670208,
            ],
            [
                'name' => 'San Luis Potosí',
                'country_code' => 'MEX',
                'district' => 'San Luis Potosí',
                'population' => 669353,
            ],
            [
                'name' => 'Guadalupe',
                'country_code' => 'MEX',
                'district' => 'Nuevo León',
                'population' => 668780,
            ],
            [
                'name' => 'Toluca',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 665617,
            ],
            [
                'name' => 'Aguascalientes',
                'country_code' => 'MEX',
                'district' => 'Aguascalientes',
                'population' => 643360,
            ],
            [
                'name' => 'Querétaro',
                'country_code' => 'MEX',
                'district' => 'Querétaro de Arteaga',
                'population' => 639839,
            ],
            [
                'name' => 'Morelia',
                'country_code' => 'MEX',
                'district' => 'Michoacán de Ocampo',
                'population' => 619958,
            ],
            [
                'name' => 'Hermosillo',
                'country_code' => 'MEX',
                'district' => 'Sonora',
                'population' => 608697,
            ],
            [
                'name' => 'Saltillo',
                'country_code' => 'MEX',
                'district' => 'Coahuila de Zaragoza',
                'population' => 577352,
            ],
            [
                'name' => 'Torreón',
                'country_code' => 'MEX',
                'district' => 'Coahuila de Zaragoza',
                'population' => 529093,
            ],
            [
                'name' => 'Centro (Villahermosa)',
                'country_code' => 'MEX',
                'district' => 'Tabasco',
                'population' => 519873,
            ],
            [
                'name' => 'San Nicolás de los Garza',
                'country_code' => 'MEX',
                'district' => 'Nuevo León',
                'population' => 495540,
            ],
            [
                'name' => 'Durango',
                'country_code' => 'MEX',
                'district' => 'Durango',
                'population' => 490524,
            ],
            [
                'name' => 'Chimalhuacán',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 490245,
            ],
            [
                'name' => 'Tlaquepaque',
                'country_code' => 'MEX',
                'district' => 'Jalisco',
                'population' => 475472,
            ],
            [
                'name' => 'Atizapán de Zaragoza',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 467262,
            ],
            [
                'name' => 'Veracruz',
                'country_code' => 'MEX',
                'district' => 'Veracruz',
                'population' => 457119,
            ],
            [
                'name' => 'Cuautitlán Izcalli',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 452976,
            ],
            [
                'name' => 'Irapuato',
                'country_code' => 'MEX',
                'district' => 'Guanajuato',
                'population' => 440039,
            ],
            [
                'name' => 'Tuxtla Gutiérrez',
                'country_code' => 'MEX',
                'district' => 'Chiapas',
                'population' => 433544,
            ],
            [
                'name' => 'Tultitlán',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 432411,
            ],
            [
                'name' => 'Reynosa',
                'country_code' => 'MEX',
                'district' => 'Tamaulipas',
                'population' => 419776,
            ],
            [
                'name' => 'Benito Juárez',
                'country_code' => 'MEX',
                'district' => 'Quintana Roo',
                'population' => 419276,
            ],
            [
                'name' => 'Matamoros',
                'country_code' => 'MEX',
                'district' => 'Tamaulipas',
                'population' => 416428,
            ],
            [

                'name' => 'Xalapa',
                'country_code' => 'MEX',
                'district' => 'Veracruz',
                'population' => 390058,
            ],
            [

                'name' => 'Celaya',
                'country_code' => 'MEX',
                'district' => 'Guanajuato',
                'population' => 382140,
            ],
            [

                'name' => 'Mazatlán',
                'country_code' => 'MEX',
                'district' => 'Sinaloa',
                'population' => 380265,
            ],
            [

                'name' => 'Ensenada',
                'country_code' => 'MEX',
                'district' => 'Baja California',
                'population' => 369573,
            ],
            [

                'name' => 'Ahome',
                'country_code' => 'MEX',
                'district' => 'Sinaloa',
                'population' => 358663,
            ],
            [

                'name' => 'Cajeme',
                'country_code' => 'MEX',
                'district' => 'Sonora',
                'population' => 355679,
            ],
            [

                'name' => 'Cuernavaca',
                'country_code' => 'MEX',
                'district' => 'Morelos',
                'population' => 337966,
            ],
            [

                'name' => 'Tonalá',
                'country_code' => 'MEX',
                'district' => 'Jalisco',
                'population' => 336109,
            ],
            [

                'name' => 'Valle de Chalco Solidaridad',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 323113,
            ],
            [

                'name' => 'Nuevo Laredo',
                'country_code' => 'MEX',
                'district' => 'Tamaulipas',
                'population' => 310277,
            ],
            [

                'name' => 'Tepic',
                'country_code' => 'MEX',
                'district' => 'Nayarit',
                'population' => 305025,
            ],
            [

                'name' => 'Tampico',
                'country_code' => 'MEX',
                'district' => 'Tamaulipas',
                'population' => 294789,
            ],
            [

                'name' => 'Ixtapaluca',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 293160,
            ],
            [

                'name' => 'Apodaca',
                'country_code' => 'MEX',
                'district' => 'Nuevo León',
                'population' => 282941,
            ],
            [

                'name' => 'Guasave',
                'country_code' => 'MEX',
                'district' => 'Sinaloa',
                'population' => 277201,
            ],
            [

                'name' => 'Gómez Palacio',
                'country_code' => 'MEX',
                'district' => 'Durango',
                'population' => 272806,
            ],
            [

                'name' => 'Tapachula',
                'country_code' => 'MEX',
                'district' => 'Chiapas',
                'population' => 271141,
            ],
            [

                'name' => 'Nicolás Romero',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 269393,
            ],
            [

                'name' => 'Coatzacoalcos',
                'country_code' => 'MEX',
                'district' => 'Veracruz',
                'population' => 267037,
            ],
            [

                'name' => 'Uruapan',
                'country_code' => 'MEX',
                'district' => 'Michoacán de Ocampo',
                'population' => 265211,
            ],
            [

                'name' => 'Victoria',
                'country_code' => 'MEX',
                'district' => 'Tamaulipas',
                'population' => 262686,
            ],
            [

                'name' => 'Oaxaca de Juárez',
                'country_code' => 'MEX',
                'district' => 'Oaxaca',
                'population' => 256848,
            ],
            [

                'name' => 'Coacalco de Berriozábal',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 252270,
            ],
            [

                'name' => 'Pachuca de Soto',
                'country_code' => 'MEX',
                'district' => 'Hidalgo',
                'population' => 244688,
            ],
            [

                'name' => 'General Escobedo',
                'country_code' => 'MEX',
                'district' => 'Nuevo León',
                'population' => 232961,
            ],
            [

                'name' => 'Salamanca',
                'country_code' => 'MEX',
                'district' => 'Guanajuato',
                'population' => 226864,
            ],
            [

                'name' => 'Santa Catarina',
                'country_code' => 'MEX',
                'district' => 'Nuevo León',
                'population' => 226573,
            ],
            [

                'name' => 'Tehuacán',
                'country_code' => 'MEX',
                'district' => 'Puebla',
                'population' => 225943,
            ],
            [

                'name' => 'Chalco',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 222201,
            ],
            [

                'name' => 'Cárdenas',
                'country_code' => 'MEX',
                'district' => 'Tabasco',
                'population' => 216903,
            ],
            [

                'name' => 'Campeche',
                'country_code' => 'MEX',
                'district' => 'Campeche',
                'population' => 216735,
            ],
            [

                'name' => 'La Paz',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 213045,
            ],
            [

                'name' => 'Othón P. Blanco (Chetumal)',
                'country_code' => 'MEX',
                'district' => 'Quintana Roo',
                'population' => 208014,
            ],
            [

                'name' => 'Texcoco',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 203681,
            ],
            [

                'name' => 'La Paz',
                'country_code' => 'MEX',
                'district' => 'Baja California Sur',
                'population' => 196708,
            ],
            [

                'name' => 'Metepec',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 194265,
            ],
            [

                'name' => 'Monclova',
                'country_code' => 'MEX',
                'district' => 'Coahuila de Zaragoza',
                'population' => 193657,
            ],
            [

                'name' => 'Huixquilucan',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 193156,
            ],
            [

                'name' => 'Chilpancingo de los Bravo',
                'country_code' => 'MEX',
                'district' => 'Guerrero',
                'population' => 192509,
            ],
            [

                'name' => 'Puerto Vallarta',
                'country_code' => 'MEX',
                'district' => 'Jalisco',
                'population' => 183741,
            ],
            [

                'name' => 'Fresnillo',
                'country_code' => 'MEX',
                'district' => 'Zacatecas',
                'population' => 182744,
            ],
            [

                'name' => 'Ciudad Madero',
                'country_code' => 'MEX',
                'district' => 'Tamaulipas',
                'population' => 182012,
            ],
            [

                'name' => 'Soledad de Graciano Sánchez',
                'country_code' => 'MEX',
                'district' => 'San Luis Potosí',
                'population' => 179956,
            ],
            [

                'name' => 'San Juan del Río',
                'country_code' => 'MEX',
                'district' => 'Querétaro',
                'population' => 179300,
            ],
            [

                'name' => 'San Felipe del Progreso',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 177330,
            ],
            [

                'name' => 'Córdoba',
                'country_code' => 'MEX',
                'district' => 'Veracruz',
                'population' => 176952,
            ],
            [

                'name' => 'Tecámac',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 172410,
            ],
            [

                'name' => 'Ocosingo',
                'country_code' => 'MEX',
                'district' => 'Chiapas',
                'population' => 171495,
            ],
            [

                'name' => 'Carmen',
                'country_code' => 'MEX',
                'district' => 'Campeche',
                'population' => 171367,
            ],
            [

                'name' => 'Lázaro Cárdenas',
                'country_code' => 'MEX',
                'district' => 'Michoacán de Ocampo',
                'population' => 170878,
            ],
            [

                'name' => 'Jiutepec',
                'country_code' => 'MEX',
                'district' => 'Morelos',
                'population' => 170428,
            ],
            [

                'name' => 'Papantla',
                'country_code' => 'MEX',
                'district' => 'Veracruz',
                'population' => 170123,
            ],
            [

                'name' => 'Comalcalco',
                'country_code' => 'MEX',
                'district' => 'Tabasco',
                'population' => 164640,
            ],
            [

                'name' => 'Zamora',
                'country_code' => 'MEX',
                'district' => 'Michoacán de Ocampo',
                'population' => 161191,
            ],
            [

                'name' => 'Nogales',
                'country_code' => 'MEX',
                'district' => 'Sonora',
                'population' => 159103,
            ],
            [

                'name' => 'Huimanguillo',
                'country_code' => 'MEX',
                'district' => 'Tabasco',
                'population' => 158335,
            ],
            [

                'name' => 'Cuautla',
                'country_code' => 'MEX',
                'district' => 'Morelos',
                'population' => 153132,
            ],
            [

                'name' => 'Minatitlán',
                'country_code' => 'MEX',
                'district' => 'Veracruz',
                'population' => 152983,
            ],
            [

                'name' => 'Poza Rica de Hidalgo',
                'country_code' => 'MEX',
                'district' => 'Veracruz',
                'population' => 152678,
            ],
            [

                'name' => 'Ciudad Valles',
                'country_code' => 'MEX',
                'district' => 'San Luis Potosí',
                'population' => 146411,
            ],
            [

                'name' => 'Navolato',
                'country_code' => 'MEX',
                'district' => 'Sinaloa',
                'population' => 145396,
            ],
            [

                'name' => 'San Luis Río Colorado',
                'country_code' => 'MEX',
                'district' => 'Sonora',
                'population' => 145276,
            ],
            [

                'name' => 'Pénjamo',
                'country_code' => 'MEX',
                'district' => 'Guanajuato',
                'population' => 143927,
            ],
            [

                'name' => 'San Andrés Tuxtla',
                'country_code' => 'MEX',
                'district' => 'Veracruz',
                'population' => 142251,
            ],
            [

                'name' => 'Guanajuato',
                'country_code' => 'MEX',
                'district' => 'Guanajuato',
                'population' => 141215,
            ],
            [

                'name' => 'Navojoa',
                'country_code' => 'MEX',
                'district' => 'Sonora',
                'population' => 140495,
            ],
            [

                'name' => 'Zitácuaro',
                'country_code' => 'MEX',
                'district' => 'Michoacán de Ocampo',
                'population' => 137970,
            ],
            [

                'name' => 'Boca del Río',
                'country_code' => 'MEX',
                'district' => 'Veracruz-Llave',
                'population' => 135721,
            ],
            [

                'name' => 'Allende',
                'country_code' => 'MEX',
                'district' => 'Guanajuato',
                'population' => 134645,
            ],
            [

                'name' => 'Silao',
                'country_code' => 'MEX',
                'district' => 'Guanajuato',
                'population' => 134037,
            ],
            [

                'name' => 'Macuspana',
                'country_code' => 'MEX',
                'district' => 'Tabasco',
                'population' => 133795,
            ],
            [

                'name' => 'San Juan Bautista Tuxtepec',
                'country_code' => 'MEX',
                'district' => 'Oaxaca',
                'population' => 133675,
            ],
            [

                'name' => 'San Cristóbal de las Casas',
                'country_code' => 'MEX',
                'district' => 'Chiapas',
                'population' => 132317,
            ],
            [

                'name' => 'Valle de Santiago',
                'country_code' => 'MEX',
                'district' => 'Guanajuato',
                'population' => 130557,
            ],
            [

                'name' => 'Guaymas',
                'country_code' => 'MEX',
                'district' => 'Sonora',
                'population' => 130108,
            ],
            [

                'name' => 'Colima',
                'country_code' => 'MEX',
                'district' => 'Colima',
                'population' => 129454,
            ],
            [

                'name' => 'Dolores Hidalgo',
                'country_code' => 'MEX',
                'district' => 'Guanajuato',
                'population' => 128675,
            ],
            [

                'name' => 'Lagos de Moreno',
                'country_code' => 'MEX',
                'district' => 'Jalisco',
                'population' => 127949,
            ],
            [

                'name' => 'Piedras Negras',
                'country_code' => 'MEX',
                'district' => 'Coahuila de Zaragoza',
                'population' => 127898,
            ],
            [

                'name' => 'Altamira',
                'country_code' => 'MEX',
                'district' => 'Tamaulipas',
                'population' => 127490,
            ],
            [

                'name' => 'Túxpam',
                'country_code' => 'MEX',
                'district' => 'Veracruz',
                'population' => 126475,
            ],
            [

                'name' => 'San Pedro Garza García',
                'country_code' => 'MEX',
                'district' => 'Nuevo León',
                'population' => 126147,
            ],
            [

                'name' => 'Cuauhtémoc',
                'country_code' => 'MEX',
                'district' => 'Chihuahua',
                'population' => 124279,
            ],
            [

                'name' => 'Manzanillo',
                'country_code' => 'MEX',
                'district' => 'Colima',
                'population' => 124014,
            ],
            [

                'name' => 'Iguala de la Independencia',
                'country_code' => 'MEX',
                'district' => 'Guerrero',
                'population' => 123883,
            ],
            [

                'name' => 'Zacatecas',
                'country_code' => 'MEX',
                'district' => 'Zacatecas',
                'population' => 123700,
            ],
            [

                'name' => 'Tlajomulco de Zúñiga',
                'country_code' => 'MEX',
                'district' => 'Jalisco',
                'population' => 123220,
            ],
            [

                'name' => 'Tulancingo de Bravo',
                'country_code' => 'MEX',
                'district' => 'Hidalgo',
                'population' => 121946,
            ],
            [

                'name' => 'Zinacantepec',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 121715,
            ],
            [

                'name' => 'San Martín Texmelucan',
                'country_code' => 'MEX',
                'district' => 'Puebla',
                'population' => 121093,
            ],
            [

                'name' => 'Tepatitlán de Morelos',
                'country_code' => 'MEX',
                'district' => 'Jalisco',
                'population' => 118948,
            ],
            [

                'name' => 'Martínez de la Torre',
                'country_code' => 'MEX',
                'district' => 'Veracruz',
                'population' => 118815,
            ],
            [

                'name' => 'Orizaba',
                'country_code' => 'MEX',
                'district' => 'Veracruz',
                'population' => 118488,
            ],
            [

                'name' => 'Apatzingán',
                'country_code' => 'MEX',
                'district' => 'Michoacán de Ocampo',
                'population' => 117849,
            ],
            [

                'name' => 'Atlixco',
                'country_code' => 'MEX',
                'district' => 'Puebla',
                'population' => 117019,
            ],
            [

                'name' => 'Delicias',
                'country_code' => 'MEX',
                'district' => 'Chihuahua',
                'population' => 116132,
            ],
            [

                'name' => 'Ixtlahuaca',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 115548,
            ],
            [

                'name' => 'El Mante',
                'country_code' => 'MEX',
                'district' => 'Tamaulipas',
                'population' => 112453,
            ],
            [

                'name' => 'Lerdo',
                'country_code' => 'MEX',
                'district' => 'Durango',
                'population' => 112272,
            ],
            [

                'name' => 'Almoloya de Juárez',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 110550,
            ],
            [

                'name' => 'Acámbaro',
                'country_code' => 'MEX',
                'district' => 'Guanajuato',
                'population' => 110487,
            ],
            [

                'name' => 'Acuña',
                'country_code' => 'MEX',
                'district' => 'Coahuila de Zaragoza',
                'population' => 110388,
            ],
            [

                'name' => 'Guadalupe',
                'country_code' => 'MEX',
                'district' => 'Zacatecas',
                'population' => 108881,
            ],
            [

                'name' => 'Huejutla de Reyes',
                'country_code' => 'MEX',
                'district' => 'Hidalgo',
                'population' => 108017,
            ],
            [

                'name' => 'Hidalgo',
                'country_code' => 'MEX',
                'district' => 'Michoacán de Ocampo',
                'population' => 106198,
            ],
            [

                'name' => 'Los Cabos',
                'country_code' => 'MEX',
                'district' => 'Baja California Sur',
                'population' => 105199,
            ],
            [

                'name' => 'Comitán de Domínguez',
                'country_code' => 'MEX',
                'district' => 'Chiapas',
                'population' => 104986,
            ],
            [

                'name' => 'Cunduacán',
                'country_code' => 'MEX',
                'district' => 'Tabasco',
                'population' => 104164,
            ],
            [

                'name' => 'Río Bravo',
                'country_code' => 'MEX',
                'district' => 'Tamaulipas',
                'population' => 103901,
            ],
            [

                'name' => 'Temapache',
                'country_code' => 'MEX',
                'district' => 'Veracruz',
                'population' => 102824,
            ],
            [

                'name' => 'Chilapa de Alvarez',
                'country_code' => 'MEX',
                'district' => 'Guerrero',
                'population' => 102716,
            ],
            [

                'name' => 'Hidalgo del Parral',
                'country_code' => 'MEX',
                'district' => 'Chihuahua',
                'population' => 100881,
            ],
            [

                'name' => 'San Francisco del Rincón',
                'country_code' => 'MEX',
                'district' => 'Guanajuato',
                'population' => 100149,
            ],
            [

                'name' => 'Taxco de Alarcón',
                'country_code' => 'MEX',
                'district' => 'Guerrero',
                'population' => 99907,
            ],
            [

                'name' => 'Zumpango',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 99781,
            ],
            [

                'name' => 'San Pedro Cholula',
                'country_code' => 'MEX',
                'district' => 'Puebla',
                'population' => 99734,
            ],
            [

                'name' => 'Lerma',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 99714,
            ],
            [

                'name' => 'Tecomán',
                'country_code' => 'MEX',
                'district' => 'Colima',
                'population' => 99296,
            ],
            [

                'name' => 'Las Margaritas',
                'country_code' => 'MEX',
                'district' => 'Chiapas',
                'population' => 97389,
            ],
            [

                'name' => 'Cosoleacaque',
                'country_code' => 'MEX',
                'district' => 'Veracruz',
                'population' => 97199,
            ],
            [

                'name' => 'San Luis de la Paz',
                'country_code' => 'MEX',
                'district' => 'Guanajuato',
                'population' => 96763,
            ],
            [

                'name' => 'José Azueta',
                'country_code' => 'MEX',
                'district' => 'Guerrero',
                'population' => 95448,
            ],
            [

                'name' => 'Santiago Ixcuintla',
                'country_code' => 'MEX',
                'district' => 'Nayarit',
                'population' => 95311,
            ],
            [

                'name' => 'San Felipe',
                'country_code' => 'MEX',
                'district' => 'Guanajuato',
                'population' => 95305,
            ],
            [

                'name' => 'Tejupilco',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 94934,
            ],
            [

                'name' => 'Tantoyuca',
                'country_code' => 'MEX',
                'district' => 'Veracruz',
                'population' => 94709,
            ],
            [

                'name' => 'Salvatierra',
                'country_code' => 'MEX',
                'district' => 'Guanajuato',
                'population' => 94322,
            ],
            [

                'name' => 'Tultepec',
                'country_code' => 'MEX',
                'district' => 'México',
                'population' => 93364,
            ],
            [

                'name' => 'Temixco',
                'country_code' => 'MEX',
                'district' => 'Morelos',
                'population' => 92686,
            ],
            [

                'name' => 'Matamoros',
                'country_code' => 'MEX',
                'district' => 'Coahuila de Zaragoza',
                'population' => 91858,
            ],
            [

                'name' => 'Pánuco',
                'country_code' => 'MEX',
                'district' => 'Veracruz',
                'population' => 90551,
            ],
            [

                'name' => 'El Fuerte',
                'country_code' => 'MEX',
                'district' => 'Sinaloa',
                'population' => 89556,
            ],
            [

                'name' => 'Tierra Blanca',
                'country_code' => 'MEX',
                'district' => 'Veracruz',
                'population' => 89143,
            ],
            [

                'name' => 'Weno',
                'country_code' => 'FSM',
                'district' => 'Chuuk',
                'population' => 22000,
            ],
            [

                'name' => 'Palikir',
                'country_code' => 'FSM',
                'district' => 'Pohnpei',
                'population' => 8600,
            ],
            [

                'name' => 'Chisinau',
                'country_code' => 'MDA',
                'district' => 'Chisinau',
                'population' => 719900,
            ],
            [

                'name' => 'Tiraspol',
                'country_code' => 'MDA',
                'district' => 'Dnjestria',
                'population' => 194300,
            ],
            [

                'name' => 'Balti',
                'country_code' => 'MDA',
                'district' => 'Balti',
                'population' => 153400,
            ],
            [

                'name' => 'Bender (Tîghina)',
                'country_code' => 'MDA',
                'district' => 'Bender (Tîghina)',
                'population' => 125700,
            ],
            [

                'name' => 'Monte-Carlo',
                'country_code' => 'MCO',
                'district' => '–',
                'population' => 13154,
            ],
            [

                'name' => 'Monaco-Ville',
                'country_code' => 'MCO',
                'district' => '–',
                'population' => 1234,
            ],
            [

                'name' => 'Ulan Bator',
                'country_code' => 'MNG',
                'district' => 'Ulaanbaatar',
                'population' => 773700,
            ],
            [

                'name' => 'Plymouth',
                'country_code' => 'MSR',
                'district' => 'Plymouth',
                'population' => 2000,
            ],
            [

                'name' => 'Maputo',
                'country_code' => 'MOZ',
                'district' => 'Maputo',
                'population' => 1018938,
            ],
            [

                'name' => 'Matola',
                'country_code' => 'MOZ',
                'district' => 'Maputo',
                'population' => 424662,
            ],
            [

                'name' => 'Beira',
                'country_code' => 'MOZ',
                'district' => 'Sofala',
                'population' => 397368,
            ],
            [

                'name' => 'Nampula',
                'country_code' => 'MOZ',
                'district' => 'Nampula',
                'population' => 303346,
            ],
            [

                'name' => 'Chimoio',
                'country_code' => 'MOZ',
                'district' => 'Manica',
                'population' => 171056,
            ],
            [

                'name' => 'Naçala-Porto',
                'country_code' => 'MOZ',
                'district' => 'Nampula',
                'population' => 158248,
            ],
            [

                'name' => 'Quelimane',
                'country_code' => 'MOZ',
                'district' => 'Zambézia',
                'population' => 150116,
            ],
            [

                'name' => 'Mocuba',
                'country_code' => 'MOZ',
                'district' => 'Zambézia',
                'population' => 124700,
            ],
            [

                'name' => 'Tete',
                'country_code' => 'MOZ',
                'district' => 'Tete',
                'population' => 101984,
            ],
            [

                'name' => 'Xai-Xai',
                'country_code' => 'MOZ',
                'district' => 'Gaza',
                'population' => 99442,
            ],
            [

                'name' => 'Gurue',
                'country_code' => 'MOZ',
                'district' => 'Zambézia',
                'population' => 99300,
            ],
            [

                'name' => 'Maxixe',
                'country_code' => 'MOZ',
                'district' => 'Inhambane',
                'population' => 93985,
            ],
            [

                'name' => 'Rangoon (Yangon)',
                'country_code' => 'MMR',
                'district' => 'Rangoon [Yangon]',
                'population' => 3361700,
            ],
            [

                'name' => 'Mandalay',
                'country_code' => 'MMR',
                'district' => 'Mandalay',
                'population' => 885300,
            ],
            [

                'name' => 'Moulmein (Mawlamyine)',
                'country_code' => 'MMR',
                'district' => 'Mon',
                'population' => 307900,
            ],
            [

                'name' => 'Pegu (Bago)',
                'country_code' => 'MMR',
                'district' => 'Pegu [Bago]',
                'population' => 190900,
            ],
            [

                'name' => 'Bassein (Pathein)',
                'country_code' => 'MMR',
                'district' => 'Irrawaddy [Ayeyarwad',
                'population' => 183900,
            ],
            [

                'name' => 'Monywa',
                'country_code' => 'MMR',
                'district' => 'Sagaing',
                'population' => 138600,
            ],
            [

                'name' => 'Sittwe (Akyab)',
                'country_code' => 'MMR',
                'district' => 'Rakhine',
                'population' => 137600,
            ],
            [

                'name' => 'Taunggyi (Taunggye)',
                'country_code' => 'MMR',
                'district' => 'Shan',
                'population' => 131500,
            ],
            [

                'name' => 'Meikhtila',
                'country_code' => 'MMR',
                'district' => 'Mandalay',
                'population' => 129700,
            ],
            [

                'name' => 'Mergui (Myeik)',
                'country_code' => 'MMR',
                'district' => 'Tenasserim [Tanintha',
                'population' => 122700,
            ],
            [

                'name' => 'Lashio (Lasho)',
                'country_code' => 'MMR',
                'district' => 'Shan',
                'population' => 107600,
            ],
            [

                'name' => 'Prome (Pyay)',
                'country_code' => 'MMR',
                'district' => 'Pegu [Bago]',
                'population' => 105700,
            ],
            [

                'name' => 'Henzada (Hinthada)',
                'country_code' => 'MMR',
                'district' => 'Irrawaddy [Ayeyarwad',
                'population' => 104700,
            ],
            [

                'name' => 'Myingyan',
                'country_code' => 'MMR',
                'district' => 'Mandalay',
                'population' => 103600,
            ],
            [

                'name' => 'Tavoy (Dawei)',
                'country_code' => 'MMR',
                'district' => 'Tenasserim [Tanintha',
                'population' => 96800,
            ],
            [

                'name' => 'Pagakku (Pakokku)',
                'country_code' => 'MMR',
                'district' => 'Magwe [Magway]',
                'population' => 94800,
            ],
            [

                'name' => 'Windhoek',
                'country_code' => 'NAM',
                'district' => 'Khomas',
                'population' => 169000,
            ],
            [

                'name' => 'Yangor',
                'country_code' => 'NRU',
                'district' => '–',
                'population' => 4050,
            ],
            [

                'name' => 'Yaren',
                'country_code' => 'NRU',
                'district' => '–',
                'population' => 559,
            ],
            [

                'name' => 'Kathmandu',
                'country_code' => 'NPL',
                'district' => 'Central',
                'population' => 591835,
            ],
            [

                'name' => 'Biratnagar',
                'country_code' => 'NPL',
                'district' => 'Eastern',
                'population' => 157764,
            ],
            [

                'name' => 'Pokhara',
                'country_code' => 'NPL',
                'district' => 'Western',
                'population' => 146318,
            ],
            [

                'name' => 'Lalitapur',
                'country_code' => 'NPL',
                'district' => 'Central',
                'population' => 145847,
            ],
            [

                'name' => 'Birgunj',
                'country_code' => 'NPL',
                'district' => 'Central',
                'population' => 90639,
            ],
            [

                'name' => 'Managua',
                'country_code' => 'NIC',
                'district' => 'Managua',
                'population' => 959000,
            ],
            [

                'name' => 'León',
                'country_code' => 'NIC',
                'district' => 'León',
                'population' => 123865,
            ],
            [

                'name' => 'Chinandega',
                'country_code' => 'NIC',
                'district' => 'Chinandega',
                'population' => 97387,
            ],
            [

                'name' => 'Masaya',
                'country_code' => 'NIC',
                'district' => 'Masaya',
                'population' => 88971,
            ],
            [

                'name' => 'Niamey',
                'country_code' => 'NER',
                'district' => 'Niamey',
                'population' => 420000,
            ],
            [

                'name' => 'Zinder',
                'country_code' => 'NER',
                'district' => 'Zinder',
                'population' => 120892,
            ],
            [

                'name' => 'Maradi',
                'country_code' => 'NER',
                'district' => 'Maradi',
                'population' => 112965,
            ],
            [

                'name' => 'Lagos',
                'country_code' => 'NGA',
                'district' => 'Lagos',
                'population' => 1518000,
            ],
            [

                'name' => 'Ibadan',
                'country_code' => 'NGA',
                'district' => 'Oyo & Osun',
                'population' => 1432000,
            ],
            [

                'name' => 'Ogbomosho',
                'country_code' => 'NGA',
                'district' => 'Oyo & Osun',
                'population' => 730000,
            ],
            [

                'name' => 'Kano',
                'country_code' => 'NGA',
                'district' => 'Kano & Jigawa',
                'population' => 674100,
            ],
            [

                'name' => 'Oshogbo',
                'country_code' => 'NGA',
                'district' => 'Oyo & Osun',
                'population' => 476800,
            ],
            [

                'name' => 'Ilorin',
                'country_code' => 'NGA',
                'district' => 'Kwara & Kogi',
                'population' => 475800,
            ],
            [

                'name' => 'Abeokuta',
                'country_code' => 'NGA',
                'district' => 'Ogun',
                'population' => 427400,
            ],
            [

                'name' => 'Port Harcourt',
                'country_code' => 'NGA',
                'district' => 'Rivers & Bayelsa',
                'population' => 410000,
            ],
            [

                'name' => 'Zaria',
                'country_code' => 'NGA',
                'district' => 'Kaduna',
                'population' => 379200,
            ],
            [

                'name' => 'Ilesha',
                'country_code' => 'NGA',
                'district' => 'Oyo & Osun',
                'population' => 378400,
            ],
            [

                'name' => 'Onitsha',
                'country_code' => 'NGA',
                'district' => 'Anambra & Enugu & Eb',
                'population' => 371900,
            ],
            [

                'name' => 'Iwo',
                'country_code' => 'NGA',
                'district' => 'Oyo & Osun',
                'population' => 362000,
            ],
            [

                'name' => 'Ado-Ekiti',
                'country_code' => 'NGA',
                'district' => 'Ondo & Ekiti',
                'population' => 359400,
            ],
            [

                'name' => 'Abuja',
                'country_code' => 'NGA',
                'district' => 'Federal Capital Dist',
                'population' => 350100,
            ],
            [

                'name' => 'Kaduna',
                'country_code' => 'NGA',
                'district' => 'Kaduna',
                'population' => 342200,
            ],
            [

                'name' => 'Mushin',
                'country_code' => 'NGA',
                'district' => 'Lagos',
                'population' => 333200,
            ],
            [

                'name' => 'Maiduguri',
                'country_code' => 'NGA',
                'district' => 'Borno & Yobe',
                'population' => 320000,
            ],
            [

                'name' => 'Enugu',
                'country_code' => 'NGA',
                'district' => 'Anambra & Enugu & Eb',
                'population' => 316100,
            ],
            [

                'name' => 'Ede',
                'country_code' => 'NGA',
                'district' => 'Oyo & Osun',
                'population' => 307100,
            ],
            [

                'name' => 'Aba',
                'country_code' => 'NGA',
                'district' => 'Imo & Abia',
                'population' => 298900,
            ],
            [

                'name' => 'Ife',
                'country_code' => 'NGA',
                'district' => 'Oyo & Osun',
                'population' => 296800,
            ],
            [

                'name' => 'Ila',
                'country_code' => 'NGA',
                'district' => 'Oyo & Osun',
                'population' => 264000,
            ],
            [

                'name' => 'Oyo',
                'country_code' => 'NGA',
                'district' => 'Oyo & Osun',
                'population' => 256400,
            ],
            [

                'name' => 'Ikerre',
                'country_code' => 'NGA',
                'district' => 'Ondo & Ekiti',
                'population' => 244600,
            ],
            [

                'name' => 'Benin City',
                'country_code' => 'NGA',
                'district' => 'Edo & Delta',
                'population' => 229400,
            ],
            [

                'name' => 'Iseyin',
                'country_code' => 'NGA',
                'district' => 'Oyo & Osun',
                'population' => 217300,
            ],
            [

                'name' => 'Katsina',
                'country_code' => 'NGA',
                'district' => 'Katsina',
                'population' => 206500,
            ],
            [

                'name' => 'Jos',
                'country_code' => 'NGA',
                'district' => 'Plateau & Nassarawa',
                'population' => 206300,
            ],
            [

                'name' => 'Sokoto',
                'country_code' => 'NGA',
                'district' => 'Sokoto & Kebbi & Zam',
                'population' => 204900,
            ],
            [

                'name' => 'Ilobu',
                'country_code' => 'NGA',
                'district' => 'Oyo & Osun',
                'population' => 199000,
            ],
            [

                'name' => 'Offa',
                'country_code' => 'NGA',
                'district' => 'Kwara & Kogi',
                'population' => 197200,
            ],
            [

                'name' => 'Ikorodu',
                'country_code' => 'NGA',
                'district' => 'Lagos',
                'population' => 184900,
            ],
            [

                'name' => 'Ilawe-Ekiti',
                'country_code' => 'NGA',
                'district' => 'Ondo & Ekiti',
                'population' => 184500,
            ],
            [

                'name' => 'Owo',
                'country_code' => 'NGA',
                'district' => 'Ondo & Ekiti',
                'population' => 183500,
            ],
            [

                'name' => 'Ikirun',
                'country_code' => 'NGA',
                'district' => 'Oyo & Osun',
                'population' => 181400,
            ],
            [

                'name' => 'Shaki',
                'country_code' => 'NGA',
                'district' => 'Oyo & Osun',
                'population' => 174500,
            ],
            [

                'name' => 'Calabar',
                'country_code' => 'NGA',
                'district' => 'Cross River',
                'population' => 174400,
            ],
            [

                'name' => 'Ondo',
                'country_code' => 'NGA',
                'district' => 'Ondo & Ekiti',
                'population' => 173600,
            ],
            [

                'name' => 'Akure',
                'country_code' => 'NGA',
                'district' => 'Ondo & Ekiti',
                'population' => 162300,
            ],
            [

                'name' => 'Gusau',
                'country_code' => 'NGA',
                'district' => 'Sokoto & Kebbi & Zam',
                'population' => 158000,
            ],
            [

                'name' => 'Ijebu-Ode',
                'country_code' => 'NGA',
                'district' => 'Ogun',
                'population' => 156400,
            ],
            [

                'name' => 'Effon-Alaiye',
                'country_code' => 'NGA',
                'district' => 'Oyo & Osun',
                'population' => 153100,
            ],
            [

                'name' => 'Kumo',
                'country_code' => 'NGA',
                'district' => 'Bauchi & Gombe',
                'population' => 148000,
            ],
            [

                'name' => 'Shomolu',
                'country_code' => 'NGA',
                'district' => 'Lagos',
                'population' => 147700,
            ],
            [

                'name' => 'Oka-Akoko',
                'country_code' => 'NGA',
                'district' => 'Ondo & Ekiti',
                'population' => 142900,
            ],
            [

                'name' => 'Ikare',
                'country_code' => 'NGA',
                'district' => 'Ondo & Ekiti',
                'population' => 140800,
            ],
            [

                'name' => 'Sapele',
                'country_code' => 'NGA',
                'district' => 'Edo & Delta',
                'population' => 139200,
            ],
            [

                'name' => 'Deba Habe',
                'country_code' => 'NGA',
                'district' => 'Bauchi & Gombe',
                'population' => 138600,
            ],
            [

                'name' => 'Minna',
                'country_code' => 'NGA',
                'district' => 'Niger',
                'population' => 136900,
            ],
            [

                'name' => 'Warri',
                'country_code' => 'NGA',
                'district' => 'Edo & Delta',
                'population' => 126100,
            ],
            [

                'name' => 'Bida',
                'country_code' => 'NGA',
                'district' => 'Niger',
                'population' => 125500,
            ],
            [

                'name' => 'Ikire',
                'country_code' => 'NGA',
                'district' => 'Oyo & Osun',
                'population' => 123300,
            ],
            [

                'name' => 'Makurdi',
                'country_code' => 'NGA',
                'district' => 'Benue',
                'population' => 123100,
            ],
            [

                'name' => 'Lafia',
                'country_code' => 'NGA',
                'district' => 'Plateau & Nassarawa',
                'population' => 122500,
            ],
            [

                'name' => 'Inisa',
                'country_code' => 'NGA',
                'district' => 'Oyo & Osun',
                'population' => 119800,
            ],
            [

                'name' => 'Shagamu',
                'country_code' => 'NGA',
                'district' => 'Ogun',
                'population' => 117200,
            ],
            [

                'name' => 'Awka',
                'country_code' => 'NGA',
                'district' => 'Anambra & Enugu & Eb',
                'population' => 111200,
            ],
            [

                'name' => 'Gombe',
                'country_code' => 'NGA',
                'district' => 'Bauchi & Gombe',
                'population' => 107800,
            ],
            [

                'name' => 'Igboho',
                'country_code' => 'NGA',
                'district' => 'Oyo & Osun',
                'population' => 106800,
            ],
            [

                'name' => 'Ejigbo',
                'country_code' => 'NGA',
                'district' => 'Oyo & Osun',
                'population' => 105900,
            ],
            [

                'name' => 'Agege',
                'country_code' => 'NGA',
                'district' => 'Lagos',
                'population' => 105000,
            ],
            [

                'name' => 'Ise-Ekiti',
                'country_code' => 'NGA',
                'district' => 'Ondo & Ekiti',
                'population' => 103400,
            ],
            [

                'name' => 'Ugep',
                'country_code' => 'NGA',
                'district' => 'Cross River',
                'population' => 102600,
            ],
            [

                'name' => 'Epe',
                'country_code' => 'NGA',
                'district' => 'Lagos',
                'population' => 101000,
            ],
            [

                'name' => 'Alofi',
                'country_code' => 'NIU',
                'district' => '–',
                'population' => 682,
            ],
            [

                'name' => 'Kingston',
                'country_code' => 'NFK',
                'district' => '–',
                'population' => 800,
            ],
            [

                'name' => 'Oslo',
                'country_code' => 'NOR',
                'district' => 'Oslo',
                'population' => 508726,
            ],
            [

                'name' => 'Bergen',
                'country_code' => 'NOR',
                'district' => 'Hordaland',
                'population' => 230948,
            ],
            [

                'name' => 'Trondheim',
                'country_code' => 'NOR',
                'district' => 'Sør-Trøndelag',
                'population' => 150166,
            ],
            [

                'name' => 'Stavanger',
                'country_code' => 'NOR',
                'district' => 'Rogaland',
                'population' => 108848,
            ],
            [

                'name' => 'Bærum',
                'country_code' => 'NOR',
                'district' => 'Akershus',
                'population' => 101340,
            ],
            [

                'name' => 'Abidjan',
                'country_code' => 'CIV',
                'district' => 'Abidjan',
                'population' => 2500000,
            ],
            [

                'name' => 'Bouaké',
                'country_code' => 'CIV',
                'district' => 'Bouaké',
                'population' => 329850,
            ],
            [

                'name' => 'Yamoussoukro',
                'country_code' => 'CIV',
                'district' => 'Yamoussoukro',
                'population' => 130000,
            ],
            [

                'name' => 'Daloa',
                'country_code' => 'CIV',
                'district' => 'Daloa',
                'population' => 121842,
            ],
            [

                'name' => 'Korhogo',
                'country_code' => 'CIV',
                'district' => 'Korhogo',
                'population' => 109445,
            ],
            [

                'name' => 'al-Sib',
                'country_code' => 'OMN',
                'district' => 'Masqat',
                'population' => 155000,
            ],
            [

                'name' => 'Salala',
                'country_code' => 'OMN',
                'district' => 'Zufar',
                'population' => 131813,
            ],
            [

                'name' => 'Bawshar',
                'country_code' => 'OMN',
                'district' => 'Masqat',
                'population' => 107500,
            ],
            [

                'name' => 'Suhar',
                'country_code' => 'OMN',
                'district' => 'al-Batina',
                'population' => 90814,
            ],
            [

                'name' => 'Masqat',
                'country_code' => 'OMN',
                'district' => 'Masqat',
                'population' => 51969,
            ],
            [

                'name' => 'Karachi',
                'country_code' => 'PAK',
                'district' => 'Sindh',
                'population' => 9269265,
            ],
            [

                'name' => 'Lahore',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 5063499,
            ],
            [

                'name' => 'Faisalabad',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 1977246,
            ],
            [

                'name' => 'Rawalpindi',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 1406214,
            ],
            [

                'name' => 'Multan',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 1182441,
            ],
            [

                'name' => 'Hyderabad',
                'country_code' => 'PAK',
                'district' => 'Sindh',
                'population' => 1151274,
            ],
            [

                'name' => 'Gujranwala',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 1124749,
            ],
            [

                'name' => 'Peshawar',
                'country_code' => 'PAK',
                'district' => 'Nothwest Border Prov',
                'population' => 988005,
            ],
            [

                'name' => 'Quetta',
                'country_code' => 'PAK',
                'district' => 'Baluchistan',
                'population' => 560307,
            ],
            [

                'name' => 'Islamabad',
                'country_code' => 'PAK',
                'district' => 'Islamabad',
                'population' => 524500,
            ],
            [

                'name' => 'Sargodha',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 455360,
            ],
            [

                'name' => 'Sialkot',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 417597,
            ],
            [

                'name' => 'Bahawalpur',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 403408,
            ],
            [

                'name' => 'Sukkur',
                'country_code' => 'PAK',
                'district' => 'Sindh',
                'population' => 329176,
            ],
            [

                'name' => 'Jhang',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 292214,
            ],
            [

                'name' => 'Sheikhupura',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 271875,
            ],
            [

                'name' => 'Larkana',
                'country_code' => 'PAK',
                'district' => 'Sindh',
                'population' => 270366,
            ],
            [

                'name' => 'Gujrat',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 250121,
            ],
            [

                'name' => 'Mardan',
                'country_code' => 'PAK',
                'district' => 'Nothwest Border Prov',
                'population' => 244511,
            ],
            [

                'name' => 'Kasur',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 241649,
            ],
            [

                'name' => 'Rahim Yar Khan',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 228479,
            ],
            [

                'name' => 'Sahiwal',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 207388,
            ],
            [

                'name' => 'Okara',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 200901,
            ],
            [

                'name' => 'Wah',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 198400,
            ],
            [

                'name' => 'Dera Ghazi Khan',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 188100,
            ],
            [

                'name' => 'Mirpur Khas',
                'country_code' => 'PAK',
                'district' => 'Sind',
                'population' => 184500,
            ],
            [

                'name' => 'Nawabshah',
                'country_code' => 'PAK',
                'district' => 'Sind',
                'population' => 183100,
            ],
            [

                'name' => 'Mingora',
                'country_code' => 'PAK',
                'district' => 'Nothwest Border Prov',
                'population' => 174500,
            ],
            [

                'name' => 'Chiniot',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 169300,
            ],
            [

                'name' => 'Kamoke',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 151000,
            ],
            [

                'name' => 'Mandi Burewala',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 149900,
            ],
            [

                'name' => 'Jhelum',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 145800,
            ],
            [

                'name' => 'Sadiqabad',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 141500,
            ],
            [

                'name' => 'Jacobabad',
                'country_code' => 'PAK',
                'district' => 'Sind',
                'population' => 137700,
            ],
            [

                'name' => 'Shikarpur',
                'country_code' => 'PAK',
                'district' => 'Sind',
                'population' => 133300,
            ],
            [

                'name' => 'Khanewal',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 133000,
            ],
            [

                'name' => 'Hafizabad',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 130200,
            ],
            [

                'name' => 'Kohat',
                'country_code' => 'PAK',
                'district' => 'Nothwest Border Prov',
                'population' => 125300,
            ],
            [

                'name' => 'Muzaffargarh',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 121600,
            ],
            [

                'name' => 'Khanpur',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 117800,
            ],
            [

                'name' => 'Gojra',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 115000,
            ],
            [

                'name' => 'Bahawalnagar',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 109600,
            ],
            [

                'name' => 'Muridke',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 108600,
            ],
            [

                'name' => 'Pak Pattan',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 107800,
            ],
            [

                'name' => 'Abottabad',
                'country_code' => 'PAK',
                'district' => 'Nothwest Border Prov',
                'population' => 106000,
            ],
            [

                'name' => 'Tando Adam',
                'country_code' => 'PAK',
                'district' => 'Sind',
                'population' => 103400,
            ],
            [

                'name' => 'Jaranwala',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 103300,
            ],
            [

                'name' => 'Khairpur',
                'country_code' => 'PAK',
                'district' => 'Sind',
                'population' => 102200,
            ],
            [

                'name' => 'Chishtian Mandi',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 101700,
            ],
            [

                'name' => 'Daska',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 101500,
            ],
            [

                'name' => 'Dadu',
                'country_code' => 'PAK',
                'district' => 'Sind',
                'population' => 98600,
            ],
            [

                'name' => 'Mandi Bahauddin',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 97300,
            ],
            [

                'name' => 'Ahmadpur East',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 96000,
            ],
            [

                'name' => 'Kamalia',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 95300,
            ],
            [

                'name' => 'Khuzdar',
                'country_code' => 'PAK',
                'district' => 'Baluchistan',
                'population' => 93100,
            ],
            [

                'name' => 'Vihari',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 92300,
            ],
            [

                'name' => 'Dera Ismail Khan',
                'country_code' => 'PAK',
                'district' => 'Nothwest Border Prov',
                'population' => 90400,
            ],
            [

                'name' => 'Wazirabad',
                'country_code' => 'PAK',
                'district' => 'Punjab',
                'population' => 89700,
            ],
            [

                'name' => 'Nowshera',
                'country_code' => 'PAK',
                'district' => 'Nothwest Border Prov',
                'population' => 89400,
            ],
            [

                'name' => 'Koror',
                'country_code' => 'PLW',
                'district' => 'Koror',
                'population' => 12000,
            ],
            [

                'name' => 'Ciudad de Panamá',
                'country_code' => 'PAN',
                'district' => 'Panamá',
                'population' => 471373,
            ],
            [

                'name' => 'San Miguelito',
                'country_code' => 'PAN',
                'district' => 'San Miguelito',
                'population' => 315382,
            ],
            [

                'name' => 'Port Moresby',
                'country_code' => 'PNG',
                'district' => 'National Capital Dis',
                'population' => 247000,
            ],
            [

                'name' => 'Asunción',
                'country_code' => 'PRY',
                'district' => 'Asunción',
                'population' => 557776,
            ],
            [

                'name' => 'Ciudad del Este',
                'country_code' => 'PRY',
                'district' => 'Alto Paraná',
                'population' => 133881,
            ],
            [

                'name' => 'San Lorenzo',
                'country_code' => 'PRY',
                'district' => 'Central',
                'population' => 133395,
            ],
            [

                'name' => 'Lambaré',
                'country_code' => 'PRY',
                'district' => 'Central',
                'population' => 99681,
            ],
            [

                'name' => 'Fernando de la Mora',
                'country_code' => 'PRY',
                'district' => 'Central',
                'population' => 95287,
            ],
            [

                'name' => 'Lima',
                'country_code' => 'PER',
                'district' => 'Lima',
                'population' => 6464693,
            ],
            [

                'name' => 'Arequipa',
                'country_code' => 'PER',
                'district' => 'Arequipa',
                'population' => 762000,
            ],
            [

                'name' => 'Trujillo',
                'country_code' => 'PER',
                'district' => 'La Libertad',
                'population' => 652000,
            ],
            [

                'name' => 'Chiclayo',
                'country_code' => 'PER',
                'district' => 'Lambayeque',
                'population' => 517000,
            ],
            [

                'name' => 'Callao',
                'country_code' => 'PER',
                'district' => 'Callao',
                'population' => 424294,
            ],
            [

                'name' => 'Iquitos',
                'country_code' => 'PER',
                'district' => 'Loreto',
                'population' => 367000,
            ],
            [

                'name' => 'Chimbote',
                'country_code' => 'PER',
                'district' => 'Ancash',
                'population' => 336000,
            ],
            [

                'name' => 'Huancayo',
                'country_code' => 'PER',
                'district' => 'Junín',
                'population' => 327000,
            ],
            [

                'name' => 'Piura',
                'country_code' => 'PER',
                'district' => 'Piura',
                'population' => 325000,
            ],
            [

                'name' => 'Cusco',
                'country_code' => 'PER',
                'district' => 'Cusco',
                'population' => 291000,
            ],
            [

                'name' => 'Pucallpa',
                'country_code' => 'PER',
                'district' => 'Ucayali',
                'population' => 220866,
            ],
            [

                'name' => 'Tacna',
                'country_code' => 'PER',
                'district' => 'Tacna',
                'population' => 215683,
            ],
            [

                'name' => 'Ica',
                'country_code' => 'PER',
                'district' => 'Ica',
                'population' => 194820,
            ],
            [

                'name' => 'Sullana',
                'country_code' => 'PER',
                'district' => 'Piura',
                'population' => 147361,
            ],
            [

                'name' => 'Juliaca',
                'country_code' => 'PER',
                'district' => 'Puno',
                'population' => 142576,
            ],
            [

                'name' => 'Huánuco',
                'country_code' => 'PER',
                'district' => 'Huanuco',
                'population' => 129688,
            ],
            [

                'name' => 'Ayacucho',
                'country_code' => 'PER',
                'district' => 'Ayacucho',
                'population' => 118960,
            ],
            [

                'name' => 'Chincha Alta',
                'country_code' => 'PER',
                'district' => 'Ica',
                'population' => 110016,
            ],
            [

                'name' => 'Cajamarca',
                'country_code' => 'PER',
                'district' => 'Cajamarca',
                'population' => 108009,
            ],
            [

                'name' => 'Puno',
                'country_code' => 'PER',
                'district' => 'Puno',
                'population' => 101578,
            ],
            [

                'name' => 'Ventanilla',
                'country_code' => 'PER',
                'district' => 'Callao',
                'population' => 101056,
            ],
            [

                'name' => 'Castilla',
                'country_code' => 'PER',
                'district' => 'Piura',
                'population' => 90642,
            ],
            [

                'name' => 'Adamstown',
                'country_code' => 'PCN',
                'district' => '–',
                'population' => 42,
            ],
            [

                'name' => 'Garapan',
                'country_code' => 'MNP',
                'district' => 'Saipan',
                'population' => 9200,
            ],
            [

                'name' => 'Lisboa',
                'country_code' => 'PRT',
                'district' => 'Lisboa',
                'population' => 563210,
            ],
            [

                'name' => 'Porto',
                'country_code' => 'PRT',
                'district' => 'Porto',
                'population' => 273060,
            ],
            [

                'name' => 'Amadora',
                'country_code' => 'PRT',
                'district' => 'Lisboa',
                'population' => 122106,
            ],
            [

                'name' => 'Coímbra',
                'country_code' => 'PRT',
                'district' => 'Coímbra',
                'population' => 96100,
            ],
            [

                'name' => 'Braga',
                'country_code' => 'PRT',
                'district' => 'Braga',
                'population' => 90535,
            ],
            [

                'name' => 'San Juan',
                'country_code' => 'PRI',
                'district' => 'San Juan',
                'population' => 434374,
            ],
            [

                'name' => 'Bayamón',
                'country_code' => 'PRI',
                'district' => 'Bayamón',
                'population' => 224044,
            ],
            [

                'name' => 'Ponce',
                'country_code' => 'PRI',
                'district' => 'Ponce',
                'population' => 186475,
            ],
            [

                'name' => 'Carolina',
                'country_code' => 'PRI',
                'district' => 'Carolina',
                'population' => 186076,
            ],
            [

                'name' => 'Caguas',
                'country_code' => 'PRI',
                'district' => 'Caguas',
                'population' => 140502,
            ],
            [

                'name' => 'Arecibo',
                'country_code' => 'PRI',
                'district' => 'Arecibo',
                'population' => 100131,
            ],
            [

                'name' => 'Guaynabo',
                'country_code' => 'PRI',
                'district' => 'Guaynabo',
                'population' => 100053,
            ],
            [

                'name' => 'Mayagüez',
                'country_code' => 'PRI',
                'district' => 'Mayagüez',
                'population' => 98434,
            ],
            [

                'name' => 'Toa Baja',
                'country_code' => 'PRI',
                'district' => 'Toa Baja',
                'population' => 94085,
            ],
            [

                'name' => 'Warszawa',
                'country_code' => 'POL',
                'district' => 'Mazowieckie',
                'population' => 1615369,
            ],
            [

                'name' => 'Lódz',
                'country_code' => 'POL',
                'district' => 'Lodzkie',
                'population' => 800110,
            ],
            [

                'name' => 'Kraków',
                'country_code' => 'POL',
                'district' => 'Malopolskie',
                'population' => 738150,
            ],
            [

                'name' => 'Wroclaw',
                'country_code' => 'POL',
                'district' => 'Dolnoslaskie',
                'population' => 636765,
            ],
            [

                'name' => 'Poznan',
                'country_code' => 'POL',
                'district' => 'Wielkopolskie',
                'population' => 576899,
            ],
            [

                'name' => 'Gdansk',
                'country_code' => 'POL',
                'district' => 'Pomorskie',
                'population' => 458988,
            ],
            [

                'name' => 'Szczecin',
                'country_code' => 'POL',
                'district' => 'Zachodnio-Pomorskie',
                'population' => 416988,
            ],
            [

                'name' => 'Bydgoszcz',
                'country_code' => 'POL',
                'district' => 'Kujawsko-Pomorskie',
                'population' => 386855,
            ],
            [

                'name' => 'Lublin',
                'country_code' => 'POL',
                'district' => 'Lubelskie',
                'population' => 356251,
            ],
            [

                'name' => 'Katowice',
                'country_code' => 'POL',
                'district' => 'Slaskie',
                'population' => 345934,
            ],
            [

                'name' => 'Bialystok',
                'country_code' => 'POL',
                'district' => 'Podlaskie',
                'population' => 283937,
            ],
            [

                'name' => 'Czestochowa',
                'country_code' => 'POL',
                'district' => 'Slaskie',
                'population' => 257812,
            ],
            [

                'name' => 'Gdynia',
                'country_code' => 'POL',
                'district' => 'Pomorskie',
                'population' => 253521,
            ],
            [

                'name' => 'Sosnowiec',
                'country_code' => 'POL',
                'district' => 'Slaskie',
                'population' => 244102,
            ],
            [

                'name' => 'Radom',
                'country_code' => 'POL',
                'district' => 'Mazowieckie',
                'population' => 232262,
            ],
            [

                'name' => 'Kielce',
                'country_code' => 'POL',
                'district' => 'Swietokrzyskie',
                'population' => 212383,
            ],
            [

                'name' => 'Gliwice',
                'country_code' => 'POL',
                'district' => 'Slaskie',
                'population' => 212164,
            ],
            [

                'name' => 'Torun',
                'country_code' => 'POL',
                'district' => 'Kujawsko-Pomorskie',
                'population' => 206158,
            ],
            [

                'name' => 'Bytom',
                'country_code' => 'POL',
                'district' => 'Slaskie',
                'population' => 205560,
            ],
            [

                'name' => 'Zabrze',
                'country_code' => 'POL',
                'district' => 'Slaskie',
                'population' => 200177,
            ],
            [

                'name' => 'Bielsko-Biala',
                'country_code' => 'POL',
                'district' => 'Slaskie',
                'population' => 180307,
            ],
            [

                'name' => 'Olsztyn',
                'country_code' => 'POL',
                'district' => 'Warminsko-Mazurskie',
                'population' => 170904,
            ],
            [

                'name' => 'Rzeszów',
                'country_code' => 'POL',
                'district' => 'Podkarpackie',
                'population' => 162049,
            ],
            [

                'name' => 'Ruda Slaska',
                'country_code' => 'POL',
                'district' => 'Slaskie',
                'population' => 159665,
            ],
            [

                'name' => 'Rybnik',
                'country_code' => 'POL',
                'district' => 'Slaskie',
                'population' => 144582,
            ],
            [

                'name' => 'Walbrzych',
                'country_code' => 'POL',
                'district' => 'Dolnoslaskie',
                'population' => 136923,
            ],
            [

                'name' => 'Tychy',
                'country_code' => 'POL',
                'district' => 'Slaskie',
                'population' => 133178,
            ],
            [

                'name' => 'Dabrowa Górnicza',
                'country_code' => 'POL',
                'district' => 'Slaskie',
                'population' => 131037,
            ],
            [

                'name' => 'Plock',
                'country_code' => 'POL',
                'district' => 'Mazowieckie',
                'population' => 131011,
            ],
            [

                'name' => 'Elblag',
                'country_code' => 'POL',
                'district' => 'Warminsko-Mazurskie',
                'population' => 129782,
            ],
            [

                'name' => 'Opole',
                'country_code' => 'POL',
                'district' => 'Opolskie',
                'population' => 129553,
            ],
            [

                'name' => 'Gorzów Wielkopolski',
                'country_code' => 'POL',
                'district' => 'Lubuskie',
                'population' => 126019,
            ],
            [

                'name' => 'Wloclawek',
                'country_code' => 'POL',
                'district' => 'Kujawsko-Pomorskie',
                'population' => 123373,
            ],
            [

                'name' => 'Chorzów',
                'country_code' => 'POL',
                'district' => 'Slaskie',
                'population' => 121708,
            ],
            [

                'name' => 'Tarnów',
                'country_code' => 'POL',
                'district' => 'Malopolskie',
                'population' => 121494,
            ],
            [

                'name' => 'Zielona Góra',
                'country_code' => 'POL',
                'district' => 'Lubuskie',
                'population' => 118182,
            ],
            [

                'name' => 'Koszalin',
                'country_code' => 'POL',
                'district' => 'Zachodnio-Pomorskie',
                'population' => 112375,
            ],
            [

                'name' => 'Legnica',
                'country_code' => 'POL',
                'district' => 'Dolnoslaskie',
                'population' => 109335,
            ],
            [

                'name' => 'Kalisz',
                'country_code' => 'POL',
                'district' => 'Wielkopolskie',
                'population' => 106641,
            ],
            [

                'name' => 'Grudziadz',
                'country_code' => 'POL',
                'district' => 'Kujawsko-Pomorskie',
                'population' => 102434,
            ],
            [

                'name' => 'Slupsk',
                'country_code' => 'POL',
                'district' => 'Pomorskie',
                'population' => 102370,
            ],
            [

                'name' => 'Jastrzebie-Zdrój',
                'country_code' => 'POL',
                'district' => 'Slaskie',
                'population' => 102294,
            ],
            [

                'name' => 'Jaworzno',
                'country_code' => 'POL',
                'district' => 'Slaskie',
                'population' => 97929,
            ],
            [

                'name' => 'Jelenia Góra',
                'country_code' => 'POL',
                'district' => 'Dolnoslaskie',
                'population' => 93901,
            ],
            [

                'name' => 'Malabo',
                'country_code' => 'GNQ',
                'district' => 'Bioko',
                'population' => 40000,
            ],
            [

                'name' => 'Doha',
                'country_code' => 'QAT',
                'district' => 'Doha',
                'population' => 355000,
            ],
            [

                'name' => 'Paris',
                'country_code' => 'FRA',
                'district' => 'Île-de-France',
                'population' => 2125246,
            ],
            [

                'name' => 'Marseille',
                'country_code' => 'FRA',
                'district' => 'Provence-Alpes-Côte',
                'population' => 798430,
            ],
            [

                'name' => 'Lyon',
                'country_code' => 'FRA',
                'district' => 'Rhône-Alpes',
                'population' => 445452,
            ],
            [

                'name' => 'Toulouse',
                'country_code' => 'FRA',
                'district' => 'Midi-Pyrénées',
                'population' => 390350,
            ],
            [

                'name' => 'Nice',
                'country_code' => 'FRA',
                'district' => 'Provence-Alpes-Côte',
                'population' => 342738,
            ],
            [

                'name' => 'Nantes',
                'country_code' => 'FRA',
                'district' => 'Pays de la Loire',
                'population' => 270251,
            ],
            [

                'name' => 'Strasbourg',
                'country_code' => 'FRA',
                'district' => 'Alsace',
                'population' => 264115,
            ],
            [

                'name' => 'Montpellier',
                'country_code' => 'FRA',
                'district' => 'Languedoc-Roussillon',
                'population' => 225392,
            ],
            [

                'name' => 'Bordeaux',
                'country_code' => 'FRA',
                'district' => 'Aquitaine',
                'population' => 215363,
            ],
            [

                'name' => 'Rennes',
                'country_code' => 'FRA',
                'district' => 'Haute-Normandie',
                'population' => 206229,
            ],
            [

                'name' => 'Le Havre',
                'country_code' => 'FRA',
                'district' => 'Champagne-Ardenne',
                'population' => 190905,
            ],
            [

                'name' => 'Reims',
                'country_code' => 'FRA',
                'district' => 'Nord-Pas-de-Calais',
                'population' => 187206,
            ],
            [

                'name' => 'Lille',
                'country_code' => 'FRA',
                'district' => 'Rhône-Alpes',
                'population' => 184657,
            ],
            [

                'name' => 'St-Étienne',
                'country_code' => 'FRA',
                'district' => 'Bretagne',
                'population' => 180210,
            ],
            [

                'name' => 'Toulon',
                'country_code' => 'FRA',
                'district' => 'Provence-Alpes-Côte',
                'population' => 160639,
            ],
            [

                'name' => 'Grenoble',
                'country_code' => 'FRA',
                'district' => 'Rhône-Alpes',
                'population' => 153317,
            ],
            [

                'name' => 'Angers',
                'country_code' => 'FRA',
                'district' => 'Pays de la Loire',
                'population' => 151279,
            ],
            [

                'name' => 'Dijon',
                'country_code' => 'FRA',
                'district' => 'Bourgogne',
                'population' => 149867,
            ],
            [

                'name' => 'Brest',
                'country_code' => 'FRA',
                'district' => 'Bretagne',
                'population' => 149634,
            ],
            [

                'name' => 'Le Mans',
                'country_code' => 'FRA',
                'district' => 'Pays de la Loire',
                'population' => 146105,
            ],
            [

                'name' => 'Clermont-Ferrand',
                'country_code' => 'FRA',
                'district' => 'Auvergne',
                'population' => 137140,
            ],
            [

                'name' => 'Amiens',
                'country_code' => 'FRA',
                'district' => 'Picardie',
                'population' => 135501,
            ],
            [

                'name' => 'Aix-en-Provence',
                'country_code' => 'FRA',
                'district' => 'Provence-Alpes-Côte',
                'population' => 134222,
            ],
            [

                'name' => 'Limoges',
                'country_code' => 'FRA',
                'district' => 'Limousin',
                'population' => 133968,
            ],
            [

                'name' => 'Nîmes',
                'country_code' => 'FRA',
                'district' => 'Languedoc-Roussillon',
                'population' => 133424,
            ],
            [

                'name' => 'Tours',
                'country_code' => 'FRA',
                'district' => 'Centre',
                'population' => 132820,
            ],
            [

                'name' => 'Villeurbanne',
                'country_code' => 'FRA',
                'district' => 'Rhône-Alpes',
                'population' => 124215,
            ],
            [

                'name' => 'Metz',
                'country_code' => 'FRA',
                'district' => 'Lorraine',
                'population' => 123776,
            ],
            [

                'name' => 'Besançon',
                'country_code' => 'FRA',
                'district' => 'Franche-Comté',
                'population' => 117733,
            ],
            [

                'name' => 'Caen',
                'country_code' => 'FRA',
                'district' => 'Basse-Normandie',
                'population' => 113987,
            ],
            [

                'name' => 'Orléans',
                'country_code' => 'FRA',
                'district' => 'Centre',
                'population' => 113126,
            ],
            [

                'name' => 'Mulhouse',
                'country_code' => 'FRA',
                'district' => 'Alsace',
                'population' => 110359,
            ],
            [

                'name' => 'Rouen',
                'country_code' => 'FRA',
                'district' => 'Haute-Normandie',
                'population' => 106592,
            ],
            [

                'name' => 'Boulogne-Billancourt',
                'country_code' => 'FRA',
                'district' => 'Île-de-France',
                'population' => 106367,
            ],
            [

                'name' => 'Perpignan',
                'country_code' => 'FRA',
                'district' => 'Languedoc-Roussillon',
                'population' => 105115,
            ],
            [

                'name' => 'Nancy',
                'country_code' => 'FRA',
                'district' => 'Lorraine',
                'population' => 103605,
            ],
            [

                'name' => 'Roubaix',
                'country_code' => 'FRA',
                'district' => 'Nord-Pas-de-Calais',
                'population' => 96984,
            ],
            [

                'name' => 'Argenteuil',
                'country_code' => 'FRA',
                'district' => 'Île-de-France',
                'population' => 93961,
            ],
            [

                'name' => 'Tourcoing',
                'country_code' => 'FRA',
                'district' => 'Nord-Pas-de-Calais',
                'population' => 93540,
            ],
            [

                'name' => 'Montreuil',
                'country_code' => 'FRA',
                'district' => 'Île-de-France',
                'population' => 90674,
            ],
            [

                'name' => 'Cayenne',
                'country_code' => 'GUF',
                'district' => 'Cayenne',
                'population' => 50699,
            ],
            [

                'name' => 'Faaa',
                'country_code' => 'PYF',
                'district' => 'Tahiti',
                'population' => 25888,
            ],
            [

                'name' => 'Papeete',
                'country_code' => 'PYF',
                'district' => 'Tahiti',
                'population' => 25553,
            ],
            [

                'name' => 'Saint-Denis',
                'country_code' => 'REU',
                'district' => 'Saint-Denis',
                'population' => 131480,
            ],
            [

                'name' => 'Bucuresti',
                'country_code' => 'ROM',
                'district' => 'Bukarest',
                'population' => 2016131,
            ],
            [

                'name' => 'Iasi',
                'country_code' => 'ROM',
                'district' => 'Iasi',
                'population' => 348070,
            ],
            [

                'name' => 'Constanta',
                'country_code' => 'ROM',
                'district' => 'Constanta',
                'population' => 342264,
            ],
            [

                'name' => 'Cluj-Napoca',
                'country_code' => 'ROM',
                'district' => 'Cluj',
                'population' => 332498,
            ],
            [

                'name' => 'Galati',
                'country_code' => 'ROM',
                'district' => 'Galati',
                'population' => 330276,
            ],
            [

                'name' => 'Timisoara',
                'country_code' => 'ROM',
                'district' => 'Timis',
                'population' => 324304,
            ],
            [

                'name' => 'Brasov',
                'country_code' => 'ROM',
                'district' => 'Brasov',
                'population' => 314225,
            ],
            [

                'name' => 'Craiova',
                'country_code' => 'ROM',
                'district' => 'Dolj',
                'population' => 313530,
            ],
            [

                'name' => 'Ploiesti',
                'country_code' => 'ROM',
                'district' => 'Prahova',
                'population' => 251348,
            ],
            [

                'name' => 'Braila',
                'country_code' => 'ROM',
                'district' => 'Braila',
                'population' => 233756,
            ],
            [

                'name' => 'Oradea',
                'country_code' => 'ROM',
                'district' => 'Bihor',
                'population' => 222239,
            ],
            [

                'name' => 'Bacau',
                'country_code' => 'ROM',
                'district' => 'Bacau',
                'population' => 209235,
            ],
            [

                'name' => 'Pitesti',
                'country_code' => 'ROM',
                'district' => 'Arges',
                'population' => 187170,
            ],
            [

                'name' => 'Arad',
                'country_code' => 'ROM',
                'district' => 'Arad',
                'population' => 184408,
            ],
            [

                'name' => 'Sibiu',
                'country_code' => 'ROM',
                'district' => 'Sibiu',
                'population' => 169611,
            ],
            [

                'name' => 'Târgu Mures',
                'country_code' => 'ROM',
                'district' => 'Mures',
                'population' => 165153,
            ],
            [

                'name' => 'Baia Mare',
                'country_code' => 'ROM',
                'district' => 'Maramures',
                'population' => 149665,
            ],
            [

                'name' => 'Buzau',
                'country_code' => 'ROM',
                'district' => 'Buzau',
                'population' => 148372,
            ],
            [

                'name' => 'Satu Mare',
                'country_code' => 'ROM',
                'district' => 'Satu Mare',
                'population' => 130059,
            ],
            [

                'name' => 'Botosani',
                'country_code' => 'ROM',
                'district' => 'Botosani',
                'population' => 128730,
            ],
            [

                'name' => 'Piatra Neamt',
                'country_code' => 'ROM',
                'district' => 'Neamt',
                'population' => 125070,
            ],
            [

                'name' => 'Râmnicu Vâlcea',
                'country_code' => 'ROM',
                'district' => 'Vâlcea',
                'population' => 119741,
            ],
            [

                'name' => 'Suceava',
                'country_code' => 'ROM',
                'district' => 'Suceava',
                'population' => 118549,
            ],
            [

                'name' => 'Drobeta-Turnu Severin',
                'country_code' => 'ROM',
                'district' => 'Mehedinti',
                'population' => 117865,
            ],
            [

                'name' => 'Târgoviste',
                'country_code' => 'ROM',
                'district' => 'Dâmbovita',
                'population' => 98980,
            ],
            [

                'name' => 'Focsani',
                'country_code' => 'ROM',
                'district' => 'Vrancea',
                'population' => 98979,
            ],
            [

                'name' => 'Târgu Jiu',
                'country_code' => 'ROM',
                'district' => 'Gorj',
                'population' => 98524,
            ],
            [

                'name' => 'Tulcea',
                'country_code' => 'ROM',
                'district' => 'Tulcea',
                'population' => 96278,
            ],
            [

                'name' => 'Resita',
                'country_code' => 'ROM',
                'district' => 'Caras-Severin',
                'population' => 93976,
            ],
            [

                'name' => 'Kigali',
                'country_code' => 'RWA',
                'district' => 'Kigali',
                'population' => 286000,
            ],
            [

                'name' => 'Stockholm',
                'country_code' => 'SWE',
                'district' => 'Lisboa',
                'population' => 750348,
            ],
            [

                'name' => 'Gothenburg [Göteborg]',
                'country_code' => 'SWE',
                'district' => 'West Götanmaan län',
                'population' => 466990,
            ],
            [

                'name' => 'Malmö',
                'country_code' => 'SWE',
                'district' => 'Skåne län',
                'population' => 259579,
            ],
            [

                'name' => 'Uppsala',
                'country_code' => 'SWE',
                'district' => 'Uppsala län',
                'population' => 189569,
            ],
            [

                'name' => 'Linköping',
                'country_code' => 'SWE',
                'district' => 'East Götanmaan län',
                'population' => 133168,
            ],
            [

                'name' => 'Västerås',
                'country_code' => 'SWE',
                'district' => 'Västmanlands län',
                'population' => 126328,
            ],
            [

                'name' => 'Örebro',
                'country_code' => 'SWE',
                'district' => 'Örebros län',
                'population' => 124207,
            ],
            [

                'name' => 'Norrköping',
                'country_code' => 'SWE',
                'district' => 'East Götanmaan län',
                'population' => 122199,
            ],
            [

                'name' => 'Helsingborg',
                'country_code' => 'SWE',
                'district' => 'Skåne län',
                'population' => 117737,
            ],
            [

                'name' => 'Jönköping',
                'country_code' => 'SWE',
                'district' => 'Jönköpings län',
                'population' => 117095,
            ],
            [

                'name' => 'Umeå',
                'country_code' => 'SWE',
                'district' => 'Västerbottens län',
                'population' => 104512,
            ],
            [

                'name' => 'Lund',
                'country_code' => 'SWE',
                'district' => 'Skåne län',
                'population' => 98948,
            ],
            [

                'name' => 'Borås',
                'country_code' => 'SWE',
                'district' => 'West Götanmaan län',
                'population' => 96883,
            ],
            [

                'name' => 'Sundsvall',
                'country_code' => 'SWE',
                'district' => 'Västernorrlands län',
                'population' => 93126,
            ],
            [

                'name' => 'Gävle',
                'country_code' => 'SWE',
                'district' => 'Gävleborgs län',
                'population' => 90742,
            ],
            [

                'name' => 'Jamestown',
                'country_code' => 'SHN',
                'district' => 'Saint Helena',
                'population' => 1500,
            ],
            [

                'name' => 'Basseterre',
                'country_code' => 'KNA',
                'district' => 'St George Basseterre',
                'population' => 11600,
            ],
            [

                'name' => 'Castries',
                'country_code' => 'LCA',
                'district' => 'Castries',
                'population' => 2301,
            ],
            [

                'name' => 'Kingstown',
                'country_code' => 'VCT',
                'district' => 'St George',
                'population' => 17100,
            ],
            [

                'name' => 'Saint-Pierre',
                'country_code' => 'SPM',
                'district' => 'Saint-Pierre',
                'population' => 5808,
            ],
            [

                'name' => 'Berlin',
                'country_code' => 'DEU',
                'district' => 'Berliini',
                'population' => 3386667,
            ],
            [

                'name' => 'Hamburg',
                'country_code' => 'DEU',
                'district' => 'Hamburg',
                'population' => 1704735,
            ],
            [

                'name' => 'Munich [München]',
                'country_code' => 'DEU',
                'district' => 'Baijeri',
                'population' => 1194560,
            ],
            [

                'name' => 'Köln',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 962507,
            ],
            [

                'name' => 'Frankfurt am Main',
                'country_code' => 'DEU',
                'district' => 'Hessen',
                'population' => 643821,
            ],
            [

                'name' => 'Essen',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 599515,
            ],
            [

                'name' => 'Dortmund',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 590213,
            ],
            [

                'name' => 'Stuttgart',
                'country_code' => 'DEU',
                'district' => 'Baden-Württemberg',
                'population' => 582443,
            ],
            [

                'name' => 'Düsseldorf',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 568855,
            ],
            [

                'name' => 'Bremen',
                'country_code' => 'DEU',
                'district' => 'Bremen',
                'population' => 540330,
            ],
            [

                'name' => 'Duisburg',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 519793,
            ],
            [

                'name' => 'Hannover',
                'country_code' => 'DEU',
                'district' => 'Niedersachsen',
                'population' => 514718,
            ],
            [

                'name' => 'Leipzig',
                'country_code' => 'DEU',
                'district' => 'Saksi',
                'population' => 489532,
            ],
            [

                'name' => 'Nürnberg',
                'country_code' => 'DEU',
                'district' => 'Baijeri',
                'population' => 486628,
            ],
            [

                'name' => 'Dresden',
                'country_code' => 'DEU',
                'district' => 'Saksi',
                'population' => 476668,
            ],
            [

                'name' => 'Bochum',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 392830,
            ],
            [

                'name' => 'Wuppertal',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 368993,
            ],
            [

                'name' => 'Bielefeld',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 321125,
            ],
            [

                'name' => 'Mannheim',
                'country_code' => 'DEU',
                'district' => 'Baden-Württemberg',
                'population' => 307730,
            ],
            [

                'name' => 'Bonn',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 301048,
            ],
            [

                'name' => 'Gelsenkirchen',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 281979,
            ],
            [

                'name' => 'Karlsruhe',
                'country_code' => 'DEU',
                'district' => 'Baden-Württemberg',
                'population' => 277204,
            ],
            [

                'name' => 'Wiesbaden',
                'country_code' => 'DEU',
                'district' => 'Hessen',
                'population' => 268716,
            ],
            [

                'name' => 'Münster',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 264670,
            ],
            [

                'name' => 'Mönchengladbach',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 263697,
            ],
            [

                'name' => 'Chemnitz',
                'country_code' => 'DEU',
                'district' => 'Saksi',
                'population' => 263222,
            ],
            [

                'name' => 'Augsburg',
                'country_code' => 'DEU',
                'district' => 'Baijeri',
                'population' => 254867,
            ],
            [

                'name' => 'Halle/Saale',
                'country_code' => 'DEU',
                'district' => 'Anhalt Sachsen',
                'population' => 254360,
            ],
            [

                'name' => 'Braunschweig',
                'country_code' => 'DEU',
                'district' => 'Niedersachsen',
                'population' => 246322,
            ],
            [

                'name' => 'Aachen',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 243825,
            ],
            [

                'name' => 'Krefeld',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 241769,
            ],
            [

                'name' => 'Magdeburg',
                'country_code' => 'DEU',
                'district' => 'Anhalt Sachsen',
                'population' => 235073,
            ],
            [

                'name' => 'Kiel',
                'country_code' => 'DEU',
                'district' => 'Schleswig-Holstein',
                'population' => 233795,
            ],
            [

                'name' => 'Oberhausen',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 222349,
            ],
            [

                'name' => 'Lübeck',
                'country_code' => 'DEU',
                'district' => 'Schleswig-Holstein',
                'population' => 213326,
            ],
            [

                'name' => 'Hagen',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 205201,
            ],
            [

                'name' => 'Rostock',
                'country_code' => 'DEU',
                'district' => 'Mecklenburg-Vorpomme',
                'population' => 203279,
            ],
            [

                'name' => 'Freiburg im Breisgau',
                'country_code' => 'DEU',
                'district' => 'Baden-Württemberg',
                'population' => 202455,
            ],
            [

                'name' => 'Erfurt',
                'country_code' => 'DEU',
                'district' => 'Thüringen',
                'population' => 201267,
            ],
            [

                'name' => 'Kassel',
                'country_code' => 'DEU',
                'district' => 'Hessen',
                'population' => 196211,
            ],
            [

                'name' => 'Saarbrücken',
                'country_code' => 'DEU',
                'district' => 'Saarland',
                'population' => 183836,
            ],
            [

                'name' => 'Mainz',
                'country_code' => 'DEU',
                'district' => 'Rheinland-Pfalz',
                'population' => 183134,
            ],
            [

                'name' => 'Hamm',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 181804,
            ],
            [

                'name' => 'Herne',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 175661,
            ],
            [

                'name' => 'Mülheim an der Ruhr',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 173895,
            ],
            [

                'name' => 'Solingen',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 165583,
            ],
            [

                'name' => 'Osnabrück',
                'country_code' => 'DEU',
                'district' => 'Niedersachsen',
                'population' => 164539,
            ],
            [

                'name' => 'Ludwigshafen am Rhein',
                'country_code' => 'DEU',
                'district' => 'Rheinland-Pfalz',
                'population' => 163771,
            ],
            [

                'name' => 'Leverkusen',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 160841,
            ],
            [

                'name' => 'Oldenburg',
                'country_code' => 'DEU',
                'district' => 'Niedersachsen',
                'population' => 154125,
            ],
            [

                'name' => 'Neuss',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 149702,
            ],
            [

                'name' => 'Heidelberg',
                'country_code' => 'DEU',
                'district' => 'Baden-Württemberg',
                'population' => 139672,
            ],
            [

                'name' => 'Darmstadt',
                'country_code' => 'DEU',
                'district' => 'Hessen',
                'population' => 137776,
            ],
            [

                'name' => 'Paderborn',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 137647,
            ],
            [

                'name' => 'Potsdam',
                'country_code' => 'DEU',
                'district' => 'Brandenburg',
                'population' => 128983,
            ],
            [

                'name' => 'Würzburg',
                'country_code' => 'DEU',
                'district' => 'Baijeri',
                'population' => 127350,
            ],
            [

                'name' => 'Regensburg',
                'country_code' => 'DEU',
                'district' => 'Baijeri',
                'population' => 125236,
            ],
            [

                'name' => 'Recklinghausen',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 125022,
            ],
            [

                'name' => 'Göttingen',
                'country_code' => 'DEU',
                'district' => 'Niedersachsen',
                'population' => 124775,
            ],
            [

                'name' => 'Bremerhaven',
                'country_code' => 'DEU',
                'district' => 'Bremen',
                'population' => 122735,
            ],
            [

                'name' => 'Wolfsburg',
                'country_code' => 'DEU',
                'district' => 'Niedersachsen',
                'population' => 121954,
            ],
            [

                'name' => 'Bottrop',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 121097,
            ],
            [

                'name' => 'Remscheid',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 120125,
            ],
            [

                'name' => 'Heilbronn',
                'country_code' => 'DEU',
                'district' => 'Baden-Württemberg',
                'population' => 119526,
            ],
            [

                'name' => 'Pforzheim',
                'country_code' => 'DEU',
                'district' => 'Baden-Württemberg',
                'population' => 117227,
            ],
            [

                'name' => 'Offenbach am Main',
                'country_code' => 'DEU',
                'district' => 'Hessen',
                'population' => 116627,
            ],
            [

                'name' => 'Ulm',
                'country_code' => 'DEU',
                'district' => 'Baden-Württemberg',
                'population' => 116103,
            ],
            [

                'name' => 'Ingolstadt',
                'country_code' => 'DEU',
                'district' => 'Baijeri',
                'population' => 114826,
            ],
            [

                'name' => 'Gera',
                'country_code' => 'DEU',
                'district' => 'Thüringen',
                'population' => 114718,
            ],
            [

                'name' => 'Salzgitter',
                'country_code' => 'DEU',
                'district' => 'Niedersachsen',
                'population' => 112934,
            ],
            [

                'name' => 'Cottbus',
                'country_code' => 'DEU',
                'district' => 'Brandenburg',
                'population' => 110894,
            ],
            [

                'name' => 'Reutlingen',
                'country_code' => 'DEU',
                'district' => 'Baden-Württemberg',
                'population' => 110343,
            ],
            [

                'name' => 'Fürth',
                'country_code' => 'DEU',
                'district' => 'Baijeri',
                'population' => 109771,
            ],
            [

                'name' => 'Siegen',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 109225,
            ],
            [

                'name' => 'Koblenz',
                'country_code' => 'DEU',
                'district' => 'Rheinland-Pfalz',
                'population' => 108003,
            ],
            [

                'name' => 'Moers',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 106837,
            ],
            [

                'name' => 'Bergisch Gladbach',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 106150,
            ],
            [

                'name' => 'Zwickau',
                'country_code' => 'DEU',
                'district' => 'Saksi',
                'population' => 104146,
            ],
            [

                'name' => 'Hildesheim',
                'country_code' => 'DEU',
                'district' => 'Niedersachsen',
                'population' => 104013,
            ],
            [

                'name' => 'Witten',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 103384,
            ],
            [

                'name' => 'Schwerin',
                'country_code' => 'DEU',
                'district' => 'Mecklenburg-Vorpomme',
                'population' => 102878,
            ],
            [

                'name' => 'Erlangen',
                'country_code' => 'DEU',
                'district' => 'Baijeri',
                'population' => 100750,
            ],
            [

                'name' => 'Kaiserslautern',
                'country_code' => 'DEU',
                'district' => 'Rheinland-Pfalz',
                'population' => 100025,
            ],
            [

                'name' => 'Trier',
                'country_code' => 'DEU',
                'district' => 'Rheinland-Pfalz',
                'population' => 99891,
            ],
            [

                'name' => 'Jena',
                'country_code' => 'DEU',
                'district' => 'Thüringen',
                'population' => 99779,
            ],
            [

                'name' => 'Iserlohn',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 99474,
            ],
            [

                'name' => 'Gütersloh',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 95028,
            ],
            [

                'name' => 'Marl',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 93735,
            ],
            [

                'name' => 'Lünen',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 92044,
            ],
            [

                'name' => 'Düren',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 91092,
            ],
            [

                'name' => 'Ratingen',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 90951,
            ],
            [

                'name' => 'Velbert',
                'country_code' => 'DEU',
                'district' => 'Nordrhein-Westfalen',
                'population' => 89881,
            ],
            [

                'name' => 'Esslingen am Neckar',
                'country_code' => 'DEU',
                'district' => 'Baden-Württemberg',
                'population' => 89667,
            ],
            [

                'name' => 'Honiara',
                'country_code' => 'SLB',
                'district' => 'Honiara',
                'population' => 50100,
            ],
            [

                'name' => 'Lusaka',
                'country_code' => 'ZMB',
                'district' => 'Lusaka',
                'population' => 1317000,
            ],
            [

                'name' => 'Ndola',
                'country_code' => 'ZMB',
                'district' => 'Copperbelt',
                'population' => 329200,
            ],
            [

                'name' => 'Kitwe',
                'country_code' => 'ZMB',
                'district' => 'Copperbelt',
                'population' => 288600,
            ],
            [

                'name' => 'Kabwe',
                'country_code' => 'ZMB',
                'district' => 'Central',
                'population' => 154300,
            ],
            [

                'name' => 'Chingola',
                'country_code' => 'ZMB',
                'district' => 'Copperbelt',
                'population' => 142400,
            ],
            [

                'name' => 'Mufulira',
                'country_code' => 'ZMB',
                'district' => 'Copperbelt',
                'population' => 123900,
            ],
            [

                'name' => 'Luanshya',
                'country_code' => 'ZMB',
                'district' => 'Copperbelt',
                'population' => 118100,
            ],
            [

                'name' => 'Apia',
                'country_code' => 'WSM',
                'district' => 'Upolu',
                'population' => 35900,
            ],
            [

                'name' => 'Serravalle',
                'country_code' => 'SMR',
                'district' => 'Serravalle/Dogano',
                'population' => 4802,
            ],
            [

                'name' => 'San Marino',
                'country_code' => 'SMR',
                'district' => 'San Marino',
                'population' => 2294,
            ],
            [

                'name' => 'São Tomé',
                'country_code' => 'STP',
                'district' => 'Aqua Grande',
                'population' => 49541,
            ],
            [

                'name' => 'Riyadh',
                'country_code' => 'SAU',
                'district' => 'Riyadh',
                'population' => 3324000,
            ],
            [

                'name' => 'Jedda',
                'country_code' => 'SAU',
                'district' => 'Mekka',
                'population' => 2046300,
            ],
            [

                'name' => 'Mekka',
                'country_code' => 'SAU',
                'district' => 'Mekka',
                'population' => 965700,
            ],
            [

                'name' => 'Medina',
                'country_code' => 'SAU',
                'district' => 'Medina',
                'population' => 608300,
            ],
            [

                'name' => 'al-Dammam',
                'country_code' => 'SAU',
                'district' => 'al-Sharqiya',
                'population' => 482300,
            ],
            [

                'name' => 'al-Taif',
                'country_code' => 'SAU',
                'district' => 'Mekka',
                'population' => 416100,
            ],
            [

                'name' => 'Tabuk',
                'country_code' => 'SAU',
                'district' => 'Tabuk',
                'population' => 292600,
            ],
            [

                'name' => 'Burayda',
                'country_code' => 'SAU',
                'district' => 'al-Qasim',
                'population' => 248600,
            ],
            [

                'name' => 'al-Hufuf',
                'country_code' => 'SAU',
                'district' => 'al-Sharqiya',
                'population' => 225800,
            ],
            [

                'name' => 'al-Mubarraz',
                'country_code' => 'SAU',
                'district' => 'al-Sharqiya',
                'population' => 219100,
            ],
            [

                'name' => 'Khamis Mushayt',
                'country_code' => 'SAU',
                'district' => 'Asir',
                'population' => 217900,
            ],
            [

                'name' => 'Hail',
                'country_code' => 'SAU',
                'district' => 'Hail',
                'population' => 176800,
            ],
            [

                'name' => 'al-Kharj',
                'country_code' => 'SAU',
                'district' => 'Riad',
                'population' => 152100,
            ],
            [

                'name' => 'al-Khubar',
                'country_code' => 'SAU',
                'district' => 'al-Sharqiya',
                'population' => 141700,
            ],
            [

                'name' => 'Jubayl',
                'country_code' => 'SAU',
                'district' => 'al-Sharqiya',
                'population' => 140800,
            ],
            [

                'name' => 'Hafar al-Batin',
                'country_code' => 'SAU',
                'district' => 'al-Sharqiya',
                'population' => 137800,
            ],
            [

                'name' => 'al-Tuqba',
                'country_code' => 'SAU',
                'district' => 'al-Sharqiya',
                'population' => 125700,
            ],
            [

                'name' => 'Yanbu',
                'country_code' => 'SAU',
                'district' => 'Medina',
                'population' => 119800,
            ],
            [

                'name' => 'Abha',
                'country_code' => 'SAU',
                'district' => 'Asir',
                'population' => 112300,
            ],
            [

                'name' => 'Ara´ar',
                'country_code' => 'SAU',
                'district' => 'al-Khudud al-Samaliy',
                'population' => 108100,
            ],
            [

                'name' => 'al-Qatif',
                'country_code' => 'SAU',
                'district' => 'al-Sharqiya',
                'population' => 98900,
            ],
            [

                'name' => 'al-Hawiya',
                'country_code' => 'SAU',
                'district' => 'Mekka',
                'population' => 93900,
            ],
            [

                'name' => 'Unayza',
                'country_code' => 'SAU',
                'district' => 'Qasim',
                'population' => 91100,
            ],
            [

                'name' => 'Najran',
                'country_code' => 'SAU',
                'district' => 'Najran',
                'population' => 91000,
            ],
            [

                'name' => 'Pikine',
                'country_code' => 'SEN',
                'district' => 'Cap-Vert',
                'population' => 855287,
            ],
            [

                'name' => 'Dakar',
                'country_code' => 'SEN',
                'district' => 'Cap-Vert',
                'population' => 785071,
            ],
            [

                'name' => 'Thiès',
                'country_code' => 'SEN',
                'district' => 'Thiès',
                'population' => 248000,
            ],
            [

                'name' => 'Kaolack',
                'country_code' => 'SEN',
                'district' => 'Kaolack',
                'population' => 199000,
            ],
            [

                'name' => 'Ziguinchor',
                'country_code' => 'SEN',
                'district' => 'Ziguinchor',
                'population' => 192000,
            ],
            [

                'name' => 'Rufisque',
                'country_code' => 'SEN',
                'district' => 'Cap-Vert',
                'population' => 150000,
            ],
            [

                'name' => 'Saint-Louis',
                'country_code' => 'SEN',
                'district' => 'Saint-Louis',
                'population' => 132400,
            ],
            [

                'name' => 'Mbour',
                'country_code' => 'SEN',
                'district' => 'Thiès',
                'population' => 109300,
            ],
            [

                'name' => 'Diourbel',
                'country_code' => 'SEN',
                'district' => 'Diourbel',
                'population' => 99400,
            ],
            [

                'name' => 'Victoria',
                'country_code' => 'SYC',
                'district' => 'Mahé',
                'population' => 41000,
            ],
            [

                'name' => 'Freetown',
                'country_code' => 'SLE',
                'district' => 'Western',
                'population' => 850000,
            ],
            [

                'name' => 'Singapore',
                'country_code' => 'SGP',
                'district' => '–',
                'population' => 4017733,
            ],
            [

                'name' => 'Bratislava',
                'country_code' => 'SVK',
                'district' => 'Bratislava',
                'population' => 448292,
            ],
            [

                'name' => 'Košice',
                'country_code' => 'SVK',
                'district' => 'Východné Slovensko',
                'population' => 241874,
            ],
            [

                'name' => 'Prešov',
                'country_code' => 'SVK',
                'district' => 'Východné Slovensko',
                'population' => 93977,
            ],
            [

                'name' => 'Ljubljana',
                'country_code' => 'SVN',
                'district' => 'Osrednjeslovenska',
                'population' => 270986,
            ],
            [

                'name' => 'Maribor',
                'country_code' => 'SVN',
                'district' => 'Podravska',
                'population' => 115532,
            ],
            [

                'name' => 'Mogadishu',
                'country_code' => 'SOM',
                'district' => 'Banaadir',
                'population' => 997000,
            ],
            [

                'name' => 'Hargeysa',
                'country_code' => 'SOM',
                'district' => 'Woqooyi Galbeed',
                'population' => 90000,
            ],
            [

                'name' => 'Kismaayo',
                'country_code' => 'SOM',
                'district' => 'Jubbada Hoose',
                'population' => 90000,
            ],
            [

                'name' => 'Colombo',
                'country_code' => 'LKA',
                'district' => 'Western',
                'population' => 645000,
            ],
            [

                'name' => 'Dehiwala',
                'country_code' => 'LKA',
                'district' => 'Western',
                'population' => 203000,
            ],
            [

                'name' => 'Moratuwa',
                'country_code' => 'LKA',
                'district' => 'Western',
                'population' => 190000,
            ],
            [

                'name' => 'Jaffna',
                'country_code' => 'LKA',
                'district' => 'Northern',
                'population' => 149000,
            ],
            [

                'name' => 'Kandy',
                'country_code' => 'LKA',
                'district' => 'Central',
                'population' => 140000,
            ],
            [

                'name' => 'Sri Jayawardenepura Kotte',
                'country_code' => 'LKA',
                'district' => 'Western',
                'population' => 118000,
            ],
            [

                'name' => 'Negombo',
                'country_code' => 'LKA',
                'district' => 'Western',
                'population' => 100000,
            ],
            [

                'name' => 'Omdurman',
                'country_code' => 'SDN',
                'district' => 'Khartum',
                'population' => 1271403,
            ],
            [

                'name' => 'Khartum',
                'country_code' => 'SDN',
                'district' => 'Khartum',
                'population' => 947483,
            ],
            [

                'name' => 'Sharq al-Nil',
                'country_code' => 'SDN',
                'district' => 'Khartum',
                'population' => 700887,
            ],
            [

                'name' => 'Port Sudan',
                'country_code' => 'SDN',
                'district' => 'al-Bahr al-Ahmar',
                'population' => 308195,
            ],
            [

                'name' => 'Kassala',
                'country_code' => 'SDN',
                'district' => 'Kassala',
                'population' => 234622,
            ],
            [

                'name' => 'Obeid',
                'country_code' => 'SDN',
                'district' => 'Kurdufan al-Shamaliy',
                'population' => 229425,
            ],
            [

                'name' => 'Nyala',
                'country_code' => 'SDN',
                'district' => 'Darfur al-Janubiya',
                'population' => 227183,
            ],
            [

                'name' => 'Wad Madani',
                'country_code' => 'SDN',
                'district' => 'al-Jazira',
                'population' => 211362,
            ],
            [

                'name' => 'al-Qadarif',
                'country_code' => 'SDN',
                'district' => 'al-Qadarif',
                'population' => 191164,
            ],
            [

                'name' => 'Kusti',
                'country_code' => 'SDN',
                'district' => 'al-Bahr al-Abyad',
                'population' => 173599,
            ],
            [

                'name' => 'al-Fashir',
                'country_code' => 'SDN',
                'district' => 'Darfur al-Shamaliya',
                'population' => 141884,
            ],
            [

                'name' => 'Juba',
                'country_code' => 'SDN',
                'district' => 'Bahr al-Jabal',
                'population' => 114980,
            ],
            [

                'name' => 'Helsinki [Helsingfors]',
                'country_code' => 'FIN',
                'district' => 'Newmaa',
                'population' => 555474,
            ],
            [

                'name' => 'Espoo',
                'country_code' => 'FIN',
                'district' => 'Newmaa',
                'population' => 213271,
            ],
            [

                'name' => 'Tampere',
                'country_code' => 'FIN',
                'district' => 'Pirkanmaa',
                'population' => 195468,
            ],
            [

                'name' => 'Vantaa',
                'country_code' => 'FIN',
                'district' => 'Newmaa',
                'population' => 178471,
            ],
            [

                'name' => 'Turku [Åbo]',
                'country_code' => 'FIN',
                'district' => 'Varsinais-Suomi',
                'population' => 172561,
            ],
            [

                'name' => 'Oulu',
                'country_code' => 'FIN',
                'district' => 'Pohjois-Pohjanmaa',
                'population' => 120753,
            ],
            [

                'name' => 'Lahti',
                'country_code' => 'FIN',
                'district' => 'Päijät-Häme',
                'population' => 96921,
            ],
            [

                'name' => 'Paramaribo',
                'country_code' => 'SUR',
                'district' => 'Paramaribo',
                'population' => 112000,
            ],
            [

                'name' => 'Mbabane',
                'country_code' => 'SWZ',
                'district' => 'Hhohho',
                'population' => 61000,
            ],
            [

                'name' => 'Zürich',
                'country_code' => 'CHE',
                'district' => 'Zürich',
                'population' => 336800,
            ],
            [

                'name' => 'Geneve',
                'country_code' => 'CHE',
                'district' => 'Geneve',
                'population' => 173500,
            ],
            [

                'name' => 'Basel',
                'country_code' => 'CHE',
                'district' => 'Basel-Stadt',
                'population' => 166700,
            ],
            [

                'name' => 'Bern',
                'country_code' => 'CHE',
                'district' => 'Bern',
                'population' => 122700,
            ],
            [

                'name' => 'Lausanne',
                'country_code' => 'CHE',
                'district' => 'Vaud',
                'population' => 114500,
            ],
            [

                'name' => 'Damascus',
                'country_code' => 'SYR',
                'district' => 'Damascus',
                'population' => 1347000,
            ],
            [

                'name' => 'Aleppo',
                'country_code' => 'SYR',
                'district' => 'Aleppo',
                'population' => 1261983,
            ],
            [

                'name' => 'Hims',
                'country_code' => 'SYR',
                'district' => 'Hims',
                'population' => 507404,
            ],
            [

                'name' => 'Hama',
                'country_code' => 'SYR',
                'district' => 'Hama',
                'population' => 343361,
            ],
            [

                'name' => 'Latakia',
                'country_code' => 'SYR',
                'district' => 'Latakia',
                'population' => 264563,
            ],
            [

                'name' => 'al-Qamishliya',
                'country_code' => 'SYR',
                'district' => 'al-Hasaka',
                'population' => 144286,
            ],
            [

                'name' => 'Dayr al-Zawr',
                'country_code' => 'SYR',
                'district' => 'Dayr al-Zawr',
                'population' => 140459,
            ],
            [

                'name' => 'Jaramana',
                'country_code' => 'SYR',
                'district' => 'Damaskos',
                'population' => 138469,
            ],
            [

                'name' => 'Duma',
                'country_code' => 'SYR',
                'district' => 'Damaskos',
                'population' => 131158,
            ],
            [

                'name' => 'al-Raqqa',
                'country_code' => 'SYR',
                'district' => 'al-Raqqa',
                'population' => 108020,
            ],
            [

                'name' => 'Idlib',
                'country_code' => 'SYR',
                'district' => 'Idlib',
                'population' => 91081,
            ],
            [

                'name' => 'Dushanbe',
                'country_code' => 'TJK',
                'district' => 'Karotegin',
                'population' => 524000,
            ],
            [

                'name' => 'Khujand',
                'country_code' => 'TJK',
                'district' => 'Khujand',
                'population' => 161500,
            ],
            [

                'name' => 'Taipei',
                'country_code' => 'TWN',
                'district' => 'Taipei',
                'population' => 2641312,
            ],
            [

                'name' => 'Kaohsiung',
                'country_code' => 'TWN',
                'district' => 'Kaohsiung',
                'population' => 1475505,
            ],
            [

                'name' => 'Taichung',
                'country_code' => 'TWN',
                'district' => 'Taichung',
                'population' => 940589,
            ],
            [

                'name' => 'Tainan',
                'country_code' => 'TWN',
                'district' => 'Tainan',
                'population' => 728060,
            ],
            [

                'name' => 'Panchiao',
                'country_code' => 'TWN',
                'district' => 'Taipei',
                'population' => 523850,
            ],
            [

                'name' => 'Chungho',
                'country_code' => 'TWN',
                'district' => 'Taipei',
                'population' => 392176,
            ],
            [

                'name' => 'Keelung (Chilung)',
                'country_code' => 'TWN',
                'district' => 'Keelung',
                'population' => 385201,
            ],
            [

                'name' => 'Sanchung',
                'country_code' => 'TWN',
                'district' => 'Taipei',
                'population' => 380084,
            ],
            [

                'name' => 'Hsinchuang',
                'country_code' => 'TWN',
                'district' => 'Taipei',
                'population' => 365048,
            ],
            [

                'name' => 'Hsinchu',
                'country_code' => 'TWN',
                'district' => 'Hsinchu',
                'population' => 361958,
            ],
            [

                'name' => 'Chungli',
                'country_code' => 'TWN',
                'district' => 'Taoyuan',
                'population' => 318649,
            ],
            [

                'name' => 'Fengshan',
                'country_code' => 'TWN',
                'district' => 'Kaohsiung',
                'population' => 318562,
            ],
            [

                'name' => 'Taoyuan',
                'country_code' => 'TWN',
                'district' => 'Taoyuan',
                'population' => 316438,
            ],
            [

                'name' => 'Chiayi',
                'country_code' => 'TWN',
                'district' => 'Chiayi',
                'population' => 265109,
            ],
            [

                'name' => 'Hsintien',
                'country_code' => 'TWN',
                'district' => 'Taipei',
                'population' => 263603,
            ],
            [

                'name' => 'Changhwa',
                'country_code' => 'TWN',
                'district' => 'Changhwa',
                'population' => 227715,
            ],
            [

                'name' => 'Yungho',
                'country_code' => 'TWN',
                'district' => 'Taipei',
                'population' => 227700,
            ],
            [

                'name' => 'Tucheng',
                'country_code' => 'TWN',
                'district' => 'Taipei',
                'population' => 224897,
            ],
            [

                'name' => 'Pingtung',
                'country_code' => 'TWN',
                'district' => 'Pingtung',
                'population' => 214727,
            ],
            [

                'name' => 'Yungkang',
                'country_code' => 'TWN',
                'district' => 'Tainan',
                'population' => 193005,
            ],
            [

                'name' => 'Pingchen',
                'country_code' => 'TWN',
                'district' => 'Taoyuan',
                'population' => 188344,
            ],
            [

                'name' => 'Tali',
                'country_code' => 'TWN',
                'district' => 'Taichung',
                'population' => 171940,
            ],
            [

                'name' => 'Taiping',
                'country_code' => 'TWN',
                'district' => '',
                'population' => 165524,
            ],
            [

                'name' => 'Pate',
                'country_code' => 'TWN',
                'district' => 'Taoyuan',
                'population' => 161700,
            ],
            [

                'name' => 'Fengyuan',
                'country_code' => 'TWN',
                'district' => 'Taichung',
                'population' => 161032,
            ],
            [

                'name' => 'Luchou',
                'country_code' => 'TWN',
                'district' => 'Taipei',
                'population' => 160516,
            ],
            [

                'name' => 'Hsichuh',
                'country_code' => 'TWN',
                'district' => 'Taipei',
                'population' => 154976,
            ],
            [

                'name' => 'Shulin',
                'country_code' => 'TWN',
                'district' => 'Taipei',
                'population' => 151260,
            ],
            [

                'name' => 'Yuanlin',
                'country_code' => 'TWN',
                'district' => 'Changhwa',
                'population' => 126402,
            ],
            [

                'name' => 'Yangmei',
                'country_code' => 'TWN',
                'district' => 'Taoyuan',
                'population' => 126323,
            ],
            [

                'name' => 'Taliao',
                'country_code' => 'TWN',
                'district' => '',
                'population' => 115897,
            ],
            [

                'name' => 'Kueishan',
                'country_code' => 'TWN',
                'district' => '',
                'population' => 112195,
            ],
            [

                'name' => 'Tanshui',
                'country_code' => 'TWN',
                'district' => 'Taipei',
                'population' => 111882,
            ],
            [

                'name' => 'Taitung',
                'country_code' => 'TWN',
                'district' => 'Taitung',
                'population' => 111039,
            ],
            [

                'name' => 'Hualien',
                'country_code' => 'TWN',
                'district' => 'Hualien',
                'population' => 108407,
            ],
            [

                'name' => 'Nantou',
                'country_code' => 'TWN',
                'district' => 'Nantou',
                'population' => 104723,
            ],
            [

                'name' => 'Lungtan',
                'country_code' => 'TWN',
                'district' => 'Taipei',
                'population' => 103088,
            ],
            [

                'name' => 'Touliu',
                'country_code' => 'TWN',
                'district' => 'Yünlin',
                'population' => 98900,
            ],
            [

                'name' => 'Tsaotun',
                'country_code' => 'TWN',
                'district' => 'Nantou',
                'population' => 96800,
            ],
            [

                'name' => 'Kangshan',
                'country_code' => 'TWN',
                'district' => 'Kaohsiung',
                'population' => 92200,
            ],
            [

                'name' => 'Ilan',
                'country_code' => 'TWN',
                'district' => 'Ilan',
                'population' => 92000,
            ],
            [

                'name' => 'Miaoli',
                'country_code' => 'TWN',
                'district' => 'Miaoli',
                'population' => 90000,
            ],
            [

                'name' => 'Dar es Salaam',
                'country_code' => 'TZA',
                'district' => 'Dar es Salaam',
                'population' => 1747000,
            ],
            [

                'name' => 'Dodoma',
                'country_code' => 'TZA',
                'district' => 'Dodoma',
                'population' => 189000,
            ],
            [

                'name' => 'Mwanza',
                'country_code' => 'TZA',
                'district' => 'Mwanza',
                'population' => 172300,
            ],
            [

                'name' => 'Zanzibar',
                'country_code' => 'TZA',
                'district' => 'Zanzibar West',
                'population' => 157634,
            ],
            [

                'name' => 'Tanga',
                'country_code' => 'TZA',
                'district' => 'Tanga',
                'population' => 137400,
            ],
            [

                'name' => 'Mbeya',
                'country_code' => 'TZA',
                'district' => 'Mbeya',
                'population' => 130800,
            ],
            [

                'name' => 'Morogoro',
                'country_code' => 'TZA',
                'district' => 'Morogoro',
                'population' => 117800,
            ],
            [

                'name' => 'Arusha',
                'country_code' => 'TZA',
                'district' => 'Arusha',
                'population' => 102500,
            ],
            [

                'name' => 'Moshi',
                'country_code' => 'TZA',
                'district' => 'Kilimanjaro',
                'population' => 96800,
            ],
            [

                'name' => 'Tabora',
                'country_code' => 'TZA',
                'district' => 'Tabora',
                'population' => 92800,
            ],
            [

                'name' => 'København',
                'country_code' => 'DNK',
                'district' => 'København',
                'population' => 495699,
            ],
            [

                'name' => 'Århus',
                'country_code' => 'DNK',
                'district' => 'Århus',
                'population' => 284846,
            ],
            [

                'name' => 'Odense',
                'country_code' => 'DNK',
                'district' => 'Fyn',
                'population' => 183912,
            ],
            [

                'name' => 'Aalborg',
                'country_code' => 'DNK',
                'district' => 'Nordjylland',
                'population' => 161161,
            ],
            [

                'name' => 'Frederiksberg',
                'country_code' => 'DNK',
                'district' => 'Frederiksberg',
                'population' => 90327,
            ],
            [

                'name' => 'Bangkok',
                'country_code' => 'THA',
                'district' => 'Bangkok',
                'population' => 6320174,
            ],
            [

                'name' => 'Nonthaburi',
                'country_code' => 'THA',
                'district' => 'Nonthaburi',
                'population' => 292100,
            ],
            [

                'name' => 'Nakhon Ratchasima',
                'country_code' => 'THA',
                'district' => 'Nakhon Ratchasima',
                'population' => 181400,
            ],
            [

                'name' => 'Chiang Mai',
                'country_code' => 'THA',
                'district' => 'Chiang Mai',
                'population' => 171100,
            ],
            [

                'name' => 'Udon Thani',
                'country_code' => 'THA',
                'district' => 'Udon Thani',
                'population' => 158100,
            ],
            [

                'name' => 'Hat Yai',
                'country_code' => 'THA',
                'district' => 'Songkhla',
                'population' => 148632,
            ],
            [

                'name' => 'Khon Kaen',
                'country_code' => 'THA',
                'district' => 'Khon Kaen',
                'population' => 126500,
            ],
            [

                'name' => 'Pak Kret',
                'country_code' => 'THA',
                'district' => 'Nonthaburi',
                'population' => 126055,
            ],
            [

                'name' => 'Nakhon Sawan',
                'country_code' => 'THA',
                'district' => 'Nakhon Sawan',
                'population' => 123800,
            ],
            [

                'name' => 'Ubon Ratchathani',
                'country_code' => 'THA',
                'district' => 'Ubon Ratchathani',
                'population' => 116300,
            ],
            [

                'name' => 'Songkhla',
                'country_code' => 'THA',
                'district' => 'Songkhla',
                'population' => 94900,
            ],
            [

                'name' => 'Nakhon Pathom',
                'country_code' => 'THA',
                'district' => 'Nakhon Pathom',
                'population' => 94100,
            ],
            [

                'name' => 'Lomé',
                'country_code' => 'TGO',
                'district' => 'Maritime',
                'population' => 375000,
            ],
            [

                'name' => 'Fakaofo',
                'country_code' => 'TKL',
                'district' => 'Fakaofo',
                'population' => 300,
            ],
            [

                'name' => 'Nuku´alofa',
                'country_code' => 'TON',
                'district' => 'Tongatapu',
                'population' => 22400,
            ],
            [

                'name' => 'Chaguanas',
                'country_code' => 'TTO',
                'district' => 'Caroni',
                'population' => 56601,
            ],
            [

                'name' => 'Port-of-Spain',
                'country_code' => 'TTO',
                'district' => 'Port-of-Spain',
                'population' => 43396,
            ],
            [

                'name' => 'N´Djaména',
                'country_code' => 'TCD',
                'district' => 'Chari-Baguirmi',
                'population' => 530965,
            ],
            [

                'name' => 'Moundou',
                'country_code' => 'TCD',
                'district' => 'Logone Occidental',
                'population' => 99500,
            ],
            [

                'name' => 'Praha',
                'country_code' => 'CZE',
                'district' => 'Hlavní mesto Praha',
                'population' => 1181126,
            ],
            [

                'name' => 'Brno',
                'country_code' => 'CZE',
                'district' => 'Jizní Morava',
                'population' => 381862,
            ],
            [

                'name' => 'Ostrava',
                'country_code' => 'CZE',
                'district' => 'Severní Morava',
                'population' => 320041,
            ],
            [

                'name' => 'Plzen',
                'country_code' => 'CZE',
                'district' => 'Zapadní Cechy',
                'population' => 166759,
            ],
            [

                'name' => 'Olomouc',
                'country_code' => 'CZE',
                'district' => 'Severní Morava',
                'population' => 102702,
            ],
            [

                'name' => 'Liberec',
                'country_code' => 'CZE',
                'district' => 'Severní Cechy',
                'population' => 99155,
            ],
            [

                'name' => 'Ceské Budejovice',
                'country_code' => 'CZE',
                'district' => 'Jizní Cechy',
                'population' => 98186,
            ],
            [

                'name' => 'Hradec Králové',
                'country_code' => 'CZE',
                'district' => 'Východní Cechy',
                'population' => 98080,
            ],
            [

                'name' => 'Ústí nad Labem',
                'country_code' => 'CZE',
                'district' => 'Severní Cechy',
                'population' => 95491,
            ],
            [

                'name' => 'Pardubice',
                'country_code' => 'CZE',
                'district' => 'Východní Cechy',
                'population' => 91309,
            ],
            [

                'name' => 'Tunis',
                'country_code' => 'TUN',
                'district' => 'Tunis',
                'population' => 690600,
            ],
            [

                'name' => 'Sfax',
                'country_code' => 'TUN',
                'district' => 'Sfax',
                'population' => 257800,
            ],
            [

                'name' => 'Ariana',
                'country_code' => 'TUN',
                'district' => 'Ariana',
                'population' => 197000,
            ],
            [

                'name' => 'Ettadhamen',
                'country_code' => 'TUN',
                'district' => 'Ariana',
                'population' => 178600,
            ],
            [

                'name' => 'Sousse',
                'country_code' => 'TUN',
                'district' => 'Sousse',
                'population' => 145900,
            ],
            [

                'name' => 'Kairouan',
                'country_code' => 'TUN',
                'district' => 'Kairouan',
                'population' => 113100,
            ],
            [

                'name' => 'Biserta',
                'country_code' => 'TUN',
                'district' => 'Biserta',
                'population' => 108900,
            ],
            [

                'name' => 'Gabès',
                'country_code' => 'TUN',
                'district' => 'Gabès',
                'population' => 106600,
            ],
            [

                'name' => 'Istanbul',
                'country_code' => 'TUR',
                'district' => 'Istanbul',
                'population' => 8787958,
            ],
            [

                'name' => 'Ankara',
                'country_code' => 'TUR',
                'district' => 'Ankara',
                'population' => 3038159,
            ],
            [

                'name' => 'Izmir',
                'country_code' => 'TUR',
                'district' => 'Izmir',
                'population' => 2130359,
            ],
            [

                'name' => 'Adana',
                'country_code' => 'TUR',
                'district' => 'Adana',
                'population' => 1131198,
            ],
            [

                'name' => 'Bursa',
                'country_code' => 'TUR',
                'district' => 'Bursa',
                'population' => 1095842,
            ],
            [

                'name' => 'Gaziantep',
                'country_code' => 'TUR',
                'district' => 'Gaziantep',
                'population' => 789056,
            ],
            [

                'name' => 'Konya',
                'country_code' => 'TUR',
                'district' => 'Konya',
                'population' => 628364,
            ],
            [

                'name' => 'Mersin (Içel)',
                'country_code' => 'TUR',
                'district' => 'Içel',
                'population' => 587212,
            ],
            [

                'name' => 'Antalya',
                'country_code' => 'TUR',
                'district' => 'Antalya',
                'population' => 564914,
            ],
            [

                'name' => 'Diyarbakir',
                'country_code' => 'TUR',
                'district' => 'Diyarbakir',
                'population' => 479884,
            ],
            [

                'name' => 'Kayseri',
                'country_code' => 'TUR',
                'district' => 'Kayseri',
                'population' => 475657,
            ],
            [

                'name' => 'Eskisehir',
                'country_code' => 'TUR',
                'district' => 'Eskisehir',
                'population' => 470781,
            ],
            [

                'name' => 'Sanliurfa',
                'country_code' => 'TUR',
                'district' => 'Sanliurfa',
                'population' => 405905,
            ],
            [

                'name' => 'Samsun',
                'country_code' => 'TUR',
                'district' => 'Samsun',
                'population' => 339871,
            ],
            [

                'name' => 'Malatya',
                'country_code' => 'TUR',
                'district' => 'Malatya',
                'population' => 330312,
            ],
            [

                'name' => 'Gebze',
                'country_code' => 'TUR',
                'district' => 'Kocaeli',
                'population' => 264170,
            ],
            [

                'name' => 'Denizli',
                'country_code' => 'TUR',
                'district' => 'Denizli',
                'population' => 253848,
            ],
            [

                'name' => 'Sivas',
                'country_code' => 'TUR',
                'district' => 'Sivas',
                'population' => 246642,
            ],
            [

                'name' => 'Erzurum',
                'country_code' => 'TUR',
                'district' => 'Erzurum',
                'population' => 246535,
            ],
            [

                'name' => 'Tarsus',
                'country_code' => 'TUR',
                'district' => 'Adana',
                'population' => 246206,
            ],
            [

                'name' => 'Kahramanmaras',
                'country_code' => 'TUR',
                'district' => 'Kahramanmaras',
                'population' => 245772,
            ],
            [

                'name' => 'Elâzig',
                'country_code' => 'TUR',
                'district' => 'Elâzig',
                'population' => 228815,
            ],
            [

                'name' => 'Van',
                'country_code' => 'TUR',
                'district' => 'Van',
                'population' => 219319,
            ],
            [

                'name' => 'Sultanbeyli',
                'country_code' => 'TUR',
                'district' => 'Istanbul',
                'population' => 211068,
            ],
            [

                'name' => 'Izmit (Kocaeli)',
                'country_code' => 'TUR',
                'district' => 'Kocaeli',
                'population' => 210068,
            ],
            [

                'name' => 'Manisa',
                'country_code' => 'TUR',
                'district' => 'Manisa',
                'population' => 207148,
            ],
            [

                'name' => 'Batman',
                'country_code' => 'TUR',
                'district' => 'Batman',
                'population' => 203793,
            ],
            [

                'name' => 'Balikesir',
                'country_code' => 'TUR',
                'district' => 'Balikesir',
                'population' => 196382,
            ],
            [

                'name' => 'Sakarya (Adapazari)',
                'country_code' => 'TUR',
                'district' => 'Sakarya',
                'population' => 190641,
            ],
            [

                'name' => 'Iskenderun',
                'country_code' => 'TUR',
                'district' => 'Hatay',
                'population' => 153022,
            ],
            [

                'name' => 'Osmaniye',
                'country_code' => 'TUR',
                'district' => 'Osmaniye',
                'population' => 146003,
            ],
            [

                'name' => 'Çorum',
                'country_code' => 'TUR',
                'district' => 'Çorum',
                'population' => 145495,
            ],
            [

                'name' => 'Kütahya',
                'country_code' => 'TUR',
                'district' => 'Kütahya',
                'population' => 144761,
            ],
            [

                'name' => 'Hatay (Antakya)',
                'country_code' => 'TUR',
                'district' => 'Hatay',
                'population' => 143982,
            ],
            [

                'name' => 'Kirikkale',
                'country_code' => 'TUR',
                'district' => 'Kirikkale',
                'population' => 142044,
            ],
            [

                'name' => 'Adiyaman',
                'country_code' => 'TUR',
                'district' => 'Adiyaman',
                'population' => 141529,
            ],
            [

                'name' => 'Trabzon',
                'country_code' => 'TUR',
                'district' => 'Trabzon',
                'population' => 138234,
            ],
            [

                'name' => 'Ordu',
                'country_code' => 'TUR',
                'district' => 'Ordu',
                'population' => 133642,
            ],
            [

                'name' => 'Aydin',
                'country_code' => 'TUR',
                'district' => 'Aydin',
                'population' => 128651,
            ],
            [

                'name' => 'Usak',
                'country_code' => 'TUR',
                'district' => 'Usak',
                'population' => 128162,
            ],
            [

                'name' => 'Edirne',
                'country_code' => 'TUR',
                'district' => 'Edirne',
                'population' => 123383,
            ],
            [

                'name' => 'Çorlu',
                'country_code' => 'TUR',
                'district' => 'Tekirdag',
                'population' => 123300,
            ],
            [

                'name' => 'Isparta',
                'country_code' => 'TUR',
                'district' => 'Isparta',
                'population' => 121911,
            ],
            [

                'name' => 'Karabük',
                'country_code' => 'TUR',
                'district' => 'Karabük',
                'population' => 118285,
            ],
            [

                'name' => 'Kilis',
                'country_code' => 'TUR',
                'district' => 'Kilis',
                'population' => 118245,
            ],
            [

                'name' => 'Alanya',
                'country_code' => 'TUR',
                'district' => 'Antalya',
                'population' => 117300,
            ],
            [

                'name' => 'Kiziltepe',
                'country_code' => 'TUR',
                'district' => 'Mardin',
                'population' => 112000,
            ],
            [

                'name' => 'Zonguldak',
                'country_code' => 'TUR',
                'district' => 'Zonguldak',
                'population' => 111542,
            ],
            [

                'name' => 'Siirt',
                'country_code' => 'TUR',
                'district' => 'Siirt',
                'population' => 107100,
            ],
            [

                'name' => 'Viransehir',
                'country_code' => 'TUR',
                'district' => 'Sanliurfa',
                'population' => 106400,
            ],
            [

                'name' => 'Tekirdag',
                'country_code' => 'TUR',
                'district' => 'Tekirdag',
                'population' => 106077,
            ],
            [

                'name' => 'Karaman',
                'country_code' => 'TUR',
                'district' => 'Karaman',
                'population' => 104200,
            ],
            [

                'name' => 'Afyon',
                'country_code' => 'TUR',
                'district' => 'Afyon',
                'population' => 103984,
            ],
            [

                'name' => 'Aksaray',
                'country_code' => 'TUR',
                'district' => 'Aksaray',
                'population' => 102681,
            ],
            [

                'name' => 'Ceyhan',
                'country_code' => 'TUR',
                'district' => 'Adana',
                'population' => 102412,
            ],
            [

                'name' => 'Erzincan',
                'country_code' => 'TUR',
                'district' => 'Erzincan',
                'population' => 102304,
            ],
            [

                'name' => 'Bismil',
                'country_code' => 'TUR',
                'district' => 'Diyarbakir',
                'population' => 101400,
            ],
            [

                'name' => 'Nazilli',
                'country_code' => 'TUR',
                'district' => 'Aydin',
                'population' => 99900,
            ],
            [

                'name' => 'Tokat',
                'country_code' => 'TUR',
                'district' => 'Tokat',
                'population' => 99500,
            ],
            [

                'name' => 'Kars',
                'country_code' => 'TUR',
                'district' => 'Kars',
                'population' => 93000,
            ],
            [

                'name' => 'Inegöl',
                'country_code' => 'TUR',
                'district' => 'Bursa',
                'population' => 90500,
            ],
            [

                'name' => 'Bandirma',
                'country_code' => 'TUR',
                'district' => 'Balikesir',
                'population' => 90200,
            ],
            [

                'name' => 'Ashgabat',
                'country_code' => 'TKM',
                'district' => 'Ahal',
                'population' => 540600,
            ],
            [

                'name' => 'Chärjew',
                'country_code' => 'TKM',
                'district' => 'Lebap',
                'population' => 189200,
            ],
            [

                'name' => 'Dashhowuz',
                'country_code' => 'TKM',
                'district' => 'Dashhowuz',
                'population' => 141800,
            ],
            [

                'name' => 'Mary',
                'country_code' => 'TKM',
                'district' => 'Mary',
                'population' => 101000,
            ],
            [

                'name' => 'Cockburn Town',
                'country_code' => 'TCA',
                'district' => 'Grand Turk',
                'population' => 4800,
            ],
            [

                'name' => 'Funafuti',
                'country_code' => 'TUV',
                'district' => 'Funafuti',
                'population' => 4600,
            ],
            [

                'name' => 'Kampala',
                'country_code' => 'UGA',
                'district' => 'Central',
                'population' => 890800,
            ],
            [

                'name' => 'Kyiv',
                'country_code' => 'UKR',
                'district' => 'Kiova',
                'population' => 2624000,
            ],
            [

                'name' => 'Harkova [Harkiv]',
                'country_code' => 'UKR',
                'district' => 'Harkova',
                'population' => 1500000,
            ],
            [

                'name' => 'Dnipropetrovsk',
                'country_code' => 'UKR',
                'district' => 'Dnipropetrovsk',
                'population' => 1103000,
            ],
            [

                'name' => 'Donetsk',
                'country_code' => 'UKR',
                'district' => 'Donetsk',
                'population' => 1050000,
            ],
            [

                'name' => 'Odesa',
                'country_code' => 'UKR',
                'district' => 'Odesa',
                'population' => 1011000,
            ],
            [

                'name' => 'Zaporizzja',
                'country_code' => 'UKR',
                'district' => 'Zaporizzja',
                'population' => 848000,
            ],
            [

                'name' => 'Lviv',
                'country_code' => 'UKR',
                'district' => 'Lviv',
                'population' => 788000,
            ],
            [

                'name' => 'Kryvyi Rig',
                'country_code' => 'UKR',
                'district' => 'Dnipropetrovsk',
                'population' => 703000,
            ],
            [

                'name' => 'Mykolajiv',
                'country_code' => 'UKR',
                'district' => 'Mykolajiv',
                'population' => 508000,
            ],
            [

                'name' => 'Mariupol',
                'country_code' => 'UKR',
                'district' => 'Donetsk',
                'population' => 490000,
            ],
            [

                'name' => 'Lugansk',
                'country_code' => 'UKR',
                'district' => 'Lugansk',
                'population' => 469000,
            ],
            [

                'name' => 'Vinnytsja',
                'country_code' => 'UKR',
                'district' => 'Vinnytsja',
                'population' => 391000,
            ],
            [

                'name' => 'Makijivka',
                'country_code' => 'UKR',
                'district' => 'Donetsk',
                'population' => 384000,
            ],
            [

                'name' => 'Herson',
                'country_code' => 'UKR',
                'district' => 'Herson',
                'population' => 353000,
            ],
            [

                'name' => 'Sevastopol',
                'country_code' => 'UKR',
                'district' => 'Krim',
                'population' => 348000,
            ],
            [

                'name' => 'Simferopol',
                'country_code' => 'UKR',
                'district' => 'Krim',
                'population' => 339000,
            ],
            [

                'name' => 'Pultava [Poltava]',
                'country_code' => 'UKR',
                'district' => 'Pultava',
                'population' => 313000,
            ],
            [

                'name' => 'Tšernigiv',
                'country_code' => 'UKR',
                'district' => 'Tšernigiv',
                'population' => 313000,
            ],
            [

                'name' => 'Tšerkasy',
                'country_code' => 'UKR',
                'district' => 'Tšerkasy',
                'population' => 309000,
            ],
            [

                'name' => 'Gorlivka',
                'country_code' => 'UKR',
                'district' => 'Donetsk',
                'population' => 299000,
            ],
            [

                'name' => 'Zytomyr',
                'country_code' => 'UKR',
                'district' => 'Zytomyr',
                'population' => 297000,
            ],
            [

                'name' => 'Sumy',
                'country_code' => 'UKR',
                'district' => 'Sumy',
                'population' => 294000,
            ],
            [

                'name' => 'Dniprodzerzynsk',
                'country_code' => 'UKR',
                'district' => 'Dnipropetrovsk',
                'population' => 270000,
            ],
            [

                'name' => 'Kirovograd',
                'country_code' => 'UKR',
                'district' => 'Kirovograd',
                'population' => 265000,
            ],
            [

                'name' => 'Hmelnytskyi',
                'country_code' => 'UKR',
                'district' => 'Hmelnytskyi',
                'population' => 262000,
            ],
            [

                'name' => 'Tšernivtsi',
                'country_code' => 'UKR',
                'district' => 'Tšernivtsi',
                'population' => 259000,
            ],
            [

                'name' => 'Rivne',
                'country_code' => 'UKR',
                'district' => 'Rivne',
                'population' => 245000,
            ],
            [

                'name' => 'Krementšuk',
                'country_code' => 'UKR',
                'district' => 'Pultava',
                'population' => 239000,
            ],
            [

                'name' => 'Ivano-Frankivsk',
                'country_code' => 'UKR',
                'district' => 'Ivano-Frankivsk',
                'population' => 237000,
            ],
            [

                'name' => 'Ternopil',
                'country_code' => 'UKR',
                'district' => 'Ternopil',
                'population' => 236000,
            ],
            [

                'name' => 'Lutsk',
                'country_code' => 'UKR',
                'district' => 'Volynia',
                'population' => 217000,
            ],
            [

                'name' => 'Bila Tserkva',
                'country_code' => 'UKR',
                'district' => 'Kiova',
                'population' => 215000,
            ],
            [

                'name' => 'Kramatorsk',
                'country_code' => 'UKR',
                'district' => 'Donetsk',
                'population' => 186000,
            ],
            [

                'name' => 'Melitopol',
                'country_code' => 'UKR',
                'district' => 'Zaporizzja',
                'population' => 169000,
            ],
            [

                'name' => 'Kertš',
                'country_code' => 'UKR',
                'district' => 'Krim',
                'population' => 162000,
            ],
            [

                'name' => 'Nikopol',
                'country_code' => 'UKR',
                'district' => 'Dnipropetrovsk',
                'population' => 149000,
            ],
            [

                'name' => 'Berdjansk',
                'country_code' => 'UKR',
                'district' => 'Zaporizzja',
                'population' => 130000,
            ],
            [

                'name' => 'Pavlograd',
                'country_code' => 'UKR',
                'district' => 'Dnipropetrovsk',
                'population' => 127000,
            ],
            [

                'name' => 'Sjeverodonetsk',
                'country_code' => 'UKR',
                'district' => 'Lugansk',
                'population' => 127000,
            ],
            [

                'name' => 'Slovjansk',
                'country_code' => 'UKR',
                'district' => 'Donetsk',
                'population' => 127000,
            ],
            [

                'name' => 'Uzgorod',
                'country_code' => 'UKR',
                'district' => 'Taka-Karpatia',
                'population' => 127000,
            ],
            [

                'name' => 'Altševsk',
                'country_code' => 'UKR',
                'district' => 'Lugansk',
                'population' => 119000,
            ],
            [

                'name' => 'Lysytšansk',
                'country_code' => 'UKR',
                'district' => 'Lugansk',
                'population' => 116000,
            ],
            [

                'name' => 'Jevpatorija',
                'country_code' => 'UKR',
                'district' => 'Krim',
                'population' => 112000,
            ],
            [

                'name' => 'Kamjanets-Podilskyi',
                'country_code' => 'UKR',
                'district' => 'Hmelnytskyi',
                'population' => 109000,
            ],
            [

                'name' => 'Jenakijeve',
                'country_code' => 'UKR',
                'district' => 'Donetsk',
                'population' => 105000,
            ],
            [

                'name' => 'Krasnyi Lutš',
                'country_code' => 'UKR',
                'district' => 'Lugansk',
                'population' => 101000,
            ],
            [

                'name' => 'Stahanov',
                'country_code' => 'UKR',
                'district' => 'Lugansk',
                'population' => 101000,
            ],
            [

                'name' => 'Oleksandrija',
                'country_code' => 'UKR',
                'district' => 'Kirovograd',
                'population' => 99000,
            ],
            [

                'name' => 'Konotop',
                'country_code' => 'UKR',
                'district' => 'Sumy',
                'population' => 96000,
            ],
            [

                'name' => 'Kostjantynivka',
                'country_code' => 'UKR',
                'district' => 'Donetsk',
                'population' => 95000,
            ],
            [

                'name' => 'Berdytšiv',
                'country_code' => 'UKR',
                'district' => 'Zytomyr',
                'population' => 90000,
            ],
            [

                'name' => 'Izmajil',
                'country_code' => 'UKR',
                'district' => 'Odesa',
                'population' => 90000,
            ],
            [

                'name' => 'Šostka',
                'country_code' => 'UKR',
                'district' => 'Sumy',
                'population' => 90000,
            ],
            [

                'name' => 'Uman',
                'country_code' => 'UKR',
                'district' => 'Tšerkasy',
                'population' => 90000,
            ],
            [

                'name' => 'Brovary',
                'country_code' => 'UKR',
                'district' => 'Kiova',
                'population' => 89000,
            ],
            [

                'name' => 'Mukatševe',
                'country_code' => 'UKR',
                'district' => 'Taka-Karpatia',
                'population' => 89000,
            ],
            [

                'name' => 'Budapest',
                'country_code' => 'HUN',
                'district' => 'Budapest',
                'population' => 1811552,
            ],
            [

                'name' => 'Debrecen',
                'country_code' => 'HUN',
                'district' => 'Hajdú-Bihar',
                'population' => 203648,
            ],
            [

                'name' => 'Miskolc',
                'country_code' => 'HUN',
                'district' => 'Borsod-Abaúj-Zemplén',
                'population' => 172357,
            ],
            [

                'name' => 'Szeged',
                'country_code' => 'HUN',
                'district' => 'Csongrád',
                'population' => 158158,
            ],
            [

                'name' => 'Pécs',
                'country_code' => 'HUN',
                'district' => 'Baranya',
                'population' => 157332,
            ],
            [

                'name' => 'Györ',
                'country_code' => 'HUN',
                'district' => 'Györ-Moson-Sopron',
                'population' => 127119,
            ],
            [

                'name' => 'Nyiregyháza',
                'country_code' => 'HUN',
                'district' => 'Szabolcs-Szatmár-Ber',
                'population' => 112419,
            ],
            [

                'name' => 'Kecskemét',
                'country_code' => 'HUN',
                'district' => 'Bács-Kiskun',
                'population' => 105606,
            ],
            [

                'name' => 'Székesfehérvár',
                'country_code' => 'HUN',
                'district' => 'Fejér',
                'population' => 105119,
            ],
            [

                'name' => 'Montevideo',
                'country_code' => 'URY',
                'district' => 'Montevideo',
                'population' => 1236000,
            ],
            [

                'name' => 'Nouméa',
                'country_code' => 'NCL',
                'district' => '–',
                'population' => 76293,
            ],
            [

                'name' => 'Auckland',
                'country_code' => 'NZL',
                'district' => 'Auckland',
                'population' => 381800,
            ],
            [

                'name' => 'Christchurch',
                'country_code' => 'NZL',
                'district' => 'Canterbury',
                'population' => 324200,
            ],
            [

                'name' => 'Manukau',
                'country_code' => 'NZL',
                'district' => 'Auckland',
                'population' => 281800,
            ],
            [

                'name' => 'North Shore',
                'country_code' => 'NZL',
                'district' => 'Auckland',
                'population' => 187700,
            ],
            [

                'name' => 'Waitakere',
                'country_code' => 'NZL',
                'district' => 'Auckland',
                'population' => 170600,
            ],
            [

                'name' => 'Wellington',
                'country_code' => 'NZL',
                'district' => 'Wellington',
                'population' => 166700,
            ],
            [

                'name' => 'Dunedin',
                'country_code' => 'NZL',
                'district' => 'Dunedin',
                'population' => 119600,
            ],
            [

                'name' => 'Hamilton',
                'country_code' => 'NZL',
                'district' => 'Hamilton',
                'population' => 117100,
            ],
            [

                'name' => 'Lower Hutt',
                'country_code' => 'NZL',
                'district' => 'Wellington',
                'population' => 98100,
            ],
            [

                'name' => 'Toskent',
                'country_code' => 'UZB',
                'district' => 'Toskent Shahri',
                'population' => 2117500,
            ],
            [

                'name' => 'Namangan',
                'country_code' => 'UZB',
                'district' => 'Namangan',
                'population' => 370500,
            ],
            [

                'name' => 'Samarkand',
                'country_code' => 'UZB',
                'district' => 'Samarkand',
                'population' => 361800,
            ],
            [

                'name' => 'Andijon',
                'country_code' => 'UZB',
                'district' => 'Andijon',
                'population' => 318600,
            ],
            [

                'name' => 'Buhoro',
                'country_code' => 'UZB',
                'district' => 'Buhoro',
                'population' => 237100,
            ],
            [

                'name' => 'Karsi',
                'country_code' => 'UZB',
                'district' => 'Qashqadaryo',
                'population' => 194100,
            ],
            [

                'name' => 'Nukus',
                'country_code' => 'UZB',
                'district' => 'Karakalpakistan',
                'population' => 194100,
            ],
            [

                'name' => 'Kükon',
                'country_code' => 'UZB',
                'district' => 'Fargona',
                'population' => 190100,
            ],
            [

                'name' => 'Fargona',
                'country_code' => 'UZB',
                'district' => 'Fargona',
                'population' => 180500,
            ],
            [

                'name' => 'Circik',
                'country_code' => 'UZB',
                'district' => 'Toskent',
                'population' => 146400,
            ],
            [

                'name' => 'Margilon',
                'country_code' => 'UZB',
                'district' => 'Fargona',
                'population' => 140800,
            ],
            [

                'name' => 'Ürgenc',
                'country_code' => 'UZB',
                'district' => 'Khorazm',
                'population' => 138900,
            ],
            [

                'name' => 'Angren',
                'country_code' => 'UZB',
                'district' => 'Toskent',
                'population' => 128000,
            ],
            [

                'name' => 'Cizah',
                'country_code' => 'UZB',
                'district' => 'Cizah',
                'population' => 124800,
            ],
            [

                'name' => 'Navoi',
                'country_code' => 'UZB',
                'district' => 'Navoi',
                'population' => 116300,
            ],
            [

                'name' => 'Olmalik',
                'country_code' => 'UZB',
                'district' => 'Toskent',
                'population' => 114900,
            ],
            [

                'name' => 'Termiz',
                'country_code' => 'UZB',
                'district' => 'Surkhondaryo',
                'population' => 109500,
            ],
            [

                'name' => 'Minsk',
                'country_code' => 'BLR',
                'district' => 'Horad Minsk',
                'population' => 1674000,
            ],
            [

                'name' => 'Gomel',
                'country_code' => 'BLR',
                'district' => 'Gomel',
                'population' => 475000,
            ],
            [

                'name' => 'Mogiljov',
                'country_code' => 'BLR',
                'district' => 'Mogiljov',
                'population' => 356000,
            ],
            [

                'name' => 'Vitebsk',
                'country_code' => 'BLR',
                'district' => 'Vitebsk',
                'population' => 340000,
            ],
            [

                'name' => 'Grodno',
                'country_code' => 'BLR',
                'district' => 'Grodno',
                'population' => 302000,
            ],
            [

                'name' => 'Brest',
                'country_code' => 'BLR',
                'district' => 'Brest',
                'population' => 286000,
            ],
            [

                'name' => 'Bobruisk',
                'country_code' => 'BLR',
                'district' => 'Mogiljov',
                'population' => 221000,
            ],
            [

                'name' => 'Baranovitši',
                'country_code' => 'BLR',
                'district' => 'Brest',
                'population' => 167000,
            ],
            [

                'name' => 'Borisov',
                'country_code' => 'BLR',
                'district' => 'Minsk',
                'population' => 151000,
            ],
            [

                'name' => 'Pinsk',
                'country_code' => 'BLR',
                'district' => 'Brest',
                'population' => 130000,
            ],
            [

                'name' => 'Orša',
                'country_code' => 'BLR',
                'district' => 'Vitebsk',
                'population' => 124000,
            ],
            [

                'name' => 'Mozyr',
                'country_code' => 'BLR',
                'district' => 'Gomel',
                'population' => 110000,
            ],
            [

                'name' => 'Novopolotsk',
                'country_code' => 'BLR',
                'district' => 'Vitebsk',
                'population' => 106000,
            ],
            [

                'name' => 'Lida',
                'country_code' => 'BLR',
                'district' => 'Grodno',
                'population' => 101000,
            ],
            [

                'name' => 'Soligorsk',
                'country_code' => 'BLR',
                'district' => 'Minsk',
                'population' => 101000,
            ],
            [

                'name' => 'Molodetšno',
                'country_code' => 'BLR',
                'district' => 'Minsk',
                'population' => 97000,
            ],
            [

                'name' => 'Mata-Utu',
                'country_code' => 'WLF',
                'district' => 'Wallis',
                'population' => 1137,
            ],
            [

                'name' => 'Port-Vila',
                'country_code' => 'VUT',
                'district' => 'Shefa',
                'population' => 33700,
            ],
            [

                'name' => 'Città del Vaticano',
                'country_code' => 'VAT',
                'district' => '–',
                'population' => 455,
            ],
            [

                'name' => 'Caracas',
                'country_code' => 'VEN',
                'district' => 'Distrito Federal',
                'population' => 1975294,
            ],
            [

                'name' => 'Maracaíbo',
                'country_code' => 'VEN',
                'district' => 'Zulia',
                'population' => 1304776,
            ],
            [

                'name' => 'Barquisimeto',
                'country_code' => 'VEN',
                'district' => 'Lara',
                'population' => 877239,
            ],
            [

                'name' => 'Valencia',
                'country_code' => 'VEN',
                'district' => 'Carabobo',
                'population' => 794246,
            ],
            [

                'name' => 'Ciudad Guayana',
                'country_code' => 'VEN',
                'district' => 'Bolívar',
                'population' => 663713,
            ],
            [

                'name' => 'Petare',
                'country_code' => 'VEN',
                'district' => 'Miranda',
                'population' => 488868,
            ],
            [

                'name' => 'Maracay',
                'country_code' => 'VEN',
                'district' => 'Aragua',
                'population' => 444443,
            ],
            [

                'name' => 'Barcelona',
                'country_code' => 'VEN',
                'district' => 'Anzoátegui',
                'population' => 322267,
            ],
            [

                'name' => 'Maturín',
                'country_code' => 'VEN',
                'district' => 'Monagas',
                'population' => 319726,
            ],
            [

                'name' => 'San Cristóbal',
                'country_code' => 'VEN',
                'district' => 'Táchira',
                'population' => 319373,
            ],
            [

                'name' => 'Ciudad Bolívar',
                'country_code' => 'VEN',
                'district' => 'Bolívar',
                'population' => 301107,
            ],
            [

                'name' => 'Cumaná',
                'country_code' => 'VEN',
                'district' => 'Sucre',
                'population' => 293105,
            ],
            [

                'name' => 'Mérida',
                'country_code' => 'VEN',
                'district' => 'Mérida',
                'population' => 224887,
            ],
            [

                'name' => 'Cabimas',
                'country_code' => 'VEN',
                'district' => 'Zulia',
                'population' => 221329,
            ],
            [

                'name' => 'Barinas',
                'country_code' => 'VEN',
                'district' => 'Barinas',
                'population' => 217831,
            ],
            [

                'name' => 'Turmero',
                'country_code' => 'VEN',
                'district' => 'Aragua',
                'population' => 217499,
            ],
            [

                'name' => 'Baruta',
                'country_code' => 'VEN',
                'district' => 'Miranda',
                'population' => 207290,
            ],
            [

                'name' => 'Puerto Cabello',
                'country_code' => 'VEN',
                'district' => 'Carabobo',
                'population' => 187722,
            ],
            [

                'name' => 'Santa Ana de Coro',
                'country_code' => 'VEN',
                'district' => 'Falcón',
                'population' => 185766,
            ],
            [

                'name' => 'Los Teques',
                'country_code' => 'VEN',
                'district' => 'Miranda',
                'population' => 178784,
            ],
            [

                'name' => 'Punto Fijo',
                'country_code' => 'VEN',
                'district' => 'Falcón',
                'population' => 167215,
            ],
            [

                'name' => 'Guarenas',
                'country_code' => 'VEN',
                'district' => 'Miranda',
                'population' => 165889,
            ],
            [

                'name' => 'Acarigua',
                'country_code' => 'VEN',
                'district' => 'Portuguesa',
                'population' => 158954,
            ],
            [

                'name' => 'Puerto La Cruz',
                'country_code' => 'VEN',
                'district' => 'Anzoátegui',
                'population' => 155700,
            ],
            [

                'name' => 'Ciudad Losada',
                'country_code' => 'VEN',
                'district' => '',
                'population' => 134501,
            ],
            [

                'name' => 'Guacara',
                'country_code' => 'VEN',
                'district' => 'Carabobo',
                'population' => 131334,
            ],
            [

                'name' => 'Valera',
                'country_code' => 'VEN',
                'district' => 'Trujillo',
                'population' => 130281,
            ],
            [

                'name' => 'Guanare',
                'country_code' => 'VEN',
                'district' => 'Portuguesa',
                'population' => 125621,
            ],
            [

                'name' => 'Carúpano',
                'country_code' => 'VEN',
                'district' => 'Sucre',
                'population' => 119639,
            ],
            [

                'name' => 'Catia La Mar',
                'country_code' => 'VEN',
                'district' => 'Distrito Federal',
                'population' => 117012,
            ],
            [

                'name' => 'El Tigre',
                'country_code' => 'VEN',
                'district' => 'Anzoátegui',
                'population' => 116256,
            ],
            [

                'name' => 'Guatire',
                'country_code' => 'VEN',
                'district' => 'Miranda',
                'population' => 109121,
            ],
            [

                'name' => 'Calabozo',
                'country_code' => 'VEN',
                'district' => 'Guárico',
                'population' => 107146,
            ],
            [

                'name' => 'Pozuelos',
                'country_code' => 'VEN',
                'district' => 'Anzoátegui',
                'population' => 105690,
            ],
            [

                'name' => 'Ciudad Ojeda',
                'country_code' => 'VEN',
                'district' => 'Zulia',
                'population' => 99354,
            ],
            [

                'name' => 'Ocumare del Tuy',
                'country_code' => 'VEN',
                'district' => 'Miranda',
                'population' => 97168,
            ],
            [

                'name' => 'Valle de la Pascua',
                'country_code' => 'VEN',
                'district' => 'Guárico',
                'population' => 95927,
            ],
            [

                'name' => 'Araure',
                'country_code' => 'VEN',
                'district' => 'Portuguesa',
                'population' => 94269,
            ],
            [

                'name' => 'San Fernando de Apure',
                'country_code' => 'VEN',
                'district' => 'Apure',
                'population' => 93809,
            ],
            [

                'name' => 'San Felipe',
                'country_code' => 'VEN',
                'district' => 'Yaracuy',
                'population' => 90940,
            ],
            [

                'name' => 'El Limón',
                'country_code' => 'VEN',
                'district' => 'Aragua',
                'population' => 90000,
            ],
            [

                'name' => 'Moscow',
                'country_code' => 'RUS',
                'district' => 'Moscow (City)',
                'population' => 8389200,
            ],
            [

                'name' => 'St Petersburg',
                'country_code' => 'RUS',
                'district' => 'Pietari',
                'population' => 4694000,
            ],
            [

                'name' => 'Novosibirsk',
                'country_code' => 'RUS',
                'district' => 'Novosibirsk',
                'population' => 1398800,
            ],
            [

                'name' => 'Nizni Novgorod',
                'country_code' => 'RUS',
                'district' => 'Nizni Novgorod',
                'population' => 1357000,
            ],
            [

                'name' => 'Jekaterinburg',
                'country_code' => 'RUS',
                'district' => 'Sverdlovsk',
                'population' => 1266300,
            ],
            [

                'name' => 'Samara',
                'country_code' => 'RUS',
                'district' => 'Samara',
                'population' => 1156100,
            ],
            [

                'name' => 'Omsk',
                'country_code' => 'RUS',
                'district' => 'Omsk',
                'population' => 1148900,
            ],
            [

                'name' => 'Kazan',
                'country_code' => 'RUS',
                'district' => 'Tatarstan',
                'population' => 1101000,
            ],
            [

                'name' => 'Ufa',
                'country_code' => 'RUS',
                'district' => 'Baškortostan',
                'population' => 1091200,
            ],
            [

                'name' => 'Tšeljabinsk',
                'country_code' => 'RUS',
                'district' => 'Tšeljabinsk',
                'population' => 1083200,
            ],
            [

                'name' => 'Rostov-na-Donu',
                'country_code' => 'RUS',
                'district' => 'Rostov-na-Donu',
                'population' => 1012700,
            ],
            [

                'name' => 'Perm',
                'country_code' => 'RUS',
                'district' => 'Perm',
                'population' => 1009700,
            ],
            [

                'name' => 'Volgograd',
                'country_code' => 'RUS',
                'district' => 'Volgograd',
                'population' => 993400,
            ],
            [

                'name' => 'Voronez',
                'country_code' => 'RUS',
                'district' => 'Voronez',
                'population' => 907700,
            ],
            [

                'name' => 'Krasnojarsk',
                'country_code' => 'RUS',
                'district' => 'Krasnojarsk',
                'population' => 875500,
            ],
            [

                'name' => 'Saratov',
                'country_code' => 'RUS',
                'district' => 'Saratov',
                'population' => 874000,
            ],
            [

                'name' => 'Toljatti',
                'country_code' => 'RUS',
                'district' => 'Samara',
                'population' => 722900,
            ],
            [

                'name' => 'Uljanovsk',
                'country_code' => 'RUS',
                'district' => 'Uljanovsk',
                'population' => 667400,
            ],
            [

                'name' => 'Izevsk',
                'country_code' => 'RUS',
                'district' => 'Udmurtia',
                'population' => 652800,
            ],
            [

                'name' => 'Krasnodar',
                'country_code' => 'RUS',
                'district' => 'Krasnodar',
                'population' => 639000,
            ],
            [

                'name' => 'Jaroslavl',
                'country_code' => 'RUS',
                'district' => 'Jaroslavl',
                'population' => 616700,
            ],
            [

                'name' => 'Habarovsk',
                'country_code' => 'RUS',
                'district' => 'Habarovsk',
                'population' => 609400,
            ],
            [

                'name' => 'Vladivostok',
                'country_code' => 'RUS',
                'district' => 'Primorje',
                'population' => 606200,
            ],
            [

                'name' => 'Irkutsk',
                'country_code' => 'RUS',
                'district' => 'Irkutsk',
                'population' => 593700,
            ],
            [

                'name' => 'Barnaul',
                'country_code' => 'RUS',
                'district' => 'Altai',
                'population' => 580100,
            ],
            [

                'name' => 'Novokuznetsk',
                'country_code' => 'RUS',
                'district' => 'Kemerovo',
                'population' => 561600,
            ],
            [

                'name' => 'Penza',
                'country_code' => 'RUS',
                'district' => 'Penza',
                'population' => 532200,
            ],
            [

                'name' => 'Rjazan',
                'country_code' => 'RUS',
                'district' => 'Rjazan',
                'population' => 529900,
            ],
            [

                'name' => 'Orenburg',
                'country_code' => 'RUS',
                'district' => 'Orenburg',
                'population' => 523600,
            ],
            [

                'name' => 'Lipetsk',
                'country_code' => 'RUS',
                'district' => 'Lipetsk',
                'population' => 521000,
            ],
            [

                'name' => 'Nabereznyje Tšelny',
                'country_code' => 'RUS',
                'district' => 'Tatarstan',
                'population' => 514700,
            ],
            [

                'name' => 'Tula',
                'country_code' => 'RUS',
                'district' => 'Tula',
                'population' => 506100,
            ],
            [

                'name' => 'Tjumen',
                'country_code' => 'RUS',
                'district' => 'Tjumen',
                'population' => 503400,
            ],
            [

                'name' => 'Kemerovo',
                'country_code' => 'RUS',
                'district' => 'Kemerovo',
                'population' => 492700,
            ],
            [

                'name' => 'Astrahan',
                'country_code' => 'RUS',
                'district' => 'Astrahan',
                'population' => 486100,
            ],
            [

                'name' => 'Tomsk',
                'country_code' => 'RUS',
                'district' => 'Tomsk',
                'population' => 482100,
            ],
            [

                'name' => 'Kirov',
                'country_code' => 'RUS',
                'district' => 'Kirov',
                'population' => 466200,
            ],
            [

                'name' => 'Ivanovo',
                'country_code' => 'RUS',
                'district' => 'Ivanovo',
                'population' => 459200,
            ],
            [

                'name' => 'Tšeboksary',
                'country_code' => 'RUS',
                'district' => 'Tšuvassia',
                'population' => 459200,
            ],
            [

                'name' => 'Brjansk',
                'country_code' => 'RUS',
                'district' => 'Brjansk',
                'population' => 457400,
            ],
            [

                'name' => 'Tver',
                'country_code' => 'RUS',
                'district' => 'Tver',
                'population' => 454900,
            ],
            [

                'name' => 'Kursk',
                'country_code' => 'RUS',
                'district' => 'Kursk',
                'population' => 443500,
            ],
            [

                'name' => 'Magnitogorsk',
                'country_code' => 'RUS',
                'district' => 'Tšeljabinsk',
                'population' => 427900,
            ],
            [

                'name' => 'Kaliningrad',
                'country_code' => 'RUS',
                'district' => 'Kaliningrad',
                'population' => 424400,
            ],
            [

                'name' => 'Nizni Tagil',
                'country_code' => 'RUS',
                'district' => 'Sverdlovsk',
                'population' => 390900,
            ],
            [

                'name' => 'Murmansk',
                'country_code' => 'RUS',
                'district' => 'Murmansk',
                'population' => 376300,
            ],
            [

                'name' => 'Ulan-Ude',
                'country_code' => 'RUS',
                'district' => 'Burjatia',
                'population' => 370400,
            ],
            [

                'name' => 'Kurgan',
                'country_code' => 'RUS',
                'district' => 'Kurgan',
                'population' => 364700,
            ],
            [

                'name' => 'Arkangeli',
                'country_code' => 'RUS',
                'district' => 'Arkangeli',
                'population' => 361800,
            ],
            [

                'name' => 'Sotši',
                'country_code' => 'RUS',
                'district' => 'Krasnodar',
                'population' => 358600,
            ],
            [

                'name' => 'Smolensk',
                'country_code' => 'RUS',
                'district' => 'Smolensk',
                'population' => 353400,
            ],
            [

                'name' => 'Orjol',
                'country_code' => 'RUS',
                'district' => 'Orjol',
                'population' => 344500,
            ],
            [

                'name' => 'Stavropol',
                'country_code' => 'RUS',
                'district' => 'Stavropol',
                'population' => 343300,
            ],
            [

                'name' => 'Belgorod',
                'country_code' => 'RUS',
                'district' => 'Belgorod',
                'population' => 342000,
            ],
            [

                'name' => 'Kaluga',
                'country_code' => 'RUS',
                'district' => 'Kaluga',
                'population' => 339300,
            ],
            [

                'name' => 'Vladimir',
                'country_code' => 'RUS',
                'district' => 'Vladimir',
                'population' => 337100,
            ],
            [

                'name' => 'Mahatškala',
                'country_code' => 'RUS',
                'district' => 'Dagestan',
                'population' => 332800,
            ],
            [

                'name' => 'Tšerepovets',
                'country_code' => 'RUS',
                'district' => 'Vologda',
                'population' => 324400,
            ],
            [

                'name' => 'Saransk',
                'country_code' => 'RUS',
                'district' => 'Mordva',
                'population' => 314800,
            ],
            [

                'name' => 'Tambov',
                'country_code' => 'RUS',
                'district' => 'Tambov',
                'population' => 312000,
            ],
            [

                'name' => 'Vladikavkaz',
                'country_code' => 'RUS',
                'district' => 'North Ossetia-Alania',
                'population' => 310100,
            ],
            [

                'name' => 'Tšita',
                'country_code' => 'RUS',
                'district' => 'Tšita',
                'population' => 309900,
            ],
            [

                'name' => 'Vologda',
                'country_code' => 'RUS',
                'district' => 'Vologda',
                'population' => 302500,
            ],
            [

                'name' => 'Veliki Novgorod',
                'country_code' => 'RUS',
                'district' => 'Novgorod',
                'population' => 299500,
            ],
            [

                'name' => 'Komsomolsk-na-Amure',
                'country_code' => 'RUS',
                'district' => 'Habarovsk',
                'population' => 291600,
            ],
            [

                'name' => 'Kostroma',
                'country_code' => 'RUS',
                'district' => 'Kostroma',
                'population' => 288100,
            ],
            [

                'name' => 'Volzski',
                'country_code' => 'RUS',
                'district' => 'Volgograd',
                'population' => 286900,
            ],
            [

                'name' => 'Taganrog',
                'country_code' => 'RUS',
                'district' => 'Rostov-na-Donu',
                'population' => 284400,
            ],
            [

                'name' => 'Petroskoi',
                'country_code' => 'RUS',
                'district' => 'Karjala',
                'population' => 282100,
            ],
            [

                'name' => 'Bratsk',
                'country_code' => 'RUS',
                'district' => 'Irkutsk',
                'population' => 277600,
            ],
            [

                'name' => 'Dzerzinsk',
                'country_code' => 'RUS',
                'district' => 'Nizni Novgorod',
                'population' => 277100,
            ],
            [

                'name' => 'Surgut',
                'country_code' => 'RUS',
                'district' => 'Hanti-Mansia',
                'population' => 274900,
            ],
            [

                'name' => 'Orsk',
                'country_code' => 'RUS',
                'district' => 'Orenburg',
                'population' => 273900,
            ],
            [

                'name' => 'Sterlitamak',
                'country_code' => 'RUS',
                'district' => 'Baškortostan',
                'population' => 265200,
            ],
            [

                'name' => 'Angarsk',
                'country_code' => 'RUS',
                'district' => 'Irkutsk',
                'population' => 264700,
            ],
            [

                'name' => 'Joškar-Ola',
                'country_code' => 'RUS',
                'district' => 'Marinmaa',
                'population' => 249200,
            ],
            [

                'name' => 'Rybinsk',
                'country_code' => 'RUS',
                'district' => 'Jaroslavl',
                'population' => 239600,
            ],
            [

                'name' => 'Prokopjevsk',
                'country_code' => 'RUS',
                'district' => 'Kemerovo',
                'population' => 237300,
            ],
            [

                'name' => 'Niznevartovsk',
                'country_code' => 'RUS',
                'district' => 'Hanti-Mansia',
                'population' => 233900,
            ],
            [

                'name' => 'Naltšik',
                'country_code' => 'RUS',
                'district' => 'Kabardi-Balkaria',
                'population' => 233400,
            ],
            [

                'name' => 'Syktyvkar',
                'country_code' => 'RUS',
                'district' => 'Komi',
                'population' => 229700,
            ],
            [

                'name' => 'Severodvinsk',
                'country_code' => 'RUS',
                'district' => 'Arkangeli',
                'population' => 229300,
            ],
            [

                'name' => 'Bijsk',
                'country_code' => 'RUS',
                'district' => 'Altai',
                'population' => 225000,
            ],
            [

                'name' => 'Niznekamsk',
                'country_code' => 'RUS',
                'district' => 'Tatarstan',
                'population' => 223400,
            ],
            [

                'name' => 'Blagoveštšensk',
                'country_code' => 'RUS',
                'district' => 'Amur',
                'population' => 222000,
            ],
            [

                'name' => 'Šahty',
                'country_code' => 'RUS',
                'district' => 'Rostov-na-Donu',
                'population' => 221800,
            ],
            [

                'name' => 'Staryi Oskol',
                'country_code' => 'RUS',
                'district' => 'Belgorod',
                'population' => 213800,
            ],
            [

                'name' => 'Zelenograd',
                'country_code' => 'RUS',
                'district' => 'Moscow (City)',
                'population' => 207100,
            ],
            [

                'name' => 'Balakovo',
                'country_code' => 'RUS',
                'district' => 'Saratov',
                'population' => 206000,
            ],
            [

                'name' => 'Novorossijsk',
                'country_code' => 'RUS',
                'district' => 'Krasnodar',
                'population' => 203300,
            ],
            [

                'name' => 'Pihkova',
                'country_code' => 'RUS',
                'district' => 'Pihkova',
                'population' => 201500,
            ],
            [

                'name' => 'Zlatoust',
                'country_code' => 'RUS',
                'district' => 'Tšeljabinsk',
                'population' => 196900,
            ],
            [

                'name' => 'Jakutsk',
                'country_code' => 'RUS',
                'district' => 'Saha (Jakutia)',
                'population' => 195400,
            ],
            [

                'name' => 'Podolsk',
                'country_code' => 'RUS',
                'district' => 'Moskova',
                'population' => 194300,
            ],
            [

                'name' => 'Petropavlovsk-Kamtšatski',
                'country_code' => 'RUS',
                'district' => 'Kamtšatka',
                'population' => 194100,
            ],
            [

                'name' => 'Kamensk-Uralski',
                'country_code' => 'RUS',
                'district' => 'Sverdlovsk',
                'population' => 190600,
            ],
            [

                'name' => 'Engels',
                'country_code' => 'RUS',
                'district' => 'Saratov',
                'population' => 189000,
            ],
            [

                'name' => 'Syzran',
                'country_code' => 'RUS',
                'district' => 'Samara',
                'population' => 186900,
            ],
            [

                'name' => 'Grozny',
                'country_code' => 'RUS',
                'district' => 'Tšetšenia',
                'population' => 186000,
            ],
            [

                'name' => 'Novotšerkassk',
                'country_code' => 'RUS',
                'district' => 'Rostov-na-Donu',
                'population' => 184400,
            ],
            [

                'name' => 'Berezniki',
                'country_code' => 'RUS',
                'district' => 'Perm',
                'population' => 181900,
            ],
            [

                'name' => 'Juzno-Sahalinsk',
                'country_code' => 'RUS',
                'district' => 'Sahalin',
                'population' => 179200,
            ],
            [

                'name' => 'Volgodonsk',
                'country_code' => 'RUS',
                'district' => 'Rostov-na-Donu',
                'population' => 178200,
            ],
            [

                'name' => 'Abakan',
                'country_code' => 'RUS',
                'district' => 'Hakassia',
                'population' => 169200,
            ],
            [

                'name' => 'Maikop',
                'country_code' => 'RUS',
                'district' => 'Adygea',
                'population' => 167300,
            ],
            [

                'name' => 'Miass',
                'country_code' => 'RUS',
                'district' => 'Tšeljabinsk',
                'population' => 166200,
            ],
            [

                'name' => 'Armavir',
                'country_code' => 'RUS',
                'district' => 'Krasnodar',
                'population' => 164900,
            ],
            [

                'name' => 'Ljubertsy',
                'country_code' => 'RUS',
                'district' => 'Moskova',
                'population' => 163900,
            ],
            [

                'name' => 'Rubtsovsk',
                'country_code' => 'RUS',
                'district' => 'Altai',
                'population' => 162600,
            ],
            [

                'name' => 'Kovrov',
                'country_code' => 'RUS',
                'district' => 'Vladimir',
                'population' => 159900,
            ],
            [

                'name' => 'Nahodka',
                'country_code' => 'RUS',
                'district' => 'Primorje',
                'population' => 157700,
            ],
            [

                'name' => 'Ussurijsk',
                'country_code' => 'RUS',
                'district' => 'Primorje',
                'population' => 157300,
            ],
            [

                'name' => 'Salavat',
                'country_code' => 'RUS',
                'district' => 'Baškortostan',
                'population' => 156800,
            ],
            [

                'name' => 'Mytištši',
                'country_code' => 'RUS',
                'district' => 'Moskova',
                'population' => 155700,
            ],
            [

                'name' => 'Kolomna',
                'country_code' => 'RUS',
                'district' => 'Moskova',
                'population' => 150700,
            ],
            [

                'name' => 'Elektrostal',
                'country_code' => 'RUS',
                'district' => 'Moskova',
                'population' => 147000,
            ],
            [

                'name' => 'Murom',
                'country_code' => 'RUS',
                'district' => 'Vladimir',
                'population' => 142400,
            ],
            [

                'name' => 'Kolpino',
                'country_code' => 'RUS',
                'district' => 'Pietari',
                'population' => 141200,
            ],
            [

                'name' => 'Norilsk',
                'country_code' => 'RUS',
                'district' => 'Krasnojarsk',
                'population' => 140800,
            ],
            [

                'name' => 'Almetjevsk',
                'country_code' => 'RUS',
                'district' => 'Tatarstan',
                'population' => 140700,
            ],
            [

                'name' => 'Novomoskovsk',
                'country_code' => 'RUS',
                'district' => 'Tula',
                'population' => 138100,
            ],
            [

                'name' => 'Dimitrovgrad',
                'country_code' => 'RUS',
                'district' => 'Uljanovsk',
                'population' => 137000,
            ],
            [

                'name' => 'Pervouralsk',
                'country_code' => 'RUS',
                'district' => 'Sverdlovsk',
                'population' => 136100,
            ],
            [

                'name' => 'Himki',
                'country_code' => 'RUS',
                'district' => 'Moskova',
                'population' => 133700,
            ],
            [

                'name' => 'Balašiha',
                'country_code' => 'RUS',
                'district' => 'Moskova',
                'population' => 132900,
            ],
            [

                'name' => 'Nevinnomyssk',
                'country_code' => 'RUS',
                'district' => 'Stavropol',
                'population' => 132600,
            ],
            [

                'name' => 'Pjatigorsk',
                'country_code' => 'RUS',
                'district' => 'Stavropol',
                'population' => 132500,
            ],
            [

                'name' => 'Korolev',
                'country_code' => 'RUS',
                'district' => 'Moskova',
                'population' => 132400,
            ],
            [

                'name' => 'Serpuhov',
                'country_code' => 'RUS',
                'district' => 'Moskova',
                'population' => 132000,
            ],
            [

                'name' => 'Odintsovo',
                'country_code' => 'RUS',
                'district' => 'Moskova',
                'population' => 127400,
            ],
            [

                'name' => 'Orehovo-Zujevo',
                'country_code' => 'RUS',
                'district' => 'Moskova',
                'population' => 124900,
            ],
            [

                'name' => 'Kamyšin',
                'country_code' => 'RUS',
                'district' => 'Volgograd',
                'population' => 124600,
            ],
            [

                'name' => 'Novotšeboksarsk',
                'country_code' => 'RUS',
                'district' => 'Tšuvassia',
                'population' => 123400,
            ],
            [

                'name' => 'Tšerkessk',
                'country_code' => 'RUS',
                'district' => 'Karatšai-Tšerkessia',
                'population' => 121700,
            ],
            [

                'name' => 'Atšinsk',
                'country_code' => 'RUS',
                'district' => 'Krasnojarsk',
                'population' => 121600,
            ],
            [

                'name' => 'Magadan',
                'country_code' => 'RUS',
                'district' => 'Magadan',
                'population' => 121000,
            ],
            [

                'name' => 'Mitšurinsk',
                'country_code' => 'RUS',
                'district' => 'Tambov',
                'population' => 120700,
            ],
            [

                'name' => 'Kislovodsk',
                'country_code' => 'RUS',
                'district' => 'Stavropol',
                'population' => 120400,
            ],
            [

                'name' => 'Jelets',
                'country_code' => 'RUS',
                'district' => 'Lipetsk',
                'population' => 119400,
            ],
            [

                'name' => 'Seversk',
                'country_code' => 'RUS',
                'district' => 'Tomsk',
                'population' => 118600,
            ],
            [

                'name' => 'Noginsk',
                'country_code' => 'RUS',
                'district' => 'Moskova',
                'population' => 117200,
            ],
            [

                'name' => 'Velikije Luki',
                'country_code' => 'RUS',
                'district' => 'Pihkova',
                'population' => 116300,
            ],
            [

                'name' => 'Novokuibyševsk',
                'country_code' => 'RUS',
                'district' => 'Samara',
                'population' => 116200,
            ],
            [

                'name' => 'Neftekamsk',
                'country_code' => 'RUS',
                'district' => 'Baškortostan',
                'population' => 115700,
            ],
            [

                'name' => 'Leninsk-Kuznetski',
                'country_code' => 'RUS',
                'district' => 'Kemerovo',
                'population' => 113800,
            ],
            [

                'name' => 'Oktjabrski',
                'country_code' => 'RUS',
                'district' => 'Baškortostan',
                'population' => 111500,
            ],
            [

                'name' => 'Sergijev Posad',
                'country_code' => 'RUS',
                'district' => 'Moskova',
                'population' => 111100,
            ],
            [

                'name' => 'Arzamas',
                'country_code' => 'RUS',
                'district' => 'Nizni Novgorod',
                'population' => 110700,
            ],
            [

                'name' => 'Kiseljovsk',
                'country_code' => 'RUS',
                'district' => 'Kemerovo',
                'population' => 110000,
            ],
            [

                'name' => 'Novotroitsk',
                'country_code' => 'RUS',
                'district' => 'Orenburg',
                'population' => 109600,
            ],
            [

                'name' => 'Obninsk',
                'country_code' => 'RUS',
                'district' => 'Kaluga',
                'population' => 108300,
            ],
            [

                'name' => 'Kansk',
                'country_code' => 'RUS',
                'district' => 'Krasnojarsk',
                'population' => 107400,
            ],
            [

                'name' => 'Glazov',
                'country_code' => 'RUS',
                'district' => 'Udmurtia',
                'population' => 106300,
            ],
            [

                'name' => 'Solikamsk',
                'country_code' => 'RUS',
                'district' => 'Perm',
                'population' => 106000,
            ],
            [

                'name' => 'Sarapul',
                'country_code' => 'RUS',
                'district' => 'Udmurtia',
                'population' => 105700,
            ],
            [

                'name' => 'Ust-Ilimsk',
                'country_code' => 'RUS',
                'district' => 'Irkutsk',
                'population' => 105200,
            ],
            [

                'name' => 'Štšolkovo',
                'country_code' => 'RUS',
                'district' => 'Moskova',
                'population' => 104900,
            ],
            [

                'name' => 'Mezduretšensk',
                'country_code' => 'RUS',
                'district' => 'Kemerovo',
                'population' => 104400,
            ],
            [

                'name' => 'Usolje-Sibirskoje',
                'country_code' => 'RUS',
                'district' => 'Irkutsk',
                'population' => 103500,
            ],
            [

                'name' => 'Elista',
                'country_code' => 'RUS',
                'district' => 'Kalmykia',
                'population' => 103300,
            ],
            [

                'name' => 'Novošahtinsk',
                'country_code' => 'RUS',
                'district' => 'Rostov-na-Donu',
                'population' => 101900,
            ],
            [

                'name' => 'Votkinsk',
                'country_code' => 'RUS',
                'district' => 'Udmurtia',
                'population' => 101700,
            ],
            [

                'name' => 'Kyzyl',
                'country_code' => 'RUS',
                'district' => 'Tyva',
                'population' => 101100,
            ],
            [

                'name' => 'Serov',
                'country_code' => 'RUS',
                'district' => 'Sverdlovsk',
                'population' => 100400,
            ],
            [

                'name' => 'Zelenodolsk',
                'country_code' => 'RUS',
                'district' => 'Tatarstan',
                'population' => 100200,
            ],
            [

                'name' => 'Zeleznodoroznyi',
                'country_code' => 'RUS',
                'district' => 'Moskova',
                'population' => 100100,
            ],
            [

                'name' => 'Kinešma',
                'country_code' => 'RUS',
                'district' => 'Ivanovo',
                'population' => 100000,
            ],
            [

                'name' => 'Kuznetsk',
                'country_code' => 'RUS',
                'district' => 'Penza',
                'population' => 98200,
            ],
            [

                'name' => 'Uhta',
                'country_code' => 'RUS',
                'district' => 'Komi',
                'population' => 98000,
            ],
            [

                'name' => 'Jessentuki',
                'country_code' => 'RUS',
                'district' => 'Stavropol',
                'population' => 97900,
            ],
            [

                'name' => 'Tobolsk',
                'country_code' => 'RUS',
                'district' => 'Tjumen',
                'population' => 97600,
            ],
            [

                'name' => 'Neftejugansk',
                'country_code' => 'RUS',
                'district' => 'Hanti-Mansia',
                'population' => 97400,
            ],
            [

                'name' => 'Bataisk',
                'country_code' => 'RUS',
                'district' => 'Rostov-na-Donu',
                'population' => 97300,
            ],
            [

                'name' => 'Nojabrsk',
                'country_code' => 'RUS',
                'district' => 'Yamalin Nenetsia',
                'population' => 97300,
            ],
            [

                'name' => 'Balašov',
                'country_code' => 'RUS',
                'district' => 'Saratov',
                'population' => 97100,
            ],
            [

                'name' => 'Zeleznogorsk',
                'country_code' => 'RUS',
                'district' => 'Kursk',
                'population' => 96900,
            ],
            [

                'name' => 'Zukovski',
                'country_code' => 'RUS',
                'district' => 'Moskova',
                'population' => 96500,
            ],
            [

                'name' => 'Anzero-Sudzensk',
                'country_code' => 'RUS',
                'district' => 'Kemerovo',
                'population' => 96100,
            ],
            [

                'name' => 'Bugulma',
                'country_code' => 'RUS',
                'district' => 'Tatarstan',
                'population' => 94100,
            ],
            [

                'name' => 'Zeleznogorsk',
                'country_code' => 'RUS',
                'district' => 'Krasnojarsk',
                'population' => 94000,
            ],
            [

                'name' => 'Novouralsk',
                'country_code' => 'RUS',
                'district' => 'Sverdlovsk',
                'population' => 93300,
            ],
            [

                'name' => 'Puškin',
                'country_code' => 'RUS',
                'district' => 'Pietari',
                'population' => 92900,
            ],
            [

                'name' => 'Vorkuta',
                'country_code' => 'RUS',
                'district' => 'Komi',
                'population' => 92600,
            ],
            [

                'name' => 'Derbent',
                'country_code' => 'RUS',
                'district' => 'Dagestan',
                'population' => 92300,
            ],
            [

                'name' => 'Kirovo-Tšepetsk',
                'country_code' => 'RUS',
                'district' => 'Kirov',
                'population' => 91600,
            ],
            [

                'name' => 'Krasnogorsk',
                'country_code' => 'RUS',
                'district' => 'Moskova',
                'population' => 91000,
            ],
            [

                'name' => 'Klin',
                'country_code' => 'RUS',
                'district' => 'Moskova',
                'population' => 90000,
            ],
            [

                'name' => 'Tšaikovski',
                'country_code' => 'RUS',
                'district' => 'Perm',
                'population' => 90000,
            ],
            [

                'name' => 'Novyi Urengoi',
                'country_code' => 'RUS',
                'district' => 'Yamalin Nenetsia',
                'population' => 89800,
            ],
            [

                'name' => 'Ho Chi Minh City',
                'country_code' => 'VNM',
                'district' => 'Ho Chi Minh City',
                'population' => 3980000,
            ],
            [

                'name' => 'Hanoi',
                'country_code' => 'VNM',
                'district' => 'Hanoi',
                'population' => 1410000,
            ],
            [

                'name' => 'Haiphong',
                'country_code' => 'VNM',
                'district' => 'Haiphong',
                'population' => 783133,
            ],
            [

                'name' => 'Da Nang',
                'country_code' => 'VNM',
                'district' => 'Quang Nam-Da Nang',
                'population' => 382674,
            ],
            [

                'name' => 'Biên Hoa',
                'country_code' => 'VNM',
                'district' => 'Dong Nai',
                'population' => 282095,
            ],
            [

                'name' => 'Nha Trang',
                'country_code' => 'VNM',
                'district' => 'Khanh Hoa',
                'population' => 221331,
            ],
            [

                'name' => 'Hue',
                'country_code' => 'VNM',
                'district' => 'Thua Thien-Hue',
                'population' => 219149,
            ],
            [

                'name' => 'Can Tho',
                'country_code' => 'VNM',
                'district' => 'Can Tho',
                'population' => 215587,
            ],
            [

                'name' => 'Cam Pha',
                'country_code' => 'VNM',
                'district' => 'Quang Binh',
                'population' => 209086,
            ],
            [

                'name' => 'Nam Dinh',
                'country_code' => 'VNM',
                'district' => 'Nam Ha',
                'population' => 171699,
            ],
            [

                'name' => 'Quy Nhon',
                'country_code' => 'VNM',
                'district' => 'Binh Dinh',
                'population' => 163385,
            ],
            [

                'name' => 'Vung Tau',
                'country_code' => 'VNM',
                'district' => 'Ba Ria-Vung Tau',
                'population' => 145145,
            ],
            [

                'name' => 'Rach Gia',
                'country_code' => 'VNM',
                'district' => 'Kien Giang',
                'population' => 141132,
            ],
            [

                'name' => 'Long Xuyen',
                'country_code' => 'VNM',
                'district' => 'An Giang',
                'population' => 132681,
            ],
            [

                'name' => 'Thai Nguyen',
                'country_code' => 'VNM',
                'district' => 'Bac Thai',
                'population' => 127643,
            ],
            [

                'name' => 'Hong Gai',
                'country_code' => 'VNM',
                'district' => 'Quang Ninh',
                'population' => 127484,
            ],
            [

                'name' => 'Phan Thiêt',
                'country_code' => 'VNM',
                'district' => 'Binh Thuan',
                'population' => 114236,
            ],
            [

                'name' => 'Cam Ranh',
                'country_code' => 'VNM',
                'district' => 'Khanh Hoa',
                'population' => 114041,
            ],
            [

                'name' => 'Vinh',
                'country_code' => 'VNM',
                'district' => 'Nghe An',
                'population' => 112455,
            ],
            [

                'name' => 'My Tho',
                'country_code' => 'VNM',
                'district' => 'Tien Giang',
                'population' => 108404,
            ],
            [

                'name' => 'Da Lat',
                'country_code' => 'VNM',
                'district' => 'Lam Dong',
                'population' => 106409,
            ],
            [

                'name' => 'Buon Ma Thuot',
                'country_code' => 'VNM',
                'district' => 'Dac Lac',
                'population' => 97044,
            ],
            [

                'name' => 'Tallinn',
                'country_code' => 'EST',
                'district' => 'Harjumaa',
                'population' => 403981,
            ],
            [

                'name' => 'Tartu',
                'country_code' => 'EST',
                'district' => 'Tartumaa',
                'population' => 101246,
            ],
            [

                'name' => 'New York',
                'country_code' => 'USA',
                'district' => 'New York',
                'population' => 8008278,
            ],
            [

                'name' => 'Los Angeles',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 3694820,
            ],
            [

                'name' => 'Chicago',
                'country_code' => 'USA',
                'district' => 'Illinois',
                'population' => 2896016,
            ],
            [

                'name' => 'Houston',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 1953631,
            ],
            [

                'name' => 'Philadelphia',
                'country_code' => 'USA',
                'district' => 'Pennsylvania',
                'population' => 1517550,
            ],
            [

                'name' => 'Phoenix',
                'country_code' => 'USA',
                'district' => 'Arizona',
                'population' => 1321045,
            ],
            [

                'name' => 'San Diego',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 1223400,
            ],
            [

                'name' => 'Dallas',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 1188580,
            ],
            [

                'name' => 'San Antonio',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 1144646,
            ],
            [

                'name' => 'Detroit',
                'country_code' => 'USA',
                'district' => 'Michigan',
                'population' => 951270,
            ],
            [

                'name' => 'San Jose',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 894943,
            ],
            [

                'name' => 'Indianapolis',
                'country_code' => 'USA',
                'district' => 'Indiana',
                'population' => 791926,
            ],
            [

                'name' => 'San Francisco',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 776733,
            ],
            [

                'name' => 'Jacksonville',
                'country_code' => 'USA',
                'district' => 'Florida',
                'population' => 735167,
            ],
            [

                'name' => 'Columbus',
                'country_code' => 'USA',
                'district' => 'Ohio',
                'population' => 711470,
            ],
            [

                'name' => 'Austin',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 656562,
            ],
            [

                'name' => 'Baltimore',
                'country_code' => 'USA',
                'district' => 'Maryland',
                'population' => 651154,
            ],
            [

                'name' => 'Memphis',
                'country_code' => 'USA',
                'district' => 'Tennessee',
                'population' => 650100,
            ],
            [

                'name' => 'Milwaukee',
                'country_code' => 'USA',
                'district' => 'Wisconsin',
                'population' => 596974,
            ],
            [

                'name' => 'Boston',
                'country_code' => 'USA',
                'district' => 'Massachusetts',
                'population' => 589141,
            ],
            [

                'name' => 'Washington',
                'country_code' => 'USA',
                'district' => 'District of Columbia',
                'population' => 572059,
            ],
            [

                'name' => 'Nashville-Davidson',
                'country_code' => 'USA',
                'district' => 'Tennessee',
                'population' => 569891,
            ],
            [

                'name' => 'El Paso',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 563662,
            ],
            [

                'name' => 'Seattle',
                'country_code' => 'USA',
                'district' => 'Washington',
                'population' => 563374,
            ],
            [

                'name' => 'Denver',
                'country_code' => 'USA',
                'district' => 'Colorado',
                'population' => 554636,
            ],
            [

                'name' => 'Charlotte',
                'country_code' => 'USA',
                'district' => 'North Carolina',
                'population' => 540828,
            ],
            [

                'name' => 'Fort Worth',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 534694,
            ],
            [

                'name' => 'Portland',
                'country_code' => 'USA',
                'district' => 'Oregon',
                'population' => 529121,
            ],
            [

                'name' => 'Oklahoma City',
                'country_code' => 'USA',
                'district' => 'Oklahoma',
                'population' => 506132,
            ],
            [

                'name' => 'Tucson',
                'country_code' => 'USA',
                'district' => 'Arizona',
                'population' => 486699,
            ],
            [

                'name' => 'New Orleans',
                'country_code' => 'USA',
                'district' => 'Louisiana',
                'population' => 484674,
            ],
            [

                'name' => 'Las Vegas',
                'country_code' => 'USA',
                'district' => 'Nevada',
                'population' => 478434,
            ],
            [

                'name' => 'Cleveland',
                'country_code' => 'USA',
                'district' => 'Ohio',
                'population' => 478403,
            ],
            [

                'name' => 'Long Beach',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 461522,
            ],
            [

                'name' => 'Albuquerque',
                'country_code' => 'USA',
                'district' => 'New Mexico',
                'population' => 448607,
            ],
            [

                'name' => 'Kansas City',
                'country_code' => 'USA',
                'district' => 'Missouri',
                'population' => 441545,
            ],
            [

                'name' => 'Fresno',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 427652,
            ],
            [

                'name' => 'Virginia Beach',
                'country_code' => 'USA',
                'district' => 'Virginia',
                'population' => 425257,
            ],
            [

                'name' => 'Atlanta',
                'country_code' => 'USA',
                'district' => 'Georgia',
                'population' => 416474,
            ],
            [

                'name' => 'Sacramento',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 407018,
            ],
            [

                'name' => 'Oakland',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 399484,
            ],
            [

                'name' => 'Mesa',
                'country_code' => 'USA',
                'district' => 'Arizona',
                'population' => 396375,
            ],
            [

                'name' => 'Tulsa',
                'country_code' => 'USA',
                'district' => 'Oklahoma',
                'population' => 393049,
            ],
            [

                'name' => 'Omaha',
                'country_code' => 'USA',
                'district' => 'Nebraska',
                'population' => 390007,
            ],
            [

                'name' => 'Minneapolis',
                'country_code' => 'USA',
                'district' => 'Minnesota',
                'population' => 382618,
            ],
            [

                'name' => 'Honolulu',
                'country_code' => 'USA',
                'district' => 'Hawaii',
                'population' => 371657,
            ],
            [

                'name' => 'Miami',
                'country_code' => 'USA',
                'district' => 'Florida',
                'population' => 362470,
            ],
            [

                'name' => 'Colorado Springs',
                'country_code' => 'USA',
                'district' => 'Colorado',
                'population' => 360890,
            ],
            [

                'name' => 'Saint Louis',
                'country_code' => 'USA',
                'district' => 'Missouri',
                'population' => 348189,
            ],
            [

                'name' => 'Wichita',
                'country_code' => 'USA',
                'district' => 'Kansas',
                'population' => 344284,
            ],
            [

                'name' => 'Santa Ana',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 337977,
            ],
            [

                'name' => 'Pittsburgh',
                'country_code' => 'USA',
                'district' => 'Pennsylvania',
                'population' => 334563,
            ],
            [

                'name' => 'Arlington',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 332969,
            ],
            [

                'name' => 'Cincinnati',
                'country_code' => 'USA',
                'district' => 'Ohio',
                'population' => 331285,
            ],
            [

                'name' => 'Anaheim',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 328014,
            ],
            [

                'name' => 'Toledo',
                'country_code' => 'USA',
                'district' => 'Ohio',
                'population' => 313619,
            ],
            [

                'name' => 'Tampa',
                'country_code' => 'USA',
                'district' => 'Florida',
                'population' => 303447,
            ],
            [

                'name' => 'Buffalo',
                'country_code' => 'USA',
                'district' => 'New York',
                'population' => 292648,
            ],
            [

                'name' => 'Saint Paul',
                'country_code' => 'USA',
                'district' => 'Minnesota',
                'population' => 287151,
            ],
            [

                'name' => 'Corpus Christi',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 277454,
            ],
            [

                'name' => 'Aurora',
                'country_code' => 'USA',
                'district' => 'Colorado',
                'population' => 276393,
            ],
            [

                'name' => 'Raleigh',
                'country_code' => 'USA',
                'district' => 'North Carolina',
                'population' => 276093,
            ],
            [

                'name' => 'Newark',
                'country_code' => 'USA',
                'district' => 'New Jersey',
                'population' => 273546,
            ],
            [

                'name' => 'Lexington-Fayette',
                'country_code' => 'USA',
                'district' => 'Kentucky',
                'population' => 260512,
            ],
            [

                'name' => 'Anchorage',
                'country_code' => 'USA',
                'district' => 'Alaska',
                'population' => 260283,
            ],
            [

                'name' => 'Louisville',
                'country_code' => 'USA',
                'district' => 'Kentucky',
                'population' => 256231,
            ],
            [

                'name' => 'Riverside',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 255166,
            ],
            [

                'name' => 'Saint Petersburg',
                'country_code' => 'USA',
                'district' => 'Florida',
                'population' => 248232,
            ],
            [

                'name' => 'Bakersfield',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 247057,
            ],
            [

                'name' => 'Stockton',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 243771,
            ],
            [

                'name' => 'Birmingham',
                'country_code' => 'USA',
                'district' => 'Alabama',
                'population' => 242820,
            ],
            [

                'name' => 'Jersey City',
                'country_code' => 'USA',
                'district' => 'New Jersey',
                'population' => 240055,
            ],
            [

                'name' => 'Norfolk',
                'country_code' => 'USA',
                'district' => 'Virginia',
                'population' => 234403,
            ],
            [

                'name' => 'Baton Rouge',
                'country_code' => 'USA',
                'district' => 'Louisiana',
                'population' => 227818,
            ],
            [

                'name' => 'Hialeah',
                'country_code' => 'USA',
                'district' => 'Florida',
                'population' => 226419,
            ],
            [

                'name' => 'Lincoln',
                'country_code' => 'USA',
                'district' => 'Nebraska',
                'population' => 225581,
            ],
            [

                'name' => 'Greensboro',
                'country_code' => 'USA',
                'district' => 'North Carolina',
                'population' => 223891,
            ],
            [

                'name' => 'Plano',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 222030,
            ],
            [

                'name' => 'Rochester',
                'country_code' => 'USA',
                'district' => 'New York',
                'population' => 219773,
            ],
            [

                'name' => 'Glendale',
                'country_code' => 'USA',
                'district' => 'Arizona',
                'population' => 218812,
            ],
            [

                'name' => 'Akron',
                'country_code' => 'USA',
                'district' => 'Ohio',
                'population' => 217074,
            ],
            [

                'name' => 'Garland',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 215768,
            ],
            [

                'name' => 'Madison',
                'country_code' => 'USA',
                'district' => 'Wisconsin',
                'population' => 208054,
            ],
            [

                'name' => 'Fort Wayne',
                'country_code' => 'USA',
                'district' => 'Indiana',
                'population' => 205727,
            ],
            [

                'name' => 'Fremont',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 203413,
            ],
            [

                'name' => 'Scottsdale',
                'country_code' => 'USA',
                'district' => 'Arizona',
                'population' => 202705,
            ],
            [

                'name' => 'Montgomery',
                'country_code' => 'USA',
                'district' => 'Alabama',
                'population' => 201568,
            ],
            [

                'name' => 'Shreveport',
                'country_code' => 'USA',
                'district' => 'Louisiana',
                'population' => 200145,
            ],
            [

                'name' => 'Augusta-Richmond County',
                'country_code' => 'USA',
                'district' => 'Georgia',
                'population' => 199775,
            ],
            [

                'name' => 'Lubbock',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 199564,
            ],
            [

                'name' => 'Chesapeake',
                'country_code' => 'USA',
                'district' => 'Virginia',
                'population' => 199184,
            ],
            [

                'name' => 'Mobile',
                'country_code' => 'USA',
                'district' => 'Alabama',
                'population' => 198915,
            ],
            [

                'name' => 'Des Moines',
                'country_code' => 'USA',
                'district' => 'Iowa',
                'population' => 198682,
            ],
            [

                'name' => 'Grand Rapids',
                'country_code' => 'USA',
                'district' => 'Michigan',
                'population' => 197800,
            ],
            [

                'name' => 'Richmond',
                'country_code' => 'USA',
                'district' => 'Virginia',
                'population' => 197790,
            ],
            [

                'name' => 'Yonkers',
                'country_code' => 'USA',
                'district' => 'New York',
                'population' => 196086,
            ],
            [

                'name' => 'Spokane',
                'country_code' => 'USA',
                'district' => 'Washington',
                'population' => 195629,
            ],
            [

                'name' => 'Glendale',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 194973,
            ],
            [

                'name' => 'Tacoma',
                'country_code' => 'USA',
                'district' => 'Washington',
                'population' => 193556,
            ],
            [

                'name' => 'Irving',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 191615,
            ],
            [

                'name' => 'Huntington Beach',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 189594,
            ],
            [

                'name' => 'Modesto',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 188856,
            ],
            [

                'name' => 'Durham',
                'country_code' => 'USA',
                'district' => 'North Carolina',
                'population' => 187035,
            ],
            [

                'name' => 'Columbus',
                'country_code' => 'USA',
                'district' => 'Georgia',
                'population' => 186291,
            ],
            [

                'name' => 'Orlando',
                'country_code' => 'USA',
                'district' => 'Florida',
                'population' => 185951,
            ],
            [

                'name' => 'Boise City',
                'country_code' => 'USA',
                'district' => 'Idaho',
                'population' => 185787,
            ],
            [

                'name' => 'Winston-Salem',
                'country_code' => 'USA',
                'district' => 'North Carolina',
                'population' => 185776,
            ],
            [

                'name' => 'San Bernardino',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 185401,
            ],
            [

                'name' => 'Jackson',
                'country_code' => 'USA',
                'district' => 'Mississippi',
                'population' => 184256,
            ],
            [

                'name' => 'Little Rock',
                'country_code' => 'USA',
                'district' => 'Arkansas',
                'population' => 183133,
            ],
            [

                'name' => 'Salt Lake City',
                'country_code' => 'USA',
                'district' => 'Utah',
                'population' => 181743,
            ],
            [

                'name' => 'Reno',
                'country_code' => 'USA',
                'district' => 'Nevada',
                'population' => 180480,
            ],
            [

                'name' => 'Newport News',
                'country_code' => 'USA',
                'district' => 'Virginia',
                'population' => 180150,
            ],
            [

                'name' => 'Chandler',
                'country_code' => 'USA',
                'district' => 'Arizona',
                'population' => 176581,
            ],
            [

                'name' => 'Laredo',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 176576,
            ],
            [

                'name' => 'Henderson',
                'country_code' => 'USA',
                'district' => 'Nevada',
                'population' => 175381,
            ],
            [

                'name' => 'Arlington',
                'country_code' => 'USA',
                'district' => 'Virginia',
                'population' => 174838,
            ],
            [

                'name' => 'Knoxville',
                'country_code' => 'USA',
                'district' => 'Tennessee',
                'population' => 173890,
            ],
            [

                'name' => 'Amarillo',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 173627,
            ],
            [

                'name' => 'Providence',
                'country_code' => 'USA',
                'district' => 'Rhode Island',
                'population' => 173618,
            ],
            [

                'name' => 'Chula Vista',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 173556,
            ],
            [

                'name' => 'Worcester',
                'country_code' => 'USA',
                'district' => 'Massachusetts',
                'population' => 172648,
            ],
            [

                'name' => 'Oxnard',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 170358,
            ],
            [

                'name' => 'Dayton',
                'country_code' => 'USA',
                'district' => 'Ohio',
                'population' => 166179,
            ],
            [

                'name' => 'Garden Grove',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 165196,
            ],
            [

                'name' => 'Oceanside',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 161029,
            ],
            [

                'name' => 'Tempe',
                'country_code' => 'USA',
                'district' => 'Arizona',
                'population' => 158625,
            ],
            [

                'name' => 'Huntsville',
                'country_code' => 'USA',
                'district' => 'Alabama',
                'population' => 158216,
            ],
            [

                'name' => 'Ontario',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 158007,
            ],
            [

                'name' => 'Chattanooga',
                'country_code' => 'USA',
                'district' => 'Tennessee',
                'population' => 155554,
            ],
            [

                'name' => 'Fort Lauderdale',
                'country_code' => 'USA',
                'district' => 'Florida',
                'population' => 152397,
            ],
            [

                'name' => 'Springfield',
                'country_code' => 'USA',
                'district' => 'Massachusetts',
                'population' => 152082,
            ],
            [

                'name' => 'Springfield',
                'country_code' => 'USA',
                'district' => 'Missouri',
                'population' => 151580,
            ],
            [

                'name' => 'Santa Clarita',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 151088,
            ],
            [

                'name' => 'Salinas',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 151060,
            ],
            [

                'name' => 'Tallahassee',
                'country_code' => 'USA',
                'district' => 'Florida',
                'population' => 150624,
            ],
            [

                'name' => 'Rockford',
                'country_code' => 'USA',
                'district' => 'Illinois',
                'population' => 150115,
            ],
            [

                'name' => 'Pomona',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 149473,
            ],
            [

                'name' => 'Metairie',
                'country_code' => 'USA',
                'district' => 'Louisiana',
                'population' => 149428,
            ],
            [

                'name' => 'Paterson',
                'country_code' => 'USA',
                'district' => 'New Jersey',
                'population' => 149222,
            ],
            [

                'name' => 'Overland Park',
                'country_code' => 'USA',
                'district' => 'Kansas',
                'population' => 149080,
            ],
            [

                'name' => 'Santa Rosa',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 147595,
            ],
            [

                'name' => 'Syracuse',
                'country_code' => 'USA',
                'district' => 'New York',
                'population' => 147306,
            ],
            [

                'name' => 'Kansas City',
                'country_code' => 'USA',
                'district' => 'Kansas',
                'population' => 146866,
            ],
            [

                'name' => 'Hampton',
                'country_code' => 'USA',
                'district' => 'Virginia',
                'population' => 146437,
            ],
            [

                'name' => 'Lakewood',
                'country_code' => 'USA',
                'district' => 'Colorado',
                'population' => 144126,
            ],
            [

                'name' => 'Vancouver',
                'country_code' => 'USA',
                'district' => 'Washington',
                'population' => 143560,
            ],
            [

                'name' => 'Irvine',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 143072,
            ],
            [

                'name' => 'Aurora',
                'country_code' => 'USA',
                'district' => 'Illinois',
                'population' => 142990,
            ],
            [

                'name' => 'Moreno Valley',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 142381,
            ],
            [

                'name' => 'Pasadena',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 141674,
            ],
            [

                'name' => 'Hayward',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 140030,
            ],
            [

                'name' => 'Brownsville',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 139722,
            ],
            [

                'name' => 'Bridgeport',
                'country_code' => 'USA',
                'district' => 'Connecticut',
                'population' => 139529,
            ],
            [

                'name' => 'Hollywood',
                'country_code' => 'USA',
                'district' => 'Florida',
                'population' => 139357,
            ],
            [

                'name' => 'Warren',
                'country_code' => 'USA',
                'district' => 'Michigan',
                'population' => 138247,
            ],
            [

                'name' => 'Torrance',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 137946,
            ],
            [

                'name' => 'Eugene',
                'country_code' => 'USA',
                'district' => 'Oregon',
                'population' => 137893,
            ],
            [

                'name' => 'Pembroke Pines',
                'country_code' => 'USA',
                'district' => 'Florida',
                'population' => 137427,
            ],
            [

                'name' => 'Salem',
                'country_code' => 'USA',
                'district' => 'Oregon',
                'population' => 136924,
            ],
            [

                'name' => 'Pasadena',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 133936,
            ],
            [

                'name' => 'Escondido',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 133559,
            ],
            [

                'name' => 'Sunnyvale',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 131760,
            ],
            [

                'name' => 'Savannah',
                'country_code' => 'USA',
                'district' => 'Georgia',
                'population' => 131510,
            ],
            [

                'name' => 'Fontana',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 128929,
            ],
            [

                'name' => 'Orange',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 128821,
            ],
            [

                'name' => 'Naperville',
                'country_code' => 'USA',
                'district' => 'Illinois',
                'population' => 128358,
            ],
            [

                'name' => 'Alexandria',
                'country_code' => 'USA',
                'district' => 'Virginia',
                'population' => 128283,
            ],
            [

                'name' => 'Rancho Cucamonga',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 127743,
            ],
            [

                'name' => 'Grand Prairie',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 127427,
            ],
            [

                'name' => 'East Los Angeles',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 126379,
            ],
            [

                'name' => 'Fullerton',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 126003,
            ],
            [

                'name' => 'Corona',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 124966,
            ],
            [

                'name' => 'Flint',
                'country_code' => 'USA',
                'district' => 'Michigan',
                'population' => 124943,
            ],
            [

                'name' => 'Paradise',
                'country_code' => 'USA',
                'district' => 'Nevada',
                'population' => 124682,
            ],
            [

                'name' => 'Mesquite',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 124523,
            ],
            [

                'name' => 'Sterling Heights',
                'country_code' => 'USA',
                'district' => 'Michigan',
                'population' => 124471,
            ],
            [

                'name' => 'Sioux Falls',
                'country_code' => 'USA',
                'district' => 'South Dakota',
                'population' => 123975,
            ],
            [

                'name' => 'New Haven',
                'country_code' => 'USA',
                'district' => 'Connecticut',
                'population' => 123626,
            ],
            [

                'name' => 'Topeka',
                'country_code' => 'USA',
                'district' => 'Kansas',
                'population' => 122377,
            ],
            [

                'name' => 'Concord',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 121780,
            ],
            [

                'name' => 'Evansville',
                'country_code' => 'USA',
                'district' => 'Indiana',
                'population' => 121582,
            ],
            [

                'name' => 'Hartford',
                'country_code' => 'USA',
                'district' => 'Connecticut',
                'population' => 121578,
            ],
            [

                'name' => 'Fayetteville',
                'country_code' => 'USA',
                'district' => 'North Carolina',
                'population' => 121015,
            ],
            [

                'name' => 'Cedar Rapids',
                'country_code' => 'USA',
                'district' => 'Iowa',
                'population' => 120758,
            ],
            [

                'name' => 'Elizabeth',
                'country_code' => 'USA',
                'district' => 'New Jersey',
                'population' => 120568,
            ],
            [

                'name' => 'Lansing',
                'country_code' => 'USA',
                'district' => 'Michigan',
                'population' => 119128,
            ],
            [

                'name' => 'Lancaster',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 118718,
            ],
            [

                'name' => 'Fort Collins',
                'country_code' => 'USA',
                'district' => 'Colorado',
                'population' => 118652,
            ],
            [

                'name' => 'Coral Springs',
                'country_code' => 'USA',
                'district' => 'Florida',
                'population' => 117549,
            ],
            [

                'name' => 'Stamford',
                'country_code' => 'USA',
                'district' => 'Connecticut',
                'population' => 117083,
            ],
            [

                'name' => 'Thousand Oaks',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 117005,
            ],
            [

                'name' => 'Vallejo',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 116760,
            ],
            [

                'name' => 'Palmdale',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 116670,
            ],
            [

                'name' => 'Columbia',
                'country_code' => 'USA',
                'district' => 'South Carolina',
                'population' => 116278,
            ],
            [

                'name' => 'El Monte',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 115965,
            ],
            [

                'name' => 'Abilene',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 115930,
            ],
            [

                'name' => 'North Las Vegas',
                'country_code' => 'USA',
                'district' => 'Nevada',
                'population' => 115488,
            ],
            [

                'name' => 'Ann Arbor',
                'country_code' => 'USA',
                'district' => 'Michigan',
                'population' => 114024,
            ],
            [

                'name' => 'Beaumont',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 113866,
            ],
            [

                'name' => 'Waco',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 113726,
            ],
            [

                'name' => 'Macon',
                'country_code' => 'USA',
                'district' => 'Georgia',
                'population' => 113336,
            ],
            [

                'name' => 'Independence',
                'country_code' => 'USA',
                'district' => 'Missouri',
                'population' => 113288,
            ],
            [

                'name' => 'Peoria',
                'country_code' => 'USA',
                'district' => 'Illinois',
                'population' => 112936,
            ],
            [

                'name' => 'Inglewood',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 112580,
            ],
            [

                'name' => 'Springfield',
                'country_code' => 'USA',
                'district' => 'Illinois',
                'population' => 111454,
            ],
            [

                'name' => 'Simi Valley',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 111351,
            ],
            [

                'name' => 'Lafayette',
                'country_code' => 'USA',
                'district' => 'Louisiana',
                'population' => 110257,
            ],
            [

                'name' => 'Gilbert',
                'country_code' => 'USA',
                'district' => 'Arizona',
                'population' => 109697,
            ],
            [

                'name' => 'Carrollton',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 109576,
            ],
            [

                'name' => 'Bellevue',
                'country_code' => 'USA',
                'district' => 'Washington',
                'population' => 109569,
            ],
            [

                'name' => 'West Valley City',
                'country_code' => 'USA',
                'district' => 'Utah',
                'population' => 108896,
            ],
            [

                'name' => 'Clarksville',
                'country_code' => 'USA',
                'district' => 'Tennessee',
                'population' => 108787,
            ],
            [

                'name' => 'Costa Mesa',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 108724,
            ],
            [

                'name' => 'Peoria',
                'country_code' => 'USA',
                'district' => 'Arizona',
                'population' => 108364,
            ],
            [

                'name' => 'South Bend',
                'country_code' => 'USA',
                'district' => 'Indiana',
                'population' => 107789,
            ],
            [

                'name' => 'Downey',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 107323,
            ],
            [

                'name' => 'Waterbury',
                'country_code' => 'USA',
                'district' => 'Connecticut',
                'population' => 107271,
            ],
            [

                'name' => 'Manchester',
                'country_code' => 'USA',
                'district' => 'New Hampshire',
                'population' => 107006,
            ],
            [

                'name' => 'Allentown',
                'country_code' => 'USA',
                'district' => 'Pennsylvania',
                'population' => 106632,
            ],
            [

                'name' => 'McAllen',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 106414,
            ],
            [

                'name' => 'Joliet',
                'country_code' => 'USA',
                'district' => 'Illinois',
                'population' => 106221,
            ],
            [

                'name' => 'Lowell',
                'country_code' => 'USA',
                'district' => 'Massachusetts',
                'population' => 105167,
            ],
            [

                'name' => 'Provo',
                'country_code' => 'USA',
                'district' => 'Utah',
                'population' => 105166,
            ],
            [

                'name' => 'West Covina',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 105080,
            ],
            [

                'name' => 'Wichita Falls',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 104197,
            ],
            [

                'name' => 'Erie',
                'country_code' => 'USA',
                'district' => 'Pennsylvania',
                'population' => 103717,
            ],
            [

                'name' => 'Daly City',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 103621,
            ],
            [

                'name' => 'Citrus Heights',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 103455,
            ],
            [

                'name' => 'Norwalk',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 103298,
            ],
            [

                'name' => 'Gary',
                'country_code' => 'USA',
                'district' => 'Indiana',
                'population' => 102746,
            ],
            [

                'name' => 'Berkeley',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 102743,
            ],
            [

                'name' => 'Santa Clara',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 102361,
            ],
            [

                'name' => 'Green Bay',
                'country_code' => 'USA',
                'district' => 'Wisconsin',
                'population' => 102313,
            ],
            [

                'name' => 'Cape Coral',
                'country_code' => 'USA',
                'district' => 'Florida',
                'population' => 102286,
            ],
            [

                'name' => 'Arvada',
                'country_code' => 'USA',
                'district' => 'Colorado',
                'population' => 102153,
            ],
            [

                'name' => 'Pueblo',
                'country_code' => 'USA',
                'district' => 'Colorado',
                'population' => 102121,
            ],
            [

                'name' => 'Sandy',
                'country_code' => 'USA',
                'district' => 'Utah',
                'population' => 101853,
            ],
            [

                'name' => 'Athens-Clarke County',
                'country_code' => 'USA',
                'district' => 'Georgia',
                'population' => 101489,
            ],
            [

                'name' => 'Cambridge',
                'country_code' => 'USA',
                'district' => 'Massachusetts',
                'population' => 101355,
            ],
            [

                'name' => 'Westminster',
                'country_code' => 'USA',
                'district' => 'Colorado',
                'population' => 100940,
            ],
            [

                'name' => 'San Buenaventura',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 100916,
            ],
            [

                'name' => 'Portsmouth',
                'country_code' => 'USA',
                'district' => 'Virginia',
                'population' => 100565,
            ],
            [

                'name' => 'Livonia',
                'country_code' => 'USA',
                'district' => 'Michigan',
                'population' => 100545,
            ],
            [

                'name' => 'Burbank',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 100316,
            ],
            [

                'name' => 'Clearwater',
                'country_code' => 'USA',
                'district' => 'Florida',
                'population' => 99936,
            ],
            [

                'name' => 'Midland',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 98293,
            ],
            [

                'name' => 'Davenport',
                'country_code' => 'USA',
                'district' => 'Iowa',
                'population' => 98256,
            ],
            [

                'name' => 'Mission Viejo',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 98049,
            ],
            [

                'name' => 'Miami Beach',
                'country_code' => 'USA',
                'district' => 'Florida',
                'population' => 97855,
            ],
            [

                'name' => 'Sunrise Manor',
                'country_code' => 'USA',
                'district' => 'Nevada',
                'population' => 95362,
            ],
            [

                'name' => 'New Bedford',
                'country_code' => 'USA',
                'district' => 'Massachusetts',
                'population' => 94780,
            ],
            [

                'name' => 'El Cajon',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 94578,
            ],
            [

                'name' => 'Norman',
                'country_code' => 'USA',
                'district' => 'Oklahoma',
                'population' => 94193,
            ],
            [

                'name' => 'Richmond',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 94100,
            ],
            [

                'name' => 'Albany',
                'country_code' => 'USA',
                'district' => 'New York',
                'population' => 93994,
            ],
            [

                'name' => 'Brockton',
                'country_code' => 'USA',
                'district' => 'Massachusetts',
                'population' => 93653,
            ],
            [

                'name' => 'Roanoke',
                'country_code' => 'USA',
                'district' => 'Virginia',
                'population' => 93357,
            ],
            [

                'name' => 'Billings',
                'country_code' => 'USA',
                'district' => 'Montana',
                'population' => 92988,
            ],
            [

                'name' => 'Compton',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 92864,
            ],
            [

                'name' => 'Gainesville',
                'country_code' => 'USA',
                'district' => 'Florida',
                'population' => 92291,
            ],
            [

                'name' => 'Fairfield',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 92256,
            ],
            [

                'name' => 'Arden-Arcade',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 92040,
            ],
            [

                'name' => 'San Mateo',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 91799,
            ],
            [

                'name' => 'Visalia',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 91762,
            ],
            [

                'name' => 'Boulder',
                'country_code' => 'USA',
                'district' => 'Colorado',
                'population' => 91238,
            ],
            [

                'name' => 'Cary',
                'country_code' => 'USA',
                'district' => 'North Carolina',
                'population' => 91213,
            ],
            [

                'name' => 'Santa Monica',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 91084,
            ],
            [

                'name' => 'Fall River',
                'country_code' => 'USA',
                'district' => 'Massachusetts',
                'population' => 90555,
            ],
            [

                'name' => 'Kenosha',
                'country_code' => 'USA',
                'district' => 'Wisconsin',
                'population' => 89447,
            ],
            [

                'name' => 'Elgin',
                'country_code' => 'USA',
                'district' => 'Illinois',
                'population' => 89408,
            ],
            [

                'name' => 'Odessa',
                'country_code' => 'USA',
                'district' => 'Texas',
                'population' => 89293,
            ],
            [

                'name' => 'Carson',
                'country_code' => 'USA',
                'district' => 'California',
                'population' => 89089,
            ],
            [

                'name' => 'Charleston',
                'country_code' => 'USA',
                'district' => 'South Carolina',
                'population' => 89063,
            ],
            [

                'name' => 'Charlotte Amalie',
                'country_code' => 'VIR',
                'district' => 'St Thomas',
                'population' => 13000,
            ],
            [

                'name' => 'Harare',
                'country_code' => 'ZWE',
                'district' => 'Harare',
                'population' => 1410000,
            ],
            [

                'name' => 'Bulawayo',
                'country_code' => 'ZWE',
                'district' => 'Bulawayo',
                'population' => 621742,
            ],
            [

                'name' => 'Chitungwiza',
                'country_code' => 'ZWE',
                'district' => 'Harare',
                'population' => 274912,
            ],
            [

                'name' => 'Mount Darwin',
                'country_code' => 'ZWE',
                'district' => 'Harare',
                'population' => 164362,
            ],
            [

                'name' => 'Mutare',
                'country_code' => 'ZWE',
                'district' => 'Manicaland',
                'population' => 131367,
            ],
            [

                'name' => 'Gweru',
                'country_code' => 'ZWE',
                'district' => 'Midlands',
                'population' => 128037,
            ],
            [

                'name' => 'Gaza',
                'country_code' => 'PSE',
                'district' => 'Gaza',
                'population' => 353632,
            ],
            [

                'name' => 'Khan Yunis',
                'country_code' => 'PSE',
                'district' => 'Khan Yunis',
                'population' => 123175,
            ],
            [

                'name' => 'Hebron',
                'country_code' => 'PSE',
                'district' => 'Hebron',
                'population' => 119401,
            ],
            [

                'name' => 'Jabaliya',
                'country_code' => 'PSE',
                'district' => 'North Gaza',
                'population' => 113901,
            ],
            [

                'name' => 'Nablus',
                'country_code' => 'PSE',
                'district' => 'Nablus',
                'population' => 100231,
            ],
            [

                'name' => 'Rafah',
                'country_code' => 'PSE',
                'district' => 'Rafah',
                'population' => 92020,
            ],
        ];

        City::insert($cities);
    }
}
