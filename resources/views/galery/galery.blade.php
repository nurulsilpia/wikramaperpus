@extends('layouts.main')
@section('content')
<section class="section">
    <div class="section-header">
        <h1 class="mb-3">Galery</h1>
    </div>
    <div class="section-body">
      <div class="container">
        <div class="row">
          @foreach ($galeries as $galery)
              <div class="col-lg-4 mb-4">
                  <div class="card h-100 shadow">
                      @if ($galery->image)
                          <img src="{{ asset('storage/' . $galery->image) }}" class="img-fluid card-img-top" style="height: 300px; object-fit: cover;">
                      @else
                          <img src="https://source.unsplash.com/500x400?library" class="card-img-top" alt="">
                      @endif
                      <div class="card-body">
                        <h5 class="card-title fw-bolder">{{ $galery->judul }}</h5>
                        <p class="card-text">{{ $galery->deskripsi }}</p>
                      </div>
                  </div>
              </div>
          @endforeach
        </div>
      </div>

      <div class="d-flex justify-content-center mt-3">
        {{ $galeries->links() }}
      </div>
    </div>
</section>
 
@endsection