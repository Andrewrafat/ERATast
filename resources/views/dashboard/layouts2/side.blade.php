
@if(__('lang.directiontext') == "rtl" )
      <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/style.css">
@endif

@if(__('lang.directiontext') == "ltr" )
      <link rel="stylesheet" type="text/css" href="/app-assets/css/style-ltr.css">
@endif

{{-- @dd(auth()->user()) --}}
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto"><a class="navbar-brand" href="/">

        @php
            $settings = DB::table('general_settings')->first();

        @endphp

      <img src="{{isset($settings->logo)?($settings->logo):"/upload/logo.png" }}" class="round" style="width:40px" alt="">
       <h2 class="brand-text mb-0"> {{ isset($settings->app_name)?($settings->app_name):"MobiCard" }}</h2>
        </a>
      </li>
      <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
            class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
            class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
            data-ticon="icon-disc"></i></a>
      </li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


      {{-- @can("dashboard.page") --}}
      @if(auth()->user()->can("dashboard.page"))
      <li class="nav-category-divider  @if($titleofpage == __('lang.control_panel'))  active @endif" style="font-size:15px">
        <a href="/dashboard"><span
            class="link-title">{{ __('lang.control_panel') }}</span>
            @if($titleofpage == __('lang.control_panel'))
                <img class="img-fluid" src="/app-assets/images/nav-icons/Home.png">
             @else
                <img class="img-fluid" src="/app-assets/images/nav-icons/Grey (6).png">
             @endif

        </a>
      </li>
      @endif
      @can("dashboard.options")
      <li class="nav-category-divider  @if($titleofpage == __('lang.options'))  active @endif" style="font-size:15px">
        <a href="/options"><span
            class="link-title">{{ __('lang.options') }}</span>
            @if($titleofpage == __('lang.options'))
                <img class="img-fluid" src="/app-assets/images/nav-icons/Home.png">
             @else
                <img class="img-fluid" src="/app-assets/images/nav-icons/Grey (6).png">
             @endif

        </a>
      </li>
      @endcan
      @can("dashboard.options-reports")
      <li class="nav-category-divider  @if($titleofpage == __('lang.options-reports'))  active @endif" style="font-size:15px">
        <a href="/options-reports"><span
            class="link-title">{{ __('lang.options-reports') }}</span>
            @if($titleofpage == __('lang.options-reports'))
                <img class="img-fluid" src="/app-assets/images/nav-icons/Home.png">
             @else
                <img class="img-fluid" src="/app-assets/images/nav-icons/Grey (6).png">
             @endif

        </a>
      </li>
      @endcan
      @can("dashboard.all_reports")
      <li class="nav-category-divider  @if($titleofpage == __('lang.reports'))  active @endif" style="font-size:15px">
        <a href="/all_reports"><span
            class="link-title">{{ __('lang.reports') }}</span>
            @if($titleofpage == __('lang.reports'))
                <img class="img-fluid" src="/app-assets/images/nav-icons/Home.png">
             @else
                <img class="img-fluid" src="/app-assets/images/nav-icons/Grey (6).png">
             @endif

        </a>
      </li>
      @endcan


      @can("dashboard.sliders")
      <li class="nav-category-divider  @if($titleofpage == __('lang.sliders'))  active @endif" style="font-size:15px">
        <a href="/sliders"><span
            class="link-title">{{ __('lang.sliders') }}</span>
             @if($titleofpage == __('lang.sliders'))
                <img class="img-fluid" src="/app-assets/images/nav-icons/Group 130.png">
             @else
                <img class="img-fluid" src="/app-assets/images/nav-icons/Grey (4).png">
             @endif
        </a>
      </li>
      @endcan
      @can("dashboard.groups")
      <li class="nav-category-divider  @if($titleofpage == __('lang.groups'))  active @endif" style="font-size:15px">
      </a>
        <a href="/groups"><span
            class="link-title">{{ __('lang.groups') }}</span>
            @if($titleofpage == __('lang.groups'))
                <img class="img-fluid" src="/app-assets/images/nav-icons/categories.png">
             @else
                <img class="img-fluid" src="/app-assets/images/nav-icons/Grey (1).png">
             @endif
        </a>
      </li>
      @endcan

      @can("dashboard.categories")

      <li class="nav-category-divider  @if($titleofpage == __('lang.categories'))  active @endif" style="font-size:15px">
          <a href="/categories"><span
            class="link-title">{{ __('lang.categories') }}</span>
            @if($titleofpage == __('lang.categories'))
                <img class="img-fluid" src="/app-assets/images/nav-icons/categories.png">
             @else
                <img class="img-fluid" src="/app-assets/images/nav-icons/Grey (1).png">
             @endif
        </a>
      </li>
      @endcan
      @can("dashboard.allSubCategories")

        <li class="nav-category-divider  @if($titleofpage == __('lang.allSubCategories'))  active @endif" style="font-size:15px">
            <a href="/sub-categories"><span
                    class="link-title">{{ __('lang.allSubCategories') }}</span>
                @if($titleofpage == __('lang.allSubCategories'))
                    <img class="img-fluid" src="/app-assets/images/nav-icons/Group 122.png">
                @else
                    <img class="img-fluid" src="/app-assets/images/nav-icons/Grey (3).png">
                @endif
            </a>
        </li>
      @endcan
      @can("dashboard.products")
      <li class="nav-category-divider  @if($titleofpage == __('lang.products'))  active @endif" style="font-size:15px">
        <a href="/products"><span
          class="link-products">{{ __('lang.products') }}</span>
          @if($titleofpage == __('lang.products'))
                <img class="img-fluid" src="/app-assets/images/nav-icons/Group 98.png">
             @else
                <img class="img-fluid" src="/app-assets/images/nav-icons/Grey (2).png">
             @endif
      </a>
      </li>
      @endcan
      @can("dashboard.orders")
      <li class="nav-category-divider  @if($titleofpage == __('lang.orders'))  active @endif" style="font-size:15px">
      <a href="/orders"><span
        class="link-title">{{ __('lang.orders') }}</span>
        @if($titleofpage == __('lang.orders'))
              <img class="img-fluid" src="/app-assets/images/nav-icons/Group 122.png">
            @else
              <img class="img-fluid" src="/app-assets/images/nav-icons/Grey (3).png">
            @endif
      </a>
      </li>
      @endcan
      @can("dashboard.payments")

      <li class="nav-category-divider  @if($titleofpage == __('lang.payments'))  active @endif" style="font-size:15px">
        <a href="/payments"><span
          class="link-title">{{ __('lang.payments') }}</span>
          @if($titleofpage == __('lang.payments'))
              <img class="img-fluid" src="/app-assets/images/nav-icons/Group 135.png">
            @else
              <img class="img-fluid" src="/app-assets/images/nav-icons/Grey (5).png">
            @endif
          </a>
      </li>
      @endcan
      @can("dashboard.payment-transfers")

      <li class="nav-category-divider  @if($titleofpage == __('lang.payment-transfers'))  active @endif" style="font-size:15px">
        <a href="/payment-transfers"><span
          class="link-title">{{ __('lang.payment-transfers') }}</span>
          @if($titleofpage == __('lang.payment-transfers'))
              <img class="img-fluid" src="/app-assets/images/nav-icons/Group 135.png">
            @else
              <img class="img-fluid" src="/app-assets/images/nav-icons/Grey (5).png">
            @endif
          </a>
      </li>
      @endcan



      @can("dashboard.users")

      <li class="nav-category-divider  @if($titleofpage == __('lang.users'))  active @endif" style="font-size:15px">
        <a href="/users/-1"><span
          class="link-title">{{ __('lang.users') }}</span>
          @if($titleofpage == __('lang.users'))
              <img class="img-fluid" src="/app-assets/images/nav-icons/user.png">
            @else
              <img class="img-fluid" src="/app-assets/images/nav-icons/Grey (7).png">
            @endif
          </a>
      </li>
      @endcan



        <li class="nav-category-divider  @if ($titleofpage==__('lang.trader_users')) active @endif" style="font-size:15px">
            <a href="/traders"><span class="link-title">{{ __('lang.trader_users') }}</span>
                @if ($titleofpage == __('lang.trader_users'))
                    <img class="img-fluid" src="/app-assets/images/nav-icons/user.png">
                @else
                    <img class="img-fluid" src="/app-assets/images/nav-icons/Grey (7).png">
                @endif
            </a>
        </li>
      {{-- @can("dashboard.traders")

      <li class="nav-category-divider  @if($titleofpage == __('lang.traders'))  active @endif" style="font-size:15px">
        <a href="/traders"><span
          class="link-title">{{ __('lang.traders') }}</span>
          @if($titleofpage == __('lang.traders'))
              <img class="img-fluid" src="/app-assets/images/nav-icons/user.png">
            @else
              <img class="img-fluid" src="/app-assets/images/nav-icons/Grey (7).png">
            @endif
          </a>
      </li>
      @endcan --}}
      {{-- @can("dashboard.points")

      <li class="nav-category-divider  @if($titleofpage == __('lang.points'))  active @endif" style="font-size:15px">
        <a href="/points"><span
          class="link-title">{{ __('lang.points') }}</span>
          @if($titleofpage == __('lang.points'))
                <img class="img-fluid" src="/app-assets/images/nav-icons/Group 135.png">
            @else
                <img class="img-fluid" src="/app-assets/images/nav-icons/Grey (5).png">
            @endif
        </a>
      </li>
      @endcan --}}
      @can("dashboard.requestedOrders")
      <li class="nav-category-divider  @if($titleofpage == __('lang.requestedOrders'))  active @endif" style="font-size:15px">
        <a href="/requested_orders"><span
          class="link-title">{{ __('lang.requestedOrders') }}</span>
          @if($titleofpage == __('lang.requestedOrders'))
              <img class="img-fluid" src="/app-assets/images/nav-icons/Group 122.png">
            @else
              <img class="img-fluid" src="/app-assets/images/nav-icons/Grey (3).png">
            @endif
          </a>
      </li>
      @endcan
      @can("dashboard.notifications")
      <li class="nav-category-divider  @if($titleofpage == __('lang.notifications'))  active @endif" style="font-size:15px">
        <a href="/notifications"><span
          class="link-title">{{ __('lang.notifications') }}</span>
          @if($titleofpage == __('lang.notifications'))
              <i class="fa fa-bell"></i>
            @else
              <i class="fa fa-bell"></i>
            @endif
          </a>
      </li>
      @endcan
      @can("dashboard.general-settings")
      <li class="nav-category-divider  @if($titleofpage == __('lang.general-settings'))  active @endif" style="font-size:15px">
        <a href="/general-settings"><span
          class="link-title">{{ __('lang.general-settings') }}</span>
          @if($titleofpage == __('lang.general-settings'))
            <i class="fas fa-sliders-h"></i>
          @else
            <i class="fas fa-sliders-h"></i>
          @endif
          </a>
      </li>
      @endcan
      @can("dashboard.payment_transfers")
      <li class="nav-category-divider  @if($titleofpage == __('lang.payment_transfers'))  active @endif" style="font-size:15px">
        <a href="/payment_transfers"><span
          class="link-title">{{ __('lang.payment_transfers') }}</span>
          @if($titleofpage == __('lang.payment_transfers'))
            <i class="fas fa-sliders-h"></i>
          @else
            <i class="fas fa-sliders-h"></i>
          @endif
          </a>
      </li>
      @endcan

      @can("dashboard.payment_ways")
      <li class="nav-category-divider  @if($titleofpage == __('lang.payment_ways'))  active @endif" style="font-size:15px">
        <a href="/payment_ways"><span
          class="link-title">{{ __('lang.payment_ways') }}</span>
          @if($titleofpage == __('lang.payment_ways'))
            <i class="fas fa-sliders-h"></i>
          @else
            <i class="fas fa-sliders-h"></i>
          @endif
          </a>
      </li>
      @endcan

      @can("dashboard.Roles_Permissions")
      {{-- @if(auth()->user()->hasRole('admin')) --}}
      <li class="nav-category-divider " >
            <span
            class="link-title">{{ __('lang.Roles&Permissions') }}</span>
      </li>
      @endcan
      @can("dashboard.roles")
      <li class="nav-category-divider  @if($titleofpage == __('lang.roles'))  active @endif" style="font-size:15px">
          <a href="/roles"><span
            class="link-title">{{ __('lang.roles') }}</span>
            <i class="fas fa-comment-medical"aria-hidden="true"></i>
            </a>
      </li>
      @endcan
      @can("dashboard.permissions")
      <li class="nav-category-divider  @if($titleofpage == __('lang.permissions'))  active @endif" style="font-size:15px">
          <a href="/permissions"><span
            class="link-title">{{ __('lang.permissions') }}</span>
            <i class="fas fa-comment-medical"aria-hidden="true"></i>
            </a>
      </li>
      @endcan
      @can("dashboard.permission_roles")
      <li class="nav-category-divider  @if($titleofpage == __('lang.permission_roles'))  active @endif" style="font-size:15px">
          <a href="/permission_roles"><span
            class="link-title">{{ __('lang.permission_roles') }}</span>
            <i class="fas fa-comment-medical"aria-hidden="true"></i>
            </a>
      </li>
      @endcan
    {{-- @endif --}}








    </ul>
  </div>
</div>
<!-- END: Main Menu-->
