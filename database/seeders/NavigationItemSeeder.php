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
            'url' => '/',
        ]);

        NavigationItem::create([
            'title' => 'Books',
            'url' => '/books',
        ]);

        NavigationItem::create([
            'title' => 'About',
            'url' => '/about',
        ]);
    }
}
