<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ImageFileServiceProvider extends ServiceProvider {

    /**
     * @var bool
     */
    protected $defer = true;

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->singleton('ImgFL', function($app)
        {
            return new \App\ImageFileLogic();
        });
	}

    public function provides()
    {
        return ['ImgFL'];
    }

}
