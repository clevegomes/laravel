<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model {

	//
	protected $fillable = [

		'status',
		'regnumber',
		'owner_id',
		'vehicle_category'
	];

}
