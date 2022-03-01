@extends('layouts.main')
@section('content')

<section class="section">
  <div class="section-header d-block">
    <div class="border-bottom mb-3">
      <h1 class="h2 mb-2">Kategori Buku</h1>
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

    <div class="table-responsive col-lg-5">
      {{-- <a href="/admin/category-books/create" class="btn btn-primary mb-3">Create new Category</a> --}}

      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
        Create new Category
      </button>

        <table class="table table-striped table-sm" id="tableAll">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kategori</th>
              <th scope="col" colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $categoryBooks as $categoryBook )
            <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{ $categoryBook->name}}</td>
                <td>
                  <a href="/admin/category-books/{{ $categoryBook->id }}/edit" class="badge bg-warning text-white"><i class="bi bi-pencil-square"></i></a>
                      <form action="/admin/category-books/{{ $categoryBook->id }}" method="post" class="d-inline">
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
        <h5 class="modal-title" id="exampleModalLabel">Create New Category</h5>
      </div>
      <div class="modal-body">
        <form action="/admin/category-books" method="POST">
          @csrf
          <div class="">
            <label for="name" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
               </div>
            @enderror
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Create Category</button>
          <button type="button" class="btn btn-secondary text-dark mx-3" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection