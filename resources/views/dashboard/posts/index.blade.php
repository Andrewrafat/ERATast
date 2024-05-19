@extends('dashboard.index')
@section('content')


    <!-- BEGIN: Content-->

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
                                <li class="breadcrumb-item"><a class="orange"
                                        href="/main">{{ __('lang.Post_management') }}</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="content-body">
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="validate-form mt-2" id="update" method="POST" action="{{ url('AddPost') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="title">title</label>
                                            <select name="user_id" id="" class="form-control">

                                                @foreach ($users as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="title">title</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                placeholder="title" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">description</label>
                                            <input type="text" class="form-control" id="description" name="description"
                                                placeholder="description" />
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="contact_phone">contact_phone</label>
                                            <input type="number" class="form-control" id="contact_phone"
                                                name="contact_phone" placeholder="contact_phone" />
                                        </div>
                                    </div>



                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save
                                        Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit"data-toggle="modal" data-target="#exampleModalCenter" id="addnewproject"
                class="btn btn-success mt-5 mr-1">add new
                post</button>
            <div class="mb-5"></div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table" id="PostsTable">
                                <thead>
                                    <tr>
                                        <th>{{ __('lang.id') }}</th>
                                        <th>{{ __('lang.title') }}</th>
                                        <th>{{ __('lang.description') }}</th>
                                        <th>{{ __('lang.contact_phone') }}</th>
                                        <th>{{ __('lang.actions') }}</th>

                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            <div class="modal fade" id="updatePostModal" tabindex="-1" role="dialog"
                aria-labelledby="updatePostModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updatePostModalLabel">{{ __('lang.Update posts') }}</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="updateUsersForm" enctype="multipart/form-data">
                                @csrf


                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="title">title</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                placeholder="title" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">description</label>
                                            <input type="text" class="form-control" id="description"
                                                name="description" placeholder="description" />
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="contact_phone">contact_phone</label>
                                            <input type="number" class="form-control" id="contact_phone"
                                                name="contact_phone" placeholder="contact_phone" />
                                        </div>
                                    </div>



                                </div>

                                <input hidden type="text" id="User_id">


                            </form>
                        </div>
                        <div class="modal-body-2">

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger"
                                data-dismiss="modal">{{ __('lang.cancel') }}</button>
                            <button type="button" class="btn btn-primary"
                                id="updateUsersBtn">{{ __('lang.update') }}</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Navbar Modal -->
            <div class="modal fade" id="addPostModal" tabindex="-1" role="dialog" aria-labelledby="addPostModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addPostModalLabel">{{ __('lang.Add Navbar Title') }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="addNavbarForm">
                                @csrf
                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="title">title</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                placeholder="title" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">description</label>
                                            <input type="text" class="form-control" id="description"
                                                name="description" placeholder="description" />
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="contact_phone">contact_phone</label>
                                            <input type="number" class="form-control" id="contact_phone"
                                                name="contact_phone" placeholder="contact_phone" />
                                        </div>
                                    </div>



                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger"
                                data-dismiss="modal">{{ __('lang.cancel') }}</button>
                            {{-- <button type="button" class="btn btn-primary" id="addNavbarBtn">{{__('lang.add')}}</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@section('js')
    <script>
        $(document).ready(function() {


            // $('#addPostModal').on('show.bs.modal', function() {
            //     $('#is_course').val('0').change();;
            // });
            // DataTable initialization
            $('#PostsTable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true, // Enable responsive feature
                ajax: "{{ url('/getposts') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'contact_phone',
                        name: 'contact_phone'
                    },

                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
                order: [
                    [3, 'asc']
                ],
            });



            $('#PostsTable').on('click', '.edit-btn', function() {
                var id = $(this).data('id');
                $('#updatePostModal').modal('show');

                $.ajax({
                    url: "{{ url('/getpostsdata') . '/' }}" +
                        id,
                    type: 'GET',
                    success: function(response) {
                        if (response.error) {
                            console.error(response.error);
                        } else {
                            var User = response.User;

                            // Populate modal fields with the fetched data
                            $('#updatePostModal #User_id').val(User.id);
                            $('#updatePostModal #title').val(User.title);
                            $('#updatePostModal #description').val(User.description);
                            $('#updatePostModal #contact_phone').val(User.contact_phone);


                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });






            $('#updateUsersBtn').on('click', function() {
                var id = $('#updatePostModal #User_id').val();
                $.ajax({
                    url: "{{ url('UpdatePost') . '/' }}" +
                        id, // Replace with your actual update route
                    type: 'PUT',
                    data: $('#updateUsersForm').serialize(), // Make sure to set your form id
                    success: function(response) {
                        $('#updatePostModal').modal('hide');
                        $('#PostsTable').DataTable().ajax.reload();
                        // window.location.reload();
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            // Validation errors occurred
                            var errors = xhr.responseJSON.errors;
                            displayValidationErrors(errors);
                        } else {
                            console.error(xhr.responseText);
                        }
                    }
                });
            });

            function displayValidationErrors(errors) {
                // Clear previous error messages
                $('.modal-body .alert-danger').remove();

                // Display new error messages
                var errorHtml = '<div class="alert alert-danger"><ul>';
                for (var field in errors) {
                    if (errors.hasOwnProperty(field)) {
                        errorHtml += '<li>' + errors[field].join('</li><li>') + '</li>';
                    }
                }
                errorHtml += '</ul></div>';

                $('.modal-body').prepend(errorHtml);
            }

            $('#is_course').change(function() {
                var isTextSelected = $(this).val() == 0;
                $('#is_uni_group').toggle(isTextSelected);
            });



            $('#PostsTable').on('click', '.delete-btn', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "{{ url('/DeletePost') . '/' }}" + id,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}", // Include the CSRF token
                    },
                    success: function(response) {
                        $('#PostsTable').DataTable().ajax.reload();
                        // window.location.reload();
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });

            });

        });
    </script>
@endsection
@endsection
