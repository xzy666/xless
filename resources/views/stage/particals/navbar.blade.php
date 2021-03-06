<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                xless.cn
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/article') }}">文章</a></li>
                <li><a href="#">待开放</a></li>
                <li><a href="#">待开放</a></li>
                <li><a href="#">待开放</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Search Box -->
                <li>
                    <form class="navbar-form navbar-right search" role="search" method="get" action="{{ url('search') }}">
                        <input type="text" class="form-control" name="q" placeholder="Search" required>
                    </form>
                </li>

                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('login') }}">登录</a></li>
                    <li><a href="{{ url('register') }}">注册</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            {{  Auth::user()->name }}
                            <b class="caret"></b>&nbsp;&nbsp;
                            <img class="avatar img-circle" src="{{asset('icon.JPG')}}">
                        </a>

                        <ul class="dropdown-menu text-center" role="menu">
                            <li><a href="{{ url('user', ['name' => Auth::user()->name]) }}"><i class="icon-cut"></i>个人中心</a></li>
{{--                            <li><a href="{{ url('setting') }}"><i class="ion-gear-b"></i>个人中心</a></li>--}}
                            @if(Auth::user()->is_admin)
                                <li><a href="{{ url('admin/index') }}"><i class="icon-compass"></i>后台</a></li>
                            @endif
                            <li class="divider"></li>
                            <li>
                                <a href="{{ url('logout') }}">
                                    <i class=icon-adn></i>退出
                                </a>

                                <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>