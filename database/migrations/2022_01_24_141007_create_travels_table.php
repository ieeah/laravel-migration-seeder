<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('travels', function (Blueprint $table) {
			$table->id();
			$table->string('destination', 70);
			$table->date('departure_day');
			$table->tinyInteger('nights', false, true);
			$table->string('hotel', 80);
			$table->tinyInteger('price', false, true);
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
		Schema::dropIfExists('travels');
	}
}
