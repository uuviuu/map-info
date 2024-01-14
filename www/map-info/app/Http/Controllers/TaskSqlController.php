<?php

namespace App\Http\Controllers;

use App\Services\ShopService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TaskSqlController extends Controller
{
    public function __construct(
        protected ShopService $shopService,
    ) {
    }

    public function getPageSql(): View
    {
        return view('task-sql');
    }

    public function createTable(): RedirectResponse
    {
        try {
            $this->shopService->createTable();
        } catch (\Exception $e) {
            session(['message' => __('validation.views.message.already-create')]);
            return back();
        }

        session(['message' => __('validation.views.message.create-table')]);
        return back();
    }
}
