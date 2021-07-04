<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EstateAgency Bootstrap Template - About</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('website/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('website/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('website/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('website/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: EstateAgency - v4.0.1
    * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Property Search Section ======= -->
<div class="click-closed"></div>
<!--/ Form Search Star /-->
<div class="box-collapse">
    <div class="title-box-d">
        <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
        <form class="form-a">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="form-group">
                        <label class="pb-2" for="Type">Keyword</label>
                        <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="Type">Type</label>
                        <select class="form-control form-select form-control-a" id="Type">
                            <option>All Type</option>
                            <option>For Rent</option>
                            <option>For Sale</option>
                            <option>Open House</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="city">City</label>
                        <select class="form-control form-select form-control-a" id="city">
                            <option>All City</option>
                            <option>Alabama</option>
                            <option>Arizona</option>
                            <option>California</option>
                            <option>Colorado</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="bedrooms">Bedrooms</label>
                        <select class="form-control form-select form-control-a" id="bedrooms">
                            <option>Any</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="garages">Garages</label>
                        <select class="form-control form-select form-control-a" id="garages">
                            <option>Any</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="bathrooms">Bathrooms</label>
                        <select class="form-control form-select form-control-a" id="bathrooms">
                            <option>Any</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="price">Min Price</label>
                        <select class="form-control form-select form-control-a" id="price">
                            <option>Unlimite</option>
                            <option>$50,000</option>
                            <option>$100,000</option>
                            <option>$150,000</option>
                            <option>$200,000</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-b">Search Property</button>
                </div>
            </div>
        </form>
    </div>
</div><!-- End Property Search Section -->>

<!-- ======= Header/Navbar ======= -->

@include('website.layout.header')

<!-- End Header/Navbar -->

<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">يمكننا ايجاد بيت الاحلام لك</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                            <a href="{{url('/about')}}">حول</a>   
                          
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                            <a href="{{url('/')}}">الرئيسية</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single-->

    <!-- ======= About Section ======= -->
    <section class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 position-relative">
                    <div class="about-img-box">
                        <img src="{{asset('website/assets/img/slide-about-1.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="sinse-box">
                        <h3 class="sinse-title">موقع عقارات غزة
                            <span></span>
                            <br>منذ 2017
                        </h3>
                        <p>بيع & ايجارات</p>
                    </div>
                </div>
                <div class="col-md-12 section-t8 position-relative">
                    <div class="row">
                        <div class="col-md-6 col-lg-5">
                            <img src="{{asset('website/assets/img/about-2.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-2  d-none d-lg-block position-relative">
                            <div class="title-vertical d-flex justify-content-start">
                                <span>EstateAgency Exclusive Property</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 section-md-t3">
                            <div class="title-box-d">
                                <h3 class="title-d">Sed
                                    <span class="color-d">porttitor</span> lectus
                                    <br> nibh.
                                </h3>
                            </div>
                            <p class="color-text-a">
                                Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget
                                consectetur sed, convallis
                                at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum
                                ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                                neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                            </p>
                            <p class="color-text-a">
                                Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                                Mauris blandit aliquet
                                elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed,
                                convallis at tellus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
@include('website.layout.footer')
<!-- End  Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('website/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('website/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('website/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('website/assets/js/main.js')}}"></script>

</body>

</html>
