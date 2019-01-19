<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getSearch(){
        $keyword = Input::post('keyword');
        $books = DB::select("SELECT title FROM books WHERE title '%?%'",$keyword);

        if (count($books) > 0){
            return view('search',['books'=> $books]);
        }
        return view('search');  
    }
}
