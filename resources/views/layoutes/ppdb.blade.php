@extends('layoutes.main')

@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" 
     style="background-image: url('assets/images/bg_1.jpg'); background-size: cover; background-position: center; min-height: 300px; display: flex; align-items: flex-end; padding-bottom: 30px;">
    <div class="container">
        <div class="row align-items-end text-left">
            <div class="col-lg-7">
                <h2 class="mb-0">Penerimaan Peserta Didik Baru</h2>
                <p>Informasi Mengenai Penerimaan Peserta didik Baru.</p>
            </div>
        </div>
    </div>
</div>
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
      <a href="{{ url('/') }}">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Admission</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <img src="images/course_6.jpg" alt="Image" class="img-fluid"> 
                </div>
                <div class="col-lg-5 ml-auto align-self-center">
                <h2 class="section-title-underline mb-5">
                    <span>Fasilitas Unggulan Sekolah</span>
                </h2>
                <p>Sekolah kami menyediakan berbagai fasilitas untuk mendukung proses belajar mengajar secara maksimal.</p>
                <p>Berikut adalah beberapa keunggulan yang bisa didapatkan oleh peserta didik:</p>

                <ol class="ul-check primary list-unstyled">
                    <li>Laboratorium Komputer dengan koneksi internet</li>
                    <li>Perpustakaan digital dan fisik dengan ribuan koleksi buku</li>
                    <li>Lapangan olahraga dan ruang kegiatan seni</li>
                    <li>Kelas ber-AC dan menggunakan proyektor</li>
                    <li>Ekstrakurikuler lengkap: Pramuka, Paskibra, Futsal, Musik, dan lainnya</li>
                    <li>Program bimbingan belajar & persiapan ujian nasional</li>
                </ol>


                </div>
            </div>

            <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                        <img src="images/course_3.jpg" alt="Image" class="img-fluid"> 
                    </div>
                    <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                    <h2 class="section-title-underline mb-5">
                            <span>Syarat Umum Pendaftaran</span>
                        </h2>
                        <p>Berikut adalah persyaratan umum untuk calon peserta didik baru:</p>
                        <p>Pastikan semua dokumen disiapkan dan diunggah saat melakukan pendaftaran online.</p>

                        <ol class="ul-check primary list-unstyled">
                            <li>Mengisi formulir pendaftaran secara lengkap</li>
                            <li>Fotokopi Kartu Keluarga (KK)</li>
                            <li>Fotokopi Akta Kelahiran</li>
                            <li>Fotokopi Ijazah/Surat Keterangan Lulus</li>
                            <li>Pas foto ukuran 3x4 (2 lembar)</li>
                            <li>Fotokopi rapor semester terakhir</li>
                        </ol>

                    </div>
                </div>
                
        </div>

        <div class="site-section bg-light">
    <div class="container text-center">
        <h3 class="mb-4">Siap mendaftar?</h3>
        <a href="{{ route('ppdb.form') }}" class="btn btn-primary btn-lg px-5 py-3">
    Daftar Sekarang
</a>

    </div>
</div>

    </div>

@endsection        