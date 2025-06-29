@extends('layoutes.main')

@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" 
     style="background-image: url('assets/images/bg_1.jpg'); background-size: cover; background-position: center; min-height: 300px; display: flex; align-items: flex-end; padding-bottom: 30px;">
    <div class="container">
        <div class="row align-items-end text-left">
            <div class="col-lg-7">
                <h2 class="mb-0">Berita dan Informasi Kegiatan </h2>
                <p>Informasi Kegiatan dan berita .</p>
            </div>
        </div>
    </div>
</div>

<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="{{ url('/') }}">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <a href="{{ url('fasilitas') }}">Fasilitas</a>
    </div>
</div>

<!-- Bagian Fasilitas Unggulan -->
<div class="site-section bg-light" style="padding-top: 40px;">
  <div class="container">
  <div class="row justify-content-center mb-5">
  <div class="col-md-8 text-center">
    <div class="p-4 rounded shadow-sm" style="background-color: #2c3e50;">
      <h2 class="section-title mb-3" style="position: relative; display: inline-block; color: #ffffff;">
        Fasilitas Unggulan MTs Assalam
        <span style="display: block; width: 60px; height: 3px; background: #3498db; margin: 10px auto 0;"></span>
      </h2>
      <p class="lead" style="font-size: 1.1rem; color: #dfe6e9;">
        MTs Assalam menyediakan berbagai fasilitas <strong>pendukung kegiatan belajar</strong> dan <strong>pengembangan diri siswa</strong> secara optimal. Dengan lingkungan yang bersih, aman, dan kondusif, siswa dapat belajar lebih fokus dan nyaman.
      </p>
    </div>
  </div>
</div>


    <!-- Contoh Fasilitas -->
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100">
          <img src="/assets/images/lab-komputer.jpg" class="card-img-top" alt="Lab Komputer">
          <div class="card-body">
            <h5 class="card-title">Laboratorium Komputer</h5>
            <p class="card-text">Fasilitas lengkap untuk mendukung pembelajaran teknologi informasi dan komunikasi.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100">
          <img src="/assets/images/perpustakaan.jpg" class="card-img-top" alt="Perpustakaan">
          <div class="card-body">
            <h5 class="card-title">Ruangan Perpustakaan</h5>
            <p class="card-text">Koleksi buku dan literatur digital untuk menunjang kegiatan belajar siswa.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100">
          <img src="/assets/images/lapangan.jpg" class="card-img-top" alt="Lapangan Olahraga">
          <div class="card-body">
            <h5 class="card-title">Lapangan Olahraga</h5>
            <p class="card-text">Lapangan serbaguna untuk kegiatan olahraga seperti futsal, voli, dan senam.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection