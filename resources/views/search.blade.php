@extends('layouts.app')

@section('imports')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('content')
<div class="container">
    foreach($books as $book){
        echo $book->title;
    }
</div>

@endsection

@section('footer')
    @parent
@endsection