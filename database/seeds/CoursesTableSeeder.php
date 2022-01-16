<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'course_name' => 'Gempa Bumi',
            'isi' => 'ini gempa bumi',
            'slug' => 'gempa-bumi',
        ]);

        DB::table('courses')->insert([
            'course_name' => 'Banjir',
            'isi' => 'ini banjir',
            'slug' => 'banjir',
        ]);

        DB::table('courses')->insert([
            'course_name' => 'Kebakaran',
            'isi' => 'ini kebekaran',
            'slug' => 'kebakaran',
        ]);
    }
}
