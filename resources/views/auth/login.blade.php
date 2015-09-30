<!DOCTYPE html>
<html lang=en>

<head>
    <title>Taurus</title>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8" />
    <link rel=icon type=image/ico href="favicon.html" />
    <link href="{{ asset('css/stylesheets.css') }}" rel=stylesheet type=text/css />
    <script type=text/javascript src="{{ asset('js/plugins/jquery/jquery.min.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/plugins/jquery/jquery-ui.min.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/plugins/jquery/jquery-migrate.min.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/plugins/jquery/globalize.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/plugins/uniform/jquery.uniform.min.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/js.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/settings.js') }}"></script>
</head>

<body class=bg-img-num1>
<div class=container>
    <div class=login-block>
        <div class="block block-transparent">
            <div class=head>
                <div class=user>
                    <div class="info user-change">
                        <img src="{{ asset('img/user.jpg') }}" class="img-circle img-thumbnail" />

                    </div>
                </div>
            </div>
            <div class="content controls npt">
                <div class="form-row user-change-row">
                    <div class=col-md-12>
                        <div class=input-group>
                            <div class=input-group-addon>
                                <span class=icon-user></span>
                            </div>
                            <input type=text class=form-control placeholder="Login" />
                        </div>
                    </div>
                </div>
                <div class=form-row>
                    <div class=col-md-12>
                        <div class=input-group>
                            <div class=input-group-addon>
                                <span class=icon-key></span>
                            </div>
                            <input type=password class=form-control placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class=form-row>
                    <div class=col-md-6> <a href="{{ action('Auth\AuthController@getRegister') }}" class="btn btn-default btn-block btn-clean">Register</a> </div>
                    <div class=col-md-6> <a href=# class="btn btn-default btn-block btn-clean">Log In</a> </div>
                </div>
                <div class=form-row>
                    <div class=col-md-12> <a href=# class="btn btn-link btn-block">Forgot your password?</a> </div>
                </div>
                <div class=form-row>
                    <div class="col-md-12 tac">
                        <strong>OR USE</strong>
                    </div>
                </div>
                <div class=form-row>
                    <div class=col-md-12>
                        <a href="{{ action('Auth\AuthController@facebook') }}" class="btn btn-info btn-block">
                            <span class=icon-facebook></span> &nbsp; Facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>