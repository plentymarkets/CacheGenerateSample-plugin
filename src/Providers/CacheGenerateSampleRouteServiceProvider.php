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
        $router->get('redis', 'CacheGenerateSample\Controllers\ContentController@generate');
        $router->get('mysql', 'LogGenerateSample\Controllers\ContentController@mysqlInsert');

	}

}
