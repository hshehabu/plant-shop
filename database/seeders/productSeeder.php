<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
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
            ['name'=>'Apple',
            'price'=>'100 ETB',
            'catagory'=>'Fruit',
            'description'=>'Fresh Apple frome farm',
            'gallary'=>'https://pngimg.com/uploads/apple/apple_PNG12436.png'],
            ['name'=>'Bread',
            'price'=>'15 ETB',
            'catagory'=>'Food',
            'description'=>'Fresh bread every morning',
            'gallary'=>'https://www.trustedreviews.com/wp-content/uploads/sites/54/2018/12/LRG_RXV05245-01.jpeg'],
            ['name'=>'Basket of vegitable',
            'price'=>'250 ETB',
            'catagory'=>'Vegitable',
            'description'=>'A basket of fresh vegitable from local farmers',
            'gallary'=>'https://cdn.shopify.com/s/files/1/0144/3106/0003/collections/vegetable_seeds_1200x1200.jpg?v=1570556987'],
            ['name'=>'Sprinkle All-purpose flour',
            'price'=>'1000 ETB',
            'catagory'=>'food',
            'description'=>'Multi purpose flour',
            'gallary'=>'https://i5.walmartimages.com/asr/df26f4cc-3228-4c9a-b693-5bd7cdf3f3f3_1.765c6fcb8f568352a54eab1547157cdf.jpeg'],
        ]);
    }
}
