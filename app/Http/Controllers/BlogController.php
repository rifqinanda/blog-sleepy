<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        if ($request->search) {
            $blog = Blog::with('category')
            ->where('title', 'LIKE', '%' . $request->search . '%')
            ->orWhere('desc', 'LIKE', '%' . $request->search . '%')
            ->get();
        }else{
            $blog = Blog::with('category')->get();
        }
        return view('backend.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = Blog::all();
        $category = Category::all();
        return view('backend.blog.create', compact('category', 'blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required',
            'id_category' => 'required',
            'published_at' => 'required',
        ]);

        $imgData = Storage::disk('public')->put('image', $request->file('image'));

        Blog::insert([
            'title' => $request->title,
            'desc' => $request->desc,
            'image' => $imgData,
            'id_category' => $request->id_category,
            'published_at' => $request->published_at,
        ]);

        return redirect('/admin/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::with('category')->find($id);
        $category = Category::all();
        return view('backend.blog.edit', compact('blog', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'id_category' => 'required',
        ]);

        $imgData = $request->image_old;
        if ($request->has('image')) {
            $delete = Blog::findOrFail($id);
            Storage::disk('public')->delete($delete->image);
            $imgData = Storage::disk('public')->put('image', $request->file('image'));
        }

        Blog::where('id', $id)->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'id_category' => $request->id_category,
            'image' => $imgData,
        ]);

        return redirect('/admin/blog');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Blog::findOrFail($id);
        Blog::find($id)->delete();
        Storage::disk('public')->delete($delete->image);
        $delete->delete();

        return redirect('/admin/blog');
    }
}
