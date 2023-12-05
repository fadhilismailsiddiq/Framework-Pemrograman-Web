@extends('home')

@section('content')
<div class="col-lg-6" style="background-color: #F3EEEA; padding-top: 3%; padding-bottom: 1%;" >

    <div id="carouselExampleIndicators" class="carousel slide"data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('image/Minimarket.jpg')}}" class="d-block w-100" alt="..." height="400" >
          </div>
          <div class="carousel-item">
            <img src={{asset('image/Minimarket1.jpg')}} class="d-block w-100" alt="..." height="400">
          </div>
          <div class="carousel-item">
            <img src={{asset('image/Minimarket2.jpg')}} class="d-block w-100" alt="..." height="400">
          </div>
        </div>
      </div>


</div>
<div class="col-lg-6" style="background-color: #F3EEEA; padding-top: 3%; padding-bottom: 28%;">
    <h4>Selamat datang</h4>
    <p>Selamat datang di CosmoCashier - platform kasir inovatif yang dirancang untuk memenuhi kebutuhan bisnis modern Anda! Kami menyajikan pengalaman kasir yang cepat dan efisien dengan antarmuka yang intuitif. Transaksi dengan sekali klik, keamanan tingkat tinggi, dan kemampuan pelaporan yang kuat semuanya tersedia di sini. CosmoCashier memudahkan Anda untuk menjalankan bisnis Anda dengan lebih efektif dan cerdas. Bergabunglah sekarang untuk merasakan perubahan positif dalam mengelola operasional kasir bisnis Anda!</p>
</div>
@endsection
