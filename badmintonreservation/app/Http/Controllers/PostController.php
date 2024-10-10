<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Gym;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    
    public function create()
    {
        $gyms = Gym::all();
        return view('posts.create', compact('gyms'));
    }
    
    public function index(Post $post)
    {
        $posts = Post::with('user', 'gym')->latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }
    
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
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


