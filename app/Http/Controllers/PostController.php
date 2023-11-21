<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $region = $request->input('region');
        $jarak = $request->input('jarak');
        $jenis = $request->input('jenis');

        $posts = Post::with('pemilik','review','review.pereview');

        if($region) $posts = $posts->where('region', $region);
        if($jarak) $posts = $posts->where('jarakKampus', $jarak);
        if($jenis) $posts = $posts->where('jenisKos', $jenis);
        
        $posts = $posts->get();
        return view('frontend.blog.index', compact('posts'));
    }

    public function show($slug)
    {
        return view('posts.show', [
            'post' => Post::find($slug)
        ]);
    }
}