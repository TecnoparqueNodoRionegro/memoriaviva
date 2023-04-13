<?php

namespace App\Http\Controllers;

use App\Models\CategoryFile;
use App\Models\File;
use App\Models\FileType;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index(){
        $files = File::orderBy('id', 'DESC')->paginate(5);

        return view('files.index', compact('files'));
    }

    public function create(){
        $categoryFiles = CategoryFile::all();
        $fileTypes = FileType::all();
        $states = State::all();

        return view('files.create', compact('categoryFiles', 'fileTypes', 'states'));
    }

    public function store(Request $request){
        $file = new File();

        if ($request->routeFile != null){
            $img = $request->file('routeFile')->store('public/img');
            $url = Storage::url($img);

            $file->route = $url;
        } else{
            $file->route = $request->routeUrl;
        };


        $file->category_file_id = $request->categoryFile;
        $file->file_type_id = $request->fileType;
        $file->state_id = $request->state;

        $file->save();

        return redirect()->route('files.index');
    }

    public function edit($id){
        $file = File::find($id);

        return view('files.edit', compact('file'));
    }
}
