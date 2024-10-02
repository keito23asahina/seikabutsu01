<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gym;

class PostController extends Controller
{
    public function create()
    {
        $gyms = Gym::all();
        return view('posts.create', compact('gyms'));
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'gym_id' => 'required|exists:gyms,id',
        ]);
    
        $post = Post::create([
            'user_id' => auth()->id(),
            'gym_id' => $validatedData['gym_id'],
            'title' => $validatedData['title'],
            'body' => $validatedData['body'],
        ]);
    
        return redirect()->route('posts.show', $post)->with('success', '投稿が作成されました。');
    }
}


