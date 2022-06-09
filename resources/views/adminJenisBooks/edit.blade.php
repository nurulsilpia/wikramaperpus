@extends('admin.layouts.main')
@section('content')
<section class="section">
    <div class="section-header d-block">
        <div class="border-bottom mb-3">
            <h1 class="h2">Edit Category Book</h1>
        </div>
        
        <div class="col-lg-6">
            <form action="/admin/jenis-books/{{ $jenisBook->id }}" method="post">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="codeJenis" class="form-label">Kode Jenis Buku</label>
                    <input type="text" class="form-control @error('codeJenis') is-invalid @enderror" id="codeJenis" name="codeJenis" required autofocus value="{{ old('codeJenis', $jenisBook->codeJenis) }}">
                    @error('codeJenis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jenis" class="form-label">Jenis Buku</label>
                    <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" required autofocus value="{{ old('jenis', $jenisBook->jenis) }}">
                    @error('jenis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update Jenis</button>
            </form>
        </div>
    </div>
</section>

@endsection