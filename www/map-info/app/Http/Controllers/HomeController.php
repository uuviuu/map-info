<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function getHome(): View
    {
        return view('home', [
            'pages' => [
                'task-sql',
                'task-php',
            ],
        ]);
    }
}
