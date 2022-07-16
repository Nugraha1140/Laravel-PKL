<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            [
                'title' => 'Belajar Laravel',
                'content' => 'Lorem Ipsum sit amet dolor',
            ],
            [
                'title' => 'Belajar Controller',
                'content' => 'Lorem Ipsum sit amet dolor',
            ],
            [
                'title' => 'Belajar Route',
                'content' => 'Lorem Ipsum sit amet dolor',
            ],
        ];
        DB::table('posts')->insert($sample);
    }
}
