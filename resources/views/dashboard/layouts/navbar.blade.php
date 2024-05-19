<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flash</title>
</head>

<body>

    <nav
        class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">

                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block">
                        <div class="bookmark-input search-input">
                            <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                            <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0"
                                data-search="search">
                            <ul class="search-list search-list-bookmark"></ul>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">
                {{-- <li class="nav-item dropdown dropdown-language">

                @if (session()->get('locale') == 'en')
                    <a class="nav-link dropdown-toggle" id="dropdown-flag" href="" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us">
                        @else
                            <a class="nav-link dropdown-toggle" id="dropdown-flag" href="" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-eg">
                @endif
                </i>
                @if (session()->get('locale') == 'en')
                    <span class="selected-language">English</span>
                @else
                    <span class="selected-language">Arabic</span>
                @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag"><a class="dropdown-item"
                        href="lang/en" data-language="en">
                        <i class="flag-icon flag-icon-us"></i> English</a>
                    <a class="dropdown-item" href="lang/ar" data-language="ar"><i class="flag-icon flag-icon-eg"></i>
                        Arabic</a>
                </div>
            </li>
            <span>{{ session()->get('locale') }}</span>
            </li> --}}



                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
                            data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Explore dahboard..."
                            tabindex="-1" data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                </li>
                {{-- <li class="nav-item dropdown dropdown-cart mr-25"><a class="nav-link" href="javascript:void(0);"
                    data-toggle="dropdown"><i class="ficon" data-feather="shopping-cart"></i><span
                        class="badge badge-pill badge-primary badge-up cart-item-count">6</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 mr-auto">My Cart</h4>
                            <div class="badge badge-pill badge-light-primary">4 Items</div>
                        </div>
                    </li>
                    <li class="scrollable-container media-list">
                        <div class="media align-items-center"><img class="d-block rounded mr-1"
                                src="../../../app-assets/images/pages/eCommerce/1.png" alt="donuts" width="62">
                            <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body"
                                            href="app-ecommerce-details.html"> Apple watch 5</a></h6><small
                                        class="cart-item-by">By Apple</small>
                                </div>
                                <div class="cart-item-qty">
                                    <div class="input-group">
                                        <input class="touchspin-cart" type="number" value="1">
                                    </div>
                                </div>
                                <h5 class="cart-item-price">$374.90</h5>
                            </div>
                        </div>
                        <div class="media align-items-center"><img class="d-block rounded mr-1"
                                src="../../../app-assets/images/pages/eCommerce/7.png" alt="donuts" width="62">
                            <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body"
                                            href="app-ecommerce-details.html"> Google Home Mini</a></h6><small
                                        class="cart-item-by">By Google</small>
                                </div>
                                <div class="cart-item-qty">
                                    <div class="input-group">
                                        <input class="touchspin-cart" type="number" value="3">
                                    </div>
                                </div>
                                <h5 class="cart-item-price">$129.40</h5>
                            </div>
                        </div>
                        <div class="media align-items-center"><img class="d-block rounded mr-1"
                                src="../../../app-assets/images/pages/eCommerce/2.png" alt="donuts" width="62">
                            <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body"
                                            href="app-ecommerce-details.html"> iPhone 11 Pro</a></h6><small
                                        class="cart-item-by">By Apple</small>
                                </div>
                                <div class="cart-item-qty">
                                    <div class="input-group">
                                        <input class="touchspin-cart" type="number" value="2">
                                    </div>
                                </div>
                                <h5 class="cart-item-price">$699.00</h5>
                            </div>
                        </div>
                        <div class="media align-items-center"><img class="d-block rounded mr-1"
                                src="../../../app-assets/images/pages/eCommerce/3.png" alt="donuts" width="62">
                            <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body"
                                            href="app-ecommerce-details.html"> iMac Pro</a></h6><small
                                        class="cart-item-by">By Apple</small>
                                </div>
                                <div class="cart-item-qty">
                                    <div class="input-group">
                                        <input class="touchspin-cart" type="number" value="1">
                                    </div>
                                </div>
                                <h5 class="cart-item-price">$4,999.00</h5>
                            </div>
                        </div>
                        <div class="media align-items-center"><img class="d-block rounded mr-1"
                                src="../../../app-assets/images/pages/eCommerce/5.png" alt="donuts" width="62">
                            <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body"
                                            href="app-ecommerce-details.html"> MacBook Pro</a></h6><small
                                        class="cart-item-by">By Apple</small>
                                </div>
                                <div class="cart-item-qty">
                                    <div class="input-group">
                                        <input class="touchspin-cart" type="number" value="1">
                                    </div>
                                </div>
                                <h5 class="cart-item-price">$2,999.00</h5>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown-menu-footer">
                        <div class="d-flex justify-content-between mb-1">
                            <h6 class="font-weight-bolder mb-0">Total:</h6>
                            <h6 class="text-primary font-weight-bolder mb-0">$10,999.00</h6>
                        </div><a class="btn btn-primary btn-block" href="app-ecommerce-checkout.html">Checkout</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);"
                    data-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span
                        class="badge badge-pill badge-danger badge-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                            <div class="badge badge-pill badge-light-primary">6 New</div>
                        </div>
                    </li>
                    <li class="scrollable-container media-list"><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar"><img
                                            src="../../../app-assets/images/portrait/small/avatar-s-15.jpg"
                                            alt="avatar" width="32" height="32"></div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Congratulation Sam
                                            🎉</span>winner!</p><small class="notification-text"> Won the monthly best
                                        seller badge.</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar"><img
                                            src="../../../app-assets/images/portrait/small/avatar-s-3.jpg"
                                            alt="avatar" width="32" height="32"></div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">New
                                            message</span>&nbsp;received</p><small class="notification-text"> You have
                                        10 unread messages</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-danger">
                                        <div class="avatar-content">MD</div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Revised Order
                                            👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc. order
                                        updated</small>
                                </div>
                            </div>
                        </a>
                        <div class="media d-flex align-items-center">
                            <h6 class="font-weight-bolder mr-auto mb-0">System Notifications</h6>
                            <div class="custom-control custom-control-primary custom-switch">
                                <input class="custom-control-input" id="systemNotification" type="checkbox"
                                    checked="">
                                <label class="custom-control-label" for="systemNotification"></label>
                            </div>
                        </div><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-danger">
                                        <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Server
                                            down</span>&nbsp;registered</p><small class="notification-text"> USA Server
                                        is down due to hight CPU usage</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-success">
                                        <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Sales
                                            report</span>&nbsp;generated</p><small class="notification-text"> Last
                                        month sales report generated</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-warning">
                                        <div class="avatar-content"><i class="avatar-icon"
                                                data-feather="alert-triangle"></i></div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">High
                                            memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server
                                        using high memory</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block"
                            href="javascript:void(0)">Read all notifications</a></li>
                </ul>
            </li> --}}
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="true">
                        <div class="user-nav d-sm-flex d-none"><span
                                class="user-name font-weight-bolder">@auth{{ Auth::user()->name }}

                            @endauth
                        </span><span class="user-status">Admin</span></div><span class="avatar"><img class="round"
                            src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar"
                            height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                    <li class="dropdown-menu-header">
                        <form action="/admin-logout" method="post" style="text-align: center;">
                            @csrf
                            <input type="submit" value="Logout"
                                style="background: transparent;
                            border: none;">
                        </form>
                    </li>
                </ul>

            </li>
        </ul>
    </div>
</nav>
