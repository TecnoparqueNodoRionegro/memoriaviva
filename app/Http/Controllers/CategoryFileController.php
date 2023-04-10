<?php

namespace App\Http\Controllers;

use App\Models\CategoryFile;
use App\Models\File;
use Illuminate\Http\Request;

class CategoryFileController extends Controller
{
    public function index() {
        $files = File::all();
        $categories = CategoryFile::with('files')->get();

        return view('galleries.index', compact('categories'));
    }
}
