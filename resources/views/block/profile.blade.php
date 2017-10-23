<style>
    .child {margin-left: 55px;}
</style>
<!--start: Container -->
<div class="container">

    <!--start: Row -->
    <div class="row">

        <div class="col-sm-9">

            <!-- start: Post -->
            @foreach ($contents as $content)


                <div class="field">
                    <div>
                        <img src="/data/user/{{$content->email}}/images/{{$content->avatar}}" style="width:30%; height:auto; float: left; margin-right: 5px;">
                        @if(Auth::user()->id == $id)
                            <p><a href="{{route('profile_edit',['id' => Auth::user()->id])}}">Редагувати</a></p>
                            <input type="file" name="avatar">
                        @endif
                    </div>
                </div>

                <p style="margin-top: 10px;">Імя: {{$content->name}}</p>
                <p>Email: {{$content->email}}</p>
                <p>Дата реєстрації:{{$content->created_at}}</p>

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
