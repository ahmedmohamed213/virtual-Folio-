<?php

namespace Database\Seeders;

use App\Models\firstPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FirstPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firstPages = firstPage::get();
        foreach ($firstPages as $firstPage) {
            $firstPage->delete();
        }

        firstPage::create([
            'name' => 'test',
            'title' => 'test',

        ]);
    }
}