<?php

namespace Database\Seeders;

use App\Models\NavigationItem;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NavigationItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NavigationItem::create([
            'title' => 'Log-in',
            'route' => 'login',
        ]);

        NavigationItem::create([
            'title' => 'Register',
            'route' => 'register',
        ]);

        NavigationItem::create([
            'title' => 'Dashboard',
            'route' => 'dashboard',
        ]);

        NavigationItem::create([
            'title' => 'Profile',
            'route' => 'profile.edit',
        ]);

        NavigationItem::create([
            'title' => 'Log-out',
            'route' => 'logout',
        ]);
    }
}
