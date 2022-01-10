<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WallRequest;
use App\Models\Post;

class WallController extends Controller
{
    public function submit(WallRequest $request) {
        $post = new Post();
        $post->name = $request->input('wall-name');
        $post->message = $request->input('wall-msg');
        $post->save();
        return redirect()->route('wall')->with('success', 'Your message has been posted!');
    }

    public function data() {
        $post = new Post;
        return view('wall', ['data' => $post->all()]);
    }
}
