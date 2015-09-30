<!DOCTYPE html>
<html lang=en>

<head>
    <title>Bandboard</title>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8" />
    <link rel=icon type=image/ico href="favicon.html" />
    <link href="{{ asset('css/stylesheets.css') }}" rel=stylesheet type=text/css />
    <script type=text/javascript src="{{ asset('js/plugins/jquery/jquery.min.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/plugins/jquery/jquery-ui.min.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/plugins/jquery/jquery-migrate.min.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/plugins/jquery/globalize.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/plugins/uniform/jquery.uniform.min.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/plugins/knob/jquery.knob.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/plugins/flot/jquery.flot.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/plugins/flot/jquery.flot.resize.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/plugins/moment.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/js.js') }}"></script>
    {{--<script type=text/javascript src="{{ asset('js/settings.js') }}"></script>--}}
    <script src="{{ asset('https://cdn.socket.io/socket.io-1.3.5.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/main.js') }}"></script>
    @yield('head')
</head>

<body class=bg-img-num8>
<div class=container>
    <div class=row>
        <div class=col-md-12>
            <nav class="navbar brb" role=navigation>
                <div class=navbar-header>
                    <button type=button class=navbar-toggle data-toggle=collapse data-target=.navbar-ex1-collapse>
                        <span class=sr-only>Toggle navigation</span>
                        <span class=icon-reorder></span>
                    </button>
                    <a class=navbar-brand href="{{ url('home') }}">
                        <img src="{{ asset('img/logo.png') }}" />
                    </a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="{{ set_active(['home*']) }}">
                            <a href="{{ url('home') }}">
                                <span class=icon-home></span>Banda
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('repertorio') }}">
                                <span class=icon-music></span>Repertório
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('agenda') }}">
                                <span class=icon-calendar></span>Agenda</a>
                        </li>
                        <li>
                            <a href="{{ url('ensaios') }}">
                                <span class=icon-play></span>Ensaios</a>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role=search>
                        <div class=form-group>
                            <input type=text class=form-control placeholder="buscar..." />
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <div class=row>
        <div class=col-md-2>
            <div class="block block-drop-shadow">
                <div class="user bg-default bg-light-rtl">
                    <div class=info>
                        <a href=# class="informer informer-three"><span>14 / 50</span>Músicas</a>
                        <img id="user-avatar" src="{{ Auth::user()->avatar }}" class="img-circle img-thumbnail" />
                    </div>
                </div>
                <div class="content list-group list-group-icons">
                    @section('side-nav')
                        <a href=# class=list-group-item>
                            <span class=icon-time></span>Meus horários<i class="icon-angle-right pull-right"></i>
                        </a>
                        <a href=# class=list-group-item>
                            <span class=icon-volume-up></span>Sugestões<i class="icon-angle-right pull-right"></i>
                        </a>
                        <a href=# class=list-group-item>
                            <span class=icon-cogs></span>Configurações<i class="icon-angle-right pull-right"></i>
                        </a>
                        <a href="{{ action('Auth\AuthController@getLogout') }}" class=list-group-item>
                            <span class=icon-off></span>Logout<i class="icon-angle-right pull-right"></i>
                        </a>
                    @show
                </div>
            </div>
        </div>

        @yield('content')

    </div>
    <div class=row>
        <div class=page-footer>
            <div class=page-footer-wrap>
                <div class="side pull-left"> Copyright &COPY; R. A. Souza {{ date('Y') }}. All rights reserved. </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>