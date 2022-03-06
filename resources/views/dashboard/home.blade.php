@extends('layouts.main')
@section('content')
<section class="section d-flex justify-content-around">
    <div class="dashboard-left">
        <div class="banner bg-white p-3 rounded">
            <img src="/img/banner.png" class="img-fluid rounded" width="700px" height="350px" alt="thumbnail">
        </div>

        <div class="buku-terbaru my-5">
            <h3 class="text-dark fw-bolder">Buku Terbaru</h3><br>
            <div class="d-flex">
                <div class="card shadow" style="width: 15rem;">
                  <img src="assets/img/cover.jpg" class="card-img-top"  alt="cover">
                     <div class="card-body">
                        <h5 class="card-title">Judul</h5>
                        <p class="card-text">Some quick example text to build on the card </p>
                        <a href="/buku-terbaru" class="btn btn-primary">Preview</a>
                     </div>
                 </div>
 
                 <div class="ml-3">
                     <div class="card shadow" style="width: 15rem;">
                         <img src="assets/img/cover.jpg" class="card-img-top"  alt="cover">
                              <div class="card-body">
                                 <h5 class="card-title">Judul</h5>
                                 <p class="card-text">Some quick example text to build on the card </p>
                                 <a href="/buku-terbaru" class="btn btn-primary">Preview</a>
                              </div>
                     </div>
                 </div>
 
                 <div class="ml-3">
                     <div class="card shadow" style="width: 15rem;">
                         <img src="assets/img/cover.jpg" class="card-img-top"  alt="cover">
                              <div class="card-body">
                                 <h5 class="card-title">Judul</h5>
                                 <p class="card-text">Some quick example text to build on the card </p>
                                 <a href="/buku-terbaru" class="btn btn-primary">Preview</a>
                              </div>
                     </div>
                 </div>
            </div>
        </div>

        <div class="peminat-terbanyak">
            <h3 class="text-dark fw-bolder">Buku Peminat Terbanyak</h3><br>
            <div class="d-flex">
                <div class="card shadow" style="width: 15rem;">
                  <img src="assets/img/cover.jpg" class="card-img-top"  alt="cover">
                     <div class="card-body">
                        <h5 class="card-title">Judul</h5>
                        <p class="card-text">Some quick example text to build on the card </p>
                        <a href="/buku-terlaris" class="btn btn-primary">Preview</a>
                     </div>
                 </div>
 
                 <div class="ml-3">
                     <div class="card shadow" style="width: 15rem;">
                         <img src="assets/img/cover.jpg" class="card-img-top"  alt="cover">
                              <div class="card-body">
                                 <h5 class="card-title">Judul</h5>
                                 <p class="card-text">Some quick example text to build on the card </p>
                                 <a href="/buku-terlaris" class="btn btn-primary">Preview</a>
                              </div>
                     </div>
                 </div>
 
                 <div class="ml-3">
                     <div class="card shadow" style="width: 15rem;">
                         <img src="assets/img/cover.jpg" class="card-img-top"  alt="cover">
                              <div class="card-body">
                                 <h5 class="card-title">Judul</h5>
                                 <p class="card-text">Some quick example text to build on the card </p>
                                 <a href="/buku-terlaris" class="btn btn-primary">Preview</a>
                              </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>

    <div class="dashboard-right text-white rounded shadow-sm p-3 ml-3 col-3" style="background-color: #6777ef;">
        <div id="chart" class="rounded">

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