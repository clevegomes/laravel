<?php


Route:get('foo', 'FooController@foo');

Interface HutInterface{}
Class Hut implements HutInterface{}
Class House implements HutInterface{}
App::bind('HutInterface2',function(){

return new Hut();
});
//App::bind('HutInterface','House');
Route::get('test',function(HutInterface2 $dum)
{
	dd($dum);
});

Route::get('test2',function()
{
	$bar = App::make('HutInterface');

	dd($bar);
});



Route::get('/',function(){
	return "its home";
});
Route::get('about',['middleware'=>'auth','uses'=>'PagesController@about']);

Route::get('contact','PagesController@contact');
Route::get('junk',['middleware'=>'auth',function()
	{
			return 'Will only show if the user is signed in';
	}]
);

Route::get('doo',['middleware'=>'manager',function()
	{
		return 'Will only  be viewed by a  manager';
	}]
);

//Route::get('articles','ArticlesController@index');
//Route::get('articles/create','ArticlesController@create	'auth' => 'Auth\AuthController');
//Route::get('articles/{id}','ArticlesController@show');
//Route::post('articles','ArticlesController@store');
//Route::get('articles/{id}/edit','ArticlesController@edit');

Route:resource('articles','ArticlesController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);