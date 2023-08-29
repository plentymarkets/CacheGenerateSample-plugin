<?php
namespace CacheGenerateSample\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class CacheGenerateSampleRouteServiceProvider
 * @package CacheGenerateSample\Providers
 */
class CacheGenerateSampleRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router)
	{
        $router->get('redis', 'CacheGenerateSample\Controllers\ContentController@generateCache');
        $router->get('logs', 'LogGenerateSample\Controllers\ContentController@generateLogs');

	}

}
