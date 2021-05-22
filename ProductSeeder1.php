<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert([
            [
            'name'=>'Oppo -Mobile',
            'price'=>'300',
            'category'=>'mobile',
            'description'=>'A samphone with 8gb ram and other further',
            'gallary'=>'https://images-na.ssl-images-amazon.com/images/I/71wPwmxo2NL._SL1500_.jpg'
            ],
            [
            'name'=>'LG -Mobile',
            'price'=>'200',
            'category'=>'mobile',
            'description'=>'A samphone with 4gb ram and other further',
            'gallary'=>'https://fdn2.gsmarena.com/vv/pics/lg/lg-stylo6-1.jpg'

          ],
          [
            'name'=>'ViVo',
            'price'=>'500',
            'category'=>'mobile',
            'description'=>'A samphone with 8gb ram and other further',
            'gallary'=>'https://5.imimg.com/data5/HV/DY/FS/ANDROID-91469642/product-jpeg-500x500.jpeg'

          ],
          [
            'name'=>'panasonic T.v',
            'price'=>'10000',
            'category'=>'T.v',
            'description'=>'A T.v with 15inches high and further features',
            'gallary'=>'https://static.digit.in/default/514997f36523c8adf3cb55a2d5f552a58b5bbabb.jpeg?tr=w-1200'


          ],
           ]);
         
    }
}
