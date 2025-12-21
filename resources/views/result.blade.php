@extends('template.default')

@section('content')
    <body>

        <h1>สวัสดีคุณ "{{$fname}} {{$fsurname}}"</h1><br>
        <h2>เกิดวันที่: {{$fbirth}}<br>
            เพศ: {{$fsex}}<br>
            ที่อยู่: {{$faddress}}<br>
            สีที่ชอบ: {{$fcolor}}<br>
            แนวเพลงที่ชอบ: {{$fmusic}}<br>
        </h2>

    </body>

@endsection
