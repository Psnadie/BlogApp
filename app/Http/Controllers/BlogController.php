<?php

namespace App\Http\Controllers;

use App\Models\blogApp;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:60',
            'entry' => 'required|string|max:250',
            'text' => 'required|string',
            'author' => 'required|string|max:100',
            'genre' => 'required|string|max:100',
            'path' => 'nullable|string|max:100',
        ]);

        blogApp::create($validated);

        return redirect()->route('blog.index')->with('success', 'Blog created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(blogApp $blogApp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blogApp $blogApp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blogApp $blogApp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blogApp $blogApp)
    {
        //
    }
}
