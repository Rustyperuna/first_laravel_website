<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    /* Make a new table in the database with the command
     * "php artisan make:migration "create categories table"
     * or
     * "php artisan make:migration create_categories table"
     * 
     * This file was made with the above command.
     * 
     * To add the table below to the database, run the command 
     * "php artisan migrate".
     * 
     * I'm using mysql database, so the migration should ran successfully and
     * added a new "categories" table in the database. Further columns can be added as needed.
     * 
     * The database has a "migrations" table that details when a migration has been run 
     * with a timestamp and description.
     * 
     * You can roll back a migration with the command:
     * "php artisan migrate:rollback"
     * but it will roll back of the last batch.
     */

    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
