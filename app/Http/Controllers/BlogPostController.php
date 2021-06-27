<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::all();

        return view('blog', [
            'posts' => $posts,
        ]);
    }

    public function create()
    {
         //
    }

   
    public function store(Request $request)
    {
        //store a new post
    }

    public function show(BlogPost $blogPost)
    {
        
        return view('single-post', [
            'post' => $blogPost,
        ]);
        // return $blogPost;
    }

    
    public function edit(BlogPost $blogPost)
    {
        //show form to edit the post
    }

    
    public function update(Request $request, BlogPost $blogPost)
    {
        //save the edited post
    }

    
    public function destroy(BlogPost $blogPost)
    {
        //delete a post
    }
}
