<div id="header" class="header">

    <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 logo">
                <a href="front/index.html"><img alt="Eco Shop" src="front/images/logo.png"/></a>
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
                                        <a href="front/#" class="dropdown-toggle"
                                           data-toggle="dropdown">Product</a>
                                        <ul class="dropdown-menu container-fluid">
                                            <li class="block-container">
                                                <ul class="block">
                                                    <li class="link_container"><a href="front/product-vegetables.html">Vegetables</a></li>
                                                    <li class="link_container"><a href="front/product-fruits.html">Fruits</a></li>
                                                    <li class="link_container"><a href="front/product-cereals.html">Cereals</a></li>
                                                    <li class="link_container"><a href="front/product-beans.html">Beans</a></li>
                                                    <li class="link_container"><a href="front/product-nuts-seeds.html">Nuts & Seeds</a></li>
                                                    <li class="link_container"><a href="front/product-spices.html">Spices</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--<li><a href="front/#">Promotion</a></li>-->
                                    <li><a href="front/news.html">News</a></li>
                                    <li><a href="front/policy-faq.html">Policy & FAQ</a></li>
                                    <li><a href="front/about-us.html">About Us</a></li>
                                    <li><a href="front/contact-us.html">Contact Us</a></li>
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