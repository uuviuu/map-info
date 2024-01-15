<?php

namespace App\Repositories;

use App\Models\HistoryRequest;
use Illuminate\Database\Eloquent\Builder;
use Prettus\Repository\Eloquent\BaseRepository;

class HistoryRequestRepositoryEloquent extends BaseRepository
{
    public function model(): string
    {
        return HistoryRequest::class;
    }

    public function byUser(int $userId): Builder
    {
        return $this->getModel()->query()->where('user_id', $userId);
    }
}
