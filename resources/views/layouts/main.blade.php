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
                  <div class="col-lg-4 col-md-6">
                    <h5 class="text-white">Clock </h5><br>
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

    {{-- JS Boostrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    {{-- Custom JS --}}
    <script type="text/javascript" src="/js/main.js"></script>

    <script>
        function startTime() {
          var today = new Date();
          var hr = today.getHours();
          var min = today.getMinutes();
          var sec = today.getSeconds();
          ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
          hr = (hr == 0) ? 12 : hr;
          hr = (hr > 12) ? hr - 12 : hr;
          
          hr = checkTime(hr);
          min = checkTime(min);
          sec = checkTime(sec);
          document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
          
          var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
          var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
          var curWeekDay = days[today.getDay()];
          var curDay = today.getDate();
          var curMonth = months[today.getMonth()];
          var curYear = today.getFullYear();
          var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear;
          document.getElementById("date").innerHTML = date;
          
          var time = setTimeout(function(){ startTime() }, 500);
        }
        function checkTime(i) {
          if (i < 10) {
              i = "0" + i;
          }
          return i;
        }
    
        //Data AOS
        // AOS.init({
        //   delay:500
        // });
    </script>
</body>
</html>