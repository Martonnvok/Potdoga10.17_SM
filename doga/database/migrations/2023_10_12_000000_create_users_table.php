<?php

use App\Models\users;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });

        users::create([ 
            'name' =>'evelin', 
            'email' => 'blabla@gmail.com',  
    
        ]); 

        users::create([ 
            'name' =>'András', 
            'email' => 'szeretiahalrudit@gmail.com',  
    
        ]); 

        users::create([ 
            'name' =>'Marci', 
            'email' => 'szeretiatejet@gmail.com',  
    
        ]); 
    }

   
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
