<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="SOLID SOLUTIONS">
    <title>{{$titleofpage}}</title>
    <link rel="apple-touch-icon" href="/app-assets-admin/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" href="/{!! asset('images/logo.png') !!}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets-admin/vendors/css/vendors.min.css">
      <link rel="stylesheet" type="text/css" href="/app-assets-admin/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets-admin/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets-admin/vendors/css/extensions/swiper.min.css">


    <!-- END: Vendor CSS-->
<!-- Theme included stylesheets -->
<link href="//cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.0.0/quill.bubble.css" rel="stylesheet">

<!-- Core build with no theme, formatting, non-essential modules -->
<link href="//cdn.quilljs.com/1.0.0/quill.core.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- BEGIN: Theme CSS-->

    <link rel="stylesheet" type="text/css" href="/app-assets-admin/css{{__('lang.directiontext') == "rtl" ? "-rtl":""}}/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets-admin/css{{__('lang.directiontext') == "rtl" ? "-rtl":""}}/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets-admin/css{{__('lang.directiontext') == "rtl" ? "-rtl":""}}/colors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets-admin/css{{__('lang.directiontext') == "rtl" ? "-rtl":""}}/components.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets-admin/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets-admin/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets-admin/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets-admin/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets-admin/css/plugins/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets-admin/css/plugins/extensions/swiper.min.css">
    <!-- END: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets-admin/css/pages/data-list-view.min.css">
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" type="text/css" href="/app-assets-admin/vendors/css/tables/datatable/datatables.min.css">

    <link rel="stylesheet" type="text/css" href="/app-assets-admin/css/print.min.css">

@if(__('lang.directiontext') == "rtl" )
      <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/style.css">
@endif


<script>

$( document ).ready(function() {
    $('.preloader').fadeOut(600 , function () {
      $('body').css('overflow', 'auto');
    });
    $('.load').fadeOut(500);
});
</script>


</head>
  <body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">


  <!-- start preloader section -->
  <div class="preloader">
    <div class="load">
      <hr/><hr/><hr/><hr/>
    </div>
  </div>
  <!-- end preloader section -->


  <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="navbar-collapse" id="navbar-mobile">
            <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
              <ul class="nav navbar-nav">
                <li class="nav-item d-none d-lg-block">
                </li>

              </ul>
            </div>
            <ul class="nav navbar-nav float-right">

              <li class="dropdown dropdown-language nav-item">
                  <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/profile">{{ __('lang.profile') }}</a>
                    <a class="dropdown-item" href="/logout">{{ __('lang.logout') }}</a>
                  </div>
              {{-- setlang/ar --}}
              {{-- setlang/en --}}
                 <li class="dropdown dropdown-language nav-item">
                    <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          @switch(session()->get('lang'))
                            @case("ar")
                              <span class="selected-language">{{ __('lang.languageAR') }}</span>
                              @break

                            @case("en")
                              <span class="selected-language">{{ __('lang.languageEN') }}</span>
                                @break
                            @default
                              <span class="selected-language">{{ __('lang.languageEN') }}</span>
                        @endswitch
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                      <a class="dropdown-item" href="/setlang/ar" > {{ __('lang.languageAR') }}</a>
                        <a class="dropdown-item" href="/setlang/en" >
                             </i> {{ __('lang.languageEN') }}</a>
                    </div>
              </li>


              <!-- Notify -->


              <li class="dropdown dropdown-user nav-item" id="showElement">
                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                  <span><img class="round" src="{{session()->get('userimage') != null  ? session()->get('userimage') : "/app-assets/images/mobicard/profile.png" }}" alt="avatar" height="40" width="40"></span>
                </a>
              </li>

{{--              <li class="dropdown dropdown-notification nav-item">--}}
{{--                <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">--}}
{{--                  <i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up badge-danger">0</span>--}}
{{--                </a>--}}
{{--              </li>--}}


            </ul>
          </div>
        </div>
      </div>
    </nav>


