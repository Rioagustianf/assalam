@extends('admin.layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Berita</h1>
        <a href="{{ route('admin.berita') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    <!-- Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Berita</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="title">Judul Berita <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $berita->title) }}" required>
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="content">Konten Berita <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="10" required>{{ old('content', $berita->content) }}</textarea>
                    @error('content')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label>Gambar Berita Saat Ini</label>
                    <div class="mb-3">
                        @if($berita->image)
                            <img src="{{ asset($berita->image) }}" alt="{{ $berita->title }}" class="img-fluid rounded" style="max-height: 200px;">
                        @else
                            <div class="text-muted py-3">
                                <i class="fas fa-image fa-2x mb-2"></i>
                                <p>Tidak ada gambar</p>
                            </div>
                        @endif
                    </div>
                    <label for="image">Ganti Gambar (opsional)</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                    @error('image')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted mt-2">Format: JPG, JPEG, PNG. Ukuran maksimal: 2MB.</small>
                </div>
                
                <div class="form-group">
                    <label for="status">Status Publikasi <span class="text-danger">*</span></label>
                    <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
                        <option value="published" {{ (old('status', $berita->status) == 'published') ? 'selected' : '' }}>Publikasikan</option>
                        <option value="draft" {{ (old('status', $berita->status) == 'draft') ? 'selected' : '' }}>Simpan sebagai Draft</option>
                    </select>
                    @error('status')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Perbarui Berita
                    </button>
                    <a href="{{ route('admin.berita') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection 