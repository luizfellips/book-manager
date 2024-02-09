<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NavigationItem;

class NavigationController extends Controller
{
    public function index() {
        $navigationItems = NavigationItem::where('route', '!=', 'dashboard')->get();

        if (auth()->user()) {
            $navigationItems = NavigationItem::whereNotIn('route', ['login', 'register'])->get();
        }

        return response()->json($navigationItems);
    }
}
