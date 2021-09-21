<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::create([
            'description' =>
                'The world is stunned when a group of time travellers arrive from the year 2051 to
                deliver an urgent message: thirty years in the future, mankind is losing a global 
                war against a deadly alien species.',
            'duration' => 260,
            'genre' => 'Action/Sci-fi',
            'image_url' =>
                'https://blue.kumparan.com/image/upload/
                fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1625810267/
                Trailer-Perdana-The-Tomorrow-War-Membawa-Chris-Pratt-dalam-Misi_nmvfgx.jpg',
            'rating' => 4,
            'review' =>
                "A complete masterpiece film I seen after a long time beautiful story telling 
                mix of action, thrill, emotions,visualy extravaganza. First starting little bit
                of slow but after 30 to 40 it's shows take of , another positive things is this
                film is made for theatrical experience also this film you can watch with family
                because the writter show great family values which is absent most of hollywood
                film it's shows the relationship between father and daughter,a family man,also
                father and son.I love the character of muro forester or whatever for her the 
                film has gets a motion of emotions and Chris Pratt sir a hero what a fantastic 
                acting who jump for anyone in trouble without thinking himself he deserves award.
                Anotagonist the aliens were also incredable were tougher than protagonist and 
                there is also war between aliens and human nicely choreographed thanks to stunt 
                choreographer , cinematography is nice . Special deserves to Chris's mc kay sir 
                who show nothing is impossible who did a incredible job at his first live action 
                film really if this film release in theaters it cross 700 millions dollers.Love 
                you for this treat🙏💥😉",
            'title' => 'The Tomorrow War',
            'year' => 2021,
        ]);
    }
}
