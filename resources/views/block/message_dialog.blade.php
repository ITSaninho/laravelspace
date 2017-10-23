<!--start: Container -->
<div class="container">

    <!--start: Row -->
    <div class="row">

        <div class="col-sm-9">

            <!-- Form -->
            <form method="post" style="margin-bottom: 30px;">
                {{csrf_field()}}

                <div class="field">
                    <input type="hidden" name="whom_id" value="{{$dialog}}">
                </div>


                <div class="field">
                    <textarea name="text" class="form-control" ></textarea>
                </div>

                <div class="field">
                    <input type="submit" value="Відправити"/>
                </div>

            </form>

            @foreach ($contents as $content)

                @if($content->whom_id == $dialog or $content->user_id == $dialog)
                    @if($content->user_id == $dialog)
                        <div>
                            <img src="/data/user/{{$content->user->email}}/images/{{$content->user->avatar}}" style="width:50px; height:50px; float: left; margin-right: 15px; border-radius:50%;">
                        </div>
                        <div>
                            <p style="color: red">Імя: {{$content->user->name}}</p>
                            <p>Час:{{$content->created_at}}</p>
                            <p>{{$content->text}}</p>
                        </div>
                        <div class="clear" style="outline: #122b40 solid 1px;"></div>
                        <hr>
                    @else
                        <div>
                            <img src="/data/user/{{$content->user->email}}/images/{{$content->user->avatar}}" style="width:50px; height:50px; float: left; margin-right: 15px; border-radius:50%;">
                        </div>
                        <div>
                            <p style="color: green">Імя: {{$content->user->name}}</p>
                            <p>Час:{{$content->created_at}}</p>
                            <p>{{$content->text}}</p>
                        </div>
                        <div class="clear" style="outline: #122b40 solid 1px;"></div>
                        <hr>
                    @endif
                @endif

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