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
</section><br><br><br>

 <!-- FOOTER -->
 <footer class="w-100 pt-5 py-3 px-3 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h4 text-white">Mitra Kami  </h5><br>
                    <ul class="list-unstyled text-muted">
                        <li><a href="">SMK Wikrama Bogor</a></li>
                        <li><a href="">SMK Wikrama 1 Garut</a></li>
                        <li><a href="#">CV IDS Rumah Pendidikan</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                    <p class="small text-primary mb-0">&copy; Copyrights. 2018 Perpustakaan SMK Wikrama </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-3">Contact Us </h5><br>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#">prohumasi@smkwikrama.net</a></li>
                        <li><a href="https://www.instagram.com/perpustakaan_wikrama/">@perpustakaan_wikrama</a></li>
                        <br><li><a href="#">(0251) 8242411</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-3">Grafik Pengunjung </h5>
                    <p class="small text-muted"></p>
                </div>
            </div>
        </div>
    </footer>
@endsection