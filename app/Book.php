<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'isbn';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
}
