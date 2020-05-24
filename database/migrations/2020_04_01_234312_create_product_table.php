<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->integer('status');
            $table->string('name');
            $table->string('slug');
            $table->integer('category_id');
           // $table->integer('user_id')->nullable();// cambie esto---->>>
          //  $table->unsignedInteger('users_id')->nullable();
          //  $table->foreign('users_id')->references('id')->on('users');
            $table->string('image');
            $table->decimal('price', 11,2);
            $table->integer('in_discount');
            $table->integer('discount');
            $table->text('content');
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
