@extends('layoutes.main')

@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" 
     style="background-image: url('assets/images/bg_1.jpg'); background-size: cover; background-position: center; min-height: 300px; display: flex; align-items: flex-end; padding-bottom: 30px;">
    <div class="container">
        <div class="row align-items-end text-left">
            <div class="col-lg-7">
                <h2 class="mb-0">Pengajar </h2>
                <p>Berikut Adalah beberapa profil pengajar di MTS Assalam</p>
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

    <div class="row">
          <div class="col-12">
              <div class="owl-slide-3 owl-carousel">
                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="course-single.html"><img src="/assets/images/pa akhfaz.jpeg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Drs. H. Akhfaz Fauzi, M.Ag.</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Kepala Sekolah MTs Assalam</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Bahasa Arab</p>
                    </div>
                  </div>
      
                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="course-single.html"><img src="assets/images/pa mamal.JPG" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Mamal Abdul Malik, S.Pd</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Wakasek Bidang Kurikulum</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Matematika</p>
                    </div>
                  </div>
      
                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="course-single.html"><img src="assets/images/pa bubun.JPG" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Bunyamin, S.Ag.</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Wakasek Bidang Kesiswaan </h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">SKI (Sejarah Kebudayaan Islam)</p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/pa tedi.JPG" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>ir. H Tedi Setiawan</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Wakasek Bidang Sarana  
                      dan Prasarana</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">IPA (Terpadu)</p>
                    </div>
                  </div>
      
                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/pa seda.JPG" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Seda Akhmad Ziyad, S.Pd.I<h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Wakasek Bidang Humas</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">PPKN</p>
                    </div>
                  </div>
      
                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/pa husni.JPG" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Husni Mujamil, S.Pd.I </h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Pembina Osis</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Prakarya / TIK / Fikih</p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/pa ujang.JPG" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Ujang Muhamad Ihsan, S.Pd.I </h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Kepala Perpustakaan</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Fiqih / Tahsin Al qur'an</p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/pa zayni.jpg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Zaeni Hamdan, S.Pd.I</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Kepala Lab Komputer</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Bahasa Inggris</p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/pa helmi.jpg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Ahmad Helmi Fuad, S,Pd.</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Dewan Guru</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Bahasa Inggris</p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/pa haji misbah.jpg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Drs. Misbah AL Amin</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Dewan Guru</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Tahsin Al Qur'an</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>

@endsection   