@extends('admin.layouts.main')
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
              <th scope="col">Jenis</th>
              <th scope="col">Kategori</th>
              <th scope="col">Judul</th>
              <th scope="col">Pengarang</th>
              <th scope="col">Penerbit</th>
              <th scope="col">Tahun Terbit</th>
              <th scope="col">ISBN</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $books as $book)
            <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{ $book->jenis->jenis }}</td>
                <td> {{ $book->category->name }}</td>
                <td> {{ $book->judul }}</td>
                <td> {{ $book->pengarang }}</td>
                <td> {{ $book->penerbit }}</td>
                <td> {{ $book->tahun_terbit }}</td>
                <td> {{ $book->isbn }}</td>
                <td> {{ $book->lokasi }}</td>
                <td class="text-center">
                  <div class="btn-group dropstart">
                    <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      {{-- <i class="bi bi-three-dots-vertical"></i> --}}
                    </button>
                    <ul class="dropdown-menu px-3">
                      <li class="mb-1 text-center"><a class="dropdown-item btn btn-info text-white" href="/admin/books/{{ $book->judul }}"><i class="bi bi-eye"></i> Show Data</a></li>
                      <li class="mb-1 text-center"><a class="dropdown-item btn btn-warning text-white" href="/admin/books/{{ $book->judul }}/edit"><i class="bi bi-pencil-square"></i> Edit Data</a></li>
                      <li class="text-center">
                        <form action="/admin/books/{{ $book->judul }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button style="width: 100%;" class="btn btn-danger border-0 text-white" onclick="return confirm('Are you sure?')"><i class="bi bi-trash-fill"></i> Delete Data</button>
                        </form>
                      </li>
                    </ul>
                  </div>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
</section>
@endsection