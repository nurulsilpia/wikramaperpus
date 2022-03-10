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
                 <img src="assets/img/cover.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8 ">
             <div class="card-body">
             <h5 class="card-title text-dark">Judul Buku</h5>
                <p class="card-text mb-3"><small class="text-muted">by kahwi leonard</small></p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis velit dolor, sit amet faucibus sapien maximus vel. Mauris feugiat massa massa, a lobortis velit posuere sollicitudin. Quisque iaculis enim id porta condimentum. Integer nec purus blandit, sodales arcu nec, finibus quam. Proin congue efficitur nisi.</p>
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
                    <td>Kawhi</td>
                </tr>
                <tr>
                    <th>Penerbit</th>
                    <td class="px-3">:</td>
                    <td>PT Gramedia</td>
                </tr>
                <tr>
                    <th>Tahun Terbit</th>
                    <td class="px-3">:</td>
                    <td>2019</td>
                </tr>
                <tr>
                    <th>ISBN</th>
                    <td class="px-3">:</td>
                    <td>129282</td>
                </tr>
                </table>
                
                </div>
             </div>
            </div>
        </div>
      <hr>

      <div class="py-5">
      <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis velit dolor, sit amet faucibus sapien maximus vel. Mauris feugiat massa massa, a lobortis velit posuere sollicitudin. Quisque iaculis enim id porta condimentum. Integer nec purus blandit, sodales arcu nec, finibus quam. Proin congue efficitur nisi.</p>
      </div>

      <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center mt-5">
                <li class="page-item disabled">
                     <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

</div>
</div>
</section>    

@endsection