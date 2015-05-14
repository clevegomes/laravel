<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	//

	protected $fillable = [

		'title',
		'body',
		'published_at',
		'user_id'
	];


	protected $dates = ['published_at'];

	//eg  setTitleAttribute

	public function setPublishedAtAttribute($date)
	{

		$this->attributes['published_at'] = Carbon::parse($date);
	}

	public function scopepublished($query)
	{
		$query->where('published_at','<=',Carbon::now());
	}

	public function scopeunpublished($query)
	{
		$query->where('published_at','>=',Carbon::now());
	}


	public function user()
	{
		return $this->belongsTo('App\User');
	}

	/*
	 * Tags associated with the article
	 */
	public  function tags()
	{
		//return $this->belongsToMany('App\Tag');
		return $this->belongsToMany('App\Tag')->WithTimestamps();
	}


	/*
	 * get a list of tag ids accociated with the articles
	 */
	public function getTagListAttribute()
	{
		return $this->tags->lists('id');
	}
}
