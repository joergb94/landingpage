<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('section_id')->nullable();
            $table->string('title')->nullable();
            $table->string('element')->default('div');
            $table->longText('description')->nullable();
            $table->string('footer')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->softDeletes(); 
            
            //foreing key 
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('items');
        Schema::enableForeignKeyConstraints();
    }
}
