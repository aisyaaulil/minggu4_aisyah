<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//seeding
/*         DB::table('Articles')->insert([
            'title' => 'Belajar Model Dengan Laravel',
            'content' => 'Aisyah Ulil sedang belajar model Laravel',
            'image' => 'https://via.placeholder.com/640x480.png/00ff77?text=BelajarModel',
            ]); */
//factory

        \App\Models\Article::factory()->count(10)->create();
    }
}