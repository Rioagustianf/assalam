@extends('layoutes.main')

@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" 
     style="background-image: url('{{ asset('assets/images/bg_1.jpg') }}'); background-size: cover; background-position: center; min-height: 300px; display: flex; align-items: flex-end; padding-bottom: 30px;">
    <div class="container">
        <div class="row align-items-end text-left">
            <div class="col-lg-7">
                <h2 class="mb-0">{{ $berita->title }}</h2>
                <p>{{ $berita->created_at->format('d M Y') }}</p>
            </div>
        </div>
    </div>
</div>

<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="{{ url('/') }}">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <a href="{{ url('berita') }}">Berita</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span>{{ $berita->title }}</span>
    </div>
</div>

<!-- Konten Berita Detail -->
<div class="site-section pt-4 pb-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9 mb-4">
        @if($berita->image)
        <p class="mb-4 text-center">
          <img src="{{ asset($berita->image) }}" alt="{{ $berita->title }}" class="img-fluid rounded shadow-sm" style="max-width: 100%;">
        </p>
        @endif
        
        <div class="berita-content">
          {!! nl2br(e($berita->content)) !!}
        </div>
        
        <div class="mt-5 pt-4 border-top">
          <h4>Berita Terkait</h4>
          <div class="row mt-3">
            @forelse($relatedNews as $related)
            <div class="col-md-4 mb-4">
              <div class="card h-100 shadow-sm">
                @if($related->image)
                <img src="{{ asset($related->image) }}" class="card-img-top" alt="{{ $related->title }}" style="height: 150px; object-fit: cover;">
                @else
                <img src="{{ asset('assets/images/course_1.jpg') }}" class="card-img-top" alt="{{ $related->title }}" style="height: 150px; object-fit: cover;">
                @endif
                <div class="card-body">
                  <h6 class="card-title">{{ \Illuminate\Support\Str::limit($related->title, 50) }}</h6>
                  <a href="{{ route('berita.show', $related->slug) }}" class="btn btn-sm btn-primary mt-2">Baca</a>
                </div>
              </div>
            </div>
            @empty
            <div class="col-12">
              <p class="text-muted">Tidak ada berita terkait.</p>
            </div>
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection 