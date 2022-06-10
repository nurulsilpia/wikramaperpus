@extends('admin.layouts.main')
@section('content')

<section class="section">
  <div class="section-header d-block">
    <div class="border-bottom mb-3">
      <h1 class="h2 mb-2">Create Data</h1>
    </div>

    <form action="/admin/sirkulasi" method="POST" class="mb-5 col-lg-10">
                @csrf
                <div class="mb-3">
                    <label for="user" class="form-label">Nama Peminjam</label>
                    <select class="form-control" name="user_id" aria-label="Default select example">
                        <option selected disabled>--Pilih Peminjam--</option>
                        @foreach ($users->skip(1) as $user)
                            @if (old('user_id') == $user->id)
                                <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                            @else
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                 <div class="mb-3">
                    <label for="kode_item" class="form-label">Kode Item</label>
                    <input type="text" class="form-control @error('kode_item') is-invalid @enderror" id="kode_item" name="kode_item" required value="{{ old('kode_item') }}">
                    @error('kode_item')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror 
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Buku</label>
                    <select class="form-control selectpicker" name="book_id" aria-label="Default select example" data-live-search="true">
                        <option selected disabled>--Pilih Buku--</option>
                        @foreach ($books as $book)
                            @if (old('book_id') == $book->id)
                                <option value="{{ $book->id }}" selected>{{ $book->judul }} || {{ $book->pengarang }}</option>
                            @else
                                <option value="{{ $book->id }}">{{ $book->judul }} || {{ $book->pengarang }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <select class="form-control" name="keterangan" class="keterangan" aria-label="Default select example" required>
                        <option selected disabled>--Pilih keterangan--</option>
                        <option value="Pinjam">Pinjam</option>
                        <option value="Kembali">Kembali</option>
                        <option value="Hilang">Hilang</option>
                        <option value="Diganti">Diganti</option>
                        <option value="Rusak">Rusak</option>
                    </select>
                    @error('keterangan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror 
                </div>
                <div class="mb-3">
                    <label for="kode_pinjam" class="form-label">Kode Pinjam</label>
                    <input type="text" class="form-control @error('kode_pinjam') is-invalid @enderror" id="kode_pinjam" name="kode_pinjam" required readonly value="{{ old('kode_pinjam', $kode) }}">
                    @error('kode_pinjam')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror 
                </div>
                <div class="row">
                <div class="mb-3 col-sm-5">
                    <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
                    <input type="date" class="form-control @error('tanggal_pinjam') is-invalid @enderror" id="tanggal_pinjam" name="tanggal_pinjam" required value="<?= date('Y-m-d'); ?>">
                    @error('tanggal_pinjam')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                    <div class="mb-3 col-sm-5">
                    <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
                    <input type="date" class="form-control @error('tanggal_kembali') is-invalid @enderror" id="tanggal_kembali" name="tanggal_kembali" required value="{{ old('tanggal_kembali') }}">
                    @error('tanggal_kembali')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>                    
                </div><br> 
                <button type="submit" class="btn btn-primary mt-3">Create Data</button>
    </form>
            
  </div>
</section>

@endsection