@extends('layout')
@section('content')
<div class="container text-center">
<h1>Registratsiya<h1>
<form action="/register" method="POST" class="form-control">
    @csrf 
   <div class="m-2"> <label for="Name">Ismingiz:</label> <input type="text" name="name" id="name"></div>
   <div class="m-2"> <label for="Name">Email:</label> <input type="text" name="email" id="email"></div>
   <div class="m-2"> <label for="Name">Parol:</label> <input type="password" name="password" id="password"></div>
   <div class="m-2"> <label for="Name">Parolni tasdiqlang:</label> <input type="password" name="password_confirmation" id="password_confirmation"></div>
<button type="submit" class="btn btn-success">Registratsiya</button>
</form>
</div>
@endsection