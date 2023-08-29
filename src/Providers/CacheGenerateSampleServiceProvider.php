<?php
namespace CacheGenerateSample\Providers;

use Plenty\Modules\Plugin\DataBase\Contracts\DataBase;
use Plenty\Plugin\ServiceProvider;

/**
 * Class CacheGenerateSampleServiceProvider
 * @package CacheGenerateSample\Providers
 */
class CacheGenerateSampleServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{
		$this->getApplication()->register(CacheGenerateSampleRouteServiceProvider::class);
	}
}
