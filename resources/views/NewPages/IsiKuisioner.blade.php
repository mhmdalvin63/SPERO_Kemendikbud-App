@extends('NewPagesTemplate.NavbarJustLogo')
@section('judul_tab','Kuisioner Kemendikbud')

@section('contentNoCenter')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/IsiKuisioner.css')}}">

<div class="isiKuisionerContent">
    <div class="header">
       <div class="container">
        <h3 class="text-center text-white mb-5 fw-bold">TENTUKAN PERSONA <br> BRAND ANDA</h3>
        <div class="row row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-sm-center">
            <div class="col mt-2">
                <div class="card p-4 mx-sm-0 mx-2">
                    <div class="card-img d-flex justify-content-center mb-3">
                        <img src="{{asset('../../images/IsiKuisioner.png')}}">
                    </div>
                    <p>Jadilah diri sendiri dan jawab dengan
                        jujur untuk mengetahui tipe
                        kepribadian Anda.</p>
                </div>
            </div>
            <div class="col mt-2">
                <div class="card p-4 mx-sm-0 mx-2">
                    <div class="card-img d-flex justify-content-center mb-3">
                        <img src="{{asset('../../images/IsiKuisioner.png')}}">
                    </div>
                    <p>Jadilah diri sendiri dan jawab dengan
                        jujur untuk mengetahui tipe
                        kepribadian Anda.</p>
                </div>
            </div>
            <div class="col mt-2">
                <div class="card p-4 mx-sm-0 mx-2">
                    <div class="card-img d-flex justify-content-center mb-3">
                        <img src="{{asset('../../images/IsiKuisioner.png')}}">
                    </div>
                    <p>Jadilah diri sendiri dan jawab dengan
                        jujur untuk mengetahui tipe
                        kepribadian Anda.</p>
                </div>
            </div>
        </div>
       </div>

       <div class="container">
        <div class="bar-progress d-flex align-items-center gap-2">
            <p class="fw-bold">50%</p>
            <div class="progress w-100" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-blue" style="width: 50%"></div>
        </div>
        </div>
        <div class="soal">
            <div class="row mt-4 foreach">
                <div class="col-12">
                    <p class="fw-bold">1. Bagaimana Bapak/Ibu memproduksi barang yang akan dijual ?</p>
                </div>
                <div class="col-6 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                           <p> Manual dengan tenaga manusia</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan alat produksi manual</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi dan alat produksi manual</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi</p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-4 foreach">
                <div class="col-12">
                    <p class="fw-bold">1. Bagaimana Bapak/Ibu memproduksi barang yang akan dijual ?</p>
                </div>
                <div class="col-6 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                           <p> Manual dengan tenaga manusia</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan alat produksi manual</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi dan alat produksi manual</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi</p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-4 foreach">
                <div class="col-12">
                    <p class="fw-bold">1. Bagaimana Bapak/Ibu memproduksi barang yang akan dijual ?</p>
                </div>
                <div class="col-6 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                           <p> Manual dengan tenaga manusia</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan alat produksi manual</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi dan alat produksi manual</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi</p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-4 foreach">
                <div class="col-12">
                    <p class="fw-bold">1. Bagaimana Bapak/Ibu memproduksi barang yang akan dijual ?</p>
                </div>
                <div class="col-6 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                           <p> Manual dengan tenaga manusia</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan alat produksi manual</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi dan alat produksi manual</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi</p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-4 foreach">
                <div class="col-12">
                    <p class="fw-bold">1. Bagaimana Bapak/Ibu memproduksi barang yang akan dijual ?</p>
                </div>
                <div class="col-6 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                           <p> Manual dengan tenaga manusia</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan alat produksi manual</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi dan alat produksi manual</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi</p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-4 foreach">
                <div class="col-12">
                    <p class="fw-bold">1. Bagaimana Bapak/Ibu memproduksi barang yang akan dijual ?</p>
                </div>
                <div class="col-6 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                           <p> Manual dengan tenaga manusia</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan alat produksi manual</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi dan alat produksi manual</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi</p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-4 foreach">
                <div class="col-12">
                    <p class="fw-bold">1. Bagaimana Bapak/Ibu memproduksi barang yang akan dijual ?</p>
                </div>
                <div class="col-6 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                           <p> Manual dengan tenaga manusia</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan alat produksi manual</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi dan alat produksi manual</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi</p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-4 foreach">
                <div class="col-12">
                    <p class="fw-bold">1. Bagaimana Bapak/Ibu memproduksi barang yang akan dijual ?</p>
                </div>
                <div class="col-6 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                           <p> Manual dengan tenaga manusia</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan alat produksi manual</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi dan alat produksi manual</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi</p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-4 foreach">
                <div class="col-12">
                    <p class="fw-bold">1. Bagaimana Bapak/Ibu memproduksi barang yang akan dijual ?</p>
                </div>
                <div class="col-6 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                           <p> Manual dengan tenaga manusia</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan alat produksi manual</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi dan alat produksi manual</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi</p>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-next d-flex justify-content-center mt-5">
            <a class="btn bg-blue d-flex align-items-center gap-2 justify-content-center py-sm-3 py-2 px-5" href="#" role="button">
                <p>ISI KUISIONER</p>
                <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
                <p></p>
            </a>
        </div>
    </div>
    <div class="FooterKuisioner" style="padding-top: 12.5rem;">
        @include('NewPagesTemplate.Footer')
    </div>
    </div>
</div>
@endsection
