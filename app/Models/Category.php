<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// This model was made with the command
// "php artisan make:model Category".
// Protected = only usable by the parent class and child classes(?).
class Category extends Model
{
    protected $table = 'categories'; 
}
