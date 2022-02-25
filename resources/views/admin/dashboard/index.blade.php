@extends('admin.layouts.main')
@section('content')

<section class="section">
  <div class="section-header d-block">
    <div class="border-bottom mb-3">
      <h1 class="h2 mb-2">Post Main Books</h1>
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


    <div class="table-responsive col-lg-10">
      <a href="/admin/dashboard/create" class="btn btn-primary mb-0">Create new post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Judul</th>
              <th scope="col">Pengarang</th>
              <th scope="col">Penerbit</th>
              <th scope="col" colspan="2">Action</th>
            </tr>
          </thead>
        @foreach( $books as $book)
                <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{ $book->judul }}</td>
                <td> {{ $book->pengarang }}</td>
                <td> {{ $book->penerbit }}</td>
                <td>
                <a href="/admin/dashboard" class="badge bg-warning text-white"><i class="bi bi-pencil-square"></i></a>
                      {{-- <button type="button" class="badge bg-warning border-0 text-white" data-bs-toggle="modal" data-bs-target="#updateModal">
                        <i class="bi bi-pencil-square"></i>
                      </button> --}}

                      <form action="/admin/dashboard/{{ $book->books }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0 text-white" onclick="return confirm('Are you sure?')"><i class="bi bi-trash-fill"></i></button>
                      </form>
                      </td>
                </tr>
                
           @endforeach
  </div> 
</section>
@endsection