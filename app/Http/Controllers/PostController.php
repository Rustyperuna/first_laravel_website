<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    // Controller to get post data by "post" and pass it to view.
    // Requires a "view" file to present the data and "route" to it.
    // Type hint: "Post = Model object" and the parameter is "$post".
    public function show(Post $post)
    {
        // Using type hint, database search is done automatically and
        // eliminates the need to call "find()". 
        // $post = Post::find( $postId );

        return view("post", compact("post"));
    }
}
