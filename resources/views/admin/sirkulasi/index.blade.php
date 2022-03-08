@extends('admin.layouts.main')
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
      <a href="/admin/sirkulasi/create" class="btn btn-primary mb-3">Add Data</a>
        <table class="table table-striped table-sm" id="tableAll">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Siswa</th>
              <th scope="col">Kode Item</th>
              <th scope="col">Judul</th>
              <th scope="col">Kode Pinjam</th>
              <th scope="col">Tanggal Pinjam</th>
              <th scope="col">Tanggal Kembali</th>
              <th scope="col">Lama Peminjaman</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Ketelatan</th>
              <th scope="col">Denda</th>
              <th scope="col" colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $sirkulasis as $sirkulasi)
            <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{ $sirkulasi->siswa->nama }}</td>
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
                  <?php
                    $pinjam = new DateTime($sirkulasi->tanggal_pinjam);
                    $kembali = new DateTime($sirkulasi->tanggal_kembali);
                    $interval = $pinjam->diff($kembali);
                    
                    $today = new DateTime("now");
                    $lengt = $today->diff($kembali)->format('%a');
                    
                    echo 'Rp ' . $lengt * 500;
                  ?>
                </td>
                <td>
                  <a href="/admin/sirkulasi/{{ $sirkulasi->id }}/edit" class="badge bg-warning text-white my-1"><i class="bi bi-pencil-square"></i></a>
                      <form action="/admin/sirkulasi/{{ $sirkulasi->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0 text-white my-1" onclick="return confirm('Are you sure?')"><i class="bi bi-trash-fill"></i></button>
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