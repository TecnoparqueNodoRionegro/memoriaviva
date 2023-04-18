<?php

namespace Database\Seeders;

use App\Models\CategoryProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryProduct = new CategoryProduct();
        $categoryProduct->description = "Chaquetas";
        $categoryProduct->file_id = 1;
        $categoryProduct->save();
    }
}
