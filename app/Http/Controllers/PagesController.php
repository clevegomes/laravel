<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//

	public function about()
	{
		$name = "<span style='color: red' >Cleve Gomes</span>";
		//return view("pages.about")->with('name',$name);
//		return view("pages.about")->with([
//			'first'=> "cleve",
//			'last'=>"gomes"
//
//		]);
//		$data['first'] = "cleve";
//		$data['last']= "gomes";
//
//		return view("pages.about",$data);

//		$first = "Cleve";
//		$last = "Gomes";
//		return view("pages.about",compact('first','last'));



//		<!--<h1>-->
//<!--	About us {{$first}}{!!$last!!}-->
//<!--</h1>-->
//<!--@if($first == 'Cleve')-->
//<!---->
//<!--this si dsi dsx d-->
//<!---->
//<!--@else-->
//<!--44444-->
//<!--@endif-->
//
//<!--@unless -->
//<!--@foreach-->
//<!--@foreelse-->

		$people = [
			'Person1','Person2','Person 3'
		];
		return view("pages.about",compact('people'));

	}



	public function  contact()
	{
		return view('pages.contact');
	}
}
