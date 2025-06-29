@extends('admin.layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelola Berita</h1>
        <a href="{{ route('admin.berita.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Berita
        </a>
    </div>

    <!-- Alert Messages -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Berita</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="15%">Gambar</th>
                            <th>Judul</th>
                            <th width="10%">Status</th>
                            <th width="15%">Tanggal</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($beritas as $index => $berita)
                        <tr>
                            <td>{{ $index + $beritas->firstItem() }}</td>
                            <td>
                                @if($berita->image)
                                <img src="{{ asset($berita->image) }}" alt="{{ $berita->title }}" class="img-thumbnail" style="max-height: 80px;">
                                @else
                                <span class="text-muted">Tidak ada gambar</span>
                                @endif
                            </td>
                            <td>{{ $berita->title }}</td>
                            <td>
                                @if($berita->status == 'published')
                                <span class="badge badge-success">Dipublikasi</span>
                                @else
                                <span class="badge badge-secondary">Draft</span>
                                @endif
                            </td>
                            <td>{{ $berita->created_at->format('d M Y') }}</td>
                            <td class="text-center d-flex justify-content-center gap-3">
                                <a href="{{ route('admin.berita.edit', $berita->id) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus berita ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Belum ada berita</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="d-flex justify-content-end">
                {{ $beritas->links() }}
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection 