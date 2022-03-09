@extends('layouts.main')
@section('content')
<section class="section">
    <div class="section-header">
    <div class="banner bg-white mb-5 px-3 py-3">
        <h5 class="banner bg-primary rounded text-white mb-4 px-5 py-3 ">Informasi Data Sirkulasi Siswa</h5>
        <div class="row mb-5">
            <div class="col md-2 sm-5 ml-2">Nama :</div>
            <div class="col md-2 sm-5 ml-2">NIS :</div>
        </div>
        <table class="table table-sm table-striped" id="tableAll">
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
        </table>    
    </div>
    </div>
</section>
@endsection