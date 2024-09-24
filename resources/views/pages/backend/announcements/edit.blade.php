@extends('layouts.backend.main')

@section('content')
<div class="container mt-3">
    <h1>Edit Pengumuman</h1>
    <div class="row mb-3">
        <a href="{{ route('announcements.index') }}" class="btn btn-sm btn-secondary col-md-1">Kembali</a>
        <a href="https://filemanager.layananberhentikuliah.com/files" target="_blank" class="btn btn-sm btn-success mx-3 col-md-1">Upload Gambar</a>
    </div>
    <form action="{{ route('announcements.update', $announcement->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $announcement->title }}" required>
            </div>
            <div class="col-md-6">
                <label for="category" class="form-label">Kategori</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="Berita" {{ $announcement->category == 'Berita' ? 'selected' : '' }}>Berita</option>
                    <option value="Pengumuman" {{ $announcement->category == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                    <option value="Aktifitas" {{ $announcement->category == 'Aktifitas' ? 'selected' : '' }}>Aktifitas</option>
                    <option value="Program" {{ $announcement->category == 'Program' ? 'selected' : '' }}>Program</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="image" class="form-label">URL Gambar</label>
                <input type="url" class="form-control" id="image" name="image" value="{{ $announcement->image }}" placeholder="https://example.com/image.jpg">
                @if($announcement->image)
                    <a class="btn btn-sm btn-primary mt-2" href="{{ $announcement->image }}" target="_blank">Gambar Saat Ini</a>
                @endif
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="content" class="form-label">Konten</label>
                <textarea id="editor" class="form-control" id="content" name="content">{{ $announcement->content }}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@endsection