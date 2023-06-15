<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i=0;$i<10;$i++){
            $order =new Order();
            $order->restaurant_id= rand(1,6);
            $order->name_customer= $faker->name();
            $order->address_customer= $faker->address();
            $order->phone_number_customer= $faker->e164PhoneNumber();
            $order->email_customer= $faker->email();
            $order->total_price= $faker->randomFloat(2,10,999);
            $order->save();
        }
    }
}
