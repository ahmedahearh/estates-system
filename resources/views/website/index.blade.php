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
    <link href="{{asset('website/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
{{--    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">--}}
{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">--}}

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
    <style>
        body{
            ont-family: 'El Messiri', sans-serif;
        }
        div{
            ont-family: 'El Messiri', sans-serif;
        }
        h1{
            ont-family: 'El Messiri', sans-serif;
        }
        h2{
            ont-family: 'El Messiri', sans-serif;
        }
        li{
            ont-family: 'El Messiri', sans-serif;
        }
        ul{
            ont-family: 'El Messiri', sans-serif;
        }
        a{
            ont-family: 'El Messiri', sans-serif;
        }
    </style>
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

<!-- ======= Intro Section ======= -->
<div class="intro intro-carousel swiper-container position-relative">

    <div class="swiper-wrapper">

        <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image:url({{url('website/assets/img/slide-1.jpg')}})">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top" > غزة, الرمال
                                        <br> رقم العقار:7989
                                        </p>
                                        <h1 class="intro-title">
                                            <span class="color-b">2007 </span>  تاريخ بناء العقار
                                            <br> تصميم عصري وأنيق
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">السعر | $ 12.000</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image:url({{url('website/assets/img/slide-2.jpg')}})">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <p class="intro-title-top" > غزة, الرمال
                                        <br> رقم العقار:7989
                                    </p>
                                    <h1 class="intro-title">
                                        <span class="color-b">2007 </span>  تاريخ بناء العقار
                                        <br> تصميم عصري وأنيق
                                    </h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="#"><span class="price-a">السعر | $ 12.000</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image:url({{url('website/assets/img/slide-3.jpg')}})">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <p class="intro-title-top" > غزة, الرمال
                                        <br> رقم العقار:7989
                                    </p>
                                    <h1 class="intro-title">
                                        <span class="color-b">2007 </span>  تاريخ بناء العقار
                                        <br> تصميم عصري وأنيق
                                    </h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="#"><span class="price-a">السعر | $ 12.000</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div><!-- End Intro Section -->

<main id="main">

    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a" >من خدماتنا</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" style="direction: rtl">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="bi bi-cart"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">المبيعات</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                استخدام المبيعات والتسويق للحصول على أنواع مختلفة من البيانات في تدفق المبيعات وتخزين
                                هذه البيانات واستخدامها. تتضمن هذه البيانات مبادرة المبيعات الأصلية وإجراء المتابعة المستقبلية، والمبيعات الإضافية.
                            </p>
                        </div>
                        <div class="card-footer-c">
                            <a href="#" class="link-c link-icon">اقرأ المزيد
                                <span class="bi bi-calendar4-week"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="direction: rtl">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="bi bi-calendar4-week"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">الاستئجار</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                كل صناعة تستخدم أنواعًا مختلفة من العقود. ابحث على الإنترنت لمعرفة ما إذا كان يمكنك العثور على نماذج العقود التي تستخدمها الشركة
                            </p>
                        </div>
                        <br>
                        <br>
                        <div class="card-footer-c">
                            <a href="#" class="link-c link-icon">اقرأ المزيد
                                <span class="bi bi-calendar4-week"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="direction: rtl">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="bi bi-card-checklist"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">العقود</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                تعرف أحكام وبنود عقد الإيجار على أنها الالتزامات المترتبة على طرفي العقد، المؤجر والمستأجر،
                                وما لهما من حقوق أيضاً، والتي يتم الإشارة إليها وفق بنود مُصنّفة
                            </p>
                        </div>
                        <br>


                        <div class="card-footer-c">
                            <a href="#" class="link-c link-icon">اقرأ المزيد
                                <span class="bi bi-calendar4-week"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->







    <section class="section-property section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-link">
                            <span class="bi bi-chevron-left"></span>
                            <a href="blog-grid.html">المزيد
                            </a>
                        </div>
                        <div class="title-box">
                            <h2 class="title-a">احدث العقارات </h2>
                        </div>

                    </div>
                </div>
            <div id="property-carousel" class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            @foreach($images as $image)
                            <div class="img-box-a">
                                <img src="{{asset('images/'.$image->image)}}" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="property-single.html">{{$image->title}}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">سعر الايجار بالسنة | $ 12.000</span>
                                        </div>
                                        <a href="property-single.html" class="link-a">
                                            {{$image->full_description}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div><!-- End carousel item -->
                </div>
            </div>

        </div>
        </div>
    </section>







    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">

                        <div class="title-link">
                            <span class="bi bi-chevron-left"></span>
                            <a href="{{url('property')}}"> المزيد

                            </a>
                        </div>
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">أحدث عقود الايجار</h2>
                            </div>
                    </div>
                </div>
            </div>
            <div id="property-carousel" class="swiper-container">
                <div class="swiper-wrapper">

                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{asset('website/assets/img/property-6.jpg')}}" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="property-single.html">206 رقم المنزل
                                                <br /> شارع صلاح الدين</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">سعر الايجار بالسنة | $ 12.000</span>
                                        </div>
                                        <a href="#" class="link-a">اضغط هنا لمزيد من التفاصيل
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
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">الحمامات</h4>
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
                    </div><!-- End carousel item -->

                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{asset('website/assets/img/property-3.jpg')}}" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="property-single.html">157 رقم المنزل
                                                <br />شارع فهمي بيك</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">سعر الايجار بالسنة | $ 12.000</span>
                                        </div>
                                        <a href="property-single.html" class="link-a">اضغط هنا لمزيد من التفاصيل
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
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">الحمامات</h4>
                                                <span>1</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">الكراج</h4>
                                                <span>2</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{asset('website/assets/img/property-7.jpg')}}" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="property-single.html">245 رقم المنزل
                                                <br /> مفترق الطيران</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">سعرالايجار بالسنة | $ 12.000</span>
                                        </div>
                                        <a href="property-single.html" class="link-a">اضغط هنا لمزيد من التفاصيل
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
                                                <span>6</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">الحمامات</h4>
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
                    </div><!-- End carousel item -->

                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{asset('website/assets/img/property-10.jpg')}}" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="property-single.html">204 رقم المنزل
                                                <br /> شارع الوحدة</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">سعر الايجار بالسنة | $ 12.000</span>
                                        </div>
                                        <a href="property-single.html" class="link-a">اضغط هنا لمزيد من التفاصيل
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
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">الحمامات</h4>
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
                    </div><!-- End carousel item -->
                </div>
            </div>
            <div class="propery-carousel-pagination carousel-pagination"></div>

        </div>
        </div>
     </section>
    <!-- End Latest Properties Section -->

    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-link">
                            <span class="bi bi-chevron-left"></span>
                            <a href="blog-grid.html">المزيد
                            </a>
                        </div>
                        <div class="title-box">
                            <h2 class="title-a">احدث العقارات </h2>
                        </div>

                    </div>
                </div>
            </div>

            <div id="news-carousel" class="swiper-container">
                <div class="swiper-wrapper">

                    <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b">
                                <img src="{{asset('website/assets/img/post-2.jpg')}}" alt="" class="img-b img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <a href="#" class="category-b">المنازل</a>
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="blog-single.html">المزيد من التفاصيل
                                                <br> </a>
                                        </h2>
                                    </div>
                                    <div class="card-date">
                                        <span class="date-b">18 Sep. 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b">
                                <img src="{{asset('website/assets/img/post-5.jpg')}}" alt="" class="img-b img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <a href="#" class="category-b">الشاليهات</a>
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="blog-single.html">المزيد من التفاصيل
                                                <br> </a>
                                        </h2>
                                    </div>
                                    <div class="card-date">
                                        <span class="date-b">18 Sep. 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b">
                                <img src="{{asset('website/assets/img/post-7.jpg')}}" alt="" class="img-b img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <a href="#" class="category-b">المتاجر</a>
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="blog-single.html">المزيد من التفاصيل
                                                <br></a>
                                        </h2>
                                    </div>
                                    <div class="card-date">
                                        <span class="date-b">18 Sep. 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b">
                                <img src="{{asset('website/assets/img/post-3.jpg')}}" alt="" class="img-b img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <a href="#" class="category-b">الاراضي</a>
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="#">المزيد من التفاصيل
                                                <br></a>
                                        </h2>
                                    </div>
                                    <div class="card-date">
                                        <span class="date-b">18 Sep. 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->

                </div>
            </div>

            <div class="news-carousel-pagination carousel-pagination"></div>
        </div>
    </section><!-- End Latest News Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">من قصص النجاح التي نفتخر بها</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div id="testimonial-carousel" class="swiper-container">
                <div class="swiper-wrapper">

                    <div class="carousel-item-a swiper-slide">
                        <div class="testimonials-box">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="testimonial-img">
                                        <img src="{{asset('website/assets/img/testimonial-1.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="testimonial-ico">
                                        <i class="bi bi-chat-quote-fill"></i>
                                    </div>
                                    <div class="testimonials-content">
                                        <p class="testimonial-text">
                                          لقد وجدنا البيت المثالي وذالك عن طريق استخدامنا لموقع عقارات غزة وكانت التجربة جيدة
                                        </p>
                                    </div>
                                    <div class="testimonial-author-box">
                                        <img src="{{asset('website/assets/img/mini-testimonial-1.jpg')}}" alt="" class="testimonial-avatar">
                                        <h5 class="testimonial-author">مصطفى & ايناس</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-a swiper-slide">
                        <div class="testimonials-box">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="testimonial-img">
                                        <img src="{{asset('website/assets/img/testimonial-2.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="testimonial-ico">
                                        <i class="bi bi-chat-quote-fill"></i>
                                    </div>
                                    <div class="testimonials-content">
                                        <p class="testimonial-text">
                                        لقد وجدنا البيت المثالي وذالك عن طريق استخدامنا لموقع عقارات غزة وكانت التجربة جيدة
                                        </p>
                                    </div>
                                    <div class="testimonial-author-box">
                                        <img src="{{asset('website/assets/img/mini-testimonial-2.jpg')}}" alt="" class="testimonial-avatar">
                                        <h5 class="testimonial-author">خالد & رهف</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->

                </div>
            </div>
            <div class="testimonial-carousel-pagination carousel-pagination"></div>

        </div>
    </section><!-- End Testimonials Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->

@include('website.layout.footer')
img
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
