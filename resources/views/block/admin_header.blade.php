<!--start: Navbar -->
<nav class="navbar navbar-default" role="navigation">
    <!--start: Container -->
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-code"></i>Unitedspace</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="nav navbar-right navbar-nav">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Вхід</a></li>
                    <li><a href="{{ route('register') }}">Реєстрація</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img src="/data/user/{{Auth::user()->email}}/images/{{ Auth::user()->avatar }}" style="width:25px; height:25px;  border-radius:50%;">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('profile',['id' => Auth::user()->id]) }}">Профіль</a>
                                <a href="{{route('message_list')}}">Повідомлення</a>
                                <a href="{{ route('users') }}">Користувачі</a>
                                @if(Auth::user()->rols_id == 3)
                                    <a href="{{ url('/') }}">Вернутись на сайт</a>
                                @endif
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Вихід
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
            <!-- Right Side Of Navbar -->
        </div><!-- /.navbar-collapse -->
    </div>
    <!--/.container-->
</nav>
<!--end: Navbar -->


<!-- start: Page Title -->
<div id="page-title">

    <div id="page-title-inner">



    </div>

</div>
<!-- end: Page Title -->