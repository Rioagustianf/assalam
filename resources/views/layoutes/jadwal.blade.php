@extends('layoutes.main')

@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" 
     style="background-image: url('assets/images/bg_1.jpg'); background-size: cover; background-position: center; min-height: 300px; display: flex; align-items: flex-end; padding-bottom: 30px;">
    <div class="container">
        <div class="row align-items-end text-left">
            <div class="col-lg-7">
                <h2 class="mb-0">Jadwal Pembelajaran </h2>
                <p>Berikut adalah informasi kegiatan belajar siswa</p>
            </div>
        </div>
    </div>
</div>

<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="{{ url('/') }}">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <a href="{{ url('pembelajaran') }}">Kegiatan Siswa</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <a href="{{ url('jadwal') }}">Jadwal</a>
    </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <!-- Gambar -->
      <div class="col-md-6 mb-4">
        <p>
          <img src="images/jadwal_masuk.jpg" alt="Jadwal Masuk MTs" class="img-fluid rounded shadow">
        </p>
      </div>

      <!-- Konten Jadwal -->
      <div class="col-lg-5 ml-auto align-self-center">
        <h2 class="section-title-underline mb-5">
          <span>Jadwal Masuk Sekolah</span>
        </h2>

        <p><strong class="text-black d-block">Hari Aktif:</strong> Senin - Sabtu</p>
        <p class="mb-4"><strong class="text-black d-block">Jam Masuk:</strong> 07:00 WIB</p>
        <p class="mb-4"><strong class="text-black d-block">Jam Pulang:</strong> 13:00 WIB (Senin-Jumat), 11:30 WIB (Sabtu)</p>
        <p>MTs Assalam menetapkan jadwal belajar 6 hari dalam seminggu. Kegiatan pembelajaran dimulai sejak pagi dengan pembiasaan seperti tadarus Al-Qur'an, dilanjutkan kegiatan belajar hingga siang hari.</p>

        <ul class="ul-check primary list-unstyled mb-5">
          <li>07:00 – 07:30: Tadarus & Apel Pagi</li>
          <li>07:30 – 10:00: Pelajaran Sesi 1</li>
          <li>10:00 – 10:15: Istirahat</li>
          <li>10:15 – 12:30: Pelajaran Sesi 2</li>
          <li>12:30 – 13:00: Persiapan Pulang / Dzuhur</li>
        </ul>

        <p>
          <a href="{{ route('guru') }}" class="btn btn-primary rounded-0 btn-lg px-5">
            Lihat Detail Guru
          </a>
        </p>
      </div>
    </div>
  </div>
</div>

@endsection        