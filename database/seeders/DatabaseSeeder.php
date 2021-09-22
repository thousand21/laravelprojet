<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Portfolio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      /*   Portfolio::factory(9)->create();

        Contact::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@mail.com',
            'password' => Hash::make('testtest'),
            'created_at' => now()
        ]);

        DB::table('abouts')->insert([
            'text_part_one' => 'Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.',
            'text_part_two' => 'You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!'
        ]);

        DB::table('info_footers')->insert([
            'street' => '2215 John Daniel Drive',
            'city' => 'Clark, MO 65243',
            'info' => 'Freelance is a free to use, MIT licensed Bootstrap theme created by',
            'link_url' => 'http://startbootstrap.com',
            'link' => 'Start Bootstrap'
        ]);

        DB::table('headers')->insert([
            'img' => 'avataaars.svg',
            'title' => 'START BOOTSTRAP',
            'description' => 'Graphic Artist - Web Designer - Illustrator'
        ]); */
    }
}
