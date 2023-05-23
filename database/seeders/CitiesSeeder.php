<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            [
               'name'=>'الإسكندرية',

            ],
            [
               'name'=>'الإسماعيلية',

            ],
            [
               'name'=>'أسوان',

            ],
            [
                'name'=>'أسيوط',

             ],
             [
                'name'=>'الأقصر',

             ],
             [
                'name'=>'البحر الأحمر',

             ],
             [
                'name'=>'البحيرة',

             ],
             [
                'name'=>'بني سويف',

             ],
             [
                'name'=>' بورسعيد',

             ],

             [
                'name'=>'جنوب سيناء',

             ],
             [
                'name'=>' الجيزة',

             ],
             [
                'name'=>' الدقهلية',

             ],

             [
                'name'=>' دمياط',

             ],
             [
                'name'=>' سوهاج',

             ],
             [
                'name'=>' السويس',

             ],

             [
                'name'=>' الشرقية',

             ],
             [
                'name'=>' شمال سيناء',

             ],
             [
                'name'=>' الغربية',

             ],


             [
                'name'=>' الفيوم',

             ],
             [
                'name'=>' القاهرة ',

             ],
             [
                'name'=>' القليوبية',

             ],

             [
                'name'=>' قنا',

             ],
             [
                'name'=>' كفر الشيخ ',

             ],
             [
                'name'=>' مطروح',

             ],

             [
                'name'=>' المنوفية',

             ],
             [
                'name'=>' المنيا  ',

             ],
             [
                'name'=>' الوادي الجديد',

             ],
        ];

        foreach ($cities as $key => $city) {
            City::create($city);
        }
    }
}
