@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">


    <h1 class="h3 mb-2 text-gray-800">Data Pendaftaran PPDB</h1>
    <p class="mb-4">Berikut adalah data pendaftaran PPDB yang telah masuk.</p>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Pendaftar PPDB</h6>
            <div class="dropdown no-arrow">
                <a href="{{ route('admin.ppdb.export') }}" class="btn btn-sm btn-success shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i> Export Excel
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>NISN</th>
                            <th>NIK</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat Lengkap</th>
                            <th>Tinggal Bersama</th>
                            <th>No Telp/WA</th>
                            <th>Jumlah Saudara</th>
                            <th>No KK</th>
                            <th>Nama Ayah</th>
                            <th>NIK Ayah</th>
                            <th>Pendidikan Ayah</th>
                            <th>Pekerjaan Ayah</th>
                            <th>Nama Ibu</th>
                            <th>NIK Ibu</th>
                            <th>Pendidikan Ibu</th>
                            <th>Pekerjaan Ibu</th>
                            <th>Alamat Orangtua</th>
                            <th>Asal Sekolah</th>
                            <th>Tanggal Daftar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($ppdbs as $key => $ppdb)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $ppdb->nama_lengkap }}</td>
                            <td>{{ $ppdb->nisn }}</td>
                            <td>{{ $ppdb->nik }}</td>
                            <td>{{ $ppdb->jenis_kelamin }}</td>
                            <td>{{ $ppdb->tempat_lahir }}</td>
                            <td>{{ $ppdb->tanggal_lahir }}</td>
                            <td>{{ $ppdb->alamat_lengkap }}</td>
                            <td>{{ $ppdb->tinggal_bersama }}</td>
                            <td>{{ $ppdb->no_telp }}</td>
                            <td>{{ $ppdb->jumlah_saudara }}</td>
                            <td>{{ $ppdb->no_kk }}</td>
                            <td>{{ $ppdb->nama_ayah }}</td>
                            <td>{{ $ppdb->nik_ayah }}</td>
                            <td>{{ $ppdb->pendidikan_ayah }}</td>
                            <td>{{ $ppdb->pekerjaan_ayah }}</td>
                            <td>{{ $ppdb->nama_ibu }}</td>
                            <td>{{ $ppdb->nik_ibu }}</td>
                            <td>{{ $ppdb->pendidikan_ibu }}</td>
                            <td>{{ $ppdb->pekerjaan_ibu }}</td>
                            <td>{{ $ppdb->alamat_ortu }}</td>
                            <td>{{ $ppdb->asal_sekolah }}</td>
                            <td>{{ $ppdb->created_at->format('d-m-Y H:i') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="23" class="text-center">Tidak ada data pendaftar</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $ppdbs->links() }}
            </div>
        </div>
    </div>

</div>

@endsection 