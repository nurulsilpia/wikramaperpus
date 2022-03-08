@extends('admin.layouts.main')
@section('content')
<section class="section">
    <div class="section-header d-block">
      <div class="border-bottom mb-3">
        <h1 class="h2 mb-2">Edit Student {{ $siswa->nama }}</h1>
      </div>

      <form action="/admin/siswa/{{ $siswa->id }}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="nis" class="form-label">NIS</label>
          <input type="number" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" required autofocus value="{{ old('nis', $siswa->nis) }}">
          @error('nis')
            <div class="invalid-feedback">
              {{ $message }}
             </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama', $siswa->nama) }}">
            @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
               </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="rombel" class="form-label">rombel</label>
            <input type="text" class="form-control @error('rombel') is-invalid @enderror" id="rombel" name="rombel" required value="{{ old('rombel', $siswa->rombel) }}">
            @error('rombel')
              <div class="invalid-feedback">
                {{ $message }}
               </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="rayon" class="form-label">rayon</label>
            <input type="text" class="form-control @error('rayon') is-invalid @enderror" id="rayon" name="rayon" required value="{{ old('rayon', $siswa->rayon) }}">
            @error('rayon')
              <div class="invalid-feedback">
                {{ $message }}
               </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Student</button>
      </form>
    </div>
</section>
@endsection