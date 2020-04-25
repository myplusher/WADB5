<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
        [
            [
              'name' => 'LG',
              'description' => 'Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue.',
              'photo' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
              'price' => 39999.00
            ],
            [
                 'name' => 'BOSCH',
              'description' => 'BOSCH, picked up and....worked',
              'photo' => 'https://avatars.mds.yandex.net/get-mpic/1749547/img_id8941574757427873803/9hq',
              'price' => 9999.00   
            ],
            [
                     'name' => 'Xiaomi',
              'description' => 'not polza hernya',
              'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTZeEKbLKN5YILJ9V7TC2gNNXJnHpBPbj2YbDd0qxkwmU4c2T3h-MOnLF2zp1qIhuR6Fr4j58k&usqp=CAc',
              'price' => 9.01     
            ],
            [
                 'name' => 'Airpod',
              'description' => 'good sound, boys',
              'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT1OfQEvE6BWnKi5lqcOMr1yG77vRVUY2op7Q6Z0ge32k9sbFFEwHPwk2VUk3TvSPF-ODEy23c&usqp=CAc',
              'price' => 99.00    
            ],
            [         
            
                   'name' => 'PORSCHE',
              'description' => 'If you have porsche, you must be prosche',
              'photo' => 'https://files.porsche.com/filestore/image/multimedia/none/992-c2-modelimage-sideshot/model/5df3abc0-999a-11e9-80c4-005056bbdc38/porsche-model.png',
              'price' => 999999.00 
            ],
            [
                 'name' => 'Eschenbach',
              'description' => 'This so polezno, you know',
              'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRK5RQdLLAqRz1yg8PR4EHaZbkaF9YRPm9VGCpAcQ8TpX8J2KkJfTMws-MY_ER0KKCUFMKEmwpa&usqp=CAc',
              'price' => 330.00    
            ]                             
                                      
        ]);

    }
}
