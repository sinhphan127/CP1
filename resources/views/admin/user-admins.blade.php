@include('admin.blocks.header')
<div class="container body">
    <div class="main_container">
        @include('admin.blocks.sidebar')

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Quản lý admin</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button"
                        class="btn-action-listTours add-user-admin"
                        data-toggle="modal"
                        data-target="#add-user-admin">
                    <span class="glyphicon glyphicon-edit" style="color: #26B99A; font-size:24px" aria-hidden="true"></span>
                </button>

                <div class="clearfix"></div>

                <div class="x_panel">
                    <div class="x_content row">
                        @foreach ($admins as $admin)
                            <div class="col-md-4 col-sm-4  profile_details">
                                <div class="well profile_view">
                                    <div class="col-sm-12">
                                        <div class="left col-md-7 col-sm-7">
                                            <h2>{{ $admin->fullName }}</h2>
                                            <p><strong>About: </strong> {{ $admin->email }} </p>
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-building"></i> Address: {{ $admin->address }}</li>
                                                <li><i class="fa fa-phone"></i> Role #: {{ $admin->role }}</li>
                                            </ul>
                                        </div>
                                        <div class="right col-md-5 col-sm-5 text-center">
                                            <img src="{{ asset('admin/assets/images/user-profile/1735832424.jpg') }}"
                                                 alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                    <div class=" profile-bottom text-center">
                                        <div class=" col-sm-12 emphasis" style="display: flex; justify-content: end">
                                            <a href="{{ route('admin.delete-user') }}" data-adminId="{{ $admin->adminId }}" class="delete-user-admin">
                                                <span class="glyphicon glyphicon-trash" style="color: red; font-size:24px" aria-hidden="true"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
        <div class="modal fade" id="add-user-admin" tabindex="-1" role="dialog" aria-labelledby="add-user-admin-Label"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="edit-tour-Label">Thêm Tài Khoản Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="wizard" class="form_wizard wizard_horizontal wizard-edit-tour">
                            <div>
                                <form action="{{ route('admin.admin-addons')}}" class="form-info-add-admin" method="POST"
                                      id="form-step1">
                                    @csrf
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">User Name
                                            <span>*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" name="userName"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Passwd
                                            <span>*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" type="password" name="passwd"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Full Name
                                            <span>*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" name="fullname"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Role
                                            <span>*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <select class="form-control" name="role" id="role">
                                                <option value="">Chọn Role</option>
                                                <option value="admin">Admin</option>
                                                <option value="customer">Customer</option>
                                                <option value="gui">Guilder</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Email
                                            <span>*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" type="text" name="email" required>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Address
                                            <span>*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" type="text" name="address" required>
                                        </div>
                                    </div>
                                </form>
                                <button id="btnAdd" class="btn btn-success">
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.blocks.footer')
