<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OpenGraphSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OpenGraph::create([
            'og_type' => 'product',
            'og_title' => 'carpet cleaning Cleaning',
            'og_url' => '/cleaning',
            'og_image' => '/img/logo_cleaning.png',
            'og_descriptioon' => 'Company Cleaning. Service carpet cleaning. Places: Minsk Moscow Warsaw',
            'og_plural_title' => 'Carpets cleaning',
            'url' => '/company/17/service/5',
            'user_id' => optional(Auth::user())->id,
            'status' => 'service',
        ]);
        OpenGraph::create([
            'og_type' => 'product2',
            'og_title' => 'window washing Cleaning',
            'og_url' => '/cleaning',
            'og_image' => '/img/logo_cleaning.png',
            'og_descriptioon' => 'Company Cleaning. Service window washing. Places: Minsk Moscow Warsaw',
            'og_plural_title' => 'Window washing',
            'url' => '/company/21/service/1',
            'user_id' => optional(Auth::user())->id,
            'status' => 'service',
        ]);
        OpenGraph::create([
            'og_type' => 'product',
            'og_title' => 'House cleaning Cleaning',
            'og_url' => '/cleaning',
            'og_image' => '/img/logo_cleaning.png',
            'og_descriptioon' => 'Company Cleaning. Service House cleaning. Places: Minsk Moscow Warsaw',
            'og_plural_title' => 'House cleaning',
            'url' => '/company/21/service/3',
            'user_id' => optional(Auth::user())->id,
            'status' => 'service',
        ]);
    }
}
