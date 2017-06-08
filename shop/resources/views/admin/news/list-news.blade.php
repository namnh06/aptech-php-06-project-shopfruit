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
                        <a href="index.html">News</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <a href="#">List News</a>
                        <i class="fa fa-circle"></i>
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
            <h1 class="page-title"> List News
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
                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                    <label class="btn btn-transparent red btn-outline btn-circle btn-sm active">
                                        <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                    <label class="btn btn-transparent red btn-outline btn-circle btn-sm">
                                        <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-toolbar">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="btn-group">
                                            <a href="{{route('add-news-get')}}"><button id="sample_editable_1_new" class="btn green"> Add New
                                                    <i class="fa fa-plus"></i>
                                                </button></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="btn-group pull-right">
                                            <button class="btn green btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;"> Print </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"> Save as PDF </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"> Export to Excel </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                <thead>
                                <tr>
                                    <th> Title & Image </th>
                                    <th> ID User </th>
                                    <th> Description </th>
                                    <th> Edit </th>
                                    <th> Delete </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allNews as $news)
                                    <tr>
                                        <td>{!!
                                        "$news->title_vi_news
                                        <br>
                                        <img src='upload/images/news/$news->images_news' width=100px"
                                        !!}</td>
                                        <td>{{$news->id_user_in_news}}</td>
                                        <td>{{$news->short_description_news}}</td>
                                        <td>
                                            <a class="edit" href="{{route('edit-news-get',['id'=>$news->id_news])}}"> Edit </a>
                                        </td>
                                        <td>
                                            <a class="delete" href="{{route('delete-news',['id'=>$news->id_news])}}"> Delete </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                {!! $allNews->links() !!}
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
