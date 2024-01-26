@extends('layouts.frontend.main')

@section('content')
   <header class="hero-section">
        <div class="hero-content">
            <h1>Selamat datang di Galeri Sepeda Motor</h1>
            <p>Jelajahi koleksi sepeda motor terbaik dari seluruh dunia.</p>
            <a href="{{ route('post.index') }}" class="btn btn-primary">Jelajahi Sekarang</a>
        </div>
    </header>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('image/motor1.png') }}" alt="Motor1" class="d-block w-50">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('image/motor6.png') }}" alt="Motor2" class="d-block w-50">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('image/motor7.png') }}" alt="Motor3" class="d-block w-50">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <style>
      .carousel-item img {
        max-width: 100%; /* Maksimum lebar gambar sesuai lebar parent */
        height: auto; /* Menjaga rasio aspek gambar */
        display: block; /* Agar gambar tidak memiliki spasi di bawahnya */
        margin: 0 auto; /* Posisikan gambar di tengah secara horizontal */
      }
    </style>
@endsection