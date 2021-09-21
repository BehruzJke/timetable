@extends('layout')
@section('content')
<div class="container">
<form action="/create" method="POST" class="form-control text-center">
<h2> Dars qo'shish </h2>    
@csrf
<div class="text-secondary my-2"><label for="subject">Fan:</label> <input type="text" name="subject"></div> 
<div class="text-secondary my-2"><label for="teacher">O'qituvchi:</label> <input type="text" name="teacher"></div>
<div class="text-secondary my-2"><label for="order">Vaqt:</label> <select name="order" id="order">
    <option value="1">8:00-9:20</option>
    <option value="2">9:20-10:40</option>
    <option value="3">10:40-12:00</option>
    <option value="4">12:00-13:20</option>
    <option value="5">13:20-14:40</option>
</select> </div>
<div class="text-secondary my-2"><label for="room">Xona:</label> <select name="room" id="room">
    <option value="1-xona">1-xona</option>
    <option value="2-xona">2-xona</option>
    <option value="3-xona">3-xona</option>
    <option value="4-xona">4-xona</option>
    <option value="5-xona">5-xona</option>
</select></div>
<div class="text-secondary my-2"><label for="group">Guruh:</label> <select name="group" id="group">
    <option value="1-guruh">1-guruh</option>
    <option value="2-guruh">2-guruh</option>
    <option value="3-guruh">3-guruh</option>
    <option value="4-guruh">4-guruh</option>
    <option value="5-guruh">5-guruh</option>
</select></div>
<div class="text-secondary my-2"><label for="weekday">Hafta kuni:</label> <select name="weekday" id="weekday">
    <option value="Monday">Dushanba</option>
    <option value="Tuesday">Seshanba</option>
    <option value="Wednesday">Chorshanba</option>
    <option value="Thursday">Payshanba</option>
    <option value="Friday">Juma</option>
    <option value="Saturday">Shanba</option>
    <option value="Sunday">Yakshanba</option>

</select> </div>
    <button type="submit" class="btn btn-secondary">Qo'shish</button>
</form>
</div>
@endsection