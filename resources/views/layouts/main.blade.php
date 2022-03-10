<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- Icon --}}
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    {{-- For Galery --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    <title>Perpustakaan</title>
</head>
<body>
    @include('partials.navbar')
    
    <div class="container py-5">
        @yield('content')
    </div>

    <footer class="footer main-footer">
        <div class="row gy-4 gx-5 mt-2 ml-5">
                  <div class="col-lg-3 col-md-6">
                      <h5 class="h4 text-white">Mitra Kami  </h5><br>
                      <ul class="list-unstyled text-muted">
                          <li><a href="">SMK Wikrama Bogor</a></li>
                          <li><a href="">SMK Wikrama 1 Garut</a></li><br>
                          <li><a href="#">CV IDS Rumah Pendidikan</a></li>
                          <li><a href="#"></a></li>
                      </ul>
                    
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
                    <body onload="startTime()">
                        <div id="clockdate">
                            <div class="clockdate-wrapper">
                                <div id="clock"></div>
                                <div id="date" style="font-size: 1.25rem;"></div>
                            </div>
                        </div>
                    </body>
                  </div>
        </div>
    </footer>
    <br>
    <div class="banner bg-white"><br>
    <p class="small text-primary mb-0 text-center">&copy; Copyrights. 2022 Perpustakaan SMK Wikrama Indonesia</p><br>
        </div>

    {{-- JS Boostrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    {{-- Custom JS --}}
    <script type="text/javascript" src="/js/main.js"></script>

    {{-- For Galery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

    {{-- Highchart --}}
    <script src="https://code.highcharts.com/highcharts.js"></script>

    @stack('chart')
</body>
</html>