@extends('NewPagesTemplate.NavbarLengkap')
@section('judul_tab','Beranda')

@section('contentNavbarLengkap')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/Marketer.css')}}">

<div class="header" style="padding-top: 3.5rem;">
    <img src="{{asset('../../images/marketer.png')}}">
</div>

<div class="content my-5">
    <div class="container">
        <p class="fw-bold">List Marketer</p>

        <div class="table-responsive">
            <table class="table">
                <thead id="tableHead">
                  <tr class="text-center">
                    <th scope="col"><p>No.</p></th>
                    <th scope="col"><p>Marketer</p></th>
                    <th scope="col"><p>Media</p></th>
                    <th scope="col"><p>Presentase</p></th>
                    <th scope="col"><p>Kelengkapan</p></th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-center mt-2">
                    <th scope="row"><p>1.</p></th>
                    <td><p>Marketer</p></td>
                    <td><img src="{{asset('../../images/marketerImage.png')}}"></td>
                    <td><div class="progressBar d-flex align-items-center gap-2 my-3">
                        <div class="progress w-100" role="progressbar" aria-label="Basic example"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar w-75"></div>
                        </div>
                        <p class="fw-bolder">95%</p>
                    </div></td>
                    <td>
                        <div class="top d-flex gap-1 justify-content-center">
                            <p>CV</p>
                            <p>PORTOFOLIO</p>
                        </div>
                        <div class="middle">
                            <a href=""><p>www.linkyoutubekami.com</p></a>
                            <a href=""><p>www.linkyoutubekami.com</p></a>
                        </div>
                        <div class="bottom">
                            <a class="btn btn-success py-1 w-50 mt-3" href="/marketerdetail" role="button"><p>Lihat Detail</p></a>
                        </div>
                    </td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('NewPagesTemplate.Footer')




@endsection