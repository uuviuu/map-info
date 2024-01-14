<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class TaskSqlController extends Controller
{
    public function getPageSql(): View
    {
        return view('task-sql');
    }
}
