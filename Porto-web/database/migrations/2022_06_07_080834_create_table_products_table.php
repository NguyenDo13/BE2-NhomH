<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id'); // cột id có kiểu là interger và tự động tăng
            $table->integer('category_id');
            $table->string('name'); // cột name có kiểu là varchar và giới hạn là 150 ký tự
            $table->integer('price'); // cột price có kiểu là integer
            $table->string('image', 255); // cột image có kiểu là varchar và giới hạn là 255 ký tự
            $table->integer('feature'); // cột description có kiểu là text và có thể để NULL
            $table->text('description');
            $table->integer('manufacture_id');
            $table->integer('type_id');
            $table->integer('comment_id');
            $table->timestamps(); // cột thể hiện timestamps mặc định
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
