@extends('layouts.main')
@section('content')

<section class="section">
  <div class="section-header d-block">
    <div class="border-bottom mb-3">
      <h1 class="h2 mb-2">Data Buku</h1>
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
      <a href="/admin/books/create" class="btn btn-primary mb-3">Add New Book</a>
        <table class="table table-striped table-sm" id="tableAll">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kategori</th>
              <th scope="col">Judul</th>
              <th scope="col">Pengarang</th>
              <th scope="col">Penerbit</th>
              <th scope="col">Tahun Terbit</th>
              <th scope="col">ISBN</th>
              <th scope="col">Lokasi</th>
              <th scope="col" colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $books as $book)
            <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{ $book->category->name }}</td> 
                <td> {{ $book->judul }}</td>
                <td> {{ $book->pengarang }}</td>
                <td> {{ $book->penerbit }}</td>
                <td> {{ $book->tahun_terbit }}</td>
                <td> {{ $book->isbn }}</td>
                <td> {{ $book->lokasi }}</td>
                <td>
                  <a href="/admin/books/{{ $book->judul }}" class="badge bg-info text-white"><i class="bi bi-eye"></i></span></a>
                  <a href="/admin/books/{{ $book->judul }}/edit" class="badge bg-warning text-white"><i class="bi bi-pencil-square"></i></a>
                  <form action="/admin/books/{{ $book->judul }}" method="post" class="d-inline">
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


@endsection