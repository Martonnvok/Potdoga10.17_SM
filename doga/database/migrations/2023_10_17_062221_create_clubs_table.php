<?php

use App\Models\clubs;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->id('club_id');
            $table->date('establishment');
            $table->string('location');
            $table->integer('max_number');
            $table->timestamps();
        });

        clubs::create([ 
            'establishment' =>'2000-01-01', 
            'location' => 'India',  
            'max_number' => 1,
    
        ]); 

        clubs::create([ 
            'establishment' =>'2002-01-01', 
            'location' => 'South Park',  
            'max_number' => 4,
    
        ]); 

        clubs::create([ 
            'establishment' =>'2004-01-01', 
            'location' => 'Hungary',  
            'max_number' => 6,
    
        ]); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
