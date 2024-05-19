</div>
</div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; {{date("Y")}}<a
                class="ml-25" href="https://www.knowhub.sa/" target="_blank">Knowledge hub</a><span
                class="d-none d-sm-inline-block">, All rights
                Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i
                data-feather="heart"></i></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->

<script src="{{asset('/app-assets-admin')}}/vendors/js/vendors.min.js"></script>
{{-- <script src="app-assets-admin/vendors/js/print.min.js"></script> --}}
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
<!-- BEGIN Vendor JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('/app-assets-admin')}}/vendors/js/editors/quill/katex.min.js"></script>
<script src="{{asset('/app-assets-admin')}}/vendors/js/editors/quill/highlight.min.js"></script>
<script src="{{asset('/app-assets-admin')}}/vendors/js/extensions/jquery.steps.min.js"></script>
<script src="{{asset('/app-assets-admin')}}/vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="{{asset('/app-assets-admin')}}/vendors/js/editors/quill/quill.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('/app-assets-admin')}}/vendors/js/extensions/swiper.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>

<script src="{{asset('/app-assets-admin')}}/js/core/app-menu.min.js"></script>
<script src="{{asset('/app-assets-admin')}}/js/core/app.js"></script>
<script src="{{asset('/app-assets-admin')}}/js/scripts/components.min.js"></script>
<script src="{{asset('/app-assets-admin')}}/js/scripts/customizer.min.js"></script>
<script src="{{asset('/app-assets-admin')}}/js/scripts/footer.min.js"></script>
<!-- END: Theme JS-->
<script src="{{asset('/app-assets-admin')}}/js/scripts/ui/data-list-view.min.js"></script>
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('/app-assets-admin')}}/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="{{asset('/app-assets-admin')}}/vendors/js/tables/datatable/vfs_fonts.js"></script>
<script src="{{asset('/app-assets-admin')}}/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="{{asset('/app-assets-admin')}}/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="{{asset('/app-assets-admin')}}/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="{{asset('/app-assets-admin')}}/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="{{asset('/app-assets-admin')}}/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
<script src="{{asset('/app-assets-admin')}}/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Page JS-->
{{-- <script src="app-assets-admin/js/scripts/extensions/swiper.min.js"></script> --}}

{{-- <script src="{{asset('/app-assets-admin')}}/js/scripts/print.min.js"></script> --}}
<!-- BEGIN: Page JS-->
<script src="{{asset('/app-assets-admin')}}/js/scripts/editors/editor-quill.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="{{ asset('/summ.js') }}"></script>

<script>
    $('.summernote').summernote({
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['color', ['color']],
            ['view', ['codeview']]
        ],
        fontNames: ['Poppins'], // Set Poppins as the only font
        fontNamesIgnoreCheck: ['Poppins'], // Ignore font checking to force Poppins font
        callbacks: {
            onInit: function() {
                // Set default font for English text
                $('.summernote').next().find('.note-editable').css('font-family', 'Poppins');
            },
            onChange: function(contents, $editable) {
                // Set Poppins font for all text
                $editable.find('span').css('font-family', 'Poppins');
                $editable.find('p').css('font-family', 'Poppins');
                // In case of pasted content or new text, ensure it has Poppins font
                $editable.css('font-family', 'Poppins');
                $editable.find('*').css('font-family', 'Poppins');
            }
        }
    });    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })

</script>
@yield('js')<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
