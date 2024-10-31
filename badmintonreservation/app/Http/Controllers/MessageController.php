<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request, Group $group)
    {
        $request->validate([
            'content' => 'required|max:1000',
        ]);

        $group->messages()->create([
            'content' => $request->content,
            'user_id' => auth()->id(),
        ]);

        return back()->with('success', 'メッセージが送信されました。');
    }
}
