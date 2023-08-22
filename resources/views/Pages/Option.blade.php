@extends('Pages.Templates')
@section('judul_tab','Option Kemendikbud')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/Pages/Option.css')}}">

    <div class="optionContent text-center">
        <h1 class="fw-bold my-1">UMKM</h1>
        <p class="fw-semibold my-1">Selamat Datang Di UMKM</p>
        <P class="fw-semibold my-1">Masuk Dengan Akun UMKM Anda Untuk Melanjutkan</P>
        <div class="btn">
            <a class="btn btn-blue" href="/login" role="button"><p>Masuk</p></a>
            <a class="btn btn-blue" href="#" role="button"><p>Registrasi</p></a>
        </div>
    </div>
@endsection