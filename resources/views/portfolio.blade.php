@section('title','Portfolio - Moderna Bootstrap Template')
@extends('layouts.master')

@section('content')

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="{{url('/home')}}"><span>FREELANCE</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="{{url('/home')}}">Home</a></li>
          <li><a href="{{url('/about')}}">About Us</a></li>
          <li><a href="{{url('/service')}}">Services</a></li>
          <li class="active"><a href="{{url('/portfolio')}}">Portfolio</a></li>
          <li><a href="{{url('/team')}}">Team</a></li>
          <li><a href="{{url('/blog')}}">Blog</a></li>
          <li><a href="{{url('/contact')}}">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Portfolio</h2>
          <ol>
            <li><a href="{{url('/home')}}">Home</a></li>
            <li>Our Portfolio</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

          <!-- <div class="col-lg-4 col-md-6 filter-app">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1">App 1</a></h3>
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div> -->

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/1.png" data-gall="portfolioGallery" class="venobox" title="Web 3">Ve Ve</a></h3>
                <a href="assets/img/portfolio/1.png" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 filter-app">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2">App 2</a></h3>
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2">Card 2</a></h3>
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div> -->

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/jpready.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/jpready.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2">Japan Ready</a></h3>
                <a href="assets/img/portfolio/jpready.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 filter-app">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3">App 3</a></h3>
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1">Card 1</a></h3>
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3">Card 3</a></h3>
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div> -->

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/jtech.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/jtech.jpg" data-gall="portfolioGallery" class="venobox" title="Web 1">Carrer Tech</a></h3>
                <a href="assets/img/portfolio/jtech.jpg" data-gall="portfolioGallery" class="venobox" title="Web 1"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/3.png" data-gall="portfolioGallery" class="venobox" title="Web 4">Media 7</a></h3>
                <a href="assets/img/portfolio/3.png" data-gall="portfolioGallery" class="venobox" title="Web 4"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
  @endsection