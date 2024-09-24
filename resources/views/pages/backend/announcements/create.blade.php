@extends('layouts.backend.main')

@section('content')
<div class="container mt-3">
    <h1>Buat Pengumuman</h1>
    <div class="row mb-3">
        <a href="{{ route('announcements.index') }}" class="btn btn-sm btn-secondary mx-3 col-md-1">Kembali</a>
        <a href="https://filemanager.layananberhentikuliah.com/files" target="_blank" class="btn btn-sm btn-success mx-3 col-md-1">Upload Gambar</a>
    </div>
    <form action="{{ route('announcements.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="col-md-6">
                <label for="category" class="form-label">Kategori</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="Berita">Berita</option>
                    <option value="Pengumuman">Pengumuman</option>
                    <option value="Aktifitas">Aktifitas</option>
                    <option value="Program">Program</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="image" class="form-label">URL Gambar</label>
                <input type="url" class="form-control" id="image" name="image" placeholder="https://example.com/image.jpg">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="content" class="form-label">Konten</label>
                <textarea type="text" class="form-control" id="editor" name="content"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Buat</button>
    </form>
</div>
@endsection