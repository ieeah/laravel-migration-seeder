<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('offers', function (Blueprint $table) {
			$table->id();
			$table->string('destination', 50);
			$table->tinyInteger('price', false, true);
			$table->date('departure_date');
			$table->tinyInteger('nights', false, true);
			$table->string('departure_location', 50);
			$table->string('hotel', 80);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('offers', function (Blueprint $table) {
			//
		});
	}
}
