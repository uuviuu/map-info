<?php

namespace App\Integrations\Task2;

use Illuminate\Support\Facades\Http;

class TaskPhp
{
    /** @return array<string|int,mixed>|null */
    public static function getApiData(?string $url, string $query): ?array
    {
        if ($url) {
            return Http::timeout(700)->get($url.$query)->json();
        } else {
            return null;
        }
    }

    /** @return array<string|int,mixed>|null */
    public static function getItems(string $text): ?array
    {
        $apiData = TaskPhp::getApiData(
            config('integration.api.map_api_url'),
            "/geocode?q=$text&locale=ru_RU&fields=items.point,items.address&key=".config('integration.api.map_api_key')
        );

        return array_map(function ($item) {
            $item['metro'] = self::getApiData(
                config('integration.api.map_api_url'),
                "?q=метро&type=station.metro&point={$item['point']['lon']},{$item['point']['lat']}&radius=500&locale=ru_RU&key=".config('integration.api.map_api_key')
            )['result']['items'] ?? [];
            $item['micro-district'] = self::getApiData(
                config('integration.api.map_api_url'),
                "?q=микрорайон&type=adm_div.living_area&sort_point={$item['point']['lon']},{$item['point']['lat']}&locale=ru_RU&key=".config('integration.api.map_api_key')
            )['result']['items'][0]['full_name'] ?? null;

            return $item;
        }, array_slice($apiData['result']['items'] ?? [], 0, 5));
    }
}
