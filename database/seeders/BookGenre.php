<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookGenre extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10),
            
    }
}
