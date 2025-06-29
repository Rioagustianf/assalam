@extends('layoutes.main')

@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" 
     style="background-image: url('assets/images/bg_1.jpg'); background-size: cover; background-position: center; min-height: 300px; display: flex; align-items: flex-end; padding-bottom: 30px;">
    <div class="container">
        <div class="row align-items-end text-left">
            <div class="col-lg-7">
                <h2 class="mb-0">Profil </h2>
                <p>Selamat datang di laman profil kami. Halaman ini menyajikan informasi lengkap mengenai.</p>
            </div>
        </div>
    </div>
</div>

<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="{{ url('/') }}">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <a href="{{ url('about') }}">Profil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <a href="{{ url('guru') }}">Guru</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <a href="{{ url('staff') }}">Staff TU</a>
    </div>
</div>
<div class="container pt-5 mb-5">
  <h2 class="section-title-underline text-center mb-4">
    <span>Profil Umum Madrasah</span>
  </h2>
  <div class="row">
    <!-- Kolom Kiri -->
    <div class="col-md-6 mb-4">
      <div class="p-3 shadow rounded h-100" style="background-color: #2c3e50; color: #ecf0f1;">
        <h5 class="mb-3">Informasi Umum</h5>
        <p><strong>Nama Madrasah:</strong> MADRASAH TSANAWIYAH ASSALAM</p>
        <p><strong>NSM:</strong> 12.12.32.14.00.10</p>
        <p><strong>Akreditasi:</strong> Terakreditasi A</p>
        <p><strong>No. Akreditasi:</strong> 02.00/534/BAP–SM/XI/2010</p>
        <p><strong>No. Izin Operasional:</strong> Wi/BG.010.1.3/94/1987</p>
        <p><strong>Tahun Berdiri:</strong> 1986</p>
        <p><strong>Kepemilikan Tanah:</strong> Yayasan</p>
        <p><strong>Status Tanah:</strong> Sertifikat & Akte Jual Beli</p>
        <p><strong>NPWP:</strong> 02.420.747.4.409.00</p>
      </div>
    </div>

    <!-- Kolom Kanan -->
    <div class="col-md-6 mb-4">
      <div class="p-3 shadow rounded h-100" style="background-color: #2c3e50; color: #ecf0f1;">
        <h5 class="mb-3">Kontak & Lokasi</h5>
        <p><strong>Alamat:</strong><br>
          Jl. Sempur, Desa Palinggihan<br>
          Kecamatan Plered, Kabupaten Purwakarta 41162<br>
          Provinsi Jawa Barat</p>
        <p><strong>Luas Tanah:</strong> 7000 M²</p>
        <p><strong>Luas Bangunan:</strong> 4000 M²</p>
        <p><strong>Kepala Madrasah:</strong> Drs. H. Akhfaz Fauzi, M.Ag.</p>
        <p><strong>Telp/HP:</strong> (0264) 272709 / 081912532364</p>
        <p><strong>Yayasan:</strong> Yayasan Assalam</p>
        <p><strong>Alamat Yayasan:</strong><br>
          Jl. Sempur No. 36, Desa Palinggihan, Kecamatan Plered, Kabupaten Purwakarta 41162</p>
        <p><strong>Telp Yayasan:</strong> 0264 – 272709</p>
      </div>
    </div>
  </div>
</div>


@endsection