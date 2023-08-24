@extends('NewPagesTemplate.NavbarJustLogo')
@section('judul_tab','OTP Kemendikbud')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/Otp.css')}}">
<img class="objectLeft" id="object" src="{{asset('../../images/objectLeft.png')}}">
    <img class="objectRight" id="object" src="{{asset('../../images/objectRight.png')}}">
    <div class="container" id="containerOtp">
      <p class="fw-bold text-center">MASUKKAN OTP</p>
      <p class=" text-center">kami telah mengirimkan kode <br>
        akses melalui email untuk verifikasi</p>
      <div class="userInput mt-4">
        <input type="text" id='ist' maxlength="1" onkeyup="clickEvent(this,'sec')">
        <input type="text" id="sec" maxlength="1" onkeyup="clickEvent(this,'third')">
        <input type="text" id="third" maxlength="1" onkeyup="clickEvent(this,'fourth')">
        <input type="text" id="fourth" maxlength="1" onkeyup="clickEvent(this,'fifth')">
        <input type="text" id="fourth" maxlength="1" onkeyup="clickEvent(this,'sixth')">
        <input type="text" id="sixth" maxlength="1">
      </div>
      <div class="btn-isi d-flex justify-content-center mt-5">
        <a class="btn bg-blue d-flex align-items-center gap-2 justify-content-center w-50" href="/kuisioner" role="button">
            <p class="fw-bold">LANJUT</p>
            <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
            <p></p>
        </a>
      </div>
      <p class="text-center text-danger mt-4">00:00:59</p>
      <p class="fw-bold text-center mt-4">Tidak Menerima Kode OTP?</p>
      <p class="text-blue text-center">Kirim Ulang Kode</p>
    </div>

@endsection
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>

<script src="text/javascript">
  function clickEvent(first,last){
			if(first.value.length){
				document.getElementById(last).focus();
			}
		}
</script>