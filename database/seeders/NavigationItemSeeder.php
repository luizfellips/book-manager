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
            'title' => 'Home',
            'route' => 'index',
        ]);

        NavigationItem::create([
            'title' => 'Books',
            'route' => 'books.index',
        ]);

        NavigationItem::create([
            'title' => 'About',
            'route' => 'about',
        ]);
    }
}
