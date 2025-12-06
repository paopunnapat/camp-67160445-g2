<!-- resources/views/html.blade.php -->
<!DOCTYPE html>


  
<head>
        <title>Workshop HTML</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta charset="UFT-8">
</head>
<style>
  h1{
    display: inline-block;
    font-size: xx-large;
    background-color: #f7f3e6;
    box-sizing: content-box;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    padding: 20px;
    border-radius: 20px;
    margin: auto;
  }
  body {
    font-family: Arial, sans-serif;
    background-color: #f5e8cb;
    margin: 20px;
    
  }
  form{
    background-color: #f7f3e6;
    box-sizing: content-box;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    padding: 20px;
    border-radius: 20px;
    margin-right: 75%;
    
  }
  button{
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }
  input{
    border-style: round;
    border-radius: 3px;
    border-width: 1px;
    display: inline-block;
    margin-top: 4px;
  }
  label{
    font-size: large;
  } 


</style>
<body>
<div class="container">
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
      <input type="text" id="color" placeholder="โปรดระบุ">
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
      <button type="submit"> ยืนยัน</button>
    </div>
  </form>

</div>
</body>
</html> 