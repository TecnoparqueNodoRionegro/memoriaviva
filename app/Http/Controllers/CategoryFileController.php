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
        $files1 = [];
        $files2 = [];
        $files3 = [];
        $files4 = [];
        $i = 0;

        $files = File::where('category_file_id', $category->id)->orderBy('id', 'DESC')->get();

        foreach($files as $file){
            $iteration = $i % 4;
            
            switch ($iteration){
                case 0:
                    $files1[] = $file;
                    break;
                case 1:
                    $files2[] = $file;
                    break;
                case 2:
                    $files3[] = $file;
                    break;
                case 3:
                    $files4[] = $file;
                    break;
            }
            $i++;
        }

        // return $files;
        return view('galleries.show', compact('category', 'files', 'files1', 'files2', 'files3', 'files4'));
    }
}
