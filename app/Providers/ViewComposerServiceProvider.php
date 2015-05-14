<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->composeNavigation();
	}


	private function composeNavigation()
	{
		/**
		 * In case there is a lot of code to be written to process the job then it should be done is some other class and
		 * the class path can be included here so that laravel can load it
		 *  view()->composer('partials.nav','App/Http/Composers/NavigationComposer@methodname');
		 */
		view()->composer('partials.nav',function($view){

			$view->with('latest',\App\Article::latest()->first());
		});
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
