<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listMovies = [
            [
                "title" => "Transformers",
                "original_title" => "The Transformers 1",
                "date_release" => "2006-11-22",
                "language" => "eng ita",
                "image" => "https://t1.gstatic.com/licensed-image?q=tbn:ANd9GcRL1XgVEINwK9ZkYMu2_3Sw_4RRp7p0WRSVM6mHwvbOR-e_Lc-qMM-o3XPGXRy3GDx4",
            ],
            [
                "title" => "The Ring",
                "original_title" => "The Ring",
                "date_release" => "2002-01-12",
                "language" => "eng ita",
                "image" => "https://m.media-amazon.com/images/M/MV5BYTQzZjhiYjYtNDMzOS00ZjNiLTg2MGMtYWZmYWNjN2U5YTVmXkEyXkFqcGdeQXVyNjI3OTcxOTU@._V1_.jpg",
            ],
            [
                "title" => "Una Notte da Leoni",
                "original_title" => "The Hangover",
                "date_release" => "2005-05-13",
                "language" => "eng ita",
                "image" => "https://musicart.xboxlive.com/7/b1035100-0000-0000-0000-000000000002/504/image.jpg?w=1920&h=1080",
            ],
            
        ];
        foreach ($listMovies as $movie) {
            $newMovie = new Movie();
            $newMovie->title = $movie['title'];
            $newMovie->original_title = $movie['original_title'];
            $newMovie->date_release = $movie['date_release'];
            $newMovie->language = $movie['language'];
            $newMovie->image = $movie['image'];
            $newMovie->save();
        }
    }
}
