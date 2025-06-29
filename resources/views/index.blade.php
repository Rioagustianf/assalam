@extends('layoutes.main')

@section('content')

    </header>
    <div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('/assets/images/depan.jpeg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>MTS ASSALAM</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('/assets/images/depan.jpeg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>PLERED PURWAKARTA</h1>
            </div>
          </div>
        </div>
      </div>

    </div>
    

    <div></div>

    <div class="site-section">
  <div class="container">
    <div class="row mb-5 justify-content-center text-center">
      <div class="col-lg-4 mb-5">
        <h2 class="section-title-underline mb-5">
          <span>Kenapa Harus MTs Assalam?</span>
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

        <div class="feature-1 border">
          <div class="icon-wrapper bg-primary">
            <span class="flaticon-mortarboard text-white"></span>
          </div>
          <div class="feature-1-content">
            <h2>Pembelajaran Islami & Modern</h2>
            <p>Memadukan kurikulum nasional dengan nilai-nilai keislaman, sehingga siswa tumbuh cerdas secara intelektual dan spiritual.</p>
            <p><a href="{{ route('kegiatan') }}" class="btn btn-primary px-4 rounded-0">Selengkapnya</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <div class="feature-1 border">
          <div class="icon-wrapper bg-primary">
            <span class="flaticon-school-material text-white"></span>
          </div>
          <div class="feature-1-content">
            <h2>Tenaga Pengajar Kompeten</h2>
            <p>Dibimbing oleh guru berpengalaman dan berprestasi yang siap mendampingi siswa dalam proses belajar yang menyenangkan.</p>
            <p><a href="{{ route('guru') }}"class="btn btn-primary px-4 rounded-0">Lihat Profil</a></p>
          </div>
        </div> 
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <div class="feature-1 border">
          <div class="icon-wrapper bg-primary">
            <span class="flaticon-library text-white"></span>
          </div>
          <div class="feature-1-content">
            <h2>Fasilitas Lengkap & Nyaman</h2>
            <p>Dilengkapi dengan laboratorium komputer, perpustakaan, lapangan olahraga, dan ruang kelas yang kondusif.</p>
            <p><a href="{{ route('fasilitas') }}" class="btn btn-primary px-4 rounded-0">Lihat Fasilitas</a></p>
          </div>
        </div> 
      </div>
    </div>
  </div>
</div>


    <div class="site-section">
      <div class="container">


        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title-underline mb-3">
              <span>Kegiatan Siswa</span>
            </h2>
            <p>Berikut adalah Kegiatan Ekstrakulikuler dan IntraKulikuler</p>
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


      </div>
    </div>

    <div class="section-bg style-1" style="background-image: url('images/about_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="section-title-underline style-2">
              <span>Selamat Datang di MTs Assalam</span>
            </h2>
          </div>
          <div class="col-lg-8">
            <p class="lead">Selamat datang di blog Madrasah Tsanawiyah Assalam Plered Purwakarta, sebagai media komunikasi, supaya terjalin silaturrahmi yang erat baik secara internal maupun eksternal sekaligus untuk pengembangan sumberdaya keluarga besar MTs. Assalam maupun sumber atau potensi yang lain untuk mewujudkan lembaga pendidikan Islam yang unggul dan berprestasi, dalam rangka pembinaan generasi muda Islam yang handal sebagai kader umat dan kader bangsa.</p>
            <p class="lead">Blog Madrasah kami ini masih jauh dari sempurna, baik dari isi maupun perwajahan dan tata letaknya. Untuk itu komentar dan kritik membangun atau saran yang baik sangat kami harapkan demi perbaikan blog ini, melalui ruang komentar yang telah tersedia, termasuk diskusi dan sambung rasa yang bersifat keilmuan di setiap postingan, yang tentu saja dengan mengutamakan toleransi atau tenggang rasa, melalui bahasa yang santun dan menjunjung tinggi ukhuwwah.
Salam Silaturrahmi</p>
          </div>
        </div>
      </div>
    </div>

    <!-- // 05 - Block -->
  <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-4">
            <h2 class="section-title-underline">
              <span>Testimonials</span>
            </h2>
          </div>
        </div>


        <div class="owl-slide owl-carousel">

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
              <div>
                <h3>Mahran Rangga Basyus</h3>
                <span>IT Support</span>
              </div>
            </div>
            <div>
              <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!&rdquo;</p>
            </div>
          </div>

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
              <div>
                <h3>Zamhara Ahmad Yasar</h3>
                <span>Pengusaha Sukses</span>
              </div>
            </div>
            <div>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
            </div>
          </div>

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/person_4.jpg" alt="Image" class="img-fluid mr-3">
              <div>
                <h3>Tuhfatusania</h3>
                <span>Mahasiswa UIN Sunan Gunung Djati Bandung</span>
              </div>
            </div>
            <div>
              <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!&rdquo;</p>
            </div>
          </div>

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
              <div>
                <h3>Zulfa Syarifah</h3>
                <span>Mahasiswa UPI Purwakarta</span>
              </div>
            </div>
            <div>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
            </div>
          </div>

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
              <div>
                <h3>Zahwa Khoerunnisa</h3>
                <span>Mahasiswa Universitas Ahcmad Yani</span>
              </div>
            </div>
            <div>
              <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!&rdquo;</p>
            </div>
          </div>

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/person_4.jpg" alt="Image" class="img-fluid mr-3">
              <div>
                <h3>Cecep Herman</h3>
                <span>Tenaga Pengajar di MTs Assalam</span>
              </div>
            </div>
            <div>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
            </div>
          </div>

        </div>
        
      </div>
    </div>
    

    <div class="section-bg style-1" style="background-image: url('assets/images/sakola.jpg');">
      <div class="container">
      <div class="container text-center">
      <h2 class="judul-visimisi" style="color: #ffffff;">Visi Misi MTs Assalam</h2>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-mortarboard"></span>
            <h3>VISI</h3>
            <p>Menjadi lembaga pendidikan islam yang unggul, berprestasi dan mitamaddin di tahun 2030.</p>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-school-material"></span>
            <h3>MISI 1</h3>
            <p>Meningkatkan prestasi akademik siswa, disertai keterampilan (skill) dan akhlak.</p>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-library"></span>
            <h3>MISI 2</h3>
            <p>Meningkatkan profesionalisme guru baik kemampuan kinerja maupun etos kerja.</p>
          </div>
          <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-school-material"></span>
            <h3>MISI 3</h3>
            <p>Meningkatkan kualitas dan kuantitas lembaga, baik administrasi sekolah maupun infrastruktur.</p>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-mortarboard"></span>
            <h3>MISI 4</h3>
            <p>Meningkatkan prestasi khidmah dan kepedulian masyarakat khususnya orang tua terhadap pendidikan.</p>
          </div>
        </div>

        </div>
      </div>
    </div>
    </div>
 
@endsection