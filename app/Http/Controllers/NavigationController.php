<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NavigationItem;

class NavigationController extends Controller
{
    public function index() {
        $navigationItems = NavigationItem::all();

        return response()->json($navigationItems);
    }
}
