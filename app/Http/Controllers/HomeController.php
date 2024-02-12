<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index() {
        $message = Session::get('message');

        return Inertia::render('Home', [
            'message' => $message,
        ]);
    }

    public function about() {
        return Inertia::render('About');
    }
}
