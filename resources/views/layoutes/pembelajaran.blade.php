@extends('layoutes.main')

@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" 
     style="background-image: url('assets/images/bg_1.jpg'); background-size: cover; background-position: center; min-height: 300px; display: flex; align-items: flex-end; padding-bottom: 30px;">
    <div class="container">
        <div class="row align-items-end text-left">
            <div class="col-lg-7">
                <h2 class="mb-0">Kegiatan Siswa </h2>
                <p>Beberapa kegiatan Siswa diluar jam Pelajaran Reguler.</p>
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

    <div class="row">
          <div class="col-12">
              <div class="owl-slide-3 owl-carousel">
                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="course-single.html"><img src="/assets/images/osis.jpg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>OSIS MTs Assalam</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Organisasi Siswa Intra Sekolah</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">OSIS adalah motor penggerak siswa dalam kegiatan sekolah yang kreatif, edukatif, dan membangun karakter.</p>
                      <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                    </div>
                  </div>
      
                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="course-single.html"><img src="assets/images/Pramuka.png" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>PRAMUKA</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Praja Muda Karana</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Pramuka membentuk jiwa mandiri, tangguh, dan disiplin melalui kegiatan lapangan yang menantang dan bermakna.</p>
                      <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                    </div>
                  </div>
      
                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="course-single.html"><img src="assets/images/drum.jpg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>DRUM BAND</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Drum Band GITA Assalam</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Drum Band melatih kekompakan, ritme, dan semangat dalam satu irama yang penuh energi dan disiplin.</p>
                      <p><a href="courses-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/pmi.jpg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>PMI MTs Assalam</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Palang Merah Indonesia</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">PMI membentuk kepedulian dan jiwa kemanusiaan siswa melalui pelatihan pertolongan pertama dan kegiatan sosial.</p>
                      <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                    </div>
                  </div>
      
                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/paskibra.jpeg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>PASKIBRA</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Paskibra MTs Assalam</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Paskibra melatih kedisiplinan, rasa tanggung jawab, dan kebanggaan dalam mengibarkan Sang Merah Putih.</p>
                      <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                    </div>
                  </div>
      
                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/volly.jpg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Volly</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Ekstrakulikuler Bola Volly</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Volly membangun semangat tim, strategi permainan, dan sportivitas dalam setiap pertandingan.</p>
                      <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/futsal.jpg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>FUTSAL</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Ekstrakulikuler FUTSAL MTs Assalam</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Futsal menyalurkan energi positif siswa melalui permainan cepat, kerjasama tim, dan semangat kompetitif.</p>
                      <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/marawis.jpg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>MARAWIS</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>HAJIR MARAWIS MTs Assalam</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Marawis menumbuhkan cinta seni dan tradisi Islam melalui musik bernuansa religi yang penuh makna.</p>
                      <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/BADMINTON.png" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>BADMINTON</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Ekstrakulikuler Bandimnton MTs Assalam</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Badminton melatih ketangkasan, fokus, dan semangat kompetisi dalam suasana yang menyenangkan.</p>
                      <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="/assets/images/jurnalistik.png" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>JURNALISTIK</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Jurnalistik MTs Assalam</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Jurnalistik mengasah kemampuan menulis, berpikir kritis, dan menyampaikan informasi secara kreatif dan bertanggung jawab.</p>
                      <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                    </div>
                  </div>

            </div>
        </div>
    </div>

@endsection   