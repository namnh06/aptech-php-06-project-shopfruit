<div id="header" class="header">

    <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 logo">
                <a href="{{route('index')}}"><img alt="Eco Shop" src="front/images/logo.png"/></a>
            </div>
            <div class="col-xs-4 col-sm-12 col-md-5 col-lg-4 header-search-box">
                <form class="form-inline">
                    <div class="form-group input-serach">
                        <input type="text" placeholder="Search ...">
                    </div>
                    <button type="submit" class="pull-right btn-search"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 group-button-header">
                <a title="Compare" href="front/#" class="btn-compare">Compare</a>
                <a title="My wishlist" href="front/#" class="btn-heart">Heart</a>

                <div class="btn-cart" id="cart-block">
                    <a title="SignIn" href="" data-toggle="modal" data-target="#myModal">Log In</a>


                </div>
            </div>
        </div>
    </div>
    <!-- END MANIN HEADER -->
    <div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">

                <div id="main-menu" class="col-sm-12 main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="front/#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="{{route('index')}}"><span class="fa fa-home"></span> Home</a></li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle"
                                           data-toggle="dropdown">Product</a>
                                        <ul class="dropdown-menu container-fluid">
                                            <li class="block-container">
                                                <ul class="block">
                                                    @foreach($categories as $category)
                                                        <li class="link_container"><a href="{{route('category',['id'=>$category->id_category,'category'=>$category->name_category])}}">{{$category->name_category}}</a>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--<li><a href="front/#">Promotion</a></li>-->
                                    <li class="dropdown">
                                        <a class="dropdown-toggle"
                                           data-toggle="dropdown">News</a>
                                        <ul class="dropdown-menu container-fluid">
                                            <li class="block-container">
                                                <ul class="block">
                                                    @foreach($categoriesNews as $categoryNewsList)
                                                        <li><span></span><a href="{{route('category-news',['id'=>$categoryNewsList->id_category_news,'categoryNews'=>$categoryNewsList->name_category_news])}}">{{$categoryNewsList->name_category_news}}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a href="{{route('policy')}}">Policy & FAQ</a></li>
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
            <!-- userinfo on top-->
            <div id="user-info-opntop">
            </div>
            <!-- CART ICON ON MMENU -->
            <div id="shopping-cart-box-ontop">
                <i class="fa fa-user" data-toggle="modal" data-target="#myModal"></i>

                <div class="shopping-cart-box-ontop-content"></div>
            </div>
        </div>
    </div>
</div>