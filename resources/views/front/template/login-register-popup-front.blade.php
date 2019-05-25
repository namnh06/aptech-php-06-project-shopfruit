<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel" style="font-weight: bold">LOGIN/REGISTER</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-7" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Register</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- LOGIN -->
                            <div class="tab-pane active" id="Login">
                                <form action="{{route('login-customer')}}" name="dangnhap_from" class="form-horizontal"
                                      id="dangnhap_from" method="post">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-group">
                                        <label for="email_login" class="col-sm-3 control-label">Email</label>

                                        <div class="col-sm-9">
                                            <input name="email_user" type="email" class="input form-control" id="email_login"
                                                   placeholder="Email...."/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass_login" class="col-sm-3 control-label">Password</label>

                                        <div class="col-sm-9">
                                            <input name="password" type="password" class="input form-control" id="pass_login"
                                                   placeholder="Password...."/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        </div>
                                        <div class="col-sm-9">
                                            <button class="button" type="submit" id="button-confirm">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- REGISTER -->
                            <div class="tab-pane fade" id="Registration">
                                <form class="form-horizontal" name="register" action="{{route('register')}}" method="post"
                                       id="dangkytk_form register">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-group">
                                        <label for="frm_name" class="col-sm-4 control-label">Full Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" class="input form-control" id="frm_name" name="name" required/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="col-sm-4 control-label">Email</label>

                                        <div class="col-sm-8">
                                            <input type="email" class="input form-control" id="emailtk" name="email" required/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="col-sm-4 control-label">Password</label>

                                        <div class="col-sm-8">
                                            <input type="password" class="input form-control" id="pass_tk" name="password" required/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                        </div>
                                        <div class="col-sm-8">
                                            <button class="button" type="submit">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div id="OR" class="hidden-xs">OR</div>
                    </div>

                    <!-- Facebook - Google account -->
                    <div class="col-md-5">
                        <div class="row text-center sign-with">
                            <div class="social-header">Login With</div>
                            <div class="unit social-column">
                                <div class="social-inner">
                                    <div><a href=""><img src="front/images/fb-login-button-big.png" alt="login-facebook"></a></div>
                                    <div><a href=""><img src="front/images/gg-login-button-big.png" alt="login-google"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>