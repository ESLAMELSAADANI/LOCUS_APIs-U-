<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;

class LikeController extends Controller
{
    /**
     * Store a newly created like in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request, Post $post)
    {
        // Check if the user has already liked the post
        if ($post->likes()->where('user_id', auth()->id())->exists()) {
            return response()->json(['error' => 'You have already liked this post'], 400);
        }

        // Create a new like
        $like = new Like();
        $like->user_id = auth()->id();
        $post->likes()->save($like);

        return response()->json(['message' => 'Like added successfully'], 201);
    }

    /**
     * Remove the specified like from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Post $post)
    {
        $post->likes()->where('user_id', auth()->id())->delete();

        return response()->json(['message' => 'Like deleted successfully']);
    }
}
