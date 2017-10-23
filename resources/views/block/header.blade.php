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
                <li><a href="{{ url('/') }}">Головна</a></li>
                <li><a href="{{ route('news')}}">Новини</a></li>
                <li><a href="{{ route('contacts')}}">Контакти</a></li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Вхід</a></li>
                    <li><a href="{{ route('register') }}">Реєстрація</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            @if(!Auth::user()->avatar == 'default.jpg')
                                <img src="/data/user/{{Auth::user()->email}}/images/{{ Auth::user()->avatar }}" style="width:25px; height:25px;  border-radius:50%;">
                            @else
                                <img src="/data/user/default.jpg" style="width:25px; height:25px;  border-radius:50%;">
                            @endif
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('profile',['id' => Auth::user()->id]) }}">Профіль</a>
                                <a href="{{route('message_list')}}">Повідомлення</a>
                                <a href="{{ route('users') }}">Користувачі</a>
                                @if(Auth::user()->rols_id == 3)
                                    <a href="{{ url('/admin') }}">Панель адміністратора</a>
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

<!-- start: Slider -->
<div class="slider-wrapper">

    <div id="da-slider" class="da-slider">
        <div class="da-slide">
            <div class="da-img"><img src="/data/slider/829ac6ce1947543feed0294e32da4543.jpg" alt="image01" /></div>
        </div>
        <div class="da-slide">
            <div class="da-img"><img src="/data/slider/untiltled_space_panorama_by_sostopher.jpg" alt="image02" /></div>
        </div>
        <div class="da-slide">
            <div class="da-img"><img src="/data/slider/maxresdefault1.jpg" alt="image03" /></div>
        </div>
        <div class="da-slide">
            <div class="da-img"><img src="/data/slider/maxresdefault.jpg" alt="image04" /></div>
        </div>
        <nav class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </nav>
    </div>

</div>
<!-- end: Slider -->


<!-- start: Page Title -->
<div id="page-title">

    <div id="page-title-inner">



    </div>

</div>
<!-- end: Page Title -->