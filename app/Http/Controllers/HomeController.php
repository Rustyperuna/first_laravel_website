<?php

namespace App\Http\Controllers;

// NOTE TO SELF: be EXTRA percise with naming.
// I spent a few moments wondering why this was not working. 
// It was written with a lowercase "app" so it was throwing an error.
use App\Models\Category;

// Was used within function to get data from database.
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
    public function index(){

        // Declare "allCategories" variable with an array of data.
        // $allCategories = ['Category 1', 'Category 2'];

        // Declare "allCategories" to get data from database and pass it to "view".
        // Controller-method.
        // $allCategories = DB::table("categories")->get();

        // Declare "allCategories" to get data from database and pass it to "view".
        // Model-method.
        $allCategories = Category::all();

        // Pass the variable data to "home" View file.
        // This data will be accessible as a "$categories" variable.
        return view("home", ["categories" => $allCategories]);
    }
}
