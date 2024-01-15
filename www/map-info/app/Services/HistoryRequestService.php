<?php

namespace App\Services;

use App\Dto\CreateHistoryRequestDto;
use App\Models\HistoryRequest;
use App\Repositories\HistoryRequestRepositoryEloquent;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class HistoryRequestService
{
    public function __construct(
        protected HistoryRequestRepositoryEloquent $historyRequestRepository,
    ) {
    }

    public function createHistoryRequest(CreateHistoryRequestDto $dto): HistoryRequest
    {
        return $this->historyRequestRepository->firstOrCreate($dto->toArray());
    }

    public function getHistoryRequests(int $userId): LengthAwarePaginator
    {
        return $this->historyRequestRepository->byUser($userId)
            ->orderBy('created_at', 'desc')
            ->paginate(5);
    }
}
