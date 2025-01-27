<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeInvoke extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        $featuredNews = News::featured()->first();

        return view('home', compact('featuredNews'));
    }
}
