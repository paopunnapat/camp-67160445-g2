@extends('template.default')
@section('content')
<h1>Flight Create</h1>
<form action="{{ url ('/flights') }}" method="post">
@csrf
<lable for="name">Name</lable>
<input class="form-control" type="text" name="name" id="name">
<lable for="airline">Airline</lable>
<input class="form-control" type="text" name="airline" id="airline">
<lable for="number_of_seat">Number of Seat</lable>
<input class="form-control" type="number" name="number_of_seat" id="number_of_seat">
<lable for="price">Price</lable>
<input class="form-control" type="decimal" name="price" id="price">
<button class="btn btn-primary" type="submit" name="submit" id="submit">submit</button>
</form>
<h1>Flight Lists</h1>
@include('flights.table')
@endsection
