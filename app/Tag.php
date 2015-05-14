<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	//

	protected $fillable=['name'];

	/**
	 * Get the articles associated with the tag
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function articles()
	{
		return $this->belongsToMany('App\Article');

//		If you do not follow the pivot table name standard use the below

		//return $this->belongsToMany('App\Articles','tablename','fieldname');
	}

}
