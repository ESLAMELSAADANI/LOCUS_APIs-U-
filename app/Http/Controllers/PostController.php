<?php

namespace App\Http\Controllers;

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

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
        $imagePath = $request->file('image')->store('users_photo', 's3');

        // Set the ACL of the uploaded image to "public-read"
        Storage::disk('s3')->setVisibility($imagePath, 'public');

        // Get the full URL for the image path
        $photoUrl = Storage::disk('s3')->url($imagePath);

        // Create a new post record
        $post = new Post();
        $post->user_id = auth()->id();
        $post->caption = $request->caption;
        $post->image_path = $photoUrl;
        $post->save();

        return response()->json(['message' => 'Post created successfully', 'post_id' => $post->id, 'image_path' => $photoUrl], 201);
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
            Storage::disk('s3')->delete($post->image_path);

            // Store the new image
            $imagePath = $request->file('image')->store('users_photo', 's3');

            // Set the ACL of the uploaded image to "public-read"
            Storage::disk('s3')->setVisibility($imagePath, 'public');

            // Get the full URL for the image path
            $photoUrl = Storage::disk('s3')->url($imagePath);

            $post->image_path = $imagePath;
        }

        $post->save();

        return response()->json(['message' => 'Post updated successfully', 'image_path' => $photoUrl]);
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
        Storage::disk('s3')->delete($post->image_path);

        // Delete the post record
        $post->delete();

        return response()->json(['message' => 'Post deleted successfully']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Fetch all posts from the database
        $posts = Post::all();

        // Return the posts in the response
        return response()->json([
            'message' => 'All posts retrieved successfully',
            'posts' => $posts
        ], 200);
    }
}
