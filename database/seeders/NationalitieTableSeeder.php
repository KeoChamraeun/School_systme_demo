<?php

namespace Database\Seeders;

use App\Models\Nationalitie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalitieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nationalities')->delete();

        $nationals = [

            [
                'en' => 'Afghan',
                'ar' => 'អាហ្វហ្គាន'
            ],
            [
                'en' => 'Albanian',
                'ar' => 'អាល់បានី'
            ],
            [
                'en' => 'Aland Islander',
                'ar' => 'ជនជាតិកោះអាឡង់'
            ],
            [
                'en' => 'Algerian',
                'ar' => 'អាល់ហ្សេរី'
            ],
            [
                'en' => 'American Samoan',
                'ar' => 'សាមូអានអាមេរិក'
            ],
            [
                'en' => 'Andorran',
                'ar' => 'អង់ដូរ៉ា'
            ],
            [
                'en' => 'Angolan',
                'ar' => 'អង់ហ្គោលា'
            ],
            [
                'en' => 'Anguillan',
                'ar' => 'អង់គីឡា'
            ],
            [
                'en' => 'Antarctican',
                'ar' => 'អ្នកស្រុកអង់តាក្ទិក'
            ],
            [
                'en' => 'Antiguan',
                'ar' => 'អង់ទីហ្គា'
            ],
            [
                'en' => 'Argentinian',
                'ar' => 'អាហ្សង់ទីន'
            ],
            [
                'en' => 'Armenian',
                'ar' => 'អាមែនី'
            ],
            [
                'en' => 'Aruban',
                'ar' => 'អារ៉ូប៉ា'
            ],
            [
                'en' => 'Australian',
                'ar' => 'អូស្ត្រាលី'
            ],
            [
                'en' => 'Austrian',
                'ar' => 'អូទ្រីស'
            ],
            [
                'en' => 'Azerbaijani',
                'ar' => 'អាស៊ែបៃហ្សង់'
            ],
            [
                'en' => 'Bahamian',
                'ar' => 'បាហាម៉ា'
            ],
            [
                'en' => 'Bahraini',
                'ar' => 'បារ៉ែន'
            ],
            [
                'en' => 'Bangladeshi',
                'ar' => 'បង់ក្លាដែស'
            ],
            [
                'en' => 'Barbadian',
                'ar' => 'បាធូដា'
            ],
            [
                'en' => 'Belarusian',
                'ar' => 'បេលារុស'
            ],
            [
                'en' => 'Belgian',
                'ar' => 'បែលហ្សិក'
            ],
            [
                'en' => 'Belizean',
                'ar' => 'បេលីស'
            ],
            [
                'en' => 'Beninese',
                'ar' => 'បេនីន'
            ],
            [
                'en' => 'Saint Barthelmian',
                'ar' => 'សាំងបាត់ទែលមេ'
            ],
            [
                'en' => 'Bermudan',
                'ar' => 'ប៊ើមុដា'
            ],
            [
                'en' => 'Bhutanese',
                'ar' => 'ภูฏាន'
            ],
            [
                'en' => 'Bolivian',
                'ar' => 'បូលីវី'
            ],
            [
                'en' => 'Bosnian / Herzegovinian',
                'ar' => 'បូស្នី / ហឺស្សេហ្គូវីនី'
            ],
            [
                'en' => 'Botswanan',
                'ar' => 'បុតស្វាណា'
            ],
            [
                'en' => 'Bouvetian',
                'ar' => 'បូវ៉ែ'
            ],
            [
                'en' => 'Brazilian',
                'ar' => 'ប្រេស៊ីល'
            ],
            [
                'en' => 'British Indian Ocean Territory',
                'ar' => 'ដែនដីសមុទ្រឥណ្ឌា ប្រ៊ិទាញ'
            ],
            [
                'en' => 'Bruneian',
                'ar' => 'ប្រ៊ូនៃ'
            ],
            [
                'en' => 'Bulgarian',
                'ar' => 'ប៊ុលហ្គារី'
            ],
            [
                'en' => 'Burkinabe',
                'ar' => 'ប៊ួគីណាហ្វាសូ'
            ],
            [
                'en' => 'Burundian',
                'ar' => 'ប៊ូរុនឌី'
            ],
            [
                'en' => 'Cambodian',
                'ar' => 'ខ្មែរ'
            ],
            [
                'en' => 'Cameroonian',
                'ar' => 'កាមេរូន'
            ],
            [
                'en' => 'Canadian',
                'ar' => 'កាណាដា'
            ],
            [
                'en' => 'Cape Verdean',
                'ar' => 'កាផេវើដ'
            ],
            [
                'en' => 'Caymanian',
                'ar' => 'កៃម៉ែន'
            ],
            [
                'en' => 'Central African',
                'ar' => 'អាហ្វ្រិកកណ្ដាល'
            ],
            [
                'en' => 'Chadian',
                'ar' => 'ជនជាតិឆាដ'
            ],
            [
                'en' => 'Chilean',
                'ar' => 'ជនជាតិឈីលី'
            ],
            [
                'en' => 'Chinese',
                'ar' => 'ជនជាតិចិន'
            ],
            [
                'en' => 'Christmas Islander',
                'ar' => 'ជនជាតិកោះគ្រីស្តម៉ាស'
            ],
            [
                'en' => 'Cocos Islander',
                'ar' => 'ជនជាតិកោះកូកូស'
            ],
            [
                'en' => 'Colombian',
                'ar' => 'ជនជាតិកូឡុំប៊ី'
            ],
            [
                'en' => 'Comorian',
                'ar' => 'ជនជាតិកុម័រ'
            ],
            [
                'en' => 'Congolese',
                'ar' => 'ជនជាតិកុងហ្គោ'
            ],
            [
                'en' => 'Cook Islander',
                'ar' => 'ជនជាតិកោះកុក'
            ],
            [
                'en' => 'Costa Rican',
                'ar' => 'ជនជាតិកូស្តារីកា'
            ],
            [
                'en' => 'Croatian',
                'ar' => 'ជនជាតិក្រូអាត'
            ],
            [
                'en' => 'Cuban',
                'ar' => 'ជនជាតិគុយបា'
            ],
            [
                'en' => 'Cypriot',
                'ar' => 'ជនជាតិស៊ីប'
            ],
            [
                'en' => 'Curacian',
                'ar' => 'ជនជាតិកូរ៉ាសៅ'
            ],
            [
                'en' => 'Czech',
                'ar' => 'ជនជាតិឆែក'
            ],
            [
                'en' => 'Danish',
                'ar' => 'ជនជាតិដាណឺម៉ាក'
            ],
            [
                'en' => 'Djiboutian',
                'ar' => 'ជនជាតិជីប៊ូទី'
            ],
            [
                'en' => 'Dominican',
                'ar' => 'ជនជាតិដូមីនីក'
            ],
            [
                'en' => 'Ecuadorian',
                'ar' => 'ជនជាតិអេក្វាឌ័រ'
            ],
            [
                'en' => 'Egyptian',
                'ar' => 'ជនជាតិអេហ្ស៊ីប'
            ],
            [
                'en' => 'Salvadoran',
                'ar' => 'ជនជាតិសាល់វ៉ាឌ័រ'
            ],
            [
                'en' => 'Equatorial Guinean',
                'ar' => 'ជនជាតិហ្គីណេអេក្វាទ័រ'
            ],
            [
                'en' => 'Eritrean',
                'ar' => 'ជនជាតិអេរីទ្រា'
            ],
            [
                'en' => 'Estonian',
                'ar' => 'ជនជាតិអេស្តូនី'
            ],
            [
                'en' => 'Ethiopian',
                'ar' => 'ជនជាតិអេត្យូពី'
            ],
            [
                'en' => 'Falkland Islander',
                'ar' => 'ជនជាតិកោះហ្វកលែន'
            ],
            [
                'en' => 'Faroese',
                'ar' => 'ជនជាតិកោះហ្វារ៉ូ'
            ],
            [
                'en' => 'Fijian',
                'ar' => 'ជនជាតិហ្វីជី'
            ],
            [
                'en' => 'Finnish',
                'ar' => 'ជនជាតិហ្វាំងឡង់'
            ],
            [
                'en' => 'French',
                'ar' => 'ជនជាតិបារាំង'
            ],
            [
                'en' => 'French Guianese',
                'ar' => 'ជនជាតិហ្គីយ៉ានបារាំង'
            ],
            [
                'en' => 'French Polynesian',
                'ar' => 'ជនជាតិប៉ូលីនេស៊ីបារាំង'
            ],
            [
                'en' => 'Gabonese',
                'ar' => 'ជនជាតិហ្គាបុង'
            ],
            [
                'en' => 'Gambian',
                'ar' => 'ជនជាតិហ្គាំប៊ី'
            ],
            [
                'en' => 'Georgian',
                'ar' => 'ជនជាតិហ្សកហ្ស៊ី'
            ],
            [
                'en' => 'German',
                'ar' => 'ជនជាតិអាល្លឺម៉ង់'
            ],
            [
                'en' => 'Ghanaian',
                'ar' => 'ជនជាតិហ្គាណា'
            ],
            [
                'en' => 'Gibraltar',
                'ar' => 'ជនជាតិជីប្រាល់តា'
            ],
            [
                'en' => 'Guernsian',
                'ar' => 'ជនជាតិហ្គឺនស៊ី'
            ],
            [
                'en' => 'Greek',
                'ar' => 'ជនជាតិក្រិក'
            ],
            [
                'en' => 'Greenlandic',
                'ar' => 'ជនជាតិហ្គ្រីនឡែន'
            ],
            [
                'en' => 'Grenadian',
                'ar' => 'ជនជាតិហ្គ្រេណាដា'
            ],
            [
                'en' => 'Guadeloupe',
                'ar' => 'ជនជាតិហ្គាដឺលូប'
            ],
            [
                'en' => 'Guamanian',
                'ar' => 'ជនជាតិហ្គាំ'
            ],
            [
                'en' => 'Guatemalan',
                'ar' => 'ជនជាតិហ្គាតេម៉ាឡា'
            ],
            [
                'en' => 'Guinean',
                'ar' => 'ជនជាតិហ្គីណេ'
            ],
            [
                'en' => 'Guinea-Bissauan',
                'ar' => 'ជនជាតិហ្គីណេប៊ីសៅ'
            ],
            [
                'en' => 'Guyanese',
                'ar' => 'ជនជាតិហ្គីយ៉ាណា'
            ],
            [
                'en' => 'Haitian',
                'ar' => 'ជនជាតិហៃទី'
            ],
            [
                'en' => 'Heard and Mc Donald Islanders',
                'ar' => 'ជនជាតិកោះហឺដនិងម៉ាកដូណល់'
            ],
            [
                'en' => 'Honduran',
                'ar' => 'ជនជាតិហុងឌុយរ៉ាស'
            ],
            [
                'en' => 'Hongkongese',
                'ar' => 'ជនជាតិហុងកុង'
            ],
            [
                'en' => 'Hungarian',
                'ar' => 'ជនជាតិហុងគ្រី'
            ],
            [
                'en' => 'Icelandic',
                'ar' => 'ជនជាតិអ៊ីស្លង់'
            ],
            [
                'en' => 'Indian',
                'ar' => 'ជនជាតិឥណ្ឌា'
            ],
            [
                'en' => 'Manx',
                'ar' => 'ជនជាតិម៉ាន'
            ],
            [
                'en' => 'Indonesian',
                'ar' => 'ជនជាតិឥណ្ឌូនេស៊ី'
            ],
            [
                'en' => 'Iranian',
                'ar' => 'ជនជាតិអ៊ីរ៉ង់'
            ],
            [
                'en' => 'Iraqi',
                'ar' => 'ជនជាតិអ៊ីរ៉ាក់'
            ],
            [
                'en' => 'Irish',
                'ar' => 'ជនជាតិអៀរឡង់'
            ],
            [
                'en' => 'Italian',
                'ar' => 'ជនជាតិអ៊ីតាលី'
            ],
            [
                'en' => 'Ivory Coastian',
                'ar' => 'ជនជាតិកូតឌីវ័រ'
            ],
            [
                'en' => 'Jersian',
                'ar' => 'ជនជាតិជឺស៊ី'
            ],
            [
                'en' => 'Jamaican',
                'ar' => 'ជនជាតិហ្សាម៉ាអ៊ីក'
            ],
            [
                'en' => 'Japanese',
                'ar' => 'ជនជាតិជប៉ុន'
            ],
            [
                'en' => 'Jordanian',
                'ar' => 'ជនជាតិហ្ស៊កដានី'
            ],
            [
                'en' => 'Kazakh',
                'ar' => 'ជនជាតិកាហ្សាក់'
            ],
            [
                'en' => 'Kenyan',
                'ar' => 'ជនជាតិកេនយ៉ា'
            ],
            [
                'en' => 'I-Kiribati',
                'ar' => 'ជនជាតិគីរីបាទី'
            ],
            [
                'en' => 'North Korean',
                'ar' => 'ជនជាតិកូរ៉េខាងជើង'
            ],
            [
                'en' => 'South Korean',
                'ar' => 'ជនជាតិកូរ៉េខាងត្បូង'
            ],
            [
                'en' => 'Kosovar',
                'ar' => 'ជនជាតិកូសូវ៉ូ'
            ],
            [
                'en' => 'Kuwaiti',
                'ar' => 'ជនជាតិគុយវ៉ែត'
            ],
            [
                'en' => 'Kyrgyzstani',
                'ar' => 'ជនជាតិកៀហ្ស៊ីស៊ីស្ថាន'
            ],
            [
                'en' => 'Laotian',
                'ar' => 'ជនជាតិឡាវ'
            ],
            [
                'en' => 'Latvian',
                'ar' => 'ជនជាតិឡាតវី'
            ],
            [
                'en' => 'Lebanese',
                'ar' => 'ជនជាតិលីបង់'
            ],
            [
                'en' => 'Basotho',
                'ar' => 'ជនជាតិបាសូតូ'
            ],
            [
                'en' => 'Liberian',
                'ar' => 'ជនជាតិលីបេរីយ៉ា'
            ],
            [
                'en' => 'Libyan',
                'ar' => 'ជនជាតិលីប៊ី'
            ],
            [
                'en' => 'Liechtenstein',
                'ar' => 'ជនជាតិលិចតិនស្តាញ'
            ],
            [
                'en' => 'Lithuanian',
                'ar' => 'ជនជាតិលីទុយអានី'
            ],
            [
                'en' => 'Luxembourger',
                'ar' => 'ជនជាតិលុចសំបួ'
            ],
            [
                'en' => 'Sri Lankian',
                'ar' => 'ជនជាតិស្រីលង្កា'
            ],
            [
                'en' => 'Macanese',
                'ar' => 'ជនជាតិម៉ាកាវ'
            ],
            [
                'en' => 'Macedonian',
                'ar' => 'ជនជាតិម៉ាសេដូនី'
            ],
            [
                'en' => 'Malagasy',
                'ar' => 'ជនជាតិម៉ាឡាហ្គាស៊ី'
            ],
            [
                'en' => 'Malawian',
                'ar' => 'ជនជាតិម៉ាឡាវី'
            ],
            [
                'en' => 'Malaysian',
                'ar' => 'ជនជាតិម៉ាឡេស៊ី'
            ],
            [
                'en' => 'Maldivian',
                'ar' => 'ជនជាតិម៉ាល់ឌីវ'
            ],
            [
                'en' => 'Malian',
                'ar' => 'ជនជាតិម៉ាលី'
            ],
            [
                'en' => 'Maltese',
                'ar' => 'ជនជាតិម៉ាល់តា'
            ],
            [
                'en' => 'Marshallese',
                'ar' => 'ជនជាតិម៉ាស្សល'
            ],
            [
                'en' => 'Martiniquais',
                'ar' => 'ជនជាតិម៉ាទីនីក'
            ],
            [
                'en' => 'Mauritanian',
                'ar' => 'ជនជាតិម៉ូរីតានី'
            ],
            [
                'en' => 'Mauritian',
                'ar' => 'ជនជាតិម៉ូរីស'
            ],
            [
                'en' => 'Mahoran',
                'ar' => 'ជនជាតិម៉ាយ៉ូត'
            ],
            [
                'en' => 'Mexican',
                'ar' => 'ជនជាតិម៉ិកស៊ិក'
            ],
            [
                'en' => 'Micronesian',
                'ar' => 'ជនជាតិមីក្រូនេស៊ី'
            ],
            [
                'en' => 'Moldovan',
                'ar' => 'ជនជាតិម៉ុលដាវី'
            ],
            [
                'en' => 'Monacan',
                'ar' => 'ជនជាតិម៉ូណាកូ'
            ],
            [
                'en' => 'Mongolian',
                'ar' => 'ជនជាតិម៉ុងហ្គោលី'
            ],
            [
                'en' => 'Montenegrin',
                'ar' => 'ជនជាតិម៉ុនតេណេហ្គ្រីន'
            ],
            [
                'en' => 'Montserratian',
                'ar' => 'ជនជាតិម៉ុនសឺរ៉ាត'
            ],
            [
                'en' => 'Moroccan',
                'ar' => 'ជនជាតិម៉ារ៉ុក'
            ],
            [
                'en' => 'Mozambican',
                'ar' => 'ជនជាតិម៉ូហ្សាំប៊ិក'
            ],
            [
                'en' => 'Myanmarian',
                'ar' => 'ជនជាតិមីយ៉ាន់ម៉ា'
            ],
            [
                'en' => 'Namibian',
                'ar' => 'ជនជាតិណាមីប៊ី'
            ],
            [
                'en' => 'Nauruan',
                'ar' => 'ជនជាតិណូរូ'
            ],
            [
                'en' => 'Nepalese',
                'ar' => 'ជនជាតិនេប៉ាល់'
            ],
            [
                'en' => 'Dutch',
                'ar' => 'ជនជាតិហូឡង់'
            ],
            [
                'en' => 'Dutch Antilier',
                'ar' => 'ជនជាតិអង់ទីលហូឡង់'
            ],
            [
                'en' => 'New Caledonian',
                'ar' => 'ជនជាតិកាលេដូនីថ្មី'
            ],
            [
                'en' => 'New Zealander',
                'ar' => 'ជនជាតិនូវែលសេឡង់'
            ],
            [
                'en' => 'Nicaraguan',
                'ar' => 'ជនជាតិនីការ៉ាហ្គា'
            ],
            [
                'en' => 'Nigerien',
                'ar' => 'ជនជាតិនីហ្សេ'
            ],
            [
                'en' => 'Nigerian',
                'ar' => 'ជនជាតិនីហ្សេរីយ៉ា'
            ],
            [
                'en' => 'Niuean',
                'ar' => 'ជនជាតិនីវ'
            ],
            [
                'en' => 'Norfolk Islander',
                'ar' => 'ជនជាតិកោះន័រហ្វក'
            ],
            [
                'en' => 'Northern Marianan',
                'ar' => 'ជនជាតិម៉ារីអាណាខាងជើង'
            ],
            [
                'en' => 'Norwegian',
                'ar' => 'ជនជាតិន័រវែស'
            ],
            [
                'en' => 'Omani',
                'ar' => 'ជនជាតិអូម៉ង់'
            ],
            [
                'en' => 'Pakistani',
                'ar' => 'ជនជាតិប៉ាគីស្ថាន'
            ],
            [
                'en' => 'Palauan',
                'ar' => 'ជនជាតិប៉ាឡូ'
            ],
            [
                'en' => 'Palestinian',
                'ar' => 'ជនជាតិប៉ាឡេស្ទីន'
            ],
            [
                'en' => 'Panamanian',
                'ar' => 'ជនជាតិប៉ាណាម៉ា'
            ],
            [
                'en' => 'Papua New Guinean',
                'ar' => 'ជនជាតិប៉ាពួញូហ្គីណេ'
            ],
            [
                'en' => 'Paraguayan',
                'ar' => 'ជនជាតិប៉ារ៉ាហ្គាយ'
            ],
            [
                'en' => 'Peruvian',
                'ar' => 'ជនជាតិប៉េរូ'
            ],
            [
                'en' => 'Filipino',
                'ar' => 'ជនជាតិហ្វីលីពីន'
            ],
            [
                'en' => 'Pitcairn Islander',
                'ar' => 'ជនជាតិកោះពីតកែន'
            ],
            [
                'en' => 'Polish',
                'ar' => 'ជនជាតិប៉ូឡូញ'
            ],
            [
                'en' => 'Portuguese',
                'ar' => 'ជនជាតិព័រទុយហ្គាល់'
            ],
            [
                'en' => 'Puerto Rican',
                'ar' => 'ជនជាតិព័រតូរីកូ'
            ],
            [
                'en' => 'Qatari',
                'ar' => 'ជនជាតិកាតា'
            ],
            [
                'en' => 'Reunionese',
                'ar' => 'ជនជាតិរេអ៊ុនយ៉ុង'
            ],
            [
                'en' => 'Romanian',
                'ar' => 'ជនជាតិរ៉ូម៉ានី'
            ],
            [
                'en' => 'Russian',
                'ar' => 'ជនជាតិរុស្ស៊ី'
            ],
            [
                'en' => 'Rwandan',
                'ar' => 'ជនជាតិរវ៉ាន់ដា'
            ],
            [
                'en' => 'Kittitian/Nevisian',
                'ar' => 'ជនជាតិគីតទីស/នេវីស'
            ],
            [
                'en' => 'St. Martian(French)',
                'ar' => 'ជនជាតិសាំងម៉ាទីន(បារាំង)'
            ],
            [
                'en' => 'St. Martian(Dutch)',
                'ar' => 'ជនជាតិសាំងម៉ាទីន(ហូឡង់)'
            ],
            [
                'en' => 'St. Pierre and Miquelon',
                'ar' => 'ជនជាតិសាំងព្យែរនិងមីគេឡុង'
            ],
            [
                'en' => 'Saint Vincent and the Grenadines',
                'ar' => 'ជនជាតិសាំងវ៉ាំងសង់និងហ្គ្រេណាឌីន'
            ],
            [
                'en' => 'Samoan',
                'ar' => 'ជនជាតិសាម័រ'
            ],
            [
                'en' => 'Sammarinese',
                'ar' => 'ជនជាតិសានម៉ារីណូ'
            ],
            [
                'en' => 'Sao Tomean',
                'ar' => 'ជនជាតិសៅតូម៉េ'
            ],
            [
                'en' => 'Saudi Arabian',
                'ar' => 'ជនជាតិអារ៉ាប៊ីសាអូឌីត'
            ],
            [
                'en' => 'Senegalese',
                'ar' => 'ជនជាតិសេណេហ្គាល់'
            ],
            [
                'en' => 'Serbian',
                'ar' => 'ជនជាតិស៊ែរប៊ី'
            ],
            [
                'en' => 'Seychellois',
                'ar' => 'ជនជាតិសីស្ហែល'
            ],
            [
                'en' => 'Sierra Leonean',
                'ar' => 'ជនជាតិសៀរ៉ាឡេអូន'
            ],
            [
                'en' => 'Singaporean',
                'ar' => 'ជនជាតិសាំងហ្គាពួរ'
            ],
            [
                'en' => 'Slovak',
                'ar' => 'ជនជាតិស្លូវ៉ាគី'
            ],
            [
                'en' => 'Slovenian',
                'ar' => 'ជនជាតិស្លូវេនី'
            ],
            [
                'en' => 'Solomon Island',
                'ar' => 'ជនជាតិកោះសូឡូម៉ុន'
            ],
            [
                'en' => 'Somali',
                'ar' => 'ជនជាតិសូម៉ាលី'
            ],
            [
                'en' => 'South African',
                'ar' => 'ជនជាតិអាហ្វ្រិកខាងត្បូង'
            ],
            [
                'en' => 'South Georgia and the South Sandwich',
                'ar' => 'ជនជាតិហ្សកហ្ស៊ីខាងត្បូងនិងកោះសាំងវ៉ិច'
            ],
            [
                'en' => 'South Sudanese',
                'ar' => 'ជនជាតិស៊ូដង់ខាងត្បូង'
            ],
            [
                'en' => 'Spanish',
                'ar' => 'ជនជាតិអេស្ប៉ាញ'
            ],
            [
                'en' => 'St. Helenian',
                'ar' => 'ជនជាតិសាំងហេឡេណា'
            ],
            [
                'en' => 'Sudanese',
                'ar' => 'ជនជាតិស៊ូដង់'
            ],
            [
                'en' => 'Surinamese',
                'ar' => 'ជនជាតិស៊ូរីណាម'
            ],
            [
                'en' => 'Svalbardian/Jan Mayenian',
                'ar' => 'ជនជាតិស្វាលបាដនិងហ្សានម៉ាយេន'
            ],
            [
                'en' => 'Swazi',
                'ar' => 'ជនជាតិស្វាហ្ស៊ី'
            ],
            [
                'en' => 'Swedish',
                'ar' => 'ជនជាតិស៊ុយអែត'
            ],
            [
                'en' => 'Swiss',
                'ar' => 'ជនជាតិស្វីស'
            ],
            [
                'en' => 'Syrian',
                'ar' => 'ជនជាតិស៊ីរី'
            ],
            [
                'en' => 'Taiwanese',
                'ar' => 'ជនជាតិតៃវ៉ាន់'
            ],
            [
                'en' => 'Tajikistani',
                'ar' => 'ជនជាតិតាជីគីស្ថាន'
            ],
            [
                'en' => 'Tanzanian',
                'ar' => 'ជនជាតិតង់ហ្សានី'
            ],
            [
                'en' => 'Thai',
                'ar' => 'ជនជាតិថៃ'
            ],
            [
                'en' => 'Timor-Lestian',
                'ar' => 'ជនជាតិទីម័រខាងកើត'
            ],
            [
                'en' => 'Togolese',
                'ar' => 'ជនជាតិតូហ្គោ'
            ],
            [
                'en' => 'Tokelaian',
                'ar' => 'ជនជាតិតូកេឡាវ'
            ],
            [
                'en' => 'Tongan',
                'ar' => 'ជនជាតិតុងហ្គា'
            ],
            [
                'en' => 'Trinidadian/Tobagonian',
                'ar' => 'ជនជាតិទ្រីនីដាដនិងតូបាហ្គោ'
            ],
            [
                'en' => 'Tunisian',
                'ar' => 'ជនជាតិទុយនីស៊ី'
            ],
            [
                'en' => 'Turkish',
                'ar' => 'ជនជាតិទួរគី'
            ],
            [
                'en' => 'Turaren',
                'ar' => 'ជនជាតិទួរមិនីស្ថាន'
            ],
            [
                'en' => 'Turks and Caicos Islands',
                'ar' => 'ជនជាតិកោះទួរកនិងកៃកូស'
            ],
            [
                'en' => 'Tuvaluan',
                'ar' => 'ជនជាតិទូវ៉ាលូ'
            ],
            [
                'en' => 'Ugandan',
                'ar' => 'ជនជាតិអ៊ូហ្គង់ដា'
            ],
            [
                'en' => 'Ukrainian',
                'ar' => 'ជនជាតិអ៊ុយក្រែន'
            ],
            [
                'en' => 'Emirati',
                'ar' => 'ជនជាតិអេមីរ៉ាត'
            ],
            [
                'en' => 'British',
                'ar' => 'ជនជាតិអង់គ្លេស'
            ],
            [
                'en' => 'American',
                'ar' => 'ជនជាតិអាមេរិក'
            ],
            [
                'en' => 'US Minor Outlying Islander',
                'ar' => 'ជនជាតិកោះតូចខាងក្រៅអាមេរិក'
            ],
            [
                'en' => 'Uruguayan',
                'ar' => 'ជនជាតិអ៊ុយរុយហ្គាយ'
            ],
            [
                'en' => 'Uzbek',
                'ar' => 'ជនជាតិអ៊ុយបេគីស្ថាន'
            ],
            [
                'en' => 'Vanuatuan',
                'ar' => 'ជនជាតិវ៉ានូអាទូ'
            ],
            [
                'en' => 'Venezuelan',
                'ar' => 'ជនជាតិវ៉េណេហ្ស៊ុយអេឡា'
            ],
            [
                'en' => 'Vietnamese',
                'ar' => 'ជនជាតិវៀតណាម'
            ],
            [
                'en' => 'American Virgin Islander',
                'ar' => 'ជនជាតិកោះវឺជីនអាមេរិក'
            ],
            [
                'en' => 'Vatican',
                'ar' => 'ជនជាតិវ៉ាទីកង់'
            ],
            [
                'en' => 'Wallisian/Futunan',
                'ar' => 'ជនជាតិវ៉ាលីសនិងហ៊្វុយទុនា'
            ],
            [
                'en' => 'Sahrawian',
                'ar' => 'ជនជាតិសាហារ៉ាវី'
            ],
            [
                'en' => 'Yemeni',
                'ar' => 'ជនជាតិយេម៉ែន'
            ],
            [
                'en' => 'Zambian',
                'ar' => 'ជនជាតិហ្សំប៊ី'
            ],
            [
                'en' => 'Zimbabwean',
                'ar' => 'ជនជាតិហ្ស៊ីមបាវ៉េ'
            ]
        ];

        foreach ($nationals as $n) {
            Nationalitie::create(['name' => $n]);
        }
    }
}
