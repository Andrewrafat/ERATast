   
<style>
  .fa:hover{
         color: #D1A54B;
          font-size: 2.9rem;
          -webkit-transform: scale(1.3);
          -ms-transform: scale(1.3);
          transform: scale(1.3);
  }
</style>
  <div id="print-content" style="display:none">
      <div style="text-align:center">
          <h2 id="fullName"></h2>
          <img id="BarCode">
      </div>

  </div>
  <!-- BEGIN: Customizer-->
  <div class="customizer  d-md-block"><a class="customizer-close" href="#"><i class="feather icon-x"></i></a><a class="customizer-toggle" href="#"><i class="feather icon-settings fa fa-spin fa-fw white"></i></a><div class="customizer-content p-2">
<h4 class="text-uppercase mb-0">Theme Customizer</h4>
<small>Customize & Preview in Real Time</small>
<hr>
<!-- Menu Colors Starts -->
<div id="customizer-theme-colors">
  <h5>Menu Colors</h5>
  <ul class="list-inline unstyled-list">
    <li class="color-box bg-primary selected" data-color="theme-primary"></li>
    <li class="color-box bg-success" data-color="theme-success"></li>
    <li class="color-box bg-danger" data-color="theme-danger"></li>
    <li class="color-box bg-info" data-color="theme-info"></li>
    <li class="color-box bg-warning" data-color="theme-warning"></li>
    <li class="color-box bg-dark" data-color="theme-dark"></li>
  </ul>
</div>
<!-- Menu Colors Ends -->
<hr>
<!-- Theme options starts -->
<h5 class="mt-1">Theme Layout</h5>
<div class="theme-layouts">
  <div class="d-flex justify-content-start">
    <div class="mx-50 lidht">
      <fieldset>
        <div class="vs-radio-con vs-radio-primary">
          <input type="radio" name="layoutOptions" value="false" class="layout-name" data-layout="" checked>
          <span class="vs-radio">
            <span class="vs-radio--border"></span>
            <span class="vs-radio--circle"></span>
          </span>
          <span class="">Light</span>
        </div>
      </fieldset>
    </div>
    <div class="mx-50 dark">
      <fieldset>
        <div class="vs-radio-con vs-radio-primary">
          <input type="radio" name="layoutOptions" value="false" class="layout-name" data-layout="dark-layout">
          <span class="vs-radio">
            <span class="vs-radio--border"></span>
            <span class="vs-radio--circle"></span>
          </span>
          <span class="">Dark</span>
        </div>
      </fieldset>
    </div>
    <div class="mx-50 semi-dark">
      <fieldset>
        <div class="vs-radio-con vs-radio-primary">
          <input type="radio" name="layoutOptions" value="false" class="layout-name" data-layout="semi-dark-layout">
          <span class="vs-radio">
            <span class="vs-radio--border"></span>
            <span class="vs-radio--circle"></span>
          </span>
          <span class="">Semi Dark</span>
        </div>
      </fieldset>
    </div>
  </div>
</div>
<!-- Theme options starts -->
<hr>

<!-- Collapse sidebar switch starts -->
<div class="collapse-sidebar d-flex justify-content-between">
  <div class="collapse-option-title">
    <h5 class="pt-25 collapse_sidebar">Collapse Sidebar</h5>
    <h5 class="pt-25 collapse_menu d-none">Collapse Menu</h5>
  </div>
  <div class="collapse-option-switch">
    <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="collapse-sidebar-switch">
      <label class="custom-control-label" for="collapse-sidebar-switch"></label>
    </div>
  </div>
</div>
<!-- Collapse sidebar switch Ends -->
<hr>

<!-- Navbar colors starts -->
<div id="customizer-navbar-colors">
  <h5>Navbar Colors{{ __('lang.Footer') }}</h5>
  <ul class="list-inline unstyled-list">
    <li class="color-box bg-white border selected" data-navbar-default=""></li>
    <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
    <li class="color-box bg-success" data-navbar-color="bg-success"></li>
    <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
    <li class="color-box bg-info" data-navbar-color="bg-info"></li>
    <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
    <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
  </ul>
  <hr>
</div>
<!-- Navbar colors starts -->
<!-- Navbar Type Starts -->
<div id="navbar-type">
  <h5 class="navbar_type">{{ __('lang.Navbar') }}</h5>
  <h5 class="menu_type d-none">{{ __('lang.Menu') }}</h5>
  <div class="navbar-type d-flex justify-content-start">
    <div class="mx-50">
      <fieldset>
        <div class="vs-radio-con vs-radio-primary">
          <input type="radio" name="navbarType" value="false" id="navbar-hidden">
          <span class="vs-radio">
            <span class="vs-radio--border"></span>
            <span class="vs-radio--circle"></span>
          </span>
          <span class="">{{ __('lang.Hidden') }}</span>
        </div>
      </fieldset>
    </div>
    <div class="mx-50">
      <fieldset>
        <div class="vs-radio-con vs-radio-primary">
          <input type="radio" name="navbarType" value="false" id="navbar-static">
          <span class="vs-radio">
            <span class="vs-radio--border"></span>
            <span class="vs-radio--circle"></span>
          </span>
          <span class="">{{ __('lang.Static') }}</span>
        </div>
      </fieldset>
    </div>
    <div class="mx-50">
      <fieldset>
        <div class="vs-radio-con vs-radio-primary">
          <input type="radio" name="navbarType" value="false" id="navbar-sticky">
          <span class="vs-radio">
            <span class="vs-radio--border"></span>
            <span class="vs-radio--circle"></span>
          </span>
          <span class="">{{ __('lang.Sticky') }}</span>
        </div>
      </fieldset>
    </div>
    <div class="mx-50">
      <fieldset>
        <div class="vs-radio-con vs-radio-primary">
          <input type="radio" name="navbarType" value="false" id="navbar-floating" checked>
          <span class="vs-radio">
            <span class="vs-radio--border"></span>
            <span class="vs-radio--circle"></span>
          </span>
          <span class="">{{ __('lang.Floating') }}</span>
        </div>
      </fieldset>
    </div>
  </div>
  <hr>
