@extends('layoutes.main')

@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" 
     style="background-image: url('assets/images/bg_1.jpg'); background-size: cover; background-position: center; min-height: 300px; display: flex; align-items: flex-end; padding-bottom: 30px;">
    <div class="container">
        <div class="row align-items-end text-left">
            <div class="col-lg-7">
                <h2 class="mb-0">Feedback</h2>
                <p>Silakan isi pesan pada formulir di bawah ini.</p>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">

        {{-- ALERT SUKSES --}}
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        {{-- ALERT GAGAL VALIDASI --}}
        @if($errors->any())
            <div class="alert alert-danger mt-3">
                <strong>Terjadi kesalahan:</strong>
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- FORM FEEDBACK --}}
        <form action="{{ route('feedback.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="fname">Nama Depan</label>
                    <input type="text" id="fname" name="fname" value="{{ old('fname') }}" 
                        class="form-control form-control-lg @error('fname') is-invalid @enderror">
                    @error('fname')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6 form-group">
                    <label for="lname">Nama Belakang</label>
                    <input type="text" id="lname" name="lname" value="{{ old('lname') }}" 
                        class="form-control form-control-lg @error('lname') is-invalid @enderror">
                    @error('lname')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="eaddress">Alamat Email</label>
                    <input type="text" id="eaddress" name="eaddress" value="{{ old('eaddress') }}" 
                        class="form-control form-control-lg @error('eaddress') is-invalid @enderror">
                    @error('eaddress')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6 form-group">
                    <label for="tel">Nomor Telepon</label>
                    <input type="text" id="tel" name="tel" value="{{ old('tel') }}" 
                        class="form-control form-control-lg @error('tel') is-invalid @enderror">
                    @error('tel')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="message">Pesan</label>
                    <textarea id="message" name="message" cols="30" rows="10" 
                        class="form-control @error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                    @error('message')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Kirim Pesan" class="btn btn-primary btn-lg px-5">
                </div>
            </div>
        </form>

    </div>
</div>

@endsection
