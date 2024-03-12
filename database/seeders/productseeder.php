<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([

            [
                'name'=>'lg mobile',
                'price'=>'10000',
                'description'=>'samartphone with 4gb ram and much more features',
                'category'=>'mobile',
                'gallary'=>'https://img.freepik.com/premium-vector/smartphone-back-front_66219-1913.jpg?w=740',
            ],
            [
                'name'=>'iphone',
                'price'=>'70000',
                'description'=>'samartphone with 6gb ram and much more features',
                'category'=>'mobile',
                'gallary'=>'https://img.freepik.com/free-photo/elegant-smartphone-composition_23-2149437106.jpg?t=st=1710246049~exp=1710249649~hmac=e7aee74a71e09e5e279d62f5b98e2c2f79ac01756a285d1b1a8758f99e381211&w=360',
            ],
            [
                'name'=>'one plus',
                'price'=>'40000',
                'description'=>'samartphone with 12gb ram and much more features',
                'category'=>'mobile',
                'gallary'=>'https://img.freepik.com/premium-vector/realistic-smartphone-template_66219-1878.jpg?w=740',
            ],
            [
                'name'=>'redmi mobile',
                'price'=>'20000',
                'description'=>'samartphone with 6gb ram and much more features',
                'category'=>'mobile',
                'gallary'=>'https://img.freepik.com/free-photo/white-cell-phone-box-background_58702-4762.jpg?t=st=1710246271~exp=1710249871~hmac=2fbe2a70e1c6fcf0ea003b601903e75cdc13ef369633257e4a3d117c5fc3d46f&w=360',
            ]

        ]);

    }
}
