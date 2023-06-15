<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = ['Pizzeria','Ristorante Cinese','Pescheria','Trattoria da kebabbaro','Kebabbaro da abdul','kebabbaro da trattoriaa'];

        foreach($restaurants as $restaurant){
            $newRestaurant=new Restaurant();
            $newRestaurant->name= $restaurant;
            $newRestaurant->email= Str::slug($restaurant,'.') . '@gmail.com';
            $newRestaurant->password= 'password';
            $newRestaurant->slug= Str::slug($restaurant,'-');
            $newRestaurant->address= 'via del non te lo dico';
            $newRestaurant->vat= '01234567891';
            $newRestaurant->save();
        }
    }
}
