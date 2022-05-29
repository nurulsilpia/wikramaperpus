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
                {{-- @foreach (DB::table('books')->orderBy('id', 'DESC')->limit(4)->get() as $item) --}}
                @foreach ($newBooks as $item)
                    <div class="mr-5">
                        <div class="card shadow" style="width: 15rem;">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                                <p class="text-white">{{ $item->jenis->jenis }}</p>
                            </div>

                            @if ($item->image)
                                <div style="max-height: 400px; overflow: hidden;">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->judul }}" class="card-img-top img-fluid rounded" style="height: 300px; object-fit: fill;">
                                </div>
                            @else
                                <img src="assets/img/cover.png" alt="{{ $item->judul }}" class="card-img-top img-fluid rounded" style="height: 300px; object-fit: fill;">
                            @endif

                            <div class="card-body">
                                <h5 class="card-title">{{ $item->judul }}</h5>
                                <p class="card-text">{{ $item->pengarang }}</p>
                                <div class="d-flex align-items-center">
                                    <ion-icon name="eye-outline"></ion-icon>
                                    <p class="ms-1">{{ $item->jumlah_baca }}</p>
                                </div><br>
                                <a href="{{ route('baca',['id'=>$item->id]) }}" class="btn btn-primary btn-sm">Baca</a>
                            </div>
                        </div>
                    </div>
                 @endforeach
                </div>

                {{-- Pagination buku terbaru --}}
                <div class="d-flex justify-content-center mt-3">
                   {{ $newBooks->links() }}
               </div>
        </div><br><br>

        <div class="peminat-terbanyak">
            <h3 class="text-dark fw-bolder">Buku Peminat Terbanyak</h3><br>
            <div class="d-flex">

                {{-- @foreach (DB::table('books')->orderBy('jumlah_baca', 'DESC')->limit(4)->get() as $item) --}}
                @foreach ($fmsBooks as $item)
                    <div class="mr-5">
                        <div class="card shadow" style="width: 15rem;">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                                <p class="text-white">{{ $item->jenis->jenis }}</p>
                            </div>

                                @if ($item->image)
                                    <div style="max-height: 400px; overflow: hidden;">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->judul }}" class="card-img-top img-fluid rounded" style="height: 300px; object-fit: fill;">
                                    </div>
                                @else
                                    <img src="assets/img/cover.png" alt="{{ $item->judul }}" class="card-img-top img-fluid rounded" style="height: 300px; object-fit: fill;">
                                @endif

                            <div class="card-body">
                                <h5 class="card-title">{{ $item->judul }}</h5>
                                <p class="card-text">{{ $item->pengarang }}</p>
                                <div class="d-flex align-items-center">
                                    <ion-icon name="eye-outline"></ion-icon>
                                    <p class="ms-1">{{ $item->jumlah_baca }}</p>
                                </div><br>
                                <a href="{{ route('baca',['id'=>$item->id]) }}" class="btn btn-primary btn-sm">Baca</a>
                            </div>
                        </div>
                    </div>
                 @endforeach
            </div>

            {{-- Pagination buku minat terbanyak --}}
            <div class="d-flex justify-content-center mt-3">
                {{ $newBooks->links() }}
            </div>
        </div>
        <br><br>
        <div class="banner bg-white mb-5">
        <div class="row">
            <div class="col-5 sm-7 mt-2">
            <div id="chart" class="rounded "></div>
            </div>
            <div class="col-6 sm-6 ml-3">
        <video class="mb-1 mt-3 pl-3" width="600" height="350" autoplay loop muted>
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
