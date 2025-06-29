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
        <a href="{{ url('kegiatan') }}">Kegiatan</a>
    </div>
</div>

<!-- Bagian Galeri Kegiatan -->
<div class="site-section bg-light" style="padding-top: 40px;">
  <div class="container">
  <div class="p-4 rounded shadow-sm text-center" style="background-color: #2c3e50;">
  <h2 class="section-title mb-3" style="position: relative; display: inline-block; color: #ffffff;">
    Galeri Kegiatan MTs Assalam
    <span style="display: block; width: 60px; height: 3px; background: #3498db; margin: 10px auto 0;"></span>
  </h2>
  <p class="lead" style="font-size: 1.1rem; color: #dfe6e9;">
    Dokumentasi kegiatan siswa MTs Assalam yang penuh semangat, kekompakan, dan keceriaan dalam Memadukan kurikulum nasional dengan nilai-nilai keislaman, sehingga siswa tumbuh cerdas secara intelektual dan spiritual..
  </p>
</div>
    <!-- Kartu Galeri Kegiatan -->
    <div class="row mt-5">
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100 border-0">
          <div class="overflow-hidden rounded-top">
            <img src="/assets/images/kegiatan1.jpg" class="card-img-top img-hover" alt="Pesantren Kilat Ramadhan" style="transition: transform 0.3s;">
          </div>
          <div class="card-body bg-white">
            <h5 class="card-title">Pesantren Kilat Ramadhan</h5>
            <p class="card-text">Kegiatan peningkatan spiritualitas siswa selama bulan suci Ramadhan.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100 border-0">
          <div class="overflow-hidden rounded-top">
            <img src="/assets/images/kegiatan2.jpg" class="card-img-top img-hover" alt="Classmeeting Semester Ganjil" style="transition: transform 0.3s;">
          </div>
          <div class="card-body bg-white">
            <h5 class="card-title">Classmeeting Semester Ganjil</h5>
            <p class="card-text">Ajang lomba antar kelas yang memperkuat solidaritas dan kreativitas siswa.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100 border-0">
          <div class="overflow-hidden rounded-top">
            <img src="/assets/images/kegiatan3.jpg" class="card-img-top img-hover" alt="Kunjungan Edukasi" style="transition: transform 0.3s;">
          </div>
          <div class="card-body bg-white">
            <h5 class="card-title">Kunjungan Edukasi ke Museum</h5>
            <p class="card-text">Belajar sambil bermain dan mengenal sejarah di museum nasional.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CSS tambahan untuk efek hover -->
<style>
  .img-hover:hover {
    transform: scale(1.05);
  }
</style>


@endsection