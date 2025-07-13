@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Pengaturan Kuota PPDB</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('admin.ppdb.quota.update') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tahun_ajaran">Tahun Ajaran</label>
            <input type="text" name="tahun_ajaran" class="form-control" value="{{ old('tahun_ajaran', $setting->tahun_ajaran ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="kuota">Kuota Maksimal Pendaftar</label>
            <input type="number" name="kuota" class="form-control" value="{{ old('kuota', $setting->kuota ?? '') }}" min="1" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
    </form>
</div>
@endsection 