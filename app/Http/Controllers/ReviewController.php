<?php

namespace App\Http\Controllers;
use App\Models\review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $review = review::with('review')->get();
        return view('frontend.blog.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $review = new review;
        $review->nik_user = auth()->user()->nik;
        $review->id_kos = $request->id_kos;
        $review->pesan = $request->pesan;
        $review->save();
        return redirect()->back();
    }   

    public function show($slug)
    {
        return view('posts.show', [
            'post' => Post::find($slug)
        ]);
    }
}
