<?php

namespace App\Services;

use App\Integrations\Task1\TaskSql;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ShopService
{
    public function createShopTable(): void
    {
        TaskSql::createShopTable();
    }

    public function getShop(?bool $is_filter = false): Collection
    {
        $shop = new Collection();
        if (Schema::hasTable('shop')) {
            if ($is_filter) {
                $shop = new Collection(TaskSql::filterShop());
            } else {
                $shop = DB::table('shop')->orderBy('article')->get();
            }
        }

        return $shop;
    }
}
