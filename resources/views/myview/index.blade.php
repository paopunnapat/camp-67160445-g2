@extends("template.default")
@section('title','My Controller')
@section('header1','My view')

@section('content')
<form action="#" method="POST">
    @csrf
    <label for="num">ป้อนข้อมูลแม่สูตรคูณ</label>
    <input type="number" name="num" name ="num">
    <button type="submit">ส่งข้อมูล</button>
</form>
@endsection
