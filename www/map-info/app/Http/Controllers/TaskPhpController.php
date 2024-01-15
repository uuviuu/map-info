<?php

namespace App\Http\Controllers;

use App\Dto\CreateHistoryRequestDto;
use App\Http\Requests\MapInfoRequest;
use App\Integrations\Task2\TaskPhp;
use App\Services\HistoryRequestService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;
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
            'data' => session('data') ?? [],
            'historyRequests' => $historyRequests,
        ]);
    }

    public function getMapInfo(MapInfoRequest $request): RedirectResponse
    {
        $historyRequestDto = new CreateHistoryRequestDto(
            user_id: Auth::id(),
            text: $request->get('search'),
        );

        $apiData = TaskPhp::getApiData(
            "text=$historyRequestDto->text&type=geo&lang=ru_RU&apikey=".config('integration.api.yandex_map_key')
        );

        $this->historyRequestService->createHistoryRequest($historyRequestDto);
        $historyRequests = $this->historyRequestService->getHistoryRequests($historyRequestDto->user_id);

        $features = array_slice($apiData['features'] ?? [], 0, 5);
        $data = Arr::pluck($features, 'properties.GeocoderMetaData');

        return redirect()->back()->with([
            'data' => $data,
            'historyRequests' => $historyRequests,
        ]);
    }
}
