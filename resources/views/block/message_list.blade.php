<!--start: Container -->
<div class="container">

    <!--start: Row -->
    <div class="row">

        <div class="col-sm-9">

            <h2><center>Діалоги</center></h2>

            @foreach ($contents as $content)
                @foreach($users as $user)

                    @if($content->user_id == Auth::user()->id or $content->whom_id == Auth::user()->id)
                        @if($content->user_id == $user->id or $content->whom_id == $user->id)
                        <div style="padding: 10px;">
                        <div class="field">
                            <div>
                                <img src="/data/user/{{$user->email}}/images/{{$user->avatar}}" style="width:50px; height:50px; float: left; margin-right: 15px; border-radius:50%;">
                            </div>

                            <div>
                                <p>Імя: {{$user->name}}</p>
                            </div>
                        </div>


                        <p><a href="{{ route('message_dialog',['dialog' => $user->id])}}">{{substr($content->text, 0, 50)}}...</a>
                        </div>
                        <div class="clear"></div>
                        @endif
                    @endif
                @endforeach
            @endforeach

        </div>


        <!-- start: Sidebar -->
        <div class="col-sm-3 hidden-phone">

            <!-- start: Sidebar Menu -->
            <div class="widget">
                <div class="title"><h3>Категорії</h3></div>
                <ul class="links-list-alt">
                    @foreach ($category as $categoria)
                        <li><a href="{{ route('category',['category' => $categoria->id])}}">{{$categoria->name}}</a></li>
                    @endforeach
                        <li><a href="{{ route('photo')}}">Фото</a></li>
                        <li><a href="{{ route('video')}}">Документальні фільми</a></li>
                        <li><a href="{{ route('camera')}}">Онлайн камери</a></li>
                </ul>
            </div>
            <!-- end: Sidebar Menu -->

            <!-- start: Sidebar Menu -->
            <div class="widget">
                <div class="title"><h3>Планети</h3></div>
                <ul class="links-list-alt">
                    @foreach ($planets as $planet)
                        <li><a href="http://localhost:8888/bootstrap/smart2/full_width.html">{{$planet->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- end: Sidebar Menu -->

            <!-- start: Sidebar Menu -->
            <div class="widget">
                <div class="title"><h3>Сонячна система</h3></div>
                <ul class="links-list-alt">
                    @foreach ($solar_systems as $solar_system)
                        <li><a href="http://localhost:8888/bootstrap/smart2/full_width.html">{{$solar_system->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- end: Sidebar Menu -->


        </div>
        <!-- end: Sidebar -->
    </div>
</div>


<!--end: Container-->