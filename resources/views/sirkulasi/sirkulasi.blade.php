@extends('layouts.main')
@section('content')
<section class="section">
    <div class="section-header">
    <div class="banner bg-white mb-5 px-3 py-3">
        <h5 class="banner bg-primary rounded text-white mb-4 px-5 py-3 ">Informasi Data Sirkulasi Siswa</h5>
        <div class="row mb-5">
            <div class="col md-2 sm-5 ml-2">Nama : {{ Auth::user()->name }}</div>
            <div class="col md-2 sm-5 ml-2">NIS : {{ Auth::user()->username }}</div>
        </div>
        <table class="table table-striped table-sm" id="tableAll">
          <thead class="table-light">
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
            </tr>
          </thead>
          <tbody>
            @foreach (DB::table('sirkulasis')->get() as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ DB::table('users')->where('id', $item->user_id)->first()->name }}</td>
                <td>{{ $item->kode_item }}</td>
                <td>{{ DB::table('books')->where('id', $item->book_id)->first()->judul }}</td>
                <td>{{ $item->kode_pinjam }}</td>
                <td>{{ $item->tanggal_pinjam }}</td>
                <td>{{ $item->tanggal_kembali }}</td>
                @php

                    $date1 = date_create($item->tanggal_pinjam);
                    $date2 = date_create($item->tanggal_kembali);
                    $diff = date_diff($date1,$date2);

                @endphp
                <td>{{ $diff->format("%R%a days")  }}</td>
                <td>{{ $item->keterangan }}</td>
                @php

                    $date3 = new DateTime('now');
                    $date4 = date_create($item->tanggal_kembali);
                    $difff = date_diff($date3,$date4);

                @endphp
                <td>{{ $difff->format("%R%a days")  }}</td>
                <td>
                  {{-- ini denda --}}
                  @php
                    $pinjam = new DateTime($item->tanggal_pinjam);
                    $kembali = new DateTime($item->tanggal_kembali);
                    $interval = $pinjam->diff($kembali);
                    
                    $today = new DateTime("now");
                    $lengt = $today->diff($kembali)->format('%a');
                    
                    echo 'Rp ' . $lengt * 500;
                  @endphp
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
    </div>
</section>
@endsection
