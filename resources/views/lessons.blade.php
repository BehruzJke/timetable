@extends('layout')
@section('content')
<div class="container">
    <form action="/filter" method="POST" class="m-2">
@csrf 
<label for="order">Vaqt:</label><select name="order" id="order">
<option value="1">8:00-9:20</option>
    <option value="2">9:20-10:40</option>
    <option value="3">10:40-12:00</option>
    <option value="4">12:00-13:20</option>
    <option value="5">13:20-14:40</option>
</select>
<label for="room">Xona:</label>
<select name="room" id="room">
<option value="1-xona">1-xona</option>
    <option value="2-xona">2-xona</option>
    <option value="3-xona">3-xona</option>
    <option value="4-xona">4-xona</option>
    <option value="5-xona">5-xona</option>
</select>
<button type="submit" class="btn btn-success">Izlash </button>
<a href="/" class="btn btn-primary">Filtrlarni o'chirish</a>
</form>
	<table class="table table-bordered shadow text-center table-striped">
		<tr>
			<th>Fan</th>
			<th>O'qituvchi</th>
			<th>Vaqt</th>
			<th>Xona</th>
			<th>Guruh</th>
            <th>Hafta kuni </th>
            @if(Auth::check())
            @if(Auth::user()->is_teacher == 1)
            <th>O'chirish</th>
            <th>O'zgartirish</th>
            </tr>
            @else </tr>
            @endif

            @endif
       
        @foreach($lessons as $lesson)
        <tr>
            <td>{{$lesson->subject}}</td>
            <td>{{$lesson->teacher}}</td>
            <td>@if($lesson->order == '1')8:00-9:20
                @elseif($lesson->order =='2')9:20-10:40
                @elseif($lesson->order == '3')10:40-12:00
                @elseif($lesson->order == '4')12:00-13:20
                @else 13:20-14:40
                @endif
            </td>
            <td>{{$lesson->room}}</td>
            <td>{{$lesson->group}}</td>
            <td>{{$lesson->weekday}}</td>
            @if(Auth::check())
            @if(Auth::user()->is_teacher == 1)
            <td><a href="/delete/{{$lesson->id}}" class="btn btn-danger">O'chirish</a></td>
			<td><a href="/edit/{{$lesson->id}}" class="btn btn-warning">O'zgartirish</a></td>
            </tr>
            @else </tr>
            @endif
            @endif
        
        @endforeach
</table>
@if(Auth::check())
@if(Auth::user()->is_teacher==1)
<div class="text-center"> 
<a href="/create" class="btn btn-success">Dars qo'shish</a>
</div>
@endif
@endif
</div>
@endsection