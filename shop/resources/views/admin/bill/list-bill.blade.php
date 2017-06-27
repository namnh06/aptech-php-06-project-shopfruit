@extends('admin.template.index-admin')
@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->
            <!-- END THEME PANEL -->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="index.html">Product</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <a href="#">List Product</a>
                        <i class="fa fa-circle"></i>
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div class="btn-group pull-right">
                        <button type="button"
                                class="btn green btn-sm btn-outline dropdown-toggle"
                                data-toggle="dropdown"> Actions
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="#">
                                    <i class="icon-bell"></i> Action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-shield"></i> Another
                                    action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i> Something else
                                    here</a>
                            </li>
                            <li class="divider"></li>
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
            <h1 class="page-title"> List Product
                <small>editable datatable samples</small>
            </h1>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-settings font-red"></i>
                                <span class="caption-subject font-red sbold uppercase">Editable Table</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group btn-group-devided"
                                     data-toggle="buttons">
                                    <label class="btn btn-transparent red btn-outline btn-circle btn-sm active">
                                        <input type="radio" name="options"
                                               class="toggle" id="option1">Actions</label>
                                    <label class="btn btn-transparent red btn-outline btn-circle btn-sm">
                                        <input type="radio" name="options"
                                               class="toggle" id="option2">Settings</label>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-toolbar">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="btn-group">
                                            <a href="{{route('add-new-product-get')}}">
                                                <button id="sample_editable_1_new"
                                                        class="btn green"> Add
                                                    New
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="btn-group pull-right">
                                            <button class="btn green btn-outline dropdown-toggle"
                                                    data-toggle="dropdown">Tools
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        Print </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"> Save
                                                        as PDF </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        Export to Excel </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-hover table-bordered"
                                   id="sample_editable_1">
                                <thead>
                                <tr>
                                    <th> ID Bill</th>
                                    <th> Name</th>
                                    <th> Email</th>
                                    <th> Phone</th>
                                    <th> Total Price</th>
                                    <th> Status</th>
<th>Detail Bill</th>
                                    <th> Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($bills as $bill)
                                    <tr>
                                       <td>{{$bill->id_bill}}</td>
                                        <td>{{$bill->customer->last_name}}</td>
                                        <td>{{$bill->customer->email}}</td>
                                        <td>{{$bill->customer->telephone}}</td>
                                        <td>{{$bill->total_price_bill}}</td>
                                        <td>@if($bill->status == 1)
                                        {{'Ordered'}}
                                        @endif</td>
                                        <td><a href="{{route('bill-detail',['id'=>$bill->id_bill])}}">Detail</a></td>
                                        <td>
                                            <a class="delete"
                                               href="{{route('delete-bill',['id'=>$bill->id_bill])}}
                                                       ">
                                                Delete </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                {{--{!! $products->links() !!}--}}
                            </div>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection
@section('page-level-plugins')
    {{--<script src="assets/global/scripts/datatable.js" type="text/javascript"></script>--}}
    {{--<script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>--}}
    {{--<script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>--}}
@endsection

@section('page-level-scripts')
    {{--<script src="assets/pages/scripts/table-datatables-editable.js" type="text/javascript"></script>--}}
@endsection
