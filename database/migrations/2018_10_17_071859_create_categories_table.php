<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
         // CREATES: new table `categories`
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 127);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        // DELETES: table if table exsits
        Schema::dropIfExists('categories');
    }
}
