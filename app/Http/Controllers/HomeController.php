<?php

namespace App\Http\Controllers;

// NOTE TO SELF: be EXTRA percise with naming.
// I spent a few moments wondering why this was not working. 
// It was written with a lowercase "app" so it was throwing an error.
use App\Models\Category;
use App\Models\Post;

// Was used within function to get data from database.
// Query Builder.
// use Illuminate\Support\Facades\DB;

// Controllers are used to get dynamic data from the database 
// and pass that data to "View". 
// They are created in the "app/Http/Controllers" folder.

// This file was made with the command:
// "php artisan make:controller HomeController". 

// Declaring a child(?) controller class that is a part of the parent "Controller". 
class HomeController extends Controller
{
    // Public function that contains an array and the contents are displayed on the home page.
    // Public = accessible anywhere.
    public function index()
    {

        // Declare "allCategories" variable with an array of data.
        // $allCategories = ['Category 1', 'Category 2'];

        // Declare "allCategories" to get data from database and pass it to "view".
        // Query Builder.
        // $allCategories = DB::table("categories")->get();

        // Declare "allCategories" to get data from database and pass it to "view".
        // Model-method.
        // $allCategories = Category::all();

        // Used with compact() PHP function
        $categories = Category::all();

        // Get "posts" table data from database ordered by "id" in a "descending" order.
        // $posts = Post::orderBy('id', 'desc')->get(); 

        // Alternative syntax for "orderBy". 
        // $posts = Post::latest()->get(); 

        // Filter posts with "where()" -method and get category id from "request()" -helper. 
        // $posts = Post::where('category_id', request('category_id'))->latest()->get();

        // Homepage has no content without category_id. 
        // "when()" method accepts first condition (category_id) if no "category_id" is requested on home page
        // and returns latest data from the "posts" table.
        //
        // If a specific "category_id" is requested from homepage, "when()" method executes the function
        // and returns posts with the requested "category_id". 
        $posts = Post::when(request("category_id"), function ($query) 
        {

            $query->where("category_id", request("category_id"));

        })->latest()->get();

        // Pass the variable data to "home" View file.
        // This data will be accessible as a "$categories" variable.
        // Multiple variables can be passed to "view" array.
        // If variable names are the same as array keys, PHP compact()-function can be used.
        return view("home", compact("categories","posts"));

        /* 

        return view("home", [
          'categories' => $allCategories,
          'posts' => $posts
         ]);

        */
    }
}
