@extends('layouts.main')
@section('content')
<section class="section">
    <div class="section-header">
        <h1 class="mb-3">Galery</h1>
    </div>
    <div class="section-body">
      <div class="photo-gallery pt-3 rounded">
        <div class="container">
          <div class="row photos">
       
                <div class="col-lg-4 mb-4 item">
                    <div class="card h-100 shadow">
            
                            <a href="https://source.unsplash.com/500x400?library" data-lightbox="photos"><img src="https://source.unsplash.com/500x400?library" class="card-img-top" alt=""></a>
                   
                        <div class="card-body">
                          <h5 class="card-title fw-bolder"></h5>
                          <p class="card-text"></p>
                        </div>
                    </div>
                </div>
        
          </div>
        </div>
      </div>
    </div>
</section>
 
@endsection