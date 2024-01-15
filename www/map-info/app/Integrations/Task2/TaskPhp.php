<?php

namespace App\Integrations\Task2;

use App\Actions\GetApiDataAction;

class TaskPhp
{
    /** @return array<string|int,mixed>|null */
    public static function getApiData(string $query): ?array
    {
        if (config('integration.api.yandex_map')) {
            return GetApiDataAction::getJsonFromApi(config('integration.api.yandex_map'), $query);
        } else {
            return null;
        }
    }
}
