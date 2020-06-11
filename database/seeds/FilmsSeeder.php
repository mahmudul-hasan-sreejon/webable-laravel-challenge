<?php

use Illuminate\Database\Seeder;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            'name' => 'Interstellar',
            'description' => "A team of explorers travel through a wormhole in space in an attempt to ensure humanity's survival.",
            'release_date' => '2014-10-26',
            'rating' => 4,
            'ticket_price' => 10.00,
            'country' => 18,
            'photo' => 'generic.png',
            'slug' => \Illuminate\Support\Str::slug('Interstellar'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('films')->insert([
            'name' => 'Memento',
            'description' => "A man with short-term memory loss attempts to track down his wife's murderer.",
            'release_date' => '2000-09-05',
            'rating' => 5,
            'ticket_price' => 8.00,
            'country' => 18,
            'photo' => 'generic.png',
            'slug' => \Illuminate\Support\Str::slug('Memento'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('films')->insert([
            'name' => 'The Prestige',
            'description' => "After a tragic accident, two stage magicians engage in a battle to create the ultimate illusion while sacrificing everything they have to outwit each other.",
            'release_date' => '2006-09-20',
            'rating' => 5,
            'ticket_price' => 11.00,
            'country' => 18,
            'photo' => 'generic.png',
            'slug' => \Illuminate\Support\Str::slug('The Prestige'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('films')->insert([
            'name' => 'The Dark Knight',
            'description' => 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
            'release_date' => '2008-07-18',
            'rating' => 5,
            'ticket_price' => 12.00,
            'country' => 18,
            'photo' => 'generic.png',
            'slug' => \Illuminate\Support\Str::slug('The Dark Knight'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('films')->insert([
            'name' => 'Inception',
            'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.',
            'release_date' => '2010-06-16',
            'rating' => 4,
            'ticket_price' => 10.00,
            'country' => 18,
            'photo' => 'generic.png',
            'slug' => \Illuminate\Support\Str::slug('Inception'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('films')->insert([
            'name' => 'Following',
            'description' => 'A young writer who follows strangers for material meets a thief who takes him under his wing.',
            'release_date' => '1999-11-05',
            'rating' => 4,
            'ticket_price' => 8.00,
            'country' => 18,
            'photo' => 'generic.png',
            'slug' => \Illuminate\Support\Str::slug('Following'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
