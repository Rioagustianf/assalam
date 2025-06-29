@extends('layoutes.main')

@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" 
     style="background-image: url('assets/images/bg_1.jpg'); background-size: cover; background-position: center; min-height: 300px; display: flex; align-items: flex-end; padding-bottom: 30px;">
    <div class="container">
        <div class="row align-items-end text-left">
            <div class="col-lg-7">
                <h2 class="mb-0">PPDB</h2>
                <p>Silakan isi data Anda untuk pendaftaran.</p>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <h2 class="mb-4">Formulir Pendaftaran Peserta Didik Baru</h2>

        {{-- Alert sukses --}}
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- Alert gagal validasi --}}
        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Terjadi kesalahan:</strong>
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('ppdb.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" value="{{ old('nama_lengkap') }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email Aktif</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="no_hp">Nomor HP</label>
                <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp') }}" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat Lengkap</label>
                <textarea name="alamat" class="form-control" rows="3" required>{{ old('alamat') }}</textarea>
            </div>

            <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah</label>
                <input type="text" name="asal_sekolah" class="form-control" value="{{ old('asal_sekolah') }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Kirim Pendaftaran</button>
        </form>
    </div>
</div>

@endsection
