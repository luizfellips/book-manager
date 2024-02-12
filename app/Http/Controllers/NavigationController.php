<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NavigationItem;

class NavigationController extends Controller
{
    public function index() {
        $navigationItems = NavigationItem::whereNotIn('route', ['profile.edit', 'dashboard', 'logout'])->get();

        if (auth()->user()) {
            $navigationItems = NavigationItem::whereNotIn('route', ['login', 'register'])->get();
        }

        return response()->json($navigationItems);
    }
}
