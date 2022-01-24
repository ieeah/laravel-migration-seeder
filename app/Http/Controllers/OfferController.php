<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;

class OfferController extends Controller
{
	public function index() {

		$offers = Offer::all();
		
		return view('offers', compact('offers'));
	}
}
