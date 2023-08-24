@extends('NewPagesTemplate.NavbarJustLogo')
@section('judul_tab','OTP Kemendikbud')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/Otp.css')}}">
<img class="objectLeft" id="object" src="{{asset('../../images/objectLeft.png')}}">
    <img class="objectRight" id="object" src="{{asset('../../images/objectRight.png')}}">
<div class="OtpContent">
    <h3 class="fw-bold text-center">MASUKKAN OTP</h3>
        <p class="text-center">kami telah mengirimkan kode
            akses melalui email untuk verifikasi</p>

            <div class="otp-container">
                <input class="otp-input" type="text" maxlength="1" oninput="handleInput(this)" autofocus>
                <input class="otp-input" type="text" maxlength="1" oninput="handleInput(this)">
                <input class="otp-input" type="text" maxlength="1" oninput="handleInput(this)">
                <input class="otp-input" type="text" maxlength="1" oninput="handleInput(this)">
              </div>

              <div class="btn-isi d-flex justify-content-center mt-5">
                <a class="btn bg-blue d-flex align-items-center gap-2 justify-content-center w-50" href="/welcome" role="button">
                    <p class="fw-bold">LANJUT</p>
                    <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
                    <p></p>
                </a>
            </div>
</div>

@endsection
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>

<script src="text/javascript">
  function handleInput(input) {
  const nextInput = input.nextElementSibling;
  const prevInput = input.previousElementSibling;

  if (input.value) {
    if (nextInput) {
      nextInput.focus();
    } else {
      // All inputs are filled, you can now perform further actions with the OTP.
      const otp = Array.from(document.querySelectorAll('.otp-input')).map(input => input.value).join('');
      alert('Entered OTP: ' + otp);
    }
  } else if (prevInput) {
    prevInput.focus();
  }
}

</script>