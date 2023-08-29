@extends('NewPagesTemplate.NavbarJustLogo')
@section('judul_tab','Hasil Kuisioner')

@section('contentNoCenter')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/Hasil.css')}}">

<div class="hasilContent d-flex justify-content-center">
    <div class="contentFlex mt-3">
      <div class="w3-content">
        <div class="mySlides text-center">
          <div class="mySlideContent py-5">
            <div class="row justify-content-center">
              <div class="col-10">
                <p>Persona Brand Anda:</p>
                <p class="fw-bold text-blue">SINCERITY</p>
                <div class="row justify-content-center">
                  <div class="col-md-4 col-10"> 
                    <div class="imageCover">
                      <img class="my-3" src="{{asset('../../images/orangHasil.png')}}">
                    </div>
                  </div>
                </div>
                <p><span class="text-blue">SINCERITY</span> adalah orang yang sangat tulus,
                  siap mengambil tindakan untuk melakukan apa yang mereka rasa benar.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mySlides">
          <div class="mySlideContent">
            <div class="title text-center py-4" style="background-color: #2388FF;">
              <p class="fw-bold text-white">PIKIRAN</p>
            </div>
            <div class="row justify-content-center py-sm-5 py-3">
              <div class="col-md-4 col-10 imageCover">
                <img src="{{asset('../../images/pikiranImage.png')}}">
              </div>
              <div class="col-md-6 col-10">
                <div class="card-precentage p-3 mt-3">
                  <p class="text-primary fw-bold mb-2">78% EXTROVERT</p>
                  <div class="progress mb-3">
                      <div class="progress-bar bg-primary" style="width: 78%" aria-valuenow="78"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                      <div class="progress-bar bg-secondary" style="width: 22%" aria-valuenow="22"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                  </div>
                  <div class="precentage d-flex justify-content-between">
                      <div class="left text-start text-primary">
                          <p class="fw-bold">78%</p>
                          <p>EXTROVERT</p>
                      </div>
                      <div class="right text-end">
                          <p class="fw-bold">22%</p>
                          <p>INTROVERT</p>
                      </div>
                  </div>
                </div>
                <p class="p-3">Individu ekstrover siap menikmati aktivitas kelompok dan menghargai interaksi sosial. Mereka cenderung antusias secara lahiriah dan mengekspresikan kegembiraan mereka.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mySlides">
          <div class="mySlideContent">
            <div class="title text-center py-4" style="background-color: #9123FF;">
              <p class="fw-bold text-white">energi</p>
            </div>
            <div class="row justify-content-center py-sm-5 py-3">
              <div class="col-md-4 col-10 imageCover">
                <img src="{{asset('../../images/energi.png')}}">
              </div>
              <div class="col-md-6 col-10">
                <div class="card-precentage p-3 mt-3">
                  <p class="text-primary fw-bold mb-2">78% EXTROVERT</p>
                  <div class="progress mb-3">
                      <div class="progress-bar bg-primary" style="width: 78%" aria-valuenow="78"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                      <div class="progress-bar bg-secondary" style="width: 22%" aria-valuenow="22"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                  </div>
                  <div class="precentage d-flex justify-content-between">
                      <div class="left text-start text-primary">
                          <p class="fw-bold">78%</p>
                          <p>EXTROVERT</p>
                      </div>
                      <div class="right text-end">
                          <p class="fw-bold">22%</p>
                          <p>INTROVERT</p>
                      </div>
                  </div>
                </div>
                <p class="p-3">Individu ekstrover siap menikmati aktivitas kelompok dan menghargai interaksi sosial. Mereka cenderung antusias secara lahiriah dan mengekspresikan kegembiraan mereka.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mySlides">
          <div class="mySlideContent">
            <div class="title text-center py-4" style="background-color: #1C8E00;">
              <p class="fw-bold text-white">ALAM</p>
            </div>
            <div class="row justify-content-center py-sm-5 py-3">
              <div class="col-md-4 col-10 imageCover">
                <img src="{{asset('../../images/alam.png')}}">
              </div>
              <div class="col-md-6 col-10">
                <div class="card-precentage p-3 mt-3">
                  <p class="text-primary fw-bold mb-2">78% EXTROVERT</p>
                  <div class="progress mb-3">
                      <div class="progress-bar bg-primary" style="width: 78%" aria-valuenow="78"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                      <div class="progress-bar bg-secondary" style="width: 22%" aria-valuenow="22"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                  </div>
                  <div class="precentage d-flex justify-content-between">
                      <div class="left text-start text-primary">
                          <p class="fw-bold">78%</p>
                          <p>EXTROVERT</p>
                      </div>
                      <div class="right text-end">
                          <p class="fw-bold">22%</p>
                          <p>INTROVERT</p>
                      </div>
                  </div>
                </div>
                <p class="p-3">Individu ekstrover siap menikmati aktivitas kelompok dan menghargai interaksi sosial. Mereka cenderung antusias secara lahiriah dan mengekspresikan kegembiraan mereka.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mySlides">
          <div class="mySlideContent">
            <div class="title text-center py-4" style="background-color: #AD000A;">
              <p class="fw-bold text-white">TAKTIK</p>
            </div>
            <div class="row justify-content-center py-sm-5 py-3">
              <div class="col-md-4 col-10 imageCover">
                <img src="{{asset('../../images/taktik.png')}}">
              </div>
              <div class="col-md-6 col-10">
                <div class="card-precentage p-3 mt-3">
                  <p class="text-primary fw-bold mb-2">78% EXTROVERT</p>
                  <div class="progress mb-3">
                      <div class="progress-bar bg-primary" style="width: 78%" aria-valuenow="78"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                      <div class="progress-bar bg-secondary" style="width: 22%" aria-valuenow="22"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                  </div>
                  <div class="precentage d-flex justify-content-between">
                      <div class="left text-start text-primary">
                          <p class="fw-bold">78%</p>
                          <p>EXTROVERT</p>
                      </div>
                      <div class="right text-end">
                          <p class="fw-bold">22%</p>
                          <p>INTROVERT</p>
                      </div>
                  </div>
                </div>
                <p class="p-3">Individu ekstrover siap menikmati aktivitas kelompok dan menghargai interaksi sosial. Mereka cenderung antusias secara lahiriah dan mengekspresikan kegembiraan mereka.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mySlides">
          <div class="mySlideContent">
            <div class="title text-center py-4" style="background-color: #D88100;">
              <p class="fw-bold text-white">IDENTITAS</p>
            </div>
            <div class="row justify-content-center py-sm-5 py-3">
              <div class="col-md-4 col-10 imageCover">
                <img src="{{asset('../../images/taktik.png')}}">
              </div>
              <div class="col-md-6 col-10">
                <div class="card-precentage p-3 mt-3">
                  <p class="text-primary fw-bold mb-2">78% EXTROVERT</p>
                  <div class="progress mb-3">
                      <div class="progress-bar bg-primary" style="width: 78%" aria-valuenow="78"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                      <div class="progress-bar bg-secondary" style="width: 22%" aria-valuenow="22"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                  </div>
                  <div class="precentage d-flex justify-content-between">
                      <div class="left text-start text-primary">
                          <p class="fw-bold">78%</p>
                          <p>EXTROVERT</p>
                      </div>
                      <div class="right text-end">
                          <p class="fw-bold">22%</p>
                          <p>INTROVERT</p>
                      </div>
                  </div>
                </div>
                <p class="p-3">Individu ekstrover siap menikmati aktivitas kelompok dan menghargai interaksi sosial. Mereka cenderung antusias secara lahiriah dan mengekspresikan kegembiraan mereka.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="w3-center text-center">
            <button class="dots-button demo" onclick="currentDiv(1)">&#8226;</button> 
            <button class="dots-button demo" onclick="currentDiv(2)">&#8226;</button> 
            <button class="dots-button demo" onclick="currentDiv(3)">&#8226;</button> 
            <button class="dots-button demo" onclick="currentDiv(4)">&#8226;</button> 
            <button class="dots-button demo" onclick="currentDiv(5)">&#8226;</button> 
            <button class="dots-button demo" onclick="currentDiv(6)">&#8226;</button> 
            <div class="buttonNp">
              <div class="w3-section">
                <button class="w3-button w3-light-grey" onclick="plusDivs(-1)"><p>❮ Sebelumnya</p></button>
                <button class="w3-button w3-light-grey" onclick="plusDivs(1)"><p>Selanjutnya  ❯</p></button>
              </div>
            </div>
            
        </div>
      </div>

  </div>
</div>
<div class="FooterKuisioner" style="padding-top: 2.5rem;">
  @include('NewPagesTemplate.Footer')
</div>
@endsection
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src="text/javascript"></script>
    <script>
      var slideIndex = 0;
      showDivs(slideIndex);
      
        function plusDivs(n) {
          showDivs(slideIndex += n);
        }
        
        function currentDiv(n) {
          showDivs(slideIndex = n);
        }
        
        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dots-button");
          // if (n > 6) {slideIndex = 1}    
          // if (n < 1) {slideIndex = 6}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-red", "");
          }
          x[slideIndex-1].style.display = "block";  
          // x[slideIndex-1].style.transform = "translateY(-50%)";  
          dots[slideIndex-1].className += " w3-red";
        }
        </script>