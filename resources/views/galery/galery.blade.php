@extends('layouts.main')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Galery</h1>
    </div>
    <div class="section-body">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="https://source.unsplash.com/500x400?library" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="https://source.unsplash.com/500x400?library" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="https://source.unsplash.com/500x400?library" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="https://source.unsplash.com/500x400?library" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
          </div>

        {{-- <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div> --}}
    </div>
</section>
@endsection