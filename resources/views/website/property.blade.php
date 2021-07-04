<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EstateAgency Bootstrap Template - Index</title>
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
                        <h1 class="title-single" >الشقق السكنية</h1>
                        <span class="color-text-a"></span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('/')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                              الشقق
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="grid-option">
                        <form>
                            <select class="custom-select">
                                <option selected>الكل</option>
                                  <option value="1">من جديد الى قديم </option>
                                <option value="2">للإيجار</option>
                                <option value="3">للبيع</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="{{asset('website/assets/img/property-1.jpg')}}" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#">شقة سكنية
                                            <br /> شارع صلاح الدين</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">الاجار | $ 250</span>
                                    </div>
                                    <a href="property-single.html" class="link-a">للمزيد من التفاصيل
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">المساحة</h4>
                                            <span>250m
                          <sup>2</sup>
                        </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">الغرف</h4>
                                            <span>6</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">الحمامات</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">الكراج </h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="{{asset('website/assets/img/property-3.jpg')}}" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#">شقة سكنية
                                            <br />شارع الوحدة </a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">الاجار| $ 150</span>
                                    </div>
                                    <a href="property-single.html" class="link-a">للمزيد من التفاصيل
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">المساحة</h4>
                                            <span>180m
                          <sup>2</sup>
                        </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">الغرف</h4>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">الحمامات</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">الكراج </h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="{{asset('website/assets/img/property-6.jpg')}}" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#">شقة سكنية
                                            <br /> خانيونس دوار النجمه</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">الاجار | $ 200</span>
                                    </div>
                                    <a href="property-single.html" class="link-a">للمزيد من التفاصيل
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">المساحة</h4>
                                            <span>230m
                          <sup>2</sup>
                        </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">الغرف</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">الحمامات</h4>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">الكراج</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="{{asset('website/assets/img/property-7.jpg')}}" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#">شقة سكنية
                                            <br /> الشيخ رضوان </a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">الاجار | $ 100</span>
                                    </div>
                                    <a href="property-single.html" class="link-a">للمزيد من التفاصيل
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">المساحة</h4>
                                            <span>12m
                          <sup>2</sup>
                        </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">الغرف</h4>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">الحمامات </h4>
                                            <span>1</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">الكراج</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="{{asset('website/assets/img/property-8.jpg')}}" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#">شقة شكنية
                                            <br /> شارع فهمي بيك </a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">الاجار  | $ 300</span>
                                    </div>
                                    <a href="property-single.html" class="link-a">للمزيد من التفاصيل
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">المساحة</h4>
                                            <span>340m
                          <sup>2</sup>
                        </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">الغرف</h4>
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">الحمامات</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">الكراج</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="{{asset('website/assets/img/property-10.jpg')}}" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#">شقة سكنية
                                            <br /> شارع الصناعة</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">الاجار  | $120 </span>
                                    </div>
                                    <a href="property-single.html" class="link-a">للمزيد من التفاصيل
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">المساحة</h4>
                                            <span>220m
                          <sup>2</sup>
                        </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">الغرف</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">الحمامات </h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">الكراج</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <nav class="pagination-a">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <span class="bi bi-chevron-left"></span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item next">
                                <a class="page-link" href="#">
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Property Grid Single-->

</main><!-- End #main -->

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
