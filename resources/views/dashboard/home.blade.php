@extends('layouts.main')
@section('content')

        <div class="banner bg-white">
            <img src="/assets/img/baner.png" class="img-fluid mt-5" width="1200" height="300px" alt="thumbnail">
        </div>

        <div class="banner bg-white  "><br><br>
            <p class="text-center" style="font-family-roboto">Kami Menyediakan Layanan Perpustakaan berupa E-book dan informasi terbaru mengenai perpustakaan Wikrama Indonesia <br>yang bermanfaat khususnya bagi civitas akademik SMK Wikrama Indonesia</p><br><br>
        </div>

        <section class="section"> 
        <div class="buku-terbaru my-">
            <h3 class="text-dark fw-bolder">Buku Terbaru</h3><br>
            <div class="d-flex">
                <div class="card shadow" style="width: 15rem;">
                  <img src="assets/img/cover.jpg" class="card-img-top"  alt="cover">
                     <div class="card-body">
                        <h5 class="card-title">Judul</h5>
                        <p class="card-text">Some quick example text to build on the card </p><br>
                        <a href="/buku-terbaru" class="btn btn-primary btn-sm btn-sm">Preview</a>
                     </div>
                 </div>
 
                 <div class="ml-5">
                     <div class="card shadow" style="width: 15rem;">
                         <img src="assets/img/cover.jpg" class="card-img-top"  alt="cover">
                              <div class="card-body">
                                 <h5 class="card-title">Judul</h5>
                                 <p class="card-text">Some quick example text to build on the card </p><br>
                                 <a href="/buku-terbaru" class="btn btn-primary btn-sm">Preview</a>
                              </div>
                     </div>
                 </div>
 
                 <div class="ml-5">
                     <div class="card shadow" style="width: 15rem;">
                         <img src="assets/img/cover.jpg" class="card-img-top"  alt="cover">
                              <div class="card-body">
                                 <h5 class="card-title">Judul</h5>
                                 <p class="card-text">Some quick example text to build on the card </p><br>
                                 <a href="/buku-terbaru" class="btn btn-primary btn-sm">Preview</a>
                              </div>
                     </div>
                 </div>
                 <div class="ml-5">
                     <div class="card shadow" style="width: 15rem;">
                         <img src="assets/img/cover.jpg" class="card-img-top"  alt="cover">
                              <div class="card-body">
                                 <h5 class="card-title">Judul</h5>
                                 <p class="card-text">Some quick example text to build on the card </p><br>
                                 <a href="/buku-terbaru" class="btn btn-primary btn-sm">Preview</a>
                              </div>
                     </div>
                 </div>
            </div>
        </div><br><br>

        <div class="peminat-terbanyak">
            <h3 class="text-dark fw-bolder">Buku Peminat Terbanyak</h3><br>
            <div class="d-flex">
                <div class="card shadow" style="width: 15rem;">
                  <img src="assets/img/cover.jpg" class="card-img-top"  alt="cover">
                     <div class="card-body">
                        <h5 class="card-title">Judul</h5>
                        <p class="card-text">Some quick example text to build on the card </p><br>
                        <a href="/buku-terlaris" class="btn btn-primary btn-sm">Preview</a>
                     </div>
                 </div>
 
                 <div class="ml-5">
                     <div class="card shadow" style="width: 15rem;">
                         <img src="assets/img/cover.jpg" class="card-img-top"  alt="cover">
                              <div class="card-body">
                                 <h5 class="card-title">Judul</h5>
                                 <p class="card-text">Some quick example text to build on the card </p><br>
                                 <a href="/buku-terlaris" class="btn btn-primary btn-sm">Preview</a>
                              </div>
                     </div>
                 </div>
 
                 <div class="ml-5">
                     <div class="card shadow" style="width: 15rem;">
                         <img src="assets/img/cover.jpg" class="card-img-top"  alt="cover">
                              <div class="card-body">
                                 <h5 class="card-title">Judul</h5>
                                 <p class="card-text">Some quick example text to build on the card </p><br>
                                 <a href="/buku-terlaris" class="btn btn-primary btn-sm">Preview</a>
                              </div>
                     </div>
                 </div>
                 <div class="ml-5">
                     <div class="card shadow" style="width: 15rem;">
                         <img src="assets/img/cover.jpg" class="card-img-top"  alt="cover">
                              <div class="card-body">
                                 <h5 class="card-title">Judul</h5>
                                 <p class="card-text">Some quick example text to build on the card </p><br>
                                 <a href="/buku-terbaru" class="btn btn-primary btn-sm">Preview</a>
                              </div>
                     </div>
                 </div>
            </div>
        </div>
        <br><br>
        <div class="banner bg-white mb-5">
        <div class="row">  
            <div class="col-5 sm-7 mt-2">  
            <div id="chart" class="rounded "></div>
            </div>
            <div class="col-6 sm-6 ml-3">  
        <video class="mb-1 mt-3 pl-3" width="500" height="350" autoplay>
            <source src="/assets/video/wk.mp4" type="video/mp4" width="700" height="350">
        </video>
        </div>
        </div>

        </div>
    </div>
</section>

@endsection

@prepend('chart')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        // Radialize the colors
        Highcharts.setOptions({
            colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
                return {
                    radialGradient: {
                        cx: 0.5,
                        cy: 0.3,
                        r: 0.7
                    },
                    stops: [
                        [0, color],
                        [1, Highcharts.color(color).brighten(-0.3).get('rgb')] // darken
                    ]
                };
            })
        });

        // Build the chart
        Highcharts.chart('chart', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Grafik Pengunjung'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        connectorColor: 'silver'
                    }
                }
            },
            series: [{
                name: 'Jumlah',
                data: [
                    { name: 'Civitas', y: 61.41 },
                    { name: 'Umum', y: 7.05 }
                ]
            }]
        });
                    
    </script>
@endprepend