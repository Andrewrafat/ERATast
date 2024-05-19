<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout"
    @if (app()->getLocale() === 'ar') data-textdirection="rtl" @else data-textdirection="ltr" @endif>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="/all.min.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    {{--    <meta name="author" content="SOLID SOLUTIONS"> --}}
    <title>{{ $titleofpage }}</title>
    <link rel="icon" type="image/png" href="{{ asset('login/logoPNG.jpg') }}">

    {{--    <link rel="apple-touch-icon" href="{{isset($settings->logo)?($settings->logo):"/images/6586cb1edc705.png" }}">
    --}}
    {{--    <link rel="shortcut icon" href="{{isset($settings->logo)?($settings->logo):"/images/6586cb1edc705.png" }}">
    --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" />

    @if (app()->getLocale() === 'ar')
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/vendors/css/vendors-rtl.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/vendors/css/extensions/toastr.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/css-rtl/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/css-rtl/bootstrap-extended.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/css-rtl/colors.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/css-rtl/components.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/css-rtl/themes/dark-layout.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/css-rtl/themes/bordered-layout.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/css-rtl/themes/semi-dark-layout.css">

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('/app-assets') }}/css-rtl/core/menu/menu-types/vertical-menu.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/css-rtl/pages/app-ecommerce.css">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('/app-assets') }}/css-rtl/plugins/extensions/ext-component-toastr.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/css-rtl/custom-rtl.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
        <!-- END: Custom CSS-->
    @else
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('/app-assets') }}/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('/app-assets') }}/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('/app-assets') }}/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/css/bootstrap-extended.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/css/colors.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/css/components.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/css/themes/dark-layout.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/css/themes/bordered-layout.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/css/themes/semi-dark-layout.css">

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('/app-assets') }}/css/core/menu/menu-types/vertical-menu.css">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('/app-assets') }}/css/plugins/forms/form-validation.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/css/pages/app-user.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
        <!-- END: Custom CSS-->
    @endif
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/app-assets') }}/fonts/font-awesome/css/font-awesome.css">
    @if (__('lang.directiontext') == 'rtl')
        <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/css-rtl/style.css">
    @endif
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets') }}/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/dist/toastr.min.css">

    <!-- ... (existing content) ... -->

    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/dist/toastr.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

</head>
<style>
    .select2-selection__arrow {
        display: none !important;
    }
</style>
<style>
    .btn-primary {
        background-color: #042956 !important;
    }

    .btn-primary:active,
    .btn-primary:focus {
        background-color: #042956 !important;
    }

    .btn-danger {
        background-color: #E6882B !important;
    }

    .btn-danger:active,
    .btn-danger:focus {
        background-color: #E6882B !important;
    }

    .btn-primary:hover {
        box-shadow: 0 8px 25px -8px #042956 !important;
    }

    .btn-danger:hover {
        box-shadow: 0 8px 25px -8px #E6882B !important;
    }

    .btn-primary {
        border-color: #042956 !important;
    }

    .btn-danger {
        border-color: #E6882B !important;
    }

    .main-menu.menu-light .navigation>li.active>a {
        background: #E6882B !important;
        box-shadow: 0 0 10px 1px rgba(230, 136, 43, 0.7) !important;
    }

    .main-menu.menu-light .navigation>li.active>a:active {
        background: #E6882B !important;
        box-shadow: 0 0 10px 1px rgba(230, 136, 43, 0.7) !important;
    }

    .main-menu.menu-light .navigation>li.active>a:focus {
        background: #E6882B !important;
        box-shadow: 0 0 10px 1px rgba(230, 136, 43, 0.7) !important;
    }

    .main-menu.menu-dark .navigation>li.active>a {
        background: #E6882B !important;
        box-shadow: 0 0 10px 1px rgba(230, 136, 43, 0.7) !important;
    }

    .main-menu.menu-dark .navigation>li.active>a:active {
        background: #E6882B !important;
        box-shadow: 0 0 10px 1px rgba(230, 136, 43, 0.7) !important;
    }

    .main-menu.menu-dark .navigation>li.active>a:focus {
        background: #E6882B !important;
        box-shadow: 0 0 10px 1px rgba(230, 136, 43, 0.7) !important;
    }

    .main-menu.menu-light .navigation>li ul .active {
        background: #E6882B !important;
        box-shadow: 0 0 10px 1px rgba(230, 136, 43, 0.7) !important;
    }

    .main-menu.menu-dark .navigation>li ul .active {
        background: #E6882B !important;
        box-shadow: 0 0 10px 1px rgba(230, 136, 43, 0.7) !important;
    }

    .page-item.active .page-link {

        background-color: #E6882B !important;

    }

    .main-menu .navbar-header .navbar-brand .brand-text {
        color: #E6882B !important;
    }

    .orange {
        color: #E6882B !important;
    }
</style>

<body
    @if (app()->getLocale() === 'ar') class="vertical-layout vertical-menu-modern navbar-floating footer-static
    menu-expanded" data-open="click" data-menu="vertical-menu-modern" data-col=""@else class="vertical-layout
    vertical-menu-modern navbar-floating footer-static " data-open="click"
    data-menu="vertical-menu-modern" data-col="" @endif>
    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow container-xxl @if (session()->get('lang') === 'ar') navbar-arabic @endif">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i
                                class="ficon" data-feather="menu"></i></a></li>
                </ul>

            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">
                <li class="dropdown dropdown-language nav-item">
                    <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        @switch(session()->get('lang'))
                            @case('ar')
                                <span class="selected-language">{{ __('lang.languageAR') }}</span>
                            @break

                            @case('en')
                                <span class="selected-language">{{ __('lang.languageEN') }}</span>
                            @break

                            @default
                                <span class="selected-language">{{ __('lang.languageEN') }}</span>
                        @endswitch
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                        <a class="dropdown-item" href="{{ url('/setlang/ar') }}"> {{ __('lang.languageAR') }}</a>
                        <a class="dropdown-item" href="{{ url('/setlang/en') }}">
                            </i> {{ __('lang.languageEN') }}</a>
                    </div>
                </li>

                <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge badge-pill badge-danger badge-up" id="pillcount">0</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right" id="notificationbody">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                                <div class="badge badge-pill badge-light-primary"></div>
                            </div>
                        </li>
                         
                        <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="javascript:void(0)">Read all notifications</a></li>
                    </ul>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                            data-feather="sun"></i></a></li>





                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">
                                @if (app()->getLocale() == 'ar')
                                    Seo era
                                @else
                                    Seo era
                                @endif
                            </span><span class="user-status">Admin</span></div><span class="avatar">
                            @php
                                // $user = \App\Models\ConsaltantProfile::where('user_id', auth()->id())->first();
                            @endphp
{{-- 
                            @if ($user)
                                <img class="round" src="{{ asset('ConsultingOfficeLogo/' . $user->logo) }}"
                                    alt="avatar" height="40" width="40">
                            @else
                                <img class="round" src="{{ asset('/app-assets/images/mobicard/profile.png') }}"
                                    alt="avatar" height="40" width="40">
                            @endif --}}
                            <img class="round" src="{{ asset('/app-assets/images/mobicard/profile.png') }}"
                            alt="avatar" height="40" width="40">
                            <span class="avatar-status-online"></span>


                            <span class="avatar-status-online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                        {{--                        <a --}}
                        {{--                            class="dropdown-item" href="/profile"><i class="mr-50" data-feather="user"></i> --}}
                        {{--                            {{ __('lang.profile') }}</a> --}}

                        <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ url('/logout') }}"><i
                                class="mr-50" data-feather="power"></i> {{ __('lang.logout') }}</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ asset('/app-assets') }}/images/icons/xls.png" alt="png"
                            height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small
                            class="text-muted">Marketing
                            Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ asset('/app-assets') }}/images/icons/jpg.png" alt="png"
                            height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ asset('/app-assets') }}/images/icons/pdf.png" alt="png"
                            height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                            Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ asset('/app-assets') }}/images/icons/doc.png" alt="png"
                            height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img
                            src="{{ asset('/app-assets') }}/images/portrait/small/avatar-s-8.jpg" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img
                            src="{{ asset('/app-assets') }}/images/portrait/small/avatar-s-1.jpg" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img
                            src="{{ asset('/app-assets') }}/images/portrait/small/avatar-s-14.jpg" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                            Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img
                            src="{{ asset('/app-assets') }}/images/portrait/small/avatar-s-6.jpg" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75"
                        data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <span class="brand-logo">
            <img class="image" src="{{ asset('Group.png') }}" alt="Seo era" style="width: 150px; height: auto;">

        </span>

        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="/">
                        <h2 class="brand-text"> Seo era</h2>

                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                        <i class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary"
                            data-feather="disc" data-ticon="disc"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header "><span data-i18n="Apps &amp; Pages">{{ __('lang.home') }}</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item @if ($titleofpage == __('lang.main')) active @endif"> <a
                        class="d-flex align-items-center" href="{{ url('/main') }}">
                        <span>
                            <i class="fa fa-home"></i>
                        </span>
                        <span class="menu-title text-truncate" data-i18n="Dashboards">{{ __('lang.main') }}</span>
                    </a>
                </li>

                <li class=" nav-item @if ($titleofpage == __('lang.users')) active @endif"> <a
                        class="d-flex align-items-center" href="{{ url('/users') }}">
                        <span>
                            <i class="fa fa-address-card"></i>
                        </span>
                        <span class="menu-title text-truncate" data-i18n="Dashboards">{{ __('lang.users') }}</span>
                    </a>
                </li>


                <li class=" nav-item @if ($titleofpage == __('lang.Posts')) active @endif"> <a
                        class="d-flex align-items-center" href="{{ url('/posts') }}">
                        <span>
                            <i class="fa fa-address-card"></i>
                        </span>
                        <span class="menu-title text-truncate"
                            data-i18n="Dashboards">{{ __('lang.posts') }}</span>
                    </a>
                </li>

                



            </ul>
        </div>


    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <div class="modal modal-slide-in new-user-modal fade" id="addcharge-modal2" role="dialog"
                    aria-labelledby="adduserModalLabel" aria-hidden="true">
                    <div class="modal-dialog add-new-user modal-content pt-0" role="document">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                        <div class="modal-content">
                            <div class="modal-header mb-1">
                                <h4 class="modal-title text-uppercase" id="adduserModalLabel">{{ __('Add Charge') }}
                                </h4>
                            </div>
                            <div class="modal-body flex-grow-1">

                                <div class="form-group">
                                    <label for="userSelect">{{ __('lang.selectuser') }}</label>
                                    <select class="form-control" id="userSelect2">

                                    </select>


                                    <label for="add_points">{{ __('lang.value') }}</label>
                                    <input type="number" step="0.01"
                                        class="form-control solid_addpayment_required no_minus2" id="add_points2"
                                        min="0" />
                                </div>





                                <div class="modal-footer">
                                    <div class="add-data-btn  text-center align-self-center">
                                        <button class="btn btn-primary"
                                            id="addPoints3">{{ __('lang.data') }}</button>
                                    </div>
                                    <div class="cancel-data-btn  text-center align-self-center">
                                        <button class="btn btn-outline-danger"
                                            data-dismiss="modal">{{ __('lang.cancel') }}</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- BEGIN: Content-->
  