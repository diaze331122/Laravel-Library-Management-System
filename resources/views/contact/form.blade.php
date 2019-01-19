@extends('layouts.app')

@section('imports')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('content')
<div class="row">  
    <div class="col-sm-6">
        <div class="form-group">
            <h2>Contact Us!</h2>
            <hr>
            <p>Have questions? Contact us at (xxx)xxx-xxxx or you can submit the form below.</p>
            <form>
                <label for="title">Title</label>
                <input id="title" name="title" type="text" class="form-control"></input><br>
                <label for="email">Email</label>
                <input id="email" name="email "type="email" class="form-control"></input><br>
                <label for="description">Problem Description</label>
                <textarea id="description" name="description" class="form-control input-lg"></textarea><br>
                <button type="submit" class="btn btn-default">submit</button>
            </form>
        </div>
    </div>
    <div class="col-sm-6">
       
        
    </div>
 </div>
@endsection

@section('footer')
    @parent
@endsection