@extends('layouts.master')

@section('content')
    <!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="{{url('/home')}}"><span>FREELANCE</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{url('/home')}}">Home</a></li>
          <li><a href="{{url('/about')}}">About Us</a></li>
          <li><a href="{{url('/service')}}">Services</a></li>
          <li><a href="{{url('/portfolio')}}">Portfolio</a></li>
          <li><a href="{{url('/team')}}">Team</a></li>
          <li><a href="{{url('/blog')}}">Blog</a></li>
          <li><a href="{{url('/contact')}}">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Welcome to <span>Freelance</span></h2>
          <p class="animated fadeInUp"> To build strong teams with excellent IT engineers. To provide high-quality and cost-effective solutions. To develop IT products beneficial to our society. To build a solid trust with our customers and partners.</p>
          <a href="#ourmission" class="btn-get-started animated fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Our Care</h2>
          <p class="animated fadeInUp"> We respect diversity and make it our strength. We create comfortable work environment for every religion and ethnic background. We keep challenging to the latest IT technology. We promise not only low cost but also high-quality products.</p>
          <a href="#ourcare" class="btn-get-started animated fadeInUp" >Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Our Vision</h2>
          <p class="animated fadeInUp">To be a leading Freelancer in Myanmar</p>
          <a href="#ourvision" class="btn-get-started animated fadeInUp">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">
        <div class="section-title">
          <h2>About</h2>
          <p>We have been part of the outsourcing industry since 2017 and since then we've implemented and
          delivered customized software development, Website, Hosting & Domain,
          Package Software and Business Processes outsourcing services.</p>
        </div>
        </div>
      </section>
    <!-- ======= Features Section ======= -->
     <!-- ======= Service Details Section ======= -->
     <section class="service-details">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" id="ourmission">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/features_6.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Our Mission</a></h5>
                <p class="card-text">
                To build strong teams with excellent IT engineers.
                To provide high-quality and cost-effective solutions.                                            
                To develop IT products beneficial to our society.
                To build a solid trust with our customers and partners.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/bank.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Our Plan</a></h5>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" id="ourvision">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/maxresdefault.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Our Vision</a></h5>
                <p class="card-text">To be a leading Freelancer in Myanmar.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" id="ourcare">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/retailhero.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Our Care</a></h5>
                <p class="card-text">
                We respect diversity and make it our strength.
                We create comfortable work environment for every religion and ethnic background.
                We keep challenging to the latest IT technology.
                We promise not only low cost but also high-quality products.
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Service Details Section -->

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

      <div class="row">
          <div class="col-md-4  align-items-stretch hov" data-aos="fade-up"  data-aos-delay="100">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h6 class="title"><a href="{{url('/service')}}">Website Development</a></h6>
              
            </div>
          </div>

          <div class="col-md-4   align-items-stretch hov" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h6 class="title"><a href="{{url('/service')}}">Offshore Software Development</a></h6>
              
            </div>
          </div>

          <div class="col-md-4  align-items-stretch hov" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h6 class="title"><a href="{{url('/service')}}">Web Application Development</a></h6>
            </div>
            
          </div>

          <div class="col-md-4  align-items-stretch hov" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h6 class="title"><a href="{{url('/service')}}">Better Business</a></h6>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Services Section -->

  </main><!-- End #main -->
  @endsection