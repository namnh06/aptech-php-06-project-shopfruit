@extends('admin.template.index-admin')
@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->
            <div class="theme-panel hidden-xs hidden-sm">
                <div class="toggler"></div>
                <div class="toggler-close"></div>
                <div class="theme-options">
                    <div class="theme-option theme-colors clearfix">
                        <span> THEME COLOR </span>
                        <ul>
                            <li class="color-default current tooltips"
                                data-style="default" data-container="body"
                                data-original-title="Default"></li>
                            <li class="color-darkblue tooltips"
                                data-style="darkblue" data-container="body"
                                data-original-title="Dark Blue"></li>
                            <li class="color-blue tooltips" data-style="blue"
                                data-container="body"
                                data-original-title="Blue"></li>
                            <li class="color-grey tooltips" data-style="grey"
                                data-container="body"
                                data-original-title="Grey"></li>
                            <li class="color-light tooltips" data-style="light"
                                data-container="body"
                                data-original-title="Light"></li>
                            <li class="color-light2 tooltips"
                                data-style="light2" data-container="body"
                                data-html="true"
                                data-original-title="Light 2"></li>
                        </ul>
                    </div>
                    <div class="theme-option">
                        <span> Theme Style </span>
                        <select class="layout-style-option form-control input-sm">
                            <option value="square" selected="selected">Square
                                corners
                            </option>
                            <option value="rounded">Rounded corners</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Layout </span>
                        <select class="layout-option form-control input-sm">
                            <option value="fluid" selected="selected">Fluid
                            </option>
                            <option value="boxed">Boxed</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Header </span>
                        <select class="page-header-option form-control input-sm">
                            <option value="fixed" selected="selected">Fixed
                            </option>
                            <option value="default">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Top Menu Dropdown</span>
                        <select class="page-header-top-dropdown-style-option form-control input-sm">
                            <option value="light" selected="selected">Light
                            </option>
                            <option value="dark">Dark</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Mode</span>
                        <select class="sidebar-option form-control input-sm">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">
                                Default
                            </option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Menu </span>
                        <select class="sidebar-menu-option form-control input-sm">
                            <option value="accordion" selected="selected">
                                Accordion
                            </option>
                            <option value="hover">Hover</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Style </span>
                        <select class="sidebar-style-option form-control input-sm">
                            <option value="default" selected="selected">
                                Default
                            </option>
                            <option value="light">Light</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Position </span>
                        <select class="sidebar-pos-option form-control input-sm">
                            <option value="left" selected="selected">Left
                            </option>
                            <option value="right">Right</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Footer </span>
                        <select class="page-footer-option form-control input-sm">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">
                                Default
                            </option>
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
                                <span class="caption-subject font-red sbold uppercase">Edit Product</span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-circle btn-icon-only btn-default"
                                   href="javascript:;">
                                    <i class="icon-cloud-upload"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default"
                                   href="javascript:;">
                                    <i class="icon-wrench"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default"
                                   href="javascript:;">
                                    <i class="icon-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <!-- BEGIN FORM-->
                            <form action="{{route('edit-product-post',['id'=>$product->id_product])}}"
                                  id="form_sample_2" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token"
                                       value="{{csrf_token()}}">
                                <div class="form-body">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control"
                                               name="name" id="form_control_1"
                                               placeholder="Enter your name"
                                               value="{{old('name',$product->name_vi_product)}}">
                                        <label for="form_control_1">Name Product
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter Product Name...</span>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <select class="form-control"
                                                name="category">
                                            <option value="">Select</option>

                                            @foreach($categories as $category)
                                                <option
                                                        @if(old('category') == $category->id_category || $product->id_category_in_product == $category->id_category)
                                                        {{"selected"}}
                                                        @endif
                                                        value="{{$category->id_category}}">{{$category->name_category}}</option>
                                            @endforeach
                                        </select>
                                        <label for="form_control_1">Category
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Choose Category...</span>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <input type="number"
                                               class="form-control"
                                               placeholder="Enter Price"
                                               name="price"
                                               value="{{old('price',$product->price_product)}}">
                                        <label for="form_control_1">Price
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter Product Price...</span>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <input type="number"
                                               class="form-control"
                                               placeholder="Enter Discount Percent"
                                               name="discount"
                                               value="{{old('discount',$product->percent_discount_product)}}">
                                        <label for="form_control_1">Discount (%)
                                        </label>
                                        <span class="help-block">Enter Product Discount (%)...</span>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control"
                                               name="code" id="form_control_1"
                                               placeholder="Enter Product Code"
                                               value="{{old('code',$product->code_product)}}">
                                        <label for="form_control_1">Code Product
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter Product Code...</span>
                                    </div>
                                    <div class="form-group form-md-radios">
                                        <label for="form_control_1">Status</label>
                                        <div class="md-radio-list">
                                            @if(old('status') == 1 || $product->status_product == 1)
                                                <div class="md-radio">
                                                    <input type="radio" id="checkbox112_6" name="status" value="1" class="md-radiobtn" checked>
                                                    <label for="checkbox112_6">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> In-Stock </label>
                                                </div>
                                                <div class="md-radio">
                                                    <input type="radio" id="checkbox112_7" name="status" value="2" class="md-radiobtn">
                                                    <label for="checkbox112_7">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Out-Stock </label>
                                                </div>
                                            @elseif(old('status') == 2 || $product->status_product == 2)
                                                <div class="md-radio">
                                                    <input type="radio" id="checkbox112_6" name="status" value="1" class="md-radiobtn" >
                                                    <label for="checkbox112_6">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> In-Stock </label>
                                                </div>
                                                <div class="md-radio">
                                                    <input type="radio" id="checkbox112_7" name="status" value="2" class="md-radiobtn" checked>
                                                    <label for="checkbox112_7">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Out-Stock </label>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <input type="number"
                                               class="form-control"
                                               placeholder="Enter Product Quantity"
                                               name="quantity"
                                               value="{{old('quantity',$product->quantity_product)}}">
                                        <label for="form_control_1">Quantity
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter Product Quantity ...</span>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <textarea class="form-control"
                                                  name="s_description"
                                                  rows="3">{{old('s_description',$product->short_description_product)}}</textarea>
                                        <label for="form_control_1">Short
                                            Description
                                            <span class="help-block">Product Short Description...</span></label>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <textarea class="ckeditor form-control"
                                                  name="l_description"
                                                  rows="6">{{old('l_description',$product->long_description_product)}}</textarea>
                                        <label for="form_control_1">Long
                                            Description</label>
                                        <span class="help-block">Product Long Description...</span>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <img src="upload/images/product/{{$product->avatar_product}}" alt=""
                                             class="img-thumbnail" width="200px">
                                        <input type="file" name="avatar"
                                               class="form-control">
                                        <label for="form_control_1">Avatar Product</label>
                                        <span class="help-block">Product Avatar Upload...</span>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <img src="upload/images/product/{{$product->image_product}}" alt=""
                                             class="img-thumbnail" width="200px">
                                        <input type="file" name="image"
                                               class="form-control">
                                        <label for="form_control_1">Product
                                            Image
                                            <span class="help-block">Product Image Upload...</span>
                                            </label>

                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit"
                                                        class="btn green">Edit
                                                </button>
                                                <button type="reset"
                                                        class="btn default">
                                                    Reset
                                                </button>
                                            </div>
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

    <script src="assets/global/plugins/ckeditor/ckeditor.js"
            type="text/javascript"></script>
@endsection
@section('page-level-scripts')
    {{--<script src="assets/pages/scripts/form-validation-md.min.js" type="text/javascript"></script>--}}
@endsection