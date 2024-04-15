<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Store a newly created post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'caption' => 'required|string',
            'image' => 'required|image|max:2048', // Adjust validation rules as per your requirements
        ]);

        // Store the uploaded image
        $imagePath = $request->file('image')->store('users_photo', 'public');

        // Create a new post record
        $post = new Post();
        $post->user_id = auth()->id();
        $post->caption = $request->caption;
        // Here we are using the Storage facade to get the URL
        $photoUrl = \Illuminate\Support\Facades\Storage::url($imagePath);
        $post->image_path = $photoUrl;
        $post->save();

        return response()->json(['message' => 'Post created successfully', 'post_id' => $post->id], 201);
    }

    /**
     * Update the specified post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit(Request $request, Post $post)
    {
        // Check if the authenticated user owns the post
        if ($post->user_id !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $request->validate([
            'caption' => 'required|string',
            'image' => 'image|max:2048', // Adjust validation rules as per your requirements
        ]);

        // edit the post record
        $post->caption = $request->caption;

        if ($request->hasFile('image')) {
            // Delete the old image
            Storage::delete($post->image_path);

            // Store the new image
            $imagePath = $request->file('image')->store('users_photo', 'public');
            $photoUrl = \Illuminate\Support\Facades\Storage::url($imagePath);
            $post->image_path = $photoUrl;
        }

        $post->save();

        return response()->json(['message' => 'Post updated successfully']);
    }

    /**
     * Remove the specified post from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Post $post)
    {
        // Check if the authenticated user owns the post
        if ($post->user_id !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Delete the image associated with the post
        Storage::delete($post->image_path);

        // Delete the post record
        $post->delete();

        return response()->json(['message' => 'Post deleted successfully']);
    }
    public function index()
    {
        // Fetch all photos from the database
        $posts = Post::all();

        // Add full URL to each photo
        // foreach ($photos as $photo) {
        //     $photo->full_path = Storage::url($photo->image_path);
        // }

        // Return the posts with full URLs in the response
        return response()->json([
            'message' => 'All posts retrieved successfully',
            'Posts' => $posts
        ], 200);
    }
}
