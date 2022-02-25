@extends('admin.layouts.main')
@section('content')

<section class="section">
  <div class="section-header d-block">
    <div class="border-bottom mb-3">
      <h1 class="h2 mb-2">Create Post</h1>
    </div>

    <form action="/admin/books/{{ $book->id }}" method="POST" class="mb-5 col-lg-10" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                <label for="judul" class="form-label">Title</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" required autofocus value="{{ old('judul', $book->judul)) }}">
                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="pengarang" class="form-label">Author</label>
                    <input type="text" class="form-control @error('pengarang') is-invalid @enderror" id="pengarang" name="pengarang" required value="{{ old('pengarang', $book->pengarang) }}">
                    @error('pengarang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror 
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Publisher</label>
                    <input type="text" class="form-control @error('penerbit') is-invalid @enderror" id="penerbit" name="penerbit" required value="{{ old('penerbit', $book->penerbit) }}">
                    @error('penerbit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror 
                </div>
                <div class="mb-3">
                <label for="tahun_terbit" class="form-label">Tahun terbit</label>
                <input type="text" class="form-control @error('tahun_terbit') is-invalid @enderror" id="tahun_terbit" name="tahun_terbit" required autofocus value="{{ old('tahun_terbit', $book->tahun_terbit) }}">
                @error('tahun_terbit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="row">
                <div class="mb-3 col-sm-5">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn" name="isbn" required autofocus value="{{ old('isbn', $book->isbn) }}">
                @error('isbn')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="mb-3 col-sm-5">
                <label for="jumlah_buku" class="form-label">Jumlah Buku</label>
                <input type="text" class="form-control @error('jumlah_buku') is-invalid @enderror" id="jumlah_buku" name="jumlah_buku" required autofocus value="{{ old('jumlah_buku', $book->jumlah_buku) }}">
                @error('jumlah_buku')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                </div>
                <div class="row">
                <div class="mb-3 col-sm-5">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" required autofocus value="{{ old('lokasi', $book->lokasi) }}">
                @error('lokasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="mb-3 col-sm-5">
                <label for="tanggal_input" class="form-label">Tanggal Input</label>
                <input type="date" class="form-control @error('tanggal_input') is-invalid @enderror" id="tanggal_input" name="tanggal_input" required autofocus value="{{ old('tanggal_input', $book->tanggal_input) }}">
                @error('tanggal_input')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Post image</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror 
                </div>
                </div><br>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
            
        </div>
</section>
@endsection