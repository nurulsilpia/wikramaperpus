@extends('admin.layouts.main')
@section('content')

<section class="section">
  <div class="section-header d-block">
    <div class="border-bottom mb-3">
      <h1 class="h2 mb-2">Sirkulasi Buku</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success')}}
      </div>
    @endif

    @if(session()->has('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('delete')}}
    </div>
    @endif

    <div class="table-responsive">
      <a href="/admin/sirkulasi/create" class="btn btn-primary mb-3">Add Data</a>
        <table class="table table-striped table-sm" id="tableAll">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Peminjam</th>
              <th scope="col">Kode Item</th>
              <th scope="col">Judul</th>
              <th scope="col">Kode Pinjam</th>
              <th scope="col">Tanggal Pinjam</th>
              <th scope="col">Tanggal Kembali</th>
              <th scope="col">Lama Peminjaman</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Ketelatan</th>
              <th scope="col">Denda</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $sirkulasis as $sirkulasi)
            <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{ $sirkulasi->user->name }}</td>
                <td> {{ $sirkulasi->kode_item }}</td>
                <td> {{ $sirkulasi->book->judul }}</td>
                <td> {{ $sirkulasi->kode_pinjam }}</td>
                <td> {{ $sirkulasi->tanggal_pinjam }}</td>
                <td> {{ $sirkulasi->tanggal_kembali }}</td>
                <td>
                  {{-- ini lama peminjaman --}}
                  <?php
                    $pinjam = new DateTime($sirkulasi->tanggal_pinjam);
                    $kembali = new DateTime($sirkulasi->tanggal_kembali);
                    $interval = $pinjam->diff($kembali)->format('%a days');
                    echo $interval;
                  ?>
                </td>
                <td> {{ $sirkulasi->keterangan }}</td>
                <td>
                  {{-- ini ketelatan --}}
                  <?php
                    $pinjam = new DateTime($sirkulasi->tanggal_pinjam);
                    $kembali = new DateTime($sirkulasi->tanggal_kembali);
                    $interval = $pinjam->diff($kembali);
                    
                    $today = new DateTime("now");
                    $lengt = $today->diff($kembali)->format('%R%a days');
                    
                    echo $lengt;
                  ?>
                </td>
                <td>
                  {{-- ini denda --}}
                  <?php
                    $pinjam = new DateTime($sirkulasi->tanggal_pinjam);
                    $kembali = new DateTime($sirkulasi->tanggal_kembali);
                    $interval = $pinjam->diff($kembali);
                    
                    $today = new DateTime("now");
                    $lengt = $today->diff($kembali)->format('%a');
                    
                    echo 'Rp ' . $lengt * 500;
                  ?>
                </td>
                <td class="text-center">
                  <div class="btn-group dropstart">
                    <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      {{-- <i class="bi bi-three-dots-vertical"></i> --}}
                    </button>
                    <ul class="dropdown-menu px-3">
                      <li class="mb-1 text-center"><a class="dropdown-item btn btn-warning text-white" href="/admin/sirkulasi/{{ $sirkulasi->id }}/edit"><i class="bi bi-pencil-square"></i> Edit Data</a></li>
                      <li class="text-center">
                        <form action="/admin/sirkulasi/{{ $sirkulasi->id }}" method="post" class="d-inline">
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