@extends('admin.layouts.main')
@section('content')
<section class="section">
    <div class="section-header d-block">
        <div class="border-bottom mb-3">
            <h1 class="h2 mb-2">Detail buku {{ $book->judul }}</h1>
        </div>
    </div>
    <div class="section-header">
        <div class="row my-3 justify-content-center">
            <div class="px-3">
                <h2 class="mb-4">{{ $book->judul }}</h2>
                <div class="block">
                    <div class="d-flex">
                        <a href="/admin/books" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my books</a>
                        <a href="/admin/books/{{ $book->judul }}/edit" class="btn btn-warning mx-2"><span data-feather="edit"></span> Edit</a>
                        <form action="/admin/books/{{ $book->judul }}" method="book" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="trash-2"></span> Delete</button>
                        </form>
                    </div>
                    
                    @if ($book->image)
                        <div style="max-height: 500px; overflow: hidden;">
                            <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->judul }}" class="img-fluid mt-3 d-block rounded img-thumbnail">
                        </div>
                    @else
                        <img src="/assets/img/cover.png" alt="{{ $book->judul }}" class="img-fluid mt-3 rounded img-thumbnail">
                    @endif
                </div>
                <div style="font-size: 1.5rem;">
                    <table class="my-5">
                        
                        <tr>
                            <th>Judul</th>
                            <td class="px-3">:</td>
                            <td>{{ $book->judul }}</td>
                        </tr>
                        <tr>
                            <th>Pengarang</th>
                            <td class="px-3">:</td>
                            <td>{{ $book->pengarang }}</td>
                        </tr>
                        <tr>
                            <th>Penerbit</th>
                            <td class="px-3">:</td>
                            <td>{{ $book->penerbit }}</td>
                        </tr>
                        <tr>
                            <th>Tahun Terbit</th>
                            <td class="px-3">:</td>
                            <td>{{ $book->tahun_terbit }}</td>
                        </tr>
                            <th>ISBN</th>
                            <td class="px-3">:</td>
                            <td>{{ $book->isbn }}</td>
                        </tr>
                        </tr>
                            <th>Jumlah Buku</th>
                            <td class="px-3">:</td>
                            <td>{{ $book->jumlah_buku }}</td>
                        </tr>
                        </tr>
                            <th>Lokasi</th>
                            <td class="px-3">:</td>
                            <td>{{ $book->lokasi }}</td>
                        </tr>
                        </tr>
                            <th>Tanggal Input</th>
                            <td class="px-3">:</td>
                            <td>{{ $book->tanggal_input }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection