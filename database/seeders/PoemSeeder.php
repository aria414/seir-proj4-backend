<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Filesystem\Filesystem;
//Import the Poem model so it can be use during seed.
use App\Models\Poem;

class PoemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('poems')->insert([
        //     'title' => "The Road Goes Ever On",
        //     'translation'=>'',
        //     'content' => "Roads go ever ever on,
        //     Over rock and under tree,
        //     By caves where never sun has shone,
        //     By streams that never find the sea;
        //     Over snow by winter sown,
        //     And through the merry flowers of June,
        //     Over grass and over stone,
        //     And under mountains in the moon.
        //     ##
        //     Roads go ever ever on
        //     Under cloud and under star,
        //     Yet feet that wandering have gone
        //     Turn at last to home afar.
        //     Eyes that fire and sword have seen
        //     And horror in the halls of stone
        //     Look at last on meadows green
        //     And trees and hills they long have known.",
        //     'citation' => "J.R.R. Tolkien, The Lord of the Rings, The Fellowship of the Ring, A Long-expected Party",
        //     'comment' => "The Road Goes Ever On, also known as A Walking Song, is a walking song by J.R.R. Tolkien, fictionally written by Bilbo Baggins; verses of it are sung at various places in The Hobbit and The Lord of the Rings.",
        //     'intextref' => " At last Bilbo trusted Gandalf's judgement and released the ring, before leaving with three dwarves down the road and singing a song.",
        //     'recitedby' => "Bilbo Baggins",
        //     'language'=> 'English',
        //     'bgimage' => "https://images.unsplash.com/photo-1526749837599-b4eba9fd855e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
        // ]);
        $json = file_get_contents("seedpoems.json", true);
        $data = json_decode($json);
        var_dump($data);
        
        foreach ($data as $obj) {
            Poem::create(array (
                'title' => $obj->title,
                'translation' => $obj->translation,
                'content' => $obj->content,
                'citation' => $obj->citation,
                'comment' => $obj->comment,
                'intextref' => $obj->intextref,
                'recitedby' => $obj->recitedby,
                'language' => $obj->language,
                'bgimage' => $obj->bgimage,
            ));
        }

    }
}
