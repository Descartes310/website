<?php

use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run()
    {
        $typi_pages = [
            [
                'id' => '1',
                'meta_robots_no_index' => '',
                'meta_robots_no_follow' => '',
                'is_home' => '1',
                'css' => '',
                'js' => '',
                'template' => 'home',
                'created_at' => '2014-03-28 21:57:44',
                'updated_at' => '2014-03-28 20:26:35',
                'slug' => '{"fr":null,"en":null,"nl":null}',
                'uri' => '{"fr":null,"nl":null,"en":null}',
                'title' => '{"fr":"Accueil","nl":"Home","en":"Home"}',
                'body' => '{"fr":"<h1>Accueil</h1>","nl":"<h1>Home</h1>","en":"<h1>Home</h1>"}',
                'status' => '{"fr":"1","nl":"1","en":"1"}',
                'meta_description' => '{"fr":null,"nl":null,"en":null}',
                'meta_keywords' => '{"fr":null,"nl":null,"en":null}',
            ],
            [
                'id' => '2',
                'meta_robots_no_index' => '',
                'meta_robots_no_follow' => '',
                'is_home' => '0',
                'css' => '',
                'js' => '',
                'template' => '',
                'created_at' => '2014-03-28 21:52:13',
                'updated_at' => '2014-03-28 21:08:14',
                'slug' => '{"fr":"contact","en":"contact","nl":"contact"}',
                'uri' => '{"fr":"contact","nl":"contact","en":"contact"}',
                'title' => '{"fr":"Contact","nl":"Contact","en":"Contact"}',
                'body' => '{"fr":"<h1>Contact</h1>","nl":"<h1>Contact</h1>","en":"<h1>Contact</h1>"}',
                'status' => '{"fr":"1","nl":"1","en":"1"}',
                'meta_description' => '{"fr":null,"nl":null,"en":null}',
                'meta_keywords' => '{"fr":null,"nl":null,"en":null}',
            ],
        ];

        DB::table('pages')->insert($typi_pages);
    }
}
