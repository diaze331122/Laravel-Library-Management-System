<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $query = "CREATE VIEW booksview ". 
                "AS ". 
                "SELECT b.isbn, b.title, b.publish_date, ". 
                "b.description, b.quantity, b.img_file_path, ".
                "a.author_name, s.subject ".
                "FROM books b ". 
                "INNER JOIN books_authors ba ". 
                "ON b.isbn = ba.isbn ". 
                "INNER JOIN authors a ". 
                "ON ba.author_id = a.id ". 
                "INNER JOIN books_subjects bs ". 
                "ON bs.isbn = b.isbn ". 
                "INNER JOIN subjects s ". 
                "ON bs.sid = s.id";
        DB::statement($query);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books_view');
    }
}
