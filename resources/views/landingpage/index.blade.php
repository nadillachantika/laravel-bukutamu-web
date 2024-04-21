<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Mutiara Hati</title>

    <!-- Bootstrap core CSS -->
    <link href="/landingpage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/landingpage/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/landingpage/assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="/landingpage/assets/css/animated.css">
    <link rel="stylesheet" href="/landingpage/assets/css/owl.css">
<!--

TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
  </head>

<body>
    <div class="main-banner wow fadeIn animated" id="top" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s;">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-6 align-self-center">
                  <div class="left-content header-text wow fadeInLeft animated" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 1s; -moz-animation-delay: 1s; animation-delay: 1s;">
                    <h6>Selamat Datang di</h6>
                    <h2>Taman Baca <em id="title">Mutiara Hati</em></h2>
                    <p id="description">Tempat di mana cerita menginspirasi dan pengetahuan berkembang. Kami adalah komunitas yang berdedikasi untuk meningkatkan minat membaca dan mengembangkan potensi melalui literasi. Temukan ragam buku menarik, program edukasi menarik, dan lingkungan yang mendukung pertumbuhan intelektual Anda di Taman Baca Mutiara Hati.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="right-image wow fadeInRight animated" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s;">
                    <img id="image" src="{{asset('img/mutiara_hati.png')}}" style="height: 400px" alt="team meeting">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
                <img src="{{asset('img/logo.png')}}" style="height: 100px">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#portfolio">Anggota</a></li>
              <li class="scroll-to-section"><a href="#blog">Buku Tamu</a></li>
              <li class="scroll-to-section"><a href="#contact">Kritik dan Saran</a></li>
              <li class="scroll-to-section"><div class="main-red-button"><a href="{{route('login')}}">Login</a></div></li>
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->


  <footer>
    <div class="container fixed-bottom">
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
          <p>© Copyright 2021 Space Dynamic Co. All Rights Reserved.
          <br>Developed by: <a rel="nofollow" href="https://www.instagram.com/nadillacputri_/" target="_blank">Nadilla C Putri </a></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <script src="/landingpage/vendor/jquery/jquery.min.js"></script>
  <script src="/landingpage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/landingpage/assets/js/owl-carousel.js"></script>
  <script src="/landingpage/assets/js/animation.js"></script>
  <script src="/landingpage/assets/js/imagesloaded.js"></script>
  <script src="/landingpage/assets/js/templatemo-custom.js"></script>


  <script>
   $(document).ready(function(){
    $.ajax({
        url: "/get-landingpage-content", // Ganti dengan URL endpoint yang sesuai
        type: "GET",
        success: function(response){
            // Proses data dari response di sini
            $('#title').text(response.title);
            $('#description').text(response.description);
            $('#image').attr('src', '/storage/landingpage/' + response.image); // Ubah path gambar sesuai dengan struktur folder dan nama gambar
        },
        error: function(xhr, status, error){
            // Tangani error di sini
            console.error(xhr.responseText); // Contoh: Tampilkan pesan error di console
        }
    });
});

  </script>

</body>
</html>
