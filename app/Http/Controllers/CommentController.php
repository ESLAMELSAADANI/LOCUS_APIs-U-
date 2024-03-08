<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Store a newly created comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'comment' => 'required|string|max:1000',
        ]);

        // Create a new comment
        $comment = new Comment();
        $comment->user_id = auth()->id();
        $comment->comment = $request->comment;
        $post->comments()->save($comment);

        return response()->json(['message' => 'Comment added successfully', 'comment_id' => $comment->id], 201);
    }

    /**
     * Update the specified comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Post $post, Comment $comment)
    {
        $request->validate([
            'comment' => 'required|string|max:1000',
        ]);

        // Check if the authenticated user owns the comment
        if ($comment->user_id !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Update the comment
        $comment->update(['comment' => $request->comment]);

        return response()->json(['message' => 'Comment updated successfully']);
    }

    /**
     * Remove the specified comment from storage.
     *
     * @param  \App\Models\Post  $post
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Post $post, Comment $comment)
    {
        // Check if the authenticated user owns the comment
        if ($comment->user_id !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Delete the comment
        $comment->delete();

        return response()->json(['message' => 'Comment deleted successfully']);
    }
}
