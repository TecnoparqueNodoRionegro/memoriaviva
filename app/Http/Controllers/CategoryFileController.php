<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\CategoryFile;
use App\Models\File;

class CategoryFileController extends Controller
{
    public function index() {
        $categories = CategoryFile::all();;
        // $files = File::select();

        return view('galleries.index', compact('categories'));
    }
    public function show(CategoryFile $category, Request $request ){
        $files = File::all();
        $q= $request->query('q');
        

        return view('galleries.show', compact('category', 'files', 'q'));
    }
}
