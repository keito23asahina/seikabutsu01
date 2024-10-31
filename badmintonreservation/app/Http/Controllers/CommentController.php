<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'body' => 'required|max:1000',
        ]);

        $comment = new Comment([
            'body' => $request->body,
            'user_id' => auth()->id(),
        ]);

        $post->comments()->save($comment);

        return back()->with('success', 'コメントが投稿されました。');
    }
    
    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment);
        
        $comment->delete();

        return back()->with('success', 'コメントが削除されました。');
    }
}
