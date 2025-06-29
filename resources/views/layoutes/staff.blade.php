@extends('layoutes.main')

@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" 
     style="background-image: url('assets/images/bg_1.jpg'); background-size: cover; background-position: center; min-height: 300px; display: flex; align-items: flex-end; padding-bottom: 30px;">
    <div class="container">
        <div class="row align-items-end text-left">
            <div class="col-lg-7">
                <h2 class="mb-0">Staff Tata Usaha </h2>
                <p>Berikut adalah tenaga atau Staff yang bertugas selain pengajar</p>
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
        <a href="{{ url('staff') }}">Staff </a>
    </div>
</div>

<div class="row">
          <div class="col-12">
              <div class="owl-slide-3 owl-carousel">
                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="course-single.html"><img src="/assets/images/pa pipin.jpg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Zaenal Arifin, S.Pd.I.</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Kepala Tata Usaha, Pelaksana Urusan Admintrasi 
                      Surat-surat</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Aqidah Akhlak</p>
                    </div>
                  </div>
      
                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="course-single.html"><img src="assets/images/bu sidah.JPG" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Sidah Fakhimah, A.Md.</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Staf  TU </h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Pelaksana Urusan Penerimaan Dana Komite 
                      dan  Juru Bayar</p>
                    </div>
                  </div>
      
                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="course-single.html"><img src="assets/images/pa yazid.jpg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Yazid Akhmad Zaidan, A.Md.</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Staf  TU </h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Urusan Bendahara BOS.</p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/bu nisa.jpg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Muflihatun Nisa, S.Pd </h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Staf  TU</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Pelaksana Urusan Bendahara BOS.</p>
                    </div>
                  </div>
      
                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/pa ejen.jpg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Zaenal Abidin</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Staff TU</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Pelaksana Urusan Sarana dan Inventaris 
                      Barang</p>
                    </div>
                  </div>
      
                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/bu tuti.jpg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3> Tuti Alawiyah </h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Staff TU</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Pelaksana Urusan Kepegawaian dan 
                      kesiswaan dan Bendahara BOS</p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/pa zayni.JPG" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3> Zaeni Hamdan, S.Pd.I </h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Operator Madarasah</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Bidang Emis</p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/pa husni.jpg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3> Husni Mujamil, S.Pd.I </h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Teknisi Lab Komputer</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Operator ANBK</p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/pa adang.jpeg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Adang Supriatna, S.Pd </h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Matematika</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Operator Madrasah Bidang RDM, PDUM,</p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/jurnalistik.png" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3> Yusuf Farhan, S.Kom</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Praktek Ibadah / TIK</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Proktor ANBK</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>

@endsection   