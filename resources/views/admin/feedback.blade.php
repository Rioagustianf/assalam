@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">


    <h1 class="h3 mb-2 text-gray-800">Data Feedback</h1>
    <p class="mb-4">Berikut adalah data feedback yang telah dikirim oleh pengunjung website.</p>


    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Feedback</h6>
            <div class="dropdown no-arrow">
                <a href="{{ route('admin.feedback.export') }}" class="btn btn-sm btn-success shadow-sm">
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
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>Pesan</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($feedbacks as $key => $feedback)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $feedback->first_name }} {{ $feedback->last_name }}</td>
                            <td>{{ $feedback->email }}</td>
                            <td>{{ $feedback->phone }}</td>
                            <td>{{ Str::limit($feedback->message, 100) }}</td>
                            <td>{{ $feedback->created_at->format('d-m-Y H:i') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data feedback</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $feedbacks->links() }}
            </div>
        </div>
    </div>

</div>

@endsection 