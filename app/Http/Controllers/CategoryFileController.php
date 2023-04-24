<?php

namespace App\Http\Controllers;

use App\Models\CategoryFile;
use App\Models\File;

class CategoryFileController extends Controller
{
    public function index() {
        $categoryFiles = CategoryFile::all();
        $files = [];

        foreach($categoryFiles as $category){
            $files[] = File::select('category_file_id','route')->where('category_file_id', $category->id)->orderBy('id', 'DESC')->first();
        }
        return view('galleries.index', compact('categoryFiles', 'files'));   
    }
    public function show(CategoryFile $category){
        $files = File::where('category_file_id', $category->id)->orderBy('id', 'DESC')->get();

        return view('galleries.show', compact('category', 'files'));
    }
}
