<?php

namespace App\Integrations\Task1;

use Illuminate\Support\Facades\DB;

class TaskSql
{
    public static function createShopTable(): void
    {
        DB::statement(config('integration.sql_queries.create_table'));

        DB::insert(config('integration.sql_queries.dump'));
    }

    /** @return array<string,mixed> */
    public static function filterShop(): array
    {
        return DB::select(config('integration.sql_queries.filter'));
    }
}
