<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDVDsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $query = "CREATE VIEW dvdviews ".
                "AS ".
                "SELECT d.asin, d.title, d.publish, ".
                "d.rating, d.studio, d.quantity, ". 
                "d.description, d.img_file_path, ".
                "s.subject ".
                "FROM dvd d ".
                "INNER JOIN dvd_subjects ds ".
                "ON ds.asin = d.asin ".
                "INNER JOIN subjects s ".
                "ON ds.sid = s.id";
        DB::statement($query);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('d_v_ds_view');
    }
}
