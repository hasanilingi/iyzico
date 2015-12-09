<?php namespace Hasanilingi\Iyzico;

use Illuminate\Support\ServiceProvider;

class IyzicoServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public function boot(){

		$this->package('Hasanilingi/iyzico', 'iyzico');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind("iyzico", function($app){

			return new Iyzico();
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('iyzico');
	}

}
