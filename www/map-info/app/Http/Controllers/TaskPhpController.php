<?php

namespace App\Http\Controllers;

use App\Http\Requests\MapInfoRequest;
use App\Integrations\Task2\TaskPhp;
use Illuminate\View\View;

class TaskPhpController extends Controller
{
    public function getPagePhp(): View
    {
        return view('task-php', ['data' => null]);
    }

    public function getMapInfo(MapInfoRequest $request): View
    {
        $data = TaskPhp::getApiData(
            "text={$request->get('search')}&type=geo&lang=ru_RU&apikey=".config('integration.api.yandex_map_key')
        );

        return view('task-php', ['data' => $data]);
    }
}
