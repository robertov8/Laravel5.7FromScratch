<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome', [
            'foo'   => 'bar',
            'tasks' => [
                'Go to the store',
                'Go to the market',
                'Go to work',
                'Go to the concert'
            ]
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
