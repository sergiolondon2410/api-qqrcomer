<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('category')->nullable();
            $table->string('email');
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('web_page')->nullable();
            $table->string('logo');
            $table->string('cover_image')->nullable();
            $table->string('qr_code');
            $table->string('primary_color')->nullable();
            $table->string('secondary_color')->nullable();
            $table->string('note')->nullable();
            $table->string('slug')->unique();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
}
