@extends('admin.layouts.main')
@section('content')

<section class="section">
  <div class="section-header d-block">
    <div class="border-bottom mb-3">
      <h1 class="h2 mb-2">Edit Data</h1>
    </div>

    <form action="/admin/sirkulasi/{{ $sirkulasi->id }}" method="POST" class="mb-5 col-lg-10">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="siswa" class="form-label">Nama Siswa</label>
                    <select class="form-select" name="siswa_id" aria-label="Default select example">
                        @foreach ($siswas as $siswa)
                            @if (old('siswa_id', $sirkulasi->siswa_id) == $siswa->id)
                                <option value="{{ $siswa->id }}" selected>{{ $siswa->nis }} || {{ $siswa->nama }}</option>
                            @else
                                <option value="{{ $siswa->id }}">{{ $siswa->nis }} || {{ $siswa->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                 <div class="mb-3">
                    <label for="kode_item" class="form-label">Kode Item</label>
                    <input type="text" class="form-control @error('kode_item') is-invalid @enderror" id="kode_item" name="kode_item" required value="{{ old('kode_item', $sirkulasi->kode_item) }}">
                    @error('kode_item')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror 
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Buku</label>
                    <select class="selectpicker" name="book_id" aria-label="Default select example" data-live-search="true">
                        @foreach ($books as $book)
                            @if (old('book_id', $sirkulasi->book_id) == $book->id)
                                <option value="{{ $book->id }}" selected>{{ $book->judul }} || {{ $book->pengarang }}</option>
                            @else
                                <option value="{{ $book->id }}">{{ $book->judul }} || {{ $book->pengarang }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" required value="{{ old('keterangan', $sirkulasi->keterangan) }}">
                    @error('keterangan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror 
                </div>
                <div class="mb-3">
                    <label for="kode_pinjam" class="form-label">Kode Pinjam</label>
                    <input type="text" class="form-control @error('kode_pinjam') is-invalid @enderror" id="kode_pinjam" name="kode_pinjam" required value="{{ old('kode_pinjam', $sirkulasi->kode_pinjam) }}">
                    @error('kode_pinjam')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror 
                </div>
                <div class="row">
                <div class="mb-3 col-sm-5">
                    <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
                    <input type="date" class="form-control @error('tanggal_pinjam') is-invalid @enderror" id="tanggal_pinjam" name="tanggal_pinjam" required autofocus value="{{ old('tanggal_pinjam', $sirkulasi->tanggal_pinjam) }}">
                    @error('tanggal_pinjam')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                    <div class="mb-3 col-sm-5">
                    <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
                    <input type="date" class="form-control @error('tanggal_kembali') is-invalid @enderror" id="tanggal_kembali" name="tanggal_kembali" required autofocus value="{{ old('tanggal_kembali', $sirkulasi->tanggal_kembali) }}">
                    @error('tanggal_kembali')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>                    
                </div><br> 
                <button type="submit" class="btn btn-primary mt-3">Update Data</button>
    </form>
            
  </div>
</section>

@endsection