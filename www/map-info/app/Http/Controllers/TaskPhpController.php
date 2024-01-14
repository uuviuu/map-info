<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class TaskPhpController extends Controller
{
    public function getPagePhp(): View
    {
        return view('task-php');
    }
}
