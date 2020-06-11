<?php

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'user' => 1,
            'film' => 1,
            'comment' => "This is one of the most beautiful films I have ever seen.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('comments')->insert([
            'user' => 1,
            'film' => 2,
            'comment' => "Christopher Nolan's cinematic breakthrough...",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('comments')->insert([
            'user' => 1,
            'film' => 3,
            'comment' => "Gripping, suspenseful, mysterious, moving and often darkly funny.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('comments')->insert([
            'user' => 1,
            'film' => 4,
            'comment' => "The definitive movie of its genre and the best Batman film to date.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('comments')->insert([
            'user' => 1,
            'film' => 5,
            'comment' => "Mind-blowing, amazing, smart, thrilling.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('comments')->insert([
            'user' => 1,
            'film' => 6,
            'comment' => "This clammy, noirish thriller time-hops with a vengeance.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
