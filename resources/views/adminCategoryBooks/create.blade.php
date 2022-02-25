@extends('layouts.main')
@section('content')

<section class="section">
  <div class="section-header d-block">
    <div class="border-bottom mb-3">
      <h1 class="h2 mb-2">Create Post</h1>
    </div>

    <form action="/admin/category-books" method="POST" class="mb-5 col-lg-10" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Nama Kategori</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
        @error('name')
          <div class="invalid-feedback">
            {{ $message }}
           </div>
        @enderror
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Create category</button>
    </form>
  </div>
</section>
@endsection