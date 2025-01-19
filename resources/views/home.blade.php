<style>
  * {
    color: rgb(16, 16, 16);
    text-decoration: none !important;
    /* font-style: normal; */
  }

  .landing-section {
    /* background: linear-gradient(180deg, #FCF5ED 60%, rgb(127, 189, 170, 1)); */
    background-color: #FCF5ED;
    position: relative;
    overflow: hidden;
    padding-top: 100px;
    padding-bottom: 350px;
  }

  .market-section {
    /* background: linear-gradient(180deg, #FCF5ED 60%, rgb(127, 189, 170, 1)); */
    background-color: #FCF5ED;
    position: relative;
    overflow: hidden;
    padding-top: 50px;
    padding-bottom: 100px;
  }

  
  .landing-section .container {
    position: relative;
    z-index: 1;
  }

  #landingCarousel {
    position: relative;
    z-index: 0;
  }

  .home-intro {
    /* position: absolute; */
    z-index: 2;
  }
  
  .home-intro h2{
    font-family: "Boogaloo", sans-serif;
    font-weight: 300;
    font-size: 45px;
  }
  
  .home-intro p{
    font-weight: 400;
    font-size: 20px;
  }
  
  #exploreBtn {
    border-radius: 50px;
    background-color: #E489A9;
    border-color: none;
    color: rgb(24, 24, 24);
    font-weight: 600;
    font-size: 22px;
    height: 8vh;
    width: 19vh;
  }

  .donation-intro h2{
    font-family: "Boogaloo", sans-serif;
    font-weight: 300;
    font-size: 80px;
  }
  
  .donation-intro p{
    font-weight: 400;
    font-size: 20px;
  }
  
  .donation-image img {
    height: 60vh;
    max-width: 60vh;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #FCF5ED
  }
    
  .donation-section {
    background-color: #7FBDAA;
    /* position: relative; */
    overflow: hidden;
    padding-top: 100px;
    padding-bottom: 100px;
    min-height: 88vh;
  }

  @media (max-width: 991px){
    .donation-section {
      min-height: 120vh;
    }

    #image-border {
      margin-top: 100vh;
    }
  }

  #donateBtn2 {
    border-radius: 50px;
    background-color: #FCF5ED;
    border-color: none;
    color: #313638;
    font-weight: 600;
    font-size: 18px;
    height: 8vh;
    width: 20vh;
  }

  #donateBtn2:hover {
    border-radius: 50px;
    background-color: #dfd8cf;
    border-color: none;
    color: #313638;
    font-weight: 600;
    font-size: 18px;
    height: 8vh;
    width: 20vh;
  }

  .market-title {
    margin-bottom: 25px;
    /* background: linear-gradient(0deg, #E489A9, #ffb9d2); */
    background-color: white;
    border:4px dashed #E489A9; 
    justify-self: center;
    border-radius: 40px;
    width: 23%;
  }

  .market-title h2 {
    font-family: "Boogaloo", sans-serif;
    letter-spacing: 1px;
    font-size: 50px;
  }

  
  .card {
    max-width: 230px;
    min-width: 230px;
  }
  
  .custom-card {
    background-color: white !important;
    border: none !important;
    /* border-radius: 0px !important; */
  }

  .card-price {
    font-weight: 400;
    font-size: 15px;
    color: #719FDD;
  }
  
  .card-title {
    font-weight: 600;
    font-size: 20px;
  }

  .card-text {
    opacity: 0.8;
  }

  .carousel-inner {
    padding-left: 60px;
    padding-right: 60px;
  }

  img.card-img-top{
    height: 180px;
    object-fit: cover;
    max-width: 100%;
    /* border-radius: 0px; */
  }

  a .card-footer {
    background-color: #E489A9 !important;
    /* border-radius: 0px !important; */
    /* width: 50%; */
  }

  a .card-footer:hover {
    background-color: #fda2c2 !important;
  }
  
  .card-footer small{
    color: white;
    font-weight: 600;
    letter-spacing: 2px;
    opacity: 1;
  }

  .carousel-control-prev-icon, .carousel-control-next-icon {
    background-color: #E489A9; 
  }
</style>

@extends('layout.master')
@section('title', 'Home')

@section('home-content')
<div id="home" class="landing-section">
  <div class="container">
    <div class="row gy-5 justify-content-center align-items-center">
      <div class="col-lg-8">
        <div class="home-intro text-center text-lg-center">
          <h2>We create life changing wishes 
            for children with critical illnesses</h2>
            <p>Because its isn't always necessary 
              to cure in order to heal</p>
        </div>
      </div>
      <div class="col-lg-8 text-center">
        <button type="button" class="btn btn-lg " id="exploreBtn">Explore</button>
      </div>
    </div>
  </div>
</div>
<div class="donation-section align-items-center">
  <div class="container">
    <div class="row gy-5 align-items-center">
      <div class="col-lg-6 mt-0">
        <div class="donation-intro text-center text-lg-center">
          <h2 class="mb-4">Support a Cause</h2>
          <p>Make a difference by contributing to support children with special needs. Your donations help
             provide resources, education, and opportunities for them to thrive. Together, 
             we can create a brighter future.</p>
        </div>
        <div class="col-lg-13 text-center">
          <button type="button" class="btn btn-sm mt-3" id="donateBtn2">DONATE</button>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="donation-image text-center">
          <img src="img/kids3.jpg" alt="" >
        </div>
      </div>
    </div>
  </div>
</div>
<div class="market-section">
  <div class="market-title text-center">
    <h2>Art Market</h2>
  </div>
  {{-- <div id="carouselExampleAutoplaying"> --}}
    <div class="carousel-inner">
      <div class="row justify-content-center text-center gy-5">
        <div class="col-auto">
          <div class="card h-100 custom-card">
            <img src="img/art-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Rumahku</h5>
              <h5 class="card-price">Rp 50.000</h5>
              <p class="card-text">Adam Dimas</p>
            </div>
            <a href="#">
              <div class="card-footer">
                <small class="">PURCHASE</small>
              </div>
            </a>
          </div>
        </div>
        <div class="col-auto">
          <div class="card h-100 custom-card">
              <img src="img/art-2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Jeruk Mandarin</h5>
              <h5 class="card-price">Rp 50.000</h5>
              <p class="card-text">Lutfi Raeshad</p>
            </div>
            <a href="#">
              <div class="card-footer">
                <small class="">PURCHASE</small>
              </div>
            </a>
          </div>
        </div>
        <div class="col-auto">
          <div class="card h-100 custom-card">
              <img src="img/art-3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Chickin</h5>
              <h5 class="card-price">Rp 50.000</h5>
              <p class="card-text">Ananda</p>
            </div>
            <a href="#">
              <div class="card-footer">
                <small class="">PURCHASE</small>
              </div>
            </a>
          </div>
        </div>
        <div class="col-auto">
          <div class="card h-100 custom-card">
              <img src="img/art-4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Tissue Box</h5>
              <h5 class="card-price">Rp 50.000</h5>
              <p class="card-text">Risya</p>
            </div>
            <a href="#">
              <div class="card-footer">
                <small class="">PURCHASE</small>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  {{-- </div> --}}
</div>
@endsection