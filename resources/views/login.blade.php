@extends('layout')
@section('content')
<div class="container text-center">
<h1>Kirish<h1>
<form action="/login" method="POST" class="form-control">
    @csrf 
   <div class="m-2"> <label for="Name">Email:</label> <input type="text" name="email" id="email"></div>
   <div class="m-2"> <label for="Name">Parol:</label> <input type="password" name="password" id="password"></div>
<button type="submit" class="btn btn-success">Kirish</button>
</form>
</div>
@endsection