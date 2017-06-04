@extends('admin.template.index-admin')
@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->
            <div class="theme-panel hidden-xs hidden-sm">
                <div class="toggler"> </div>
                <div class="toggler-close"> </div>
                <div class="theme-options">
                    <div class="theme-option theme-colors clearfix">
                        <span> THEME COLOR </span>
                        <ul>
                            <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                            <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                            <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                            <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                            <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                            <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                        </ul>
                    </div>
                    <div class="theme-option">
                        <span> Theme Style </span>
                        <select class="layout-style-option form-control input-sm">
                            <option value="square" selected="selected">Square corners</option>
                            <option value="rounded">Rounded corners</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Layout </span>
                        <select class="layout-option form-control input-sm">
                            <option value="fluid" selected="selected">Fluid</option>
                            <option value="boxed">Boxed</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Header </span>
                        <select class="page-header-option form-control input-sm">
                            <option value="fixed" selected="selected">Fixed</option>
                            <option value="default">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Top Menu Dropdown</span>
                        <select class="page-header-top-dropdown-style-option form-control input-sm">
                            <option value="light" selected="selected">Light</option>
                            <option value="dark">Dark</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Mode</span>
                        <select class="sidebar-option form-control input-sm">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Menu </span>
                        <select class="sidebar-menu-option form-control input-sm">
                            <option value="accordion" selected="selected">Accordion</option>
                            <option value="hover">Hover</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Style </span>
                        <select class="sidebar-style-option form-control input-sm">
                            <option value="default" selected="selected">Default</option>
                            <option value="light">Light</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Position </span>
                        <select class="sidebar-pos-option form-control input-sm">
                            <option value="left" selected="selected">Left</option>
                            <option value="right">Right</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Footer </span>
                        <select class="page-footer-option form-control input-sm">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- END THEME PANEL -->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Form Stuff</span>
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="#">
                                    <i class="icon-bell"></i> Action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-shield"></i> Another action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i> Something else here</a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="#">
                                    <i class="icon-bag"></i> Separated link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h1 class="page-title"> Material Design Form Validation
                <small>material design form validation</small>
            </h1>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
                       <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet light portlet-fit portlet-form bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-red"></i>
                                <span class="caption-subject font-red sbold uppercase">Edit User : {{$user->name_user}}</span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                    <i class="icon-cloud-upload"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                    <i class="icon-wrench"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                    <i class="icon-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <!-- BEGIN FORM-->
                            <form action="{{route('edit-user-post',['id'=>$user->id_user])}}" id="form_sample_2" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-body">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="name" id="form_control_1" placeholder="Enter your name" value="{{old('name',$user->name_user)}}">
                                        <label for="form_control_1">Name
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter your new name...</span>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <input type="email" class="form-control" id="form_control_1" name="email" placeholder="Enter your email" disabled value="{{old('email',$user->email_user)}}">
                                        <label for="form_control_1">Email
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Please enter your email...</span>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <div class="form-control">
                                            <input type="checkbox" name="changePassword" id="changePassword"><span> Change Password</span>
                                        </div>
                                        <input type="password" class="form-control password" id="form_control_1" name="password" placeholder="Enter your password" disabled>
                                        <label class="form_control_1">Password
                                            <span class="required"> * </span>
                                        </label>
                                        <span class="help-block">Please enter your password...</span>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <input type="password" class="form-control password" id="form_control_1" name="rpassword" placeholder="Enter your password" disabled>
                                        <label class="form_control_1">Confirm Password
                                            <span class="required"> * </span>
                                        </label>
                                        <span class="help-block">Please enter your password again...</span>
                                    </div>
                                    <div class="form-group form-md-radios">
                                        <label for="form_control_1">Permission</label>
                                        <div class="md-radio-inline">
                                            @if($user->permission_user == 0 || old('permission') == 1)
                                            <div class="md-radio">
                                                <input type="radio" id="checkbox2_8" name="permission" value="1" class="md-radiobtn">
                                                <label for="checkbox2_8">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Admin </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="checkbox2_9" name="permission" value="0" class="md-radiobtn" checked>
                                                <label for="checkbox2_9">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Member </label>
                                            </div>
                                                @else
                                                <div class="md-radio">
                                                    <input type="radio" id="checkbox2_8" name="permission" value="1" class="md-radiobtn" checked>
                                                    <label for="checkbox2_8">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Admin </label>
                                                </div>
                                                <div class="md-radio">
                                                    <input type="radio" id="checkbox2_9" name="permission" value="0" class="md-radiobtn" >
                                                    <label for="checkbox2_9">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Member </label>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn green">Edit</button>
                                            <button type="reset" class="btn default">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection
@section('page-level-plugins')
    {{--<script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>--}}
    {{--<script src="assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>--}}
@endsection
@section('page-level-scripts')
    {{--<script src="assets/pages/scripts/form-validation-md.min.js" type="text/javascript"></script>--}}
@endsection
@section('my-scripts')
    <script>
        $('#changePassword').change(function(){
        if($(this).is(':checked')){
            $('.password').removeAttr('disabled');
        } else {
            $('.password').attr('disabled','');
        }
        });
    </script>
    @endsection