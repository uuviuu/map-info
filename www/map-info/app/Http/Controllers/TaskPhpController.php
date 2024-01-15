<?php

namespace App\Http\Controllers;

use App\Dto\CreateHistoryRequestDto;
use App\Http\Requests\MapInfoRequest;
use App\Integrations\Task2\TaskPhp;
use App\Services\HistoryRequestService;
use Illuminate\Http\RedirectResponse;
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

        $items = TaskPhp::getItems($historyRequestDto->text);

        $this->historyRequestService->createHistoryRequest($historyRequestDto);
        $historyRequests = $this->historyRequestService->getHistoryRequests($historyRequestDto->user_id);

        return redirect()->back()->with([
            'data' => $items,
            'historyRequests' => $historyRequests,
        ]);
    }
}
