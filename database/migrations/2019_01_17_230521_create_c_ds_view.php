<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCDsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $query = "CREATE VIEW cdsview ".
                "AS ".
                "SELECT c.asin, c.title, c.publish, ".
                "c.quantity, c.description, c.img_file_path, ".
                "a.name ".
                "FROM cds c ".
                "INNER JOIN cd_artists ca ".
                "ON c.asin = ca.asin ".
                "INNER JOIN artists a ". 
                "ON ca.aid = a.id";
        DB::statement($query);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_ds_view');
    }
}
