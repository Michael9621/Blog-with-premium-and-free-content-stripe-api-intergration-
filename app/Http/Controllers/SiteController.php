<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SiteController extends Controller
{
    public function showHome(){
        return view('pages.home')->with('posts', Post::all());
    }

    public function showPost($slug){
        $post=Post::where('slug', $slug)->first();
        return view('pages.post')->with('post',$post);
    }
}
