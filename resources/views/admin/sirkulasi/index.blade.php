@extends('layouts.main')
@section('content')

<section class="section">
  <div class="section-header d-block">
    <div class="border-bottom mb-3">
      <h1 class="h2 mb-2">Sirkulasi Buku</h1>
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
      <a href="/admin/sirkulasis/create" class="btn btn-primary mb-3">Add Data</a>
        <table class="table table-striped table-sm" id="tableAll">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kode Item</th>
              <th scope="col">Judul</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Kode Pinjam</th>
              <th scope="col">Tanggal Pinjam</th>
              <th scope="col">Tanggal Kembali</th>
              <th scope="col">Denda</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $sirkulasis as $sirkulasi)
            <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{ $sirkulasi->kode_item }}</td>
                <td> {{ $sirkulasi->judul }}</td>
                <td> {{ $sirkulasi->keterangan }}</td>
                <td> {{ $sirkulasi->kode_pinjam }}</td>
                <td> {{ $sirkulasi->tanggal_pinjam }}</td>
                <td> {{ $sirkulasi->tanggal_kembali }}</td>
                {{-- <td> {{ $sirkulasi->denda }}</td> --}}
                <td>
                  <a href="/admin/sirkulasis/{{ $sirkulasi->id }}" class="badge bg-info text-white"><i class="bi bi-eye"></i></span></a>
                  <a href="/admin/sirkulasis/{{ $sirkulasi->id }}/edit" class="badge bg-warning text-white"><i class="bi bi-pencil-square"></i></a>
                  <form action="/admin/sirkulasis/{{ $sirkulasi->id }}" method="post" class="d-inline">
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