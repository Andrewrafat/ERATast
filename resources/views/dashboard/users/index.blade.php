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
                                        href="/main">{{ __('lang.user_management') }}</a>
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
                            <form class="validate-form mt-2" id="update" method="POST"
                                action="{{ url('AddUser') }}" enctype="multipart/form-data">
                                @csrf
                                 
                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="Landarea">name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="name" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="UserName">UserName</label>
                                            <input type="text" class="form-control" id="UserName" name="UserName"
                                                placeholder="UserName" />
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="PhoneNumber">PhoneNumber</label>
                                            <input type="number" class="form-control" id="PhoneNumber"
                                                name="PhoneNumber" placeholder="PhoneNumber" />
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email">email</label>
                                            <input type="email" class="form-control" id="email"
                                                name="email" placeholder="email" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="password">password</label>
                                            <input type="password" class="form-control" id="password"
                                                name="password" placeholder="password" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="password">re-password</label>
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" />
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
                user</button>
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
                            <table class="table" id="UsersTable">
                                <thead>
                                    <tr>
                                        <th>{{ __('lang.id') }}</th>
                                        <th>{{ __('lang.name') }}</th>
                                        <th>{{ __('lang.username') }}</th>
                                        <th>{{ __('lang.email') }}</th>
                                        <th>{{ __('lang.PhoneNumber') }}</th>
                                        <th>{{ __('lang.actions') }}</th>

                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Project Images</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <!-- Images will be loaded here -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="updateUserModal" tabindex="-1" role="dialog"
                aria-labelledby="updateUserModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateUserModalLabel">{{ __('lang.Update Navbar Title') }}</h5>

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
                                            <label for="Landarea">name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Landarea" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="UserName">UserName</label>
                                            <input type="text" class="form-control" id="UserName" name="UserName"
                                                placeholder="UserName" />
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="PhoneNumber">PhoneNumber</label>
                                            <input type="number" class="form-control" id="PhoneNumber"
                                                name="PhoneNumber" placeholder="PhoneNumber" />
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
            <div class="modal fade" id="addNavbarModal" tabindex="-1" role="dialog"
                aria-labelledby="addNavbarModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addNavbarModalLabel">{{ __('lang.Add Navbar Title') }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="addNavbarForm">
                                @csrf
                                <div class="form-group">
                                    <label for="new_title_ar">{{ __('lang.title_ar') }}:</label>
                                    <input type="text" class="form-control" id="new_title_ar" name="new_title_ar"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="new_title_en">{{ __('lang.title_en') }}:</label>
                                    <input type="text" class="form-control" id="new_title_en" name="new_title_en"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="new_order">{{ __('lang.orderby') }}:</label>
                                    <input type="number" class="form-control" id="new_order" name="new_order" required>
                                </div>
                                <div class="form-group">
                                    <label for="new_order">{{ __('lang.type') }}:</label>
                                    <select name="is_course" class="form-control" id="is_course" required>
                                        <option value="0">{{ __('lang.text') }}</option>
                                        <option value="1">{{ __('lang.category') }}</option>
                                        <option value="2">{{ __('lang.courses') }}</option>

                                    </select>
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


            // $('#addNavbarModal').on('show.bs.modal', function() {
            //     $('#is_course').val('0').change();;
            // });
            // DataTable initialization
            $('#UsersTable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true, // Enable responsive feature
                ajax: "{{ url('/getusers') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'UserName',
                        name: 'UserName'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'PhoneNumber',
                        name: 'PhoneNumber'
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



            $('#UsersTable').on('click', '.edit-btn', function() {
                var id = $(this).data('id');
                $('#updateUserModal').modal('show');

                $.ajax({
                    url: "{{ url('/getusersdata') . '/' }}" +
                        id,
                    type: 'GET',
                    success: function(response) {
                        if (response.error) {
                            console.error(response.error);
                        } else {
                            var User = response.User;

                            // Populate modal fields with the fetched data
                            $('#updateUserModal #User_id').val(User.id);
                            $('#updateUserModal #name').val(User.name);
                            $('#updateUserModal #UserName').val(User.UserName);
                            // $('#updateUserModal #email').val(User.email);
                            $('#updateUserModal #PhoneNumber').val(User.PhoneNumber);


                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });




           

            $('#updateUsersBtn').on('click', function() {
                var id = $('#updateUserModal #User_id').val();
                $.ajax({
                    url: "{{ url('UpdateUser') . '/' }}" +
                        id, // Replace with your actual update route
                    type: 'PUT',
                    data: $('#updateUsersForm').serialize(), // Make sure to set your form id
                    success: function(response) {
                        $('#updateUserModal').modal('hide');
                        $('#UsersTable').DataTable().ajax.reload();
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



            $('#UsersTable').on('click', '.delete-btn', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "{{ url('/DeleteUser') . '/' }}" + id,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}", // Include the CSRF token
                    },
                    success: function(response) {
                        $('#UsersTable').DataTable().ajax.reload();
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
