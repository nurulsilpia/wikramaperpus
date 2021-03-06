@extends('layouts.main')
@section('content')

<section class="section">
    <div class="section-header">
    <div class="banner bg-white mb-5 px-4 py-3">
        <h5 class="banner bg-light rounded text-dark mb-3 px-2 py-2 "><marquee>Selamat Membaca</marquee></h5>
        <div class="row mb-5">
            <div class="col md-2 sm-5 "><div class="card mt-2 bg-light" style="width: 700px;">
            <div class="row g-0">
            <div class="col-md-4">
                 {{-- <img src="assets/img/cover.jpg" class="img-fluid rounded-start" alt="..."> --}}
                 @if ($data->image)
                    <div style="max-height: 300px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->judul }}" class="card-img-top img-fluid rounded" style="height: 300px; object-fit: fill;">
                    </div>
                @else
                    <img src="/assets/img/cover.png" alt="{{ $data->judul }}" class="card-img-top img-fluid rounded" style="height: 300px; object-fit: fill;">
                @endif
            </div>
            <div class="col-md-8 ">
             <div class="card-body">
             <h5 class="card-title text-dark">{{ $data->judul }}</h5>
                <p class="card-text mb-3"><small class="text-muted">by {{ $data->pengarang }}</small></p>
                {{-- <p class="card-text" style="width: 40ch;
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;">{{ $data->isi }}</p> --}}
             </div>
            </div>
            </div>
        </div></div>

            <div class="col md-4 sm-6 ml-2 mt-2">
             <div class="card bg-light" style="width: 20rem;">
                <div class="card-body">
                 <h5 class="card-title mb-3">Keterangan Buku</h5>
                 <table class="mb-5">
                 <tr>
                    <th>Pengarang</th>
                    <td class="px-3">:</td>
                    <td>{{ $data->pengarang }}</td>
                </tr>
                <tr>
                    <th>Penerbit</th>
                    <td class="px-3">:</td>
                    <td>{{ $data->penerbit }}</td>
                </tr>
                <tr>
                    <th>Tahun Terbit</th>
                    <td class="px-3">:</td>
                    <td>{{ $data->tahun_terbit }}</td>
                </tr>
                <tr>
                    <th>ISBN</th>
                    <td class="px-3">:</td>
                    <td>{{ $data->isbn }}</td>
                </tr>
                </table>

                </div>
             </div>
            </div>
        </div>
      <hr>

      <div class="">
        {{-- <p class="">{{ $data->isi }}</p> --}}
        {{-- <iframe src="{{ asset('storage/' . $data->isi) }}" width="100%" height="100%"> --}}
            <object width="100%" height="1000" type="application/pdf" data="{{ asset('storage/' . $data->isi) }}">
                {{-- if the book doesn't have pdf --}}
                <div class="card d-flex align-items-center">
                    <div class="card-body text-center">
                        <i class='bx bxs-message-error bx-tada' style="font-size: 2rem;"></i> Maaf, buku ini adalah buku fisik. Silahkan kunjungi Perpustakaan Wikrama...
                    </div>
                </div>
            </object>
      </div>

</div>
</div>
</section>

@endsection
