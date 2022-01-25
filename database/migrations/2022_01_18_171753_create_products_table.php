<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigint('id');
            $table->string("Name");
            $table->text("Price");
            $table->text("Weight");
            $table->text("Description");
            $table->text("Category");
            $table->timestamp("CREATE_DATE");
            $table->text("STOCK");
            $table->string("Image");
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
