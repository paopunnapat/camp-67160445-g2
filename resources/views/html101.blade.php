@extends('template.default')

@section('content')
<div class="container">
  <h1 >Workshop #HTML - FORM</h1>
  <hr class="mb-4">

  <form id="myForm" class="needs-validation" novalidate enctype="multipart/form-data" action="{{ url('/') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="fname" class="form-label">ชื่อ</label>
      <input type="text" class="form-control" id="fname" name="fname"  placeholder="โปรดระบุ" required>
      <div class="invalid-feedback">กรุณากรอกชื่อ</div>
    </div>

    <div class="mb-3">
      <label for="fsurname" class="form-label">นามสกุล</label>
      <input type="text" class="form-control" id="fsurname" name="fsurname" placeholder="โปรดระบุ" required>
      <div class="invalid-feedback">กรุณากรอกนามสกุล</div>
    </div>

    <div class="mb-3">
      <label for="fbirth" class="form-label">วันเดือนปีเกิด</label>
      <input type="date" class="form-control" id="fbirth" name="fbirth" required>
      <div class="invalid-feedback">กรุณากรอกวันเดือนปีเกิด</div>
    </div>

    <div class="mb-3">
      <label class="form-label d-block">เพศ</label>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="male" name="fsex" value="ชาย" >
        <label class="form-check-label" for="male">ชาย</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="female" name="fsex" value="หญิง" >
        <label class="form-check-label" for="female">หญิง</label>
      </div>

      <div id="sexFeedback" class="invalid-feedback">กรุณาเลือกเพศ</div>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">รูป</label>
      <input type="file" class="form-control" id="image" name="fimage" required>
      <div class="invalid-feedback">กรุณาอัปโหลดรูป</div>
    </div>

    <div class="mb-3">
      <label for="address" class="form-label">ที่อยู่</label>
      <input type="text" class="form-control" id="address" name="faddress" placeholder="โปรดระบุ" required>
      <div class="invalid-feedback">กรุณากรอกที่อยู่</div>
    </div>

    <div class="mb-3">
      <label for="color" class="form-label">สีที่ชอบ</label>
      <select class="form-select" id="color" name="fcolor" required>
        <option value="" selected>-</option>
        <option value="แดง">แดง</option>
        <option value="ฟ้า">ฟ้า</option>
        <option value="เหลือง">เหลือง</option>
        <option value="เขียว">เขียว</option>
        <option value="ดำ">ดำ</option>
        <option value="ขาว">ขาว</option>
      </select>
      <div class="invalid-feedback">กรุณาเลือกสีที่ชอบ</div>
    </div>

    <div class="mb-3">
      <label for="music" class="form-label">แนวเพลงที่ชอบ</label>
      <input type="text" class="form-control" id="music" name="fmusic" placeholder="โปรดระบุ" required>
      <div class="invalid-feedback">กรุณากรอกแนวเพลงที่ชอบ</div>
    </div>

    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="Agree" name="Agree" required>
        <label class="form-check-label" for="Agree">ยินยอม</label>
        <div class="invalid-feedback">กรุณายินยอมข้อตกลง</div>
      </div>
    </div>

    <div class="mt-4">
      <button type="reset" class="btn btn-secondary">รีเซ็ท</button>
      <button type="submit" class="btn btn-primary">ยืนยัน</button>
    </div>

  </form>
</div>
@endsection

@push('scripts')
<script>
(() => {
  const form = document.getElementById('myForm');
  const sexFeedback = document.getElementById('sexFeedback');
  const sexRadios = form.querySelectorAll('input[name="fsex"]');

  form.addEventListener('submit', (event) => {

    if (!form.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
    }


    const checkedSex = form.querySelector('input[name="fsex"]:checked');
    if (!checkedSex) {

      sexRadios.forEach(r => r.classList.add('is-invalid'));

      sexFeedback.classList.add('d-block');
      event.preventDefault();
      event.stopPropagation();
    } else {
      sexRadios.forEach(r => r.classList.remove('is-invalid'));
      sexFeedback.classList.remove('d-block');
    }

    form.classList.add('was-validated');
  });


  sexRadios.forEach(radio => {
    radio.addEventListener('change', () => {
      sexRadios.forEach(r => r.classList.remove('is-invalid'));
      sexFeedback.classList.remove('d-block');
    });
  });
})();
</script>
@endpush