</div>
<!-- Navbar Type Starts -->

<!-- Footer Type Starts -->
<h5>{{ __('lang.Footer') }}</h5>
<div class="footer-type d-flex justify-content-start">
  <div class="mx-50">
    <fieldset>
      <div class="vs-radio-con vs-radio-primary">
        <input type="radio" name="footerType" value="false" id="footer-hidden">
        <span class="vs-radio">
          <span class="vs-radio--border"></span>
          <span class="vs-radio--circle"></span>
        </span>
        <span class="">{{ __('lang.Hidden') }}</span>
      </div>
    </fieldset>
  </div>
  <div class="mx-50">
    <fieldset>
      <div class="vs-radio-con vs-radio-primary">
        <input type="radio" name="footerType" value="false" id="footer-static" checked>
        <span class="vs-radio">
          <span class="vs-radio--border"></span>
          <span class="vs-radio--circle"></span>
        </span>
        <span class="">{{ __('lang.Static') }}</span>
      </div>
    </fieldset>
  </div>
  <div class="mx-50">
    <fieldset>
      <div class="vs-radio-con vs-radio-primary">
        <input type="radio" name="footerType" value="false" id="footer-sticky">
        <span class="vs-radio">
          <span class="vs-radio--border"></span>
          <span class="vs-radio--circle"></span>
        </span>
        <span class="">{{ __('lang.Sticky') }}</span>
      </div>
    </fieldset>
  </div>
</div>
<!-- Footer Type Ends -->
<hr>

<!-- Hide Scroll To Top Starts-->
<div class="hide-scroll-to-top d-flex justify-content-between py-25">
  <div class="hide-scroll-title">
    <h5 class="pt-25">{{ __('lang.Top') }}</h5>
  </div>
  <div class="hide-scroll-top-switch">
    <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="hide-scroll-top-switch">
      <label class="custom-control-label" for="hide-scroll-top-switch"></label>
    </div>
  </div>
</div>
<!-- Hide Scroll To Top Ends-->
</div>

  </div>
  <!-- End: Customizer-->

  <!-- Buynow Button-->

  </div>
  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>

  <!-- BEGIN: Footer-->
  <footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25"> {{ __('lang.COPYRIGHT') }} &copy; {{ date("Y")}}<a class="text-bold-800 grey darken-2" href="https://www.solidsolutionsegypt.com/" target="_blank">Solid,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
      <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
  </footer>
  <!-- END: Footer-->
  <script src="/app-assets-admin/vendors/js/vendors.min.js"></script>
  {{-- <script src="app-assets-admin/vendors/js/print.min.js"></script> --}}

  <!-- BEGIN Vendor JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="/app-assets-admin/vendors/js/editors/quill/katex.min.js"></script>
<script src="/app-assets-admin/vendors/js/editors/quill/highlight.min.js"></script>
<script src="/app-assets-admin/vendors/js/editors/quill/quill.min.js"></script>
<script src="/app-assets-admin/vendors/js/extensions/jquery.steps.min.js"></script>
<script src="/app-assets-admin/vendors/js/forms/validation/jquery.validate.min.js"></script>
<!-- END: Page Vendor JS-->

  <!-- BEGIN: Page Vendor JS-->
  <script src="/app-assets-admin/vendors/js/extensions/swiper.min.js"></script>
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->    
  <script src="/app-assets-admin/vendors/js/extensions/dropzone.min.js"></script>

  <script src="/app-assets-admin/js/core/app-menu.min.js"></script>
  <script src="/app-assets-admin/js/core/app.min.js"></script>
  <script src="/app-assets-admin/js/scripts/components.min.js"></script>
  <script src="/app-assets-admin/js/scripts/customizer.min.js"></script>
  <script src="/app-assets-admin/js/scripts/footer.min.js"></script>
  <!-- END: Theme JS-->
  <script src="/app-assets-admin/js/scripts/ui/data-list-view.min.js"></script>
  <!-- BEGIN: Page Vendor JS-->
  <script src="/app-assets-admin/vendors/js/tables/datatable/pdfmake.min.js"></script>
  <script src="/app-assets-admin/vendors/js/tables/datatable/vfs_fonts.js"></script>
  <script src="/app-assets-admin/vendors/js/tables/datatable/datatables.min.js"></script>
  <script src="/app-assets-admin/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
  <script src="/app-assets-admin/vendors/js/tables/datatable/buttons.html5.min.js"></script>
  <script src="/app-assets-admin/vendors/js/tables/datatable/buttons.print.min.js"></script>
  <script src="/app-assets-admin/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
  <script src="/app-assets-admin/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
  <!-- END: Page Vendor JS-->
  <!-- BEGIN: Page JS-->
  {{-- <script src="app-assets-admin/js/scripts/extensions/swiper.min.js"></script> --}}
  
  {{-- <script src="/app-assets-admin/js/scripts/print.min.js"></script> --}}
   <!-- BEGIN: Page JS-->
  <script src="/app-assets-admin/js/scripts/editors/editor-quill.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <!-- END: Page JS-->
  
 




  @yield('js')<!-- END: Page JS-->


</body>
<!-- END: Body-->

</html>
