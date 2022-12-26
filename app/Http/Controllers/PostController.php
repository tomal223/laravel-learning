<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function add(Request $request){

        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]); 

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->date = now();
        $post->save();

        return redirect()->route('dashboard') ;
        // return $post->id;
        
    }

    public function index(){
        $posts = Post::all();
        return view('post', [
            'posts' => $posts
        ]); 
    }

}
