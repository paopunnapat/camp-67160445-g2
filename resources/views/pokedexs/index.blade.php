@extends('template.default')
@section('content')
<h1>Pokemon add</h1>
<form action="{{ url ('/pokedexs') }}" method="post">
@csrf
<lable for="name">Name</lable>
<input class="form-control" type="text" name="name" id="name">

<lable for="type">type</lable>
<input class="form-control" type="text" name="type" id="type">

<lable for="species">species</lable>
<input class="form-control" type="text" name="species" id="species">

<lable for="height">height</lable>
<input class="form-control" type="decimal" name="height" id="height">

<lable for="weight">weight</lable>
<input class="form-control" type="decimal" name="weight" id="weight">

<lable for="hp">hp</lable>
<input class="form-control" type="decimal" name="hp" id="hp">


<lable for="attack">attack</lable>
<input class="form-control" type="decimal" name="attack" id="attack">

<lable for="defense">defense</lable>
<input class="form-control" type="decimal" name="defense" id="defense">

<lable for="image_url">image_url</lable>
<input class="form-control" type="url" name="image_url" id="image_url">
<br>
<button class="btn btn-primary" type="submit" name="submit" id="submit">submit</button>
</form>

@include('pokedexs.table')
@endsection
