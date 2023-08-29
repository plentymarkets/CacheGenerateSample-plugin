<?php
namespace CacheGenerateSample\Controllers;

use CacheGenerateSample\Repositories\CacheRepository;
use LogGenerateSample\Repositories\LogRepository;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;

/**
 * Class ContentController
 * @package CacheGenerateSample\Controllers
 */
class ContentController extends Controller
{
    public function generate(Request $request)
    {
        /** @var CacheRepository $cacheRepo */
        $cacheRepo = pluginApp(CacheRepository::class);
        $entries = $cacheRepo->generate($request->get("count", 1));

        return json_encode($entries);
    }

    public function mysqlInsert(Request $request)
    {
        /** @var LogRepository $logRepo */
        $logRepo = pluginApp(LogRepository::class);
        $logs = $logRepo->createLog($request->get("count", 1));

        return json_encode($logs);
    }

}
