<?php

namespace App\Http\Controllers;

use App\Models\CategoryFile;
use Illuminate\Http\Request;

class CategoryFileController extends Controller
{
    public function show() {
        $category = CategoryFile::all();
    }
}
