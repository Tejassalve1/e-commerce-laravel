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
                'gallary'=>'https://img.freepik.com/free-photo/phone-screen-with-abstract-marble-aesthetic_53876-145553.jpg?t=st=1710250886~exp=1710254486~hmac=0ccb1a30cfff80e3424ca52973305f3fd5e1a752a5d32d1dc5d080a63aed0ad3&w=740',
            ],
            [
                'name'=>'iphone',
                'price'=>'70000',
                'description'=>'smartphone with 6gb ram and much more features',
                'category'=>'mobile',
                'gallary'=>'https://img.freepik.com/free-photo/phone-screen-with-abstract-marble-aesthetic_53876-145553.jpg?t=st=1710250886~exp=1710254486~hmac=0ccb1a30cfff80e3424ca52973305f3fd5e1a752a5d32d1dc5d080a63aed0ad3&w=740',
            ],
            [
                'name'=>'one plus',
                'price'=>'40000',
                'description'=>'samartphone with 12gb ram and much more features',
                'category'=>'mobile',
                'gallary'=>'https://img.freepik.com/free-photo/phone-screen-with-abstract-marble-aesthetic_53876-145553.jpg?t=st=1710250886~exp=1710254486~hmac=0ccb1a30cfff80e3424ca52973305f3fd5e1a752a5d32d1dc5d080a63aed0ad3&w=740',
            ],
            [
                'name'=>'redmi mobile',
                'price'=>'20000',
                'description'=>'samartphone with 6gb ram and much more features',
                'category'=>'mobile',
                'gallary'=>'https://img.freepik.com/free-photo/phone-screen-with-abstract-marble-aesthetic_53876-145553.jpg?t=st=1710250886~exp=1710254486~hmac=0ccb1a30cfff80e3424ca52973305f3fd5e1a752a5d32d1dc5d080a63aed0ad3&w=740',
            ]

        ]);

    }
}
