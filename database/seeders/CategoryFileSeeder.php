<?php

namespace Database\Seeders;

use App\Models\CategoryFile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryFile = new CategoryFile();
        $categoryFile->description = "Murales";
        $categoryFile->save();
    }
}
