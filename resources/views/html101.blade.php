@extends('template.default')
@section('content')
<body>
<div>
  <h1> Workshop #HTML - FORM </h1>
  <hr>
  <form>
    <div>
    <label for="fname"> ชื่อ </lable>
    <br>  
    <input type="text" id="fname" placeholder="โปรดระบุ">
    </div>
    <br>
    <div>
      <label for="fsurname"> นามสกุล</label >
      <br>
      <input type="text" id="fsurname" placeholder="โปรดระบุ">
    </div>
    <br>
    <div>
      <label for="fbirth">วันเดือนปีเกิด</label>
      <br>
      <input type="date" id="fbirth" placeholder="โปรดระบุ">
    </div>
    <br>
    <div>
      <label for="fsex">เพศ</label>
      <br>
      <input type="radio" id="male" name="sex">
      <label for="male">ชาย</label>
      <input type="radio" id="female" name="sex">
      <label for="female">หญิง</label>
      
    </div>
    <br>
    <div>
      <label for="image">รูป : </label>
    <input type="file" id="image">
    </div>
    <br>
    <div>
      <label for="Address">ที่อยู่</label>
      <br>
      <input type="text" id="Address" placeholder="โปรดระบุ">
    </div>
    <br>
    <div>
      <label for="color">สีที่ชอบ</label>
      <br>
      <select class="color" id="color" placeholder="โปรดระบุ">
        <option selected>-</option>
          <option value="1">แดง</option>
          <option value="2">ฟ้า</option>
          <option value="3">เหลือง</option>
          <option value="4">เขียว</option>
          <option value="5">ดำ</option>
          <option value="6">ขาว</option>
      </select>
    </div>
    <br>
    <div>
      <label for="music">แนวเพลงที่ชอบ</label>
      <br>
      <input type="text" id="music" placeholder="โปรดระบุ">
    </div>
    <br>
    <div>
      <input type="checkbox" id="Agree">
      <label for="Agree">ยินยอม</label>
      
    </div>
    <br>
    <div>
      <button type="reset">รีเซ็ท</button>
      <button type="button"> ยืนยัน</button>
    </div>
  </form>

</div>
</body>
@endsection