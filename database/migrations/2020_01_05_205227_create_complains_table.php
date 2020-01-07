<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->unsignedBigInteger('appuser_id')->nullable();
            $table->text('body');
            $table->string('status')->default('active');
            $table->string('action_taken')->nullable();
            
            $table->timestamps();
            
            $table->foreign('appuser_id')->references('id')->on('app_users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('complain_categories')->onDelete('cascade');
            $table->foreign('subcategory_id')->references('id')->on('complain_subcategories')->onDelete('cascade');
        });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complains');
    }
}
