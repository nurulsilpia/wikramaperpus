<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Perpustakaan</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  {{--Icon --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
  <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      
      @include('partials.navbar')

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>
      <footer class="footer main-footer">
        <div class="row gy-4 gx-5 mt-3">
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
                  <div class="col-lg-5 col-md-6">
                    <br>
                      <body onload="startTime()">
                          <div id="clockdate">
                              <div class="clockdate-wrapper">
                                  <div id="clock"></div>
                                  <div id="date"></div>
                              </div>
                          </div>
                      </body>
                  </div>
        </div>
      </footer>
  
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  {{-- data table --}}
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  

  <!-- Father Icon -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</body>
</html>
