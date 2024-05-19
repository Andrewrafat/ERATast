@extends('dashboard.index')
@section('content')
    <!-- BEGIN: Content-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Admin</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="orange" href="/main">{{ __('lang.home page') }}</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!DOCTYPE html>



            <body>
                <h1>home page</h1>
                <div class="show">

                </div>
            </body>

        </div>
    </div>
    </div>


@section('js')
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('43cdedaaa0d59c833aa5', {
            encrypted: true
        });

        var channel = pusher.subscribe('notification-send');
        channel.bind('App\\Events\\NewPostCreated', function(data) {
            console.log('Received notification:', data);
            var notificationHtml =
                '<li class="scrollable-container media-list">' +
                '<div class="media d-flex align-items-start">' +
                '<div class="media-left">' +
                '<div class="media-body">' +
                '<p class="media-heading"><span class="font-weight-bolder">' + data.message.title + '</span>' + data
                .message.description + '</p>' +
                '</div>' +
                '</div>' +
                '</li>'


            ;
            $('#notificationbody').append(notificationHtml);
            // Update the badge count
            var currentCount = parseInt($('#pillcount').text());
            $('#pillcount').text(currentCount + 1);

            // Display the notification using Toastr
            // showToast(data.message.title, data.message.body);
        });

        // // Function to display a toast notification
        // function showToast(title, message) {
        //     toastr.success(title, message);
        // }
    </script>
@endsection

@endsection
