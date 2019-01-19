<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('history', function (Blueprint $table) {
            $table->integer('uid');
            $table->string('rid');
            $table->timestamp('date_loaned');
            $table->timestamp('date_returned');
            $table->integer('times_renewed');
            $table->primary(['uid', 'rid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history');
    }
}
