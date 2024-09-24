@extends('layouts.frontend.main')

@section('content')
<div class="container my-5">
    <h2 class="mb-4 text-center">Berita NU</h2>
    <div class="row">
        @foreach ($announcements->where('category', 'Berita') as $announcement)
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <span class="badge bg-primary mb-2 text-end"><a href="{{ route('berita.show', $announcement->id) }}" class="text-white text-decoration-none">Lihat Detail</a></span>
                    <h5 class="card-title text-truncate">{{ $announcement->title }}</h5>
                    <img src="{{ $announcement->image }}" class="img-fluid mb-3 card p-1" alt="Project Image" style="max-height: 200px; object-fit: cover;">
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="text-center mt-4">
        <a href="#" class="btn btn-success btn-lg">Lihat Program Lainnya</a>
    </div>
</div>
@endsection