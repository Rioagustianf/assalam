@extends('layoutes.main')

@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" 
     style="background-image: url('assets/images/bg_1.jpg'); background-size: cover; background-position: center; min-height: 300px; display: flex; align-items: flex-end; padding-bottom: 30px;">
    <div class="container">
        <div class="row align-items-end text-left">
            <div class="col-lg-7">
                <h2 class="mb-0">Berita dan Informasi Kegiatan</h2>
                <p>Informasi Kegiatan dan berita terbaru MTs Assalam.</p>
            </div>
        </div>
    </div>
</div>

<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="{{ url('/') }}">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <a href="{{ url('berita') }}">Berita</a>
    </div>
</div>

<!-- Konten Berita -->
<div class="site-section pt-4 pb-5">
  <div class="container">
    <div class="row">
      @if($beritas->count() > 0)
        @foreach($beritas as $berita)
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100 shadow-sm">
            @if($berita->image)
            <img src="{{ asset($berita->image) }}" class="card-img-top" alt="{{ $berita->title }}" style="height: 200px; object-fit: cover;">
            @else
            <img src="{{ asset('assets/images/course_1.jpg') }}" class="card-img-top" alt="{{ $berita->title }}" style="height: 200px; object-fit: cover;">
            @endif
            <div class="card-body">
              <h5 class="card-title">{{ $berita->title }}</h5>
              <p class="card-text text-muted">{{ \Illuminate\Support\Str::limit(strip_tags($berita->content), 100) }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('berita.show', $berita->slug) }}" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                <small class="text-muted">{{ $berita->created_at->format('d M Y') }}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      @else
        <div class="col-12 text-center py-5">
          <h3>Belum ada berita yang dipublikasikan</h3>
          <p>Silakan kembali lagi nanti untuk informasi terbaru.</p>
        </div>
      @endif
    </div>
    
    <!-- Pagination -->
    <div class="row mt-4">
      <div class="col-12 d-flex justify-content-center">
        {{ $beritas->links() }}
      </div>
    </div>
  </div>
</div>

@endsection