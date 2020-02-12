<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'area' => 'required',
            'city' => 'required',
            'brand' => 'required', 
            'model' => 'required', 
            'volume' => 'required',
            'owners' => 'required', 
            'mileage' => 'required', 
            'year' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);
        $post = Post::add($request->all());
        $post->uploadImage($request->file('image'));
        return redirect()->route('homeIndex');
    }
}
