@extends('admin.layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Berita Baru</h1>
        <a href="{{ route('admin.berita') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    <!-- Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Berita</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <label for="title">Judul Berita <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="content">Konten Berita <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="10" required>{{ old('content') }}</textarea>
                    @error('content')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label>Gambar Berita</label>
                    <div class="mb-3">
                        <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                        @error('image')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                        <small class="form-text text-muted mt-2">Format: JPG, JPEG, PNG. Ukuran maksimal: 2MB.</small>
                    </div>
                    <div id="preview-container" style="display:none;">
                        <label class="font-weight-bold">Preview Gambar:</label><br>
                        <img id="preview-image" src="#" alt="Preview Gambar" style="max-width: 300px; max-height: 300px; margin-bottom:10px;" class="img-thumbnail">
                        <br>
                        <button type="button" class="btn btn-sm btn-danger" id="resetPreview">Batal</button>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="status">Status Publikasi <span class="text-danger">*</span></label>
                    <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
                        <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Publikasikan</option>
                        <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Simpan sebagai Draft</option>
                    </select>
                    @error('status')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan Berita
                    </button>
                    <a href="{{ route('admin.berita') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const input = document.getElementById('image');
        const previewContainer = document.getElementById('preview-container');
        const previewImage = document.getElementById('preview-image');
        const resetBtn = document.getElementById('resetPreview');

        input.addEventListener('change', function() {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    previewContainer.style.display = 'block';
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                previewContainer.style.display = 'none';
                previewImage.src = '#';
            }
        });

        resetBtn.addEventListener('click', function() {
            input.value = '';
            previewContainer.style.display = 'none';
            previewImage.src = '#';
        });
    });
</script>
@endsection 