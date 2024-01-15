<?php

namespace App\Actions;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class GetApiDataAction
{
    /** @return array<string|int,mixed>|null */
    public static function getJsonFromApi(string $path, ?string $query = null): ?array
    {
        return Cache::remember($path.$query.'_api', now()->addHour(), function () use ($path, $query) {
            return Http::timeout(700)->get($path.$query)->json();
        });
    }
}
