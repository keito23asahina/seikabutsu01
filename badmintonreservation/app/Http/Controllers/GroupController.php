<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Post;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function create(Post $post)
    {
        return view('groups.create', compact('post'));
    }

    public function store(Request $request, Post $post)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable|max:1000',
        ]);

        $group = $post->group()->create([
            'name' => $request->name,
            'description' => $request->description,
            'creator_id' => auth()->id(),
        ]);

        $group->members()->attach(auth()->id());

        return redirect()->route('groups.show', $group)->with('success', 'グループが作成されました。');
    }

    public function show(Group $group)
    {
        $messages = $group->messages()->with('user')->latest()->paginate(20);
        return view('groups.show', compact('group', 'messages'));
    }

    public function join(Group $group)
    {
        $group->members()->attach(auth()->id());
        return back()->with('success', 'グループに参加しました。');
    }

    public function leave(Group $group)
    {
        $group->members()->detach(auth()->id());
        return back()->with('success', 'グループを退会しました。');
    }
}
