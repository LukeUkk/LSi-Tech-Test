<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::destroy([1,2]);
        Page::firstOrCreate(
            ['id' => 1],
            [
                'title' => 'Home',
                'content' => '',
            ]
        );
        Page::firstOrCreate(
            ['id' => 2],
            [
                'title' => 'Shop',
                'content' => '',
            ]
        );
    }
}
