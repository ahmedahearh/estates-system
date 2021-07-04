<!DOCTYPE html>
<!--
Template Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/vuexy_admin
Renew Support: https://1.envato.market/vuexy_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="rtl">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Estates System | @yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset('cms/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('cms/app-assets/images/ico/favicon.ico')}}">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('cms/app-assets/vendors/css/vendors-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('cms/app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('cms/app-assets/vendors/css/extensions/toastr.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('cms/app-assets/css-rtl/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('cms/app-assets/css-rtl/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('cms/app-assets/css-rtl/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('cms/app-assets/css-rtl/components.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('cms/app-assets/css-rtl/themes/dark-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('cms/app-assets/css-rtl/themes/bordered-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('cms/app-assets/css-rtl/themes/semi-dark-layout.min.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('cms/app-assets/css-rtl/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('cms/app-assets/css-rtl/pages/dashboard-ecommerce.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('cms/app-assets/css-rtl/plugins/charts/chart-apex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('cms/app-assets/css-rtl/plugins/extensions/ext-component-toastr.min.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('cms/app-assets/css-rtl/custom-rtl.min.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('cms/assets/css/style-rtl.css')}}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <!-- END: Custom CSS-->
    @yield('styles')
  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
      <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
          <ul class="nav navbar-nav d-xl-none">
            <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
          </ul>
          <ul class="nav navbar-nav bookmark-icons">
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
          </ul>
          <ul class="nav navbar-nav">
            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon text-warning" data-feather="star"></i></a>
              <div class="bookmark-input search-input">
                <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                <ul class="search-list search-list-bookmark"></ul>
              </div>
            </li>
          </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">
          <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="javascript:void(0);" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="javascript:void(0);" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="javascript:void(0);" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="javascript:void(0);" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
          </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
          <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
            <div class="search-input">
              <div class="search-input-icon"><i data-feather="search"></i></div>
              <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="search">
              <div class="search-input-close"><i data-feather="x"></i></div>
              <ul class="search-list search-list-main"></ul>
            </div>
          </li>

          <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="bell"></i></a>
            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
              <li class="dropdown-menu-header">
                <div class="dropdown-header d-flex">
                  <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                </div>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">{{auth('web')->user()->name}}</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="{{asset('cms/app-assets/images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user"><a class="dropdown-item" href="page-profile.html"><i class="mr-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href="app-email.html"><i class="mr-50" data-feather="mail"></i> Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="mr-50" data-feather="check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="mr-50" data-feather="message-square"></i> Chats</a>
                <form id="frm-logout" action="{{route('logout')}}" method="post">
                    {{csrf_field()}}
                    <button class="dropdown-item" type="submit" style="margin-left: 20px"><i class="fas fa-sign-out-alt"></i>Logout</button>
                </form>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
      <li class="d-flex align-items-center"><a href="javascript:void(0);">
          <h6 class="section-label mt-75 mb-0">Files</h6></a></li>
      <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
          <div class="d-flex">
            <div class="mr-75"><img src="{{asset('cms/app-assets/images/icons/xls.png')}}" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
            </div>
          </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small></a></li>
      <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
          <div class="d-flex">
            <div class="mr-75"><img src="{{asset('cms/app-assets/images/icons/jpg.png')}}" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
            </div>
          </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small></a></li>
      <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
          <div class="d-flex">
            <div class="mr-75"><img src="{{asset('cms/app-assets/images/icons/pdf.png')}}" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
            </div>
          </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small></a></li>
      <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
          <div class="d-flex">
            <div class="mr-75"><img src="{{asset('cms/app-assets/images/icons/doc.png')}}" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
            </div>
          </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small></a></li>
      <li class="d-flex align-items-center"><a href="javascript:void(0);">
          <h6 class="section-label mt-75 mb-0">Members</h6></a></li>
      <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
          <div class="d-flex align-items-center">
            <div class="avatar mr-75"><img src="{{asset('cms/app-assets/images/portrait/small/avatar-s-8.jpg')}}" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
          <div class="d-flex align-items-center">
            <div class="avatar mr-75"><img src="{{asset('cms/app-assets/images/portrait/small/avatar-s-1.jpg')}}" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
          <div class="d-flex align-items-center">
            <div class="avatar mr-75"><img src="{{asset('cms/app-assets/images/portrait/small/avatar-s-14.jpg')}}" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
          <div class="d-flex align-items-center">
            <div class="avatar mr-75"><img src="{{asset('cms/app-assets/images/portrait/small/avatar-s-6.jpg')}}" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
            </div>
          </div></a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
      <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
          <div class="d-flex justify-content-start"><span class="mr-75" data-feather="alert-circle"></span><span>No results found.</span></div></a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/rtl/vertical-collapsed-menu-template/index.html"><span class="brand-logo">
                <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                  <defs>
                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                      <stop stop-color="#000000" offset="0%"></stop>
                      <stop stop-color="#FFFFFF" offset="100%"></stop>
                    </lineargradient>
                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                      <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                      <stop stop-color="#FFFFFF" offset="100%"></stop>
                    </lineargradient>
                  </defs>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                      <g id="Group" transform="translate(400.000000, 178.000000)">
                        <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                        <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                        <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                        <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                        <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                      </g>
                    </g>
                  </g>
                </svg></span>
              <h2 class="brand-text">عقارات غزة</h2></a></li>
          <li class="nav-item nav-toggle"><a href="#" class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">الرئيسية</span></a>
            <ul class="menu-content">
            </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fas fa-users-cog"></i><span class="menu-title text-truncate" data-i18n="Invoice">مدراء النظام</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('admins.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">عرض مدراء النظام</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="{{route('admins.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">اضافة مدراء النظام</span></a>
              </li>
            </ul>
          </li>

          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fas fa-users"></i><span class="menu-title text-truncate" data-i18n="Invoice">أصحاب العقارات</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('owner.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">عرض أصحاب العقارات</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="{{route('owner.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">اضافة اصحاب العقارات</span></a>
              </li>
            </ul>
          </li>
          {{-- @canany(['اضافة مدن','عرض المدن']) --}}
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fas fa-map-marker-alt"></i><span class="menu-title text-truncate" data-i18n="Invoice">المدن</span></a>
            <ul class="menu-content">
                @can('عرض المدن')
              <li><a class="d-flex align-items-center" href="{{route('cities.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">عرض المدن</span></a>
              </li>
                 @endcan
                 @can('اضافة مدن')
              <li><a class="d-flex align-items-center" href="{{route('cities.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">اضافةالمدن</span></a>
              </li>
              @endcan
            </ul>
          </li>
          {{-- @endcanany --}}
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fas fa-building"></i><span class="menu-title text-truncate" data-i18n="Invoice"> الممتلكات</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('property.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">عرض الممتلكات </span></a>
              </li>
              <li><a class="d-flex align-items-center" href="{{route('property.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">اضافة الممتلكات</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fas fa-store-alt"></i><span class="menu-title text-truncate" data-i18n="Invoice"> الشقق</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('apartments.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">عرض الشقق </span></a>
              </li>
              <li><a class="d-flex align-items-center" href="{{route('apartments.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">اضافة الشقق</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fas fa-road"></i><span class="menu-title text-truncate" data-i18n="Invoice"> الاراضي</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('lands.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">عرض الاراضي </span></a>
              </li>
              <li><a class="d-flex align-items-center" href="{{route('lands.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">اضافة الاراضي</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fas fa-landmark"></i><span class="menu-title text-truncate" data-i18n="Invoice"> الشاليهات</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('chalet.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">عرض الشاليهات </span></a>
              </li>
              <li><a class="d-flex align-items-center" href="{{route('chalet.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">اضافة شاليهات</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fas fa-shopping-cart"></i><span class="menu-title text-truncate" data-i18n="Invoice">المتاجر</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('store.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">عرض المتاجر </span></a>
              </li>
              <li><a class="d-flex align-items-center" href="{{route('store.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">اضافة متاجر</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fas fa-file-signature"></i><span class="menu-title text-truncate" data-i18n="Invoice"> عقود الايجار</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('rent.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">عرض عقود الايجار </span></a>
              </li>
              <li><a class="d-flex align-items-center" href="{{route('rent.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">اضافة عقود ايجار</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fas fa-images"></i><span class="menu-title text-truncate" data-i18n="Invoice"> صور الممتلكات</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route(('images.index'))}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">عرض صور الممتلكات </span></a>
              </li>
              <li><a class="d-flex align-items-center" href="{{route('images.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">اضافة صور الممتلكات</span></a>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span>الأدوار الصلاحيات</span><i data-feather="more-horizontal"></i>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="nav-icon fas fa-user-tag"></i><span class="menu-title text-truncate" data-i18n="Invoice">الأدوار </span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('roles.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List"> عرض الأدوار</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="{{route('roles.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">اضافة الأدوار</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="nav-icon fas fa-magic"></i><span class="menu-title text-truncate" data-i18n="Invoice"> الصلاحيات</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('permissions.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List"> عرض الصلاحيات</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="{{route('permissions.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">اضافة صلاحيات</span></a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        @yield('content')
<!-- Dashboard Ecommerce ends -->

        </div>
      </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <div class="customizer d-none d-md-block"><a class="customizer-toggle d-flex align-items-center justify-content-center" href="javascript:void(0);"><i class="spinner" data-feather="settings"></i></a><div class="customizer-content">
  <!-- Customizer header -->
  <div class="customizer-header px-2 pt-1 pb-0 position-relative">
    <h4 class="mb-0">Theme Customizer</h4>
    <p class="m-0">Customize & Preview in Real Time</p>

    <a class="customizer-close" href="javascript:void(0);"><i data-feather="x"></i></a>
  </div>

  <hr />

  <!-- Styling & Text Direction -->
  <div class="customizer-styling-direction px-2">
    <p class="font-weight-bold">Skin</p>
    <div class="d-flex">
      <div class="custom-control custom-radio mr-1">
        <input
          type="radio"
          id="skinlight"
          name="skinradio"
          class="custom-control-input layout-name"
          checked
          data-layout=""
        />
        <label class="custom-control-label" for="skinlight">Light</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input
          type="radio"
          id="skinbordered"
          name="skinradio"
          class="custom-control-input layout-name"
          data-layout="bordered-layout"
        />
        <label class="custom-control-label" for="skinbordered">Bordered</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input
          type="radio"
          id="skindark"
          name="skinradio"
          class="custom-control-input layout-name"
          data-layout="dark-layout"
        />
        <label class="custom-control-label" for="skindark">Dark</label>
      </div>
      <div class="custom-control custom-radio">
        <input
          type="radio"
          id="skinsemidark"
          name="skinradio"
          class="custom-control-input layout-name"
          data-layout="semi-dark-layout"
        />
        <label class="custom-control-label" for="skinsemidark">Semi Dark</label>
      </div>
    </div>
  </div>

  <hr />

  <!-- Menu -->
  <div class="customizer-menu px-2">
    <div id="customizer-menu-collapsible" class="d-flex">
      <p class="font-weight-bold mr-auto m-0">Menu Collapsed</p>
      <div class="custom-control custom-control-primary custom-switch">
        <input type="checkbox" class="custom-control-input" id="collapse-sidebar-switch" />
        <label class="custom-control-label" for="collapse-sidebar-switch"></label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Layout Width -->
  <div class="customizer-footer px-2">
    <p class="font-weight-bold">Layout Width</p>
    <div class="d-flex">
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="layout-width-full" name="layoutWidth" class="custom-control-input" checked />
        <label class="custom-control-label" for="layout-width-full">Full Width</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="layout-width-boxed" name="layoutWidth" class="custom-control-input" />
        <label class="custom-control-label" for="layout-width-boxed">Boxed</label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Navbar -->
  <div class="customizer-navbar px-2">
    <div id="customizer-navbar-colors">
      <p class="font-weight-bold">Navbar Color</p>
      <ul class="list-inline unstyled-list">
        <li class="color-box bg-white border selected" data-navbar-default=""></li>
        <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
        <li class="color-box bg-secondary" data-navbar-color="bg-secondary"></li>
        <li class="color-box bg-success" data-navbar-color="bg-success"></li>
        <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
        <li class="color-box bg-info" data-navbar-color="bg-info"></li>
        <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
        <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
      </ul>
    </div>

    <p class="navbar-type-text font-weight-bold">Navbar Type</p>
    <div class="d-flex">
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="nav-type-floating" name="navType" class="custom-control-input" checked />
        <label class="custom-control-label" for="nav-type-floating">Floating</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="nav-type-sticky" name="navType" class="custom-control-input" />
        <label class="custom-control-label" for="nav-type-sticky">Sticky</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="nav-type-static" name="navType" class="custom-control-input" />
        <label class="custom-control-label" for="nav-type-static">Static</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="nav-type-hidden" name="navType" class="custom-control-input" />
        <label class="custom-control-label" for="nav-type-hidden">Hidden</label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Footer -->
  <div class="customizer-footer px-2">
    <p class="font-weight-bold">Footer Type</p>
    <div class="d-flex">
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="footer-type-sticky" name="footerType" class="custom-control-input" />
        <label class="custom-control-label" for="footer-type-sticky">Sticky</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="footer-type-static" name="footerType" class="custom-control-input" checked />
        <label class="custom-control-label" for="footer-type-static">Static</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="footer-type-hidden" name="footerType" class="custom-control-input" />
        <label class="custom-control-label" for="footer-type-hidden">Hidden</label>
      </div>
    </div>
  </div>
</div>

    </div>
    <!-- End: Customizer-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2021<a class="ml-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('cms/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('cms/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('cms/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('cms/app-assets/js/core/app-menu.min.js')}}"></script>
    <script src="{{asset('cms/app-assets/js/core/app.min.js')}}"></script>
    <script src="{{asset('cms/app-assets/js/scripts/customizer.min.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    {{-- <script src="{{asset('cms/app-assets/js/scripts/pages/dashboard-ecommerce.min.js')}}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{asset('Js/crud.js')}}"></script>
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
    @yield('scripts')
  </body>
  <!-- END: Body-->
</html>
