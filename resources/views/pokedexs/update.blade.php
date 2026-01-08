@extends('template.default')
@section('content')
<h1>Pokemon edit</h1>
<form action="{{ url ('/pokedexs/'.$pokedex_update->id) }}" method="post">
@csrf
@method('PUT')
<lable for="name">Name</lable>
<input class="form-control" type="text" name="name" id="name" value="{{$pokedex_update->name}}">

<lable for="type">type</lable>
<input class="form-control" type="text" name="type" id="type" value="{{$pokedex_update->type}}">

<lable for="species">species</lable>
<input class="form-control" type="text" name="species" id="species" value="{{$pokedex_update->species}}">

<lable for="height">height</lable>
<input class="form-control" type="decimal" name="height" id="height" value="{{$pokedex_update->height}}">

<lable for="weight">weight</lable>
<input class="form-control" type="decimal" name="weight" id="weight" value="{{$pokedex_update->weight}}">

<lable for="hp">hp</lable>
<input class="form-control" type="decimal" name="hp" id="hp" value="{{$pokedex_update->hp}}">


<lable for="attack">attack</lable>
<input class="form-control" type="decimal" name="attack" id="attack" value="{{$pokedex_update->attack}}">

<lable for="defense">defense</lable>
<input class="form-control" type="decimal" name="defense" id="defense" value="{{$pokedex_update->defense}}">

<lable for="image_url">image_url</lable>
<input class="form-control" type="url" name="image_url" id="image_url" value="{{$pokedex_update->image_url}}">

<button class="btn btn-primary" type="submit" name="submit" id="submit">submit</button>
</form>

@include('pokedexs.table')
@endsection
