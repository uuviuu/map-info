<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class ShopService
{
    public function createTable(): void
    {
       DB::statement(config('integration.sql_queries.create_table'));

       DB::insert(config('integration.sql_queries.dump'));
    }
}
