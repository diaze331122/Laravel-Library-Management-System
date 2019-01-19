<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDVDTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('dvd', function (Blueprint $table) {
            $table->string('asin')->primary();
            $table->string('title');
            $table->date('publish');
            $table->string('rating');
            $table->string('studio');
            $table->integer('quantity');
            $table->string('description');
            $table->string('img_file_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('d_v_d');
    }
}
