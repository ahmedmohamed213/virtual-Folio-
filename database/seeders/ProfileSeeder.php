<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $profiles = Profile::get();
        // foreach ($profiles as $profile) {

        //     $profile->delete();
        // }
        Profile::create([
            'title' => 'test',
            'body' => 'test',
            'year' => 'test',
            'type' => 'experience'
        ]);
    }
}