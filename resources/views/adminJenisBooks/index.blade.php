@extends('admin.layouts.main')
@section('content')

<section class="section">
  <div class="section-header d-block">
    <div class="border-bottom mb-3">
      <h1 class="h2 mb-2">Jenis Buku</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success col-lg-5" role="alert">
        {{ session('success')}}
    </div>
    @endif

    @if(session()->has('delete'))
    <div class="alert alert-danger col-lg-5" role="alert">
        {{ session('delete')}}
    </div>
    @endif

    <div class="table-responsive col-lg-5">
      <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#create">
        Tambah Jenis Buku
      </button>

        <table class="table table-striped table-sm" id="tableAll">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kode Jenis</th>
              <th scope="col">Jenis</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $jenises as $jenis )
            <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{ $jenis->codeJenis}}</td>
                <td> {{ $jenis->jenis}} </td>
                <td>
                  <a href="/admin/jenis-books/{{ $jenis->id }}/edit" class="badge bg-warning text-white"><i class="bi bi-pencil-square"></i></a>
                      <form action="/admin/jenis-books/{{ $jenis->id }}" method="post" class="d-inline">
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis Buku</h5>
      </div>
      <div class="modal-body">
        <form action="/admin/jenis-books" method="POST">
          @csrf
          <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Buku</label>
            <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" required autofocus value="{{ old('jenis') }}">
            @error('jenis')
              <div class="invalid-feedback">
                {{ $message }}
               </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="codeJenis" class="form-label">Kode Jenis Buku</label>
            <input type="text" class="form-control @error('codeJenis') is-invalid @enderror" id="codeJenis" name="codeJenis" required autofocus value="{{ old('codeJenis') }}">
            @error('codeJenis')
              <div class="invalid-feedback">
                {{ $message }}
               </div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Create jenis</button>
          <button type="button" class="btn btn-dark text-white mx-3" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection