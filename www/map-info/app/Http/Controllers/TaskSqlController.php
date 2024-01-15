<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskSqlFilterRequest;
use App\Services\ShopService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TaskSqlController extends Controller
{
    public function __construct(
        protected ShopService $shopService,
    ) {
    }

    public function getPageSql(TaskSqlFilterRequest $request): View
    {
        return view('task-sql', [
            'shop' => $this->shopService->getShop($request->get('is_filter')),
        ]);
    }

    public function createShopTable(): RedirectResponse
    {
        try {
            $this->shopService->createShopTable();
        } catch (\Exception $e) {
            return $this->backToPageSql(__('validation.views.message.already-create'));
        }

        return $this->backToPageSql(__('validation.views.message.create-table'));
    }

    private function backToPageSql(?string $message = null): RedirectResponse
    {
        session(['message' => $message]);

        $shop = $this->shopService->getShop();

        return back()->with(['shop' => $shop]);
    }
}
