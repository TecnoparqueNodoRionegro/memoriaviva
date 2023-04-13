<?php

namespace App\Http\Controllers;

use App\Models\CategoryFile;
use Illuminate\Http\Request;

class CategoryFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $datos ['categorias'] = CategoryFile::paginate(10);
        return view('admin.galleries.index', $datos);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules = [
            'description' => ['required']
        ];

        $customMessages = [
            'description.required' => 'Este campo es obligatorio'
        ];

        $request->validate($rules, $customMessages);
        
        $categoryFile = new CategoryFile();

        $categoryFile->description = $request->description;
        
        $categoryFile->save();

        return redirect()->route('galleries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryFile  $categoryFile
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryFile $categoryFile)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryFile  $categoryFile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = CategoryFile::findOrFail($id);

        return view('admin.galleries.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryFile  $categoryFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //

        

        $datoCategoria = request()->except(['_token', '_method']);
        CategoryFile::where('id', '=' , $id)->update($datoCategoria);
        return redirect()->route('galleries.index');
    
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryFile  $categoryFile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        CategoryFile::destroy($id);
        return redirect()->route('galleries.index');
use Illuminate\Http\Request;

use App\Models\CategoryFile;
use App\Models\File;

class CategoryFileController extends Controller
{
    public function index() {
        $categories = CategoryFile::all();;
        $files = File::select();

        return view('galleries.index', compact('categories'));
    }
    public function show(CategoryFile $category){
        $files = File::all();
        return view('galleries.show', compact('category', 'files'));
    }
}
