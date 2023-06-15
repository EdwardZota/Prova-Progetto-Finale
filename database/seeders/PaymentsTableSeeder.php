<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payments=['credit card','Google Pay','Paypal'];

        for($i=1;$i<11;$i++){
            $newPayment=new Payment();
            $newPayment->order_id=$i;
            $newPayment->payment_method=$payments[rand(0,2)];
            $newPayment->status=1;
            $newPayment->save();
        }
    }
}
