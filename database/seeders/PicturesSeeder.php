<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PicturesSeeder extends Seeder
{
    public function run()
    {
        DB::table('pictures')->insert([
            [
                'name' => 'Starry Night',
                'artist' => 'Vincent van Gogh',
                'price' => 10.25,
                'description' => 'An iconic painting by van Gogh, depicting the night sky.',
                'image' => 'images/backg.jpg',
            ],
            [
                'name' => 'Nature',
                'artist' => 'Leonardo da Vinci',
                'price' => 10.25,
                'description' => 'A portrait of nature.',
                'image' => 'images/background.jpg',
            ],
            [
                'name' => 'The Persistence of Memory',
                'artist' => 'Salvador Dalí',
                'price' => 10.25,
                'description' => 'A surrealistic painting by Salvador Dalí, featuring melting clocks.',
                'image' => 'images/new.jpg',
            ],
        ]);
    }
}
