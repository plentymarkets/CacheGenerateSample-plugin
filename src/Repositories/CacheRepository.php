<?php

namespace CacheGenerateSample\Repositories;

use Plenty\Plugin\Application;
use Plenty\Plugin\CachingRepository;

class CacheRepository
{
    private const KEY = 'CacheGenerateSample-rand_int_gen';
    private const TTL = '360';

    public function generate(int $count = 1): array
    {
        $entries = [];

        /** @var Application $app */
        $app = pluginApp(Application::class);

        /** @var CachingRepository $cachingRepository */
        $cachingRepository = pluginApp(CachingRepository::class);

        for ($i = 0; $i < $count; $i++) {
            $key = $app->getPlentyId() . '_' . pluginSetId() . '_' . self::KEY . '_' . rand (1,10);
            $value = rand(1,1000);
            $cachingRepository->put($key, $value, self::TTL);
            $entries[$key] = $value;
        }

        return $entries;
    }
}