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

        {{-- Tampilkan sisa kuota jika ada --}}
        @php
            $setting = \App\Models\PpdbSetting::orderByDesc('id')->first();
            $kuota = $setting ? $setting->kuota : null;
            $tahun_ajaran = $setting ? $setting->tahun_ajaran : null;
            $pendaftar = $tahun_ajaran ? \App\Models\ppdb::where('created_at', '>=', now()->startOfYear())->count() : 0;
            $sisa = $kuota ? ($kuota - $pendaftar) : null;
        @endphp
        @if($kuota)
            <div class="alert alert-info">Kuota tersedia untuk tahun ajaran <b>{{ $tahun_ajaran }}</b>: <b>{{ $sisa }}</b> pendaftar lagi</div>
        @endif

        <form action="{{ route('ppdb.store') }}" method="POST" novalidate>
            @csrf

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap Calon Peserta Didik Baru*</label>
                <input type="text" name="nama_lengkap" class="form-control" value="{{ old('nama_lengkap') }}" required>
            </div>
            <div class="form-group">
                <label for="nisn">NISN*</label>
                <input type="text" name="nisn" class="form-control @error('nisn') is-invalid @enderror" value="{{ old('nisn') }}" inputmode="numeric" pattern="\d{10}" maxlength="10" required>
                @error('nisn')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah (SD/MI)</label>
                <input type="text" name="asal_sekolah" class="form-control" value="{{ old('asal_sekolah') }}">
            </div>
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}" inputmode="numeric" pattern="\d{16}" maxlength="16">
                @error('nik')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Laki-laki" {{ old('jenis_kelamin')=='Laki-laki'?'selected':'' }}>Laki-laki</option>
                    <option value="Perempuan" {{ old('jenis_kelamin')=='Perempuan'?'selected':'' }}>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" value="{{ old('tempat_lahir') }}">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir') }}">
            </div>
            <div class="form-group">
                <label for="alamat_lengkap">Alamat Lengkap (RT, RW, Kampung, Desa/Kelurahan, Kecamatan, Kabupaten)</label>
                <textarea name="alamat_lengkap" class="form-control" rows="2">{{ old('alamat_lengkap') }}</textarea>
            </div>
            <div class="form-group">
                <label for="tinggal_bersama">Tinggal Bersama</label>
                <select name="tinggal_bersama" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Orang Tua" {{ old('tinggal_bersama')=='Orang Tua'?'selected':'' }}>Orang Tua</option>
                    <option value="Wali" {{ old('tinggal_bersama')=='Wali'?'selected':'' }}>Wali</option>
                    <option value="Pondok Pesantren" {{ old('tinggal_bersama')=='Pondok Pesantren'?'selected':'' }}>Pondok Pesantren</option>
                    <option value="Asrama" {{ old('tinggal_bersama')=='Asrama'?'selected':'' }}>Asrama</option>
                    <option value="Lainnya" {{ old('tinggal_bersama')=='Lainnya'?'selected':'' }}>Lainnya</option>
                </select>
            </div>
            <div class="form-group">
                <label for="no_telp">No Telpon/WA</label>
                <input type="text" name="no_telp" class="form-control" value="{{ old('no_telp') }}" inputmode="numeric" pattern="\d+" maxlength="15">
            </div>
            <div class="form-group">
                <label for="jumlah_saudara">Jumlah Saudara</label>
                <select name="jumlah_saudara" class="form-control">
                    <option value="">-- Pilih --</option>
                    @for($i=1;$i<=10;$i++)
                        <option value="{{$i}}" {{ old('jumlah_saudara')==$i?'selected':'' }}>{{$i}}</option>
                    @endfor
                </select>
            </div>
            <div class="form-group">
                <label for="no_kk">Nomor Kartu Keluarga</label>
                <input type="text" name="no_kk" class="form-control" value="{{ old('no_kk') }}" inputmode="numeric" pattern="\d{16}" maxlength="16">
            </div>
            <div class="form-group">
                <label for="nama_ayah">Nama Ayah</label>
                <input type="text" name="nama_ayah" class="form-control" value="{{ old('nama_ayah') }}">
            </div>
            <div class="form-group">
                <label for="nik_ayah">NIK Ayah</label>
                <input type="text" name="nik_ayah" class="form-control @error('nik_ayah') is-invalid @enderror" value="{{ old('nik_ayah') }}" inputmode="numeric" pattern="\d{16}" maxlength="16">
                @error('nik_ayah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="pendidikan_ayah">Pendidikan Ayah</label>
                <select name="pendidikan_ayah" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Tidak Sekolah" {{ old('pendidikan_ayah')=='Tidak Sekolah'?'selected':'' }}>Tidak Sekolah</option>
                    <option value="Tamat SD/MI" {{ old('pendidikan_ayah')=='Tamat SD/MI'?'selected':'' }}>Tamat SD/MI</option>
                    <option value="Tamat SMP/MTs." {{ old('pendidikan_ayah')=='Tamat SMP/MTs.'?'selected':'' }}>Tamat SMP/MTs.</option>
                    <option value="Tamat SMA/SMK/MA" {{ old('pendidikan_ayah')=='Tamat SMA/SMK/MA'?'selected':'' }}>Tamat SMA/SMK/MA</option>
                    <option value="Diploma" {{ old('pendidikan_ayah')=='Diploma'?'selected':'' }}>Diploma</option>
                    <option value="S1/S2" {{ old('pendidikan_ayah')=='S1/S2'?'selected':'' }}>S1/S2</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                <input type="text" name="pekerjaan_ayah" class="form-control" value="{{ old('pekerjaan_ayah') }}">
            </div>
            <div class="form-group">
                <label for="nama_ibu">Nama Ibu</label>
                <input type="text" name="nama_ibu" class="form-control" value="{{ old('nama_ibu') }}">
            </div>
            <div class="form-group">
                <label for="nik_ibu">NIK Ibu</label>
                <input type="text" name="nik_ibu" class="form-control @error('nik_ibu') is-invalid @enderror" value="{{ old('nik_ibu') }}" inputmode="numeric" pattern="\d{16}" maxlength="16">
                @error('nik_ibu')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="pendidikan_ibu">Pendidikan Ibu</label>
                <select name="pendidikan_ibu" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Tidak Sekolah" {{ old('pendidikan_ibu')=='Tidak Sekolah'?'selected':'' }}>Tidak Sekolah</option>
                    <option value="Tamat SD/MI" {{ old('pendidikan_ibu')=='Tamat SD/MI'?'selected':'' }}>Tamat SD/MI</option>
                    <option value="Tamat SMP/MTs." {{ old('pendidikan_ibu')=='Tamat SMP/MTs.'?'selected':'' }}>Tamat SMP/MTs.</option>
                    <option value="Tamat SMA/SMK/MA" {{ old('pendidikan_ibu')=='Tamat SMA/SMK/MA'?'selected':'' }}>Tamat SMA/SMK/MA</option>
                    <option value="Diploma" {{ old('pendidikan_ibu')=='Diploma'?'selected':'' }}>Diploma</option>
                    <option value="S1/S2" {{ old('pendidikan_ibu')=='S1/S2'?'selected':'' }}>S1/S2</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                <input type="text" name="pekerjaan_ibu" class="form-control" value="{{ old('pekerjaan_ibu') }}">
            </div>
            <div class="form-group">
                <label for="alamat_ortu">Alamat Lengkap Orangtua</label>
                <textarea name="alamat_ortu" class="form-control" rows="2">{{ old('alamat_ortu') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Kirim Pendaftaran</button>
        </form>
    </div>
</div>

@endsection
