<!DOCTYPE html>
<html lang=en>
<head>
    <title>Bandboard</title>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8" />
    <link rel=icon type=image/ico href="favicon.html"/>
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
    <script type=text/javascript src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('https://cdn.socket.io/socket.io-1.3.5.js') }}"></script>
    <script type=text/javascript src="{{ asset('js/main.js') }}"></script>
</head>
<body class=bg-img-num1>
<div class=container>
    <div class=row>
        <div class=col-md-12>
            <nav class="navbar brb" role=navigation>
                <div class=navbar-header>
                    <button type=button class=navbar-toggle data-toggle=collapse data-target=.navbar-ex1-collapse> <span class=sr-only>Toggle navigation</span> <span class=icon-reorder></span> </button>
                    <a class=navbar-brand href=index.html><img src="{{ asset('img/logo.png') }}"/></a> </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class=active> <a href=index.html> <span class=icon-home></span> dashboard </a> </li>
                        <li class=dropdown> <a href=# class=dropdown-toggle data-toggle=dropdown><span class=icon-pencil></span> forms</a>
                            <ul class=dropdown-menu>
                                <li><a href=form_elements.html>Form elements</a></li>
                                <li><a href=form_editors.html>WYSIWYG and upload</a></li>
                                <li><a href=form_validation.html>Validation and wizard</a></li>
                            </ul>
                        </li>
                        <li class=dropdown> <a href=# class=dropdown-toggle data-toggle=dropdown><span class=icon-cogs></span> components</a>
                            <ul class=dropdown-menu>
                                <li><a href=component_blocks.html>Blocks and panels</a></li>
                                <li><a href=component_buttons.html>Buttons</a></li>
                                <li><a href=component_modals.html>Modals and popups</a></li>
                                <li><a href=component_tabs.html>Tabs, accordion</a></li>
                                <li><a href=component_progress.html>Progressbars</a></li>
                                <li><a href=component_lists.html>List groups</a></li>
                                <li><a href=component_messages.html>Messages</a></li>
                                <li> <a href=#>Tables<i class="icon-angle-right pull-right"></i></a>
                                    <ul class=dropdown-submenu>
                                        <li><a href=component_table_default.html>Default tables</a></li>
                                        <li><a href=component_table_sortable.html>Sortable tables</a></li>
                                    </ul>
                                </li>
                                <li> <a href=#>Layouts<i class="icon-angle-right pull-right"></i></a>
                                    <ul class=dropdown-submenu>
                                        <li><a href=component_layout_blank.html>Default layout(blank)</a></li>
                                        <li><a href=component_layout_custom.html>Custom navigation</a></li>
                                        <li><a href=component_layout_scroll.html>Content scroll</a></li>
                                        <li><a href=component_layout_fixed.html>Fixed content</a></li>
                                    </ul>
                                </li>
                                <li><a href=component_charts.html>Charts</a></li>
                                <li><a href=component_maps.html>Maps</a></li>
                                <li><a href=component_typography.html>Typography</a></li>
                                <li><a href=component_gallery.html>Gallery</a></li>
                                <li><a href=component_calendar.html>Calendar</a></li>
                                <li><a href=component_icons.html>Icons</a></li>
                            </ul>
                        </li>
                        <li><a href=widgets.html><span class=icon-globe></span> widgets</a></li>
                        <li class=dropdown> <a href=# class=dropdown-toggle data-toggle=dropdown><span class=icon-file-alt></span> pages</a>
                            <ul class=dropdown-menu>
                                <li><a href=sample_login.html>Login</a></li>
                                <li><a href=sample_registration.html>Registration</a></li>
                                <li><a href=sample_profile.html>User profile</a></li>
                                <li><a href=sample_profile_social.html>Social profile</a></li>
                                <li><a href=sample_edit_profile.html>Edit profile</a></li>
                                <li><a href=sample_mail.html>Mail</a></li>
                                <li><a href=sample_search.html>Search</a></li>
                                <li><a href=sample_invoice.html>Invoice</a></li>
                                <li><a href=sample_contacts.html>Contacts</a></li>
                                <li><a href=sample_tasks.html>Tasks</a></li>
                                <li><a href=sample_timeline.html>Timeline</a></li>
                                <li> <a href=#>Email templates<i class="icon-angle-right pull-right"></i></a>
                                    <ul class=dropdown-submenu>
                                        <li><a href=email_sample_1.html>Sample 1</a></li>
                                        <li><a href=email_sample_2.html>Sample 2</a></li>
                                        <li><a href=email_sample_3.html>Sample 3</a></li>
                                        <li><a href=email_sample_4.html>Sample 4</a></li>
                                    </ul>
                                </li>
                                <li> <a href=#>Error pages<i class="icon-angle-right pull-right"></i></a>
                                    <ul class=dropdown-submenu>
                                        <li><a href=sample_error_403.html>403 Forbidden</a></li>
                                        <li><a href=sample_error_404.html>404 Not Found</a></li>
                                        <li><a href=sample_error_500.html>500 Internal Server Error</a></li>
                                        <li><a href=sample_error_503.html>503 Service Unavailable</a></li>
                                        <li><a href=sample_error_504.html>504 Gateway Timeout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role=search>
                        <div class=form-group>
                            <input type=text class=form-control placeholder="search..."/>
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
                        <a href=# class="informer informer-three"><span>14 / 255</span> Messages </a>
                        <a href=# class="informer informer-four"> <span>$549.44</span> Balance </a>
                        <img id="user-avatar" src="{{ Auth::user()->avatar }}" class="img-circle img-thumbnail"/>
                    </div>
                </div>
                <div class="content list-group list-group-icons">
                    <a href=# class=list-group-item><span class=icon-envelope></span>Messages<i class="icon-angle-right pull-right"></i></a>
                    <a href=# class=list-group-item><span class=icon-bar-chart></span>Statistic<i class="icon-angle-right pull-right"></i></a>
                    <a href=# class=list-group-item><span class=icon-cogs></span>Settings<i class="icon-angle-right pull-right"></i></a>
                    <a href=# class=list-group-item><span class=icon-off></span>Logout<i class="icon-angle-right pull-right"></i></a>
                </div>
            </div>
        </div>

        <div class=col-md-10>
            <div class="block block-drop-shadow">
                <div class=header>
                    <h2>Messaging</h2>
                    <div class="side pull-right">
                        <ul class=buttons>
                            <li><a href=#><span class=icon-user></span></a></li>
                            <li><a href=#><span class=icon-cogs></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="content messages npr npb npt">
                    <div class=scroll style=height:250px>
                        <div class=messages-item> <img src="{{ asset('img/example/user/dmitry_s.jpg') }}" class="img-circle img-thumbnail"/>
                            <div class=messages-item-text>Duis eu libero pellentesque, dapibus ante eu, vehicula leo. Nulla gravida rutrum neque</div>
                            <div class=messages-item-date>14:33 30.08.2013</div>
                        </div>
                        <div class="messages-item inbox"> <img src="{{ asset('img/example/user/olga_s.jpg') }}" class="img-circle img-thumbnail"/>
                            <div class=messages-item-text>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum nisl velit</div>
                            <div class=messages-item-date>14:32 30.08.2013</div>
                        </div>
                    </div>
                </div>
                <div class=footer>
                    <div class=input-group> <span class=input-group-addon><i class=icon-comment></i></span>
                        <input type=text class="form-control message" placeholder=message..>
                        <span class=input-group-btn>
                            <button class="btn send-message"><span class=icon-chevron-up></span></button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
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