@extends('admin.layouts.main')
@section('content')
<section class="section">
    <div class="section-header d-block">
        <div class="border-bottom mb-3">
            <h1 class="h2 mb-2">Data Siswa</h1>
        </div>

        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success')}}
        </div>
        @endif

        @if(session()->has('delete'))
        <div class="alert alert-danger" role="alert">
            {{ session('delete')}}
        </div>
        @endif
        
        <div class="table-responsive">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#create">
                Add New Student
            </button>

            <table class="table table-striped table-sm" id="tableAll">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nis</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Rombel</th>
                    <th scope="col">Rayon</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $siswas as $siswa)
                  <tr>
                      <td> {{ $loop->iteration }} </td>
                      <td> {{ $siswa->nis }} </td>
                      <td> {{ $siswa->nama }} </td>
                      <td> {{ $siswa->rombel }} </td>
                      <td> {{ $siswa->rayon }} </td>
                      <td class="text-center">
                        <a href="/admin/siswa/{{ $siswa->id }}/edit" class="badge bg-warning text-white"><i class="bi bi-pencil-square"></i></a>
                        <form action="/admin/siswa/{{ $siswa->id }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="badge bg-danger border-0 text-white" onclick="return confirm('Are you sure?')"><i class="bi bi-trash-fill"></i></button>
                        </form>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</section>

<!-- Modal Create-->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create New Student</h5>
        </div>
        <div class="modal-body">
          <form action="/admin/siswa" method="POST">
            @csrf
            <div class="mb-3">
              <label for="nis" class="form-label">NIS</label>
              <input type="number" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" required autofocus value="{{ old('nis') }}">
              @error('nis')
                <div class="invalid-feedback">
                  {{ $message }}
                 </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama') }}">
                @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                   </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="rombel" class="form-label">rombel</label>
                <input type="text" class="form-control @error('rombel') is-invalid @enderror" id="rombel" name="rombel" required value="{{ old('rombel') }}">
                @error('rombel')
                  <div class="invalid-feedback">
                    {{ $message }}
                   </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="rayon" class="form-label">rayon</label>
                <input type="text" class="form-control @error('rayon') is-invalid @enderror" id="rayon" name="rayon" required value="{{ old('rayon') }}">
                @error('rayon')
                  <div class="invalid-feedback">
                    {{ $message }}
                   </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Add Student</button>
            <button type="button" class="btn btn-secondary text-dark mx-3" data-bs-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
</div>

@endsection