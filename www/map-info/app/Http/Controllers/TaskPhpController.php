<?php

namespace App\Http\Controllers;

use App\Dto\CreateHistoryRequestDto;
use App\Http\Requests\MapInfoRequest;
use App\Integrations\Task2\TaskPhp;
use App\Services\HistoryRequestService;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class TaskPhpController extends Controller
{
    public function __construct(
        protected HistoryRequestService $historyRequestService
    ) {
    }

    public function getPagePhp(): View
    {
        $historyRequests = $this->historyRequestService->getHistoryRequests(Auth::id());

        return view('task-php', [
            'data' => null,
            'historyRequests' => $historyRequests,
        ]);
    }

    public function getMapInfo(MapInfoRequest $request): View
    {
        $historyRequestDto = new CreateHistoryRequestDto(
            user_id: Auth::id(),
            text: $request->get('search'),
        );

        $data = TaskPhp::getApiData(
            "text=$historyRequestDto->text&type=geo&lang=ru_RU&apikey=".config('integration.api.yandex_map_key')
        );

        $this->historyRequestService->createHistoryRequest($historyRequestDto);
        $historyRequests = $this->historyRequestService->getHistoryRequests($historyRequestDto->user_id);

        return view('task-php', [
            'data' => $data,
            'historyRequests' => $historyRequests,
        ]);
    }
}
