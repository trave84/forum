<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();                          
            $table->string('title',127)->nullable();            
            $table->string('text',1000)->nullable();                       
            $table->timestamps();  
           
          
        });

      
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {Schema::table('users', function (Blueprint $table) {
        $table->string('name')->nullable(false)->change(); // makes the column NOT nullable again
    });
    
        Schema::dropIfExists('questions');
    }
}
