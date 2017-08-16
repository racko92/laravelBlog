<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    public function index($tagId)
    {
        $tag = Tag::findOrFail($tagId);

        $posts = $tag->posts;

        return view('post.index', compact('posts'));
    }
    public function getRouteKetName()
    {
        return 'name';
    }
}
