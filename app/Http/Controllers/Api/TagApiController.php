<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Resources\TagResource;
use App\Post;
use App\Tag;

class TagApiController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return TagResource::collection($tags);
    }

    public function posts($id)
    {
        $tag = Tag::find($id);
        $posts = $tag->posts;
        return PostResource::collection($posts);
    }
}
