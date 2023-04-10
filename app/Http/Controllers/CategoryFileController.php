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
        return view('admin.galleries.index');
       
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

        return redirect()->route('galleries.show');
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
    public function edit(CategoryFile $categoryFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryFile  $categoryFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryFile $categoryFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryFile  $categoryFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryFile $categoryFile)
    {
        //
    }
}
