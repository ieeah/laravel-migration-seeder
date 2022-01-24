<?php

use Illuminate\Database\Seeder;
use Faker\Generator as faker;
use App\Offer;

class OffersSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

	public function run(Faker $faker) {

		

		for ($i = 1; $i <= 15; $i++) {
			
			$offer = new Offer();

			$offer->destination = $faker->words(3, true);
			$offer->price = $faker->randomFloat(2, 300, 1000);
			$offer->departure_date = $faker->date();
			$offer->nights = $faker->randomDigit();
			$offer->departure_location = $faker->words(3, true);
			$offer->hotel = $faker->text(30);

			$offer->save();
		}
	}
}
