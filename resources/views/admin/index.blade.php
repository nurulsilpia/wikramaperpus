@extends('admin.layouts.main')
@section('content')
<section class="section">
<div class="section-header">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcomback, {{ auth()->user()->name }}</h1>
    </div>
</div>
<div class="section-body d-flex justify-content-between">
    <div class="card text-danger" style="width: 15rem;">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>
                <h5 class="card-title" style="font-size: 2,5rem;">Jumlah Buku</h5>
                <p class="card-text text-center" style="font-size: 2rem;">{{ DB::table('books')->count() }}</p>
            </div>
            <div>
                <i class="bi bi-book-half" style="font-size: 3rem;"></i>
            </div>
        </div>
    </div>
    <div class="card" style="width: 15rem;">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>
                <h5 class="card-title" style="font-size: 2,5rem;">Jumlah User</h5>
                <p class="card-text text-center" style="font-size: 2rem;">{{ DB::table('users')->count() }}</p>
            </div>
            <div>
                <i class="bi bi-people-fill" style="font-size: 3rem;"></i>
            </div>
        </div>
    </div>
    <div class="card" style="width: 15rem;">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>
                <h5 class="card-title text-warning" style="font-size: 2,5rem;">Jumlah Artikel</h5>
                <p class="card-text text-center text-warning" style="font-size: 2rem;">{{ DB::table('posts')->count() }}</p>
            </div>
            <div>
                <i class="bi bi-newspaper text-warning" style="font-size: 3rem;"></i>
            </div>
        </div>
    </div>
    <div class="card text-primary" style="width: 15rem;">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>
                <h5 class="card-title" style="font-size: 2,5rem;">Jumlah Sirkulasi</h5>
                <p class="card-text" style="font-size: 2rem;">{{ DB::table('sirkulasis')->count() }}</p>
            </div>
            <div>
                <i class="bi bi-arrow-repeat" style="font-size: 3rem;"></i>
            </div>
        </div>
    </div>
</div>
</section>
@endsection