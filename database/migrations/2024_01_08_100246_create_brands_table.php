<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image');
            $table->longText('banner')->nullable();
            $table->longText('logo')->nullable();
            $table->text('category')->nullable();
            $table->text('category_en')->nullable();
            $table->string('title');
            $table->string('title_en')->nullable();
            $table->longText('description');
            $table->longText('description_en')->nullable();
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
        Schema::dropIfExists('brands');
    }
};
