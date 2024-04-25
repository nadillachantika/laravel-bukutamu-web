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
              <li class="scroll-to-section"><a href="#tamu">Tamu</a></li>
              <li class="scroll-to-section"><a href="#blog">Kunjungan</a></li>
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
  <div id="tamu" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>Sahabat <em>Mutiara</em> <span>Hati</span></h2>
          </div>
        </div>
      </div>
      <div class="section-body">
        <div class="row">
            <div class="col-12">
                @include('layouts.alert')
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Semua Tamu</h4>
                    </div>
                    <div class="card-body">
                        <div class="float-right">
                            <form method="GET" action="{{ route('tamu.index') }}">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" name="name">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="clearfix mb-3"></div>

                        <div class="table-responsive">
                            <table class="table-striped table">
                                <tr>

                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No. Hp</th>
                                    <th>Jabatan</th>
                                    <th>Instansi</th>
                                </tr>
                                @php
                                    $counter = 1;
                                @endphp
                                @foreach ($tamus as $tamu)
                                    <tr>
                                        <td>{{ $counter++ }}</td>


                                        <td>{{ $tamu->nama }}
                                        </td>

                                        <td>{{ $tamu->alamat }}
                                        </td>
                                        <td>
                                            {{ $tamu->nohp }}
                                        </td>

                                        <td>
                                            {{ $tamu->jabatan }}
                                        </td>
                                        <td>
                                            {{ $tamu->instansi }}
                                        </td>

                                    </tr>
                                @endforeach


                            </table>
                        </div>
                        <div class="float-right">
                            {{ $tamus->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
  </div>

  <div id="blog" class="our-blog section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Check Out What Is <em>Trending</em> In Our Latest <span>News</span></h2>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="top-dec">
            <img src="assets/images/blog-dec.png" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="left-image">
            <a href="#"><img src="assets/images/big-blog-thumb.jpg" alt="Workspace Desktop"></a>
            <div class="info">
              <div class="inner-content">
                <ul>
                  <li><i class="fa fa-calendar"></i> 24 Mar 2021</li>
                  <li><i class="fa fa-users"></i> TemplateMo</li>
                  <li><i class="fa fa-folder"></i> Branding</li>
                </ul>
                <a href="#"><h4>SEO Agency &amp; Digital Marketing</h4></a>
                <p>Lorem ipsum dolor sit amet, consectetur and sed doer ket eismod tempor incididunt ut labore et dolore magna...</p>
                <div class="main-blue-button">
                  <a href="#">Discover More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="right-list">
            <ul>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 18 Mar 2021</span>
                  <a href="#"><h4>New Websites &amp; Backlinks</h4></a>
                  <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
                </div>
              </li>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 14 Mar 2021</span>
                  <a href="#"><h4>SEO Analysis &amp; Content Ideas</h4></a>
                  <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
                </div>
              </li>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 06 Mar 2021</span>
                  <a href="#"><h4>SEO Tips &amp; Digital Marketing</h4></a>
                  <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Feel Free To Send Us a Message About Your Website Needs</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doer ket eismod tempor incididunt ut labore et dolores</p>
            <div class="phone-info">
              <h4>For any enquiry, Call Us: <span><i class="fa fa-phone"></i> <a href="#">010-020-0340</a></span></h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="assets/images/contact-decoration.png" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



  <footer>
    <div class="container ">
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
