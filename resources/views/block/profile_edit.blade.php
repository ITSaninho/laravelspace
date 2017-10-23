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
                    <!-- Form -->

            @if(count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif


            <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST">
                {{ csrf_field() }}

                <div class="field">
                    <label for="name" class="control-label">Name</label>

                    <div>
                        <input id="name" type="text" class="form-control" name="name" value="{{ $content->name }}" required autofocus>
                    </div>
                </div>

                <div class="field">
                    <label for="password" class="control-label">Password</label>

                    <div>
                        <input id="password" type="password" class="form-control" name="password">
                    </div>
                </div>


                <div class="field">
                    <label for="avatar" class="control-label">Avatar</label>

                    <div>
                        <img src="/data/user/{{$content->email}}/images/{{$content->avatar}}" style="width:120px; height:auto;">
                        <input type="file" name="avatar">
                    </div>
                </div>

                <div class="field">
                    <div>
                        <button type="submit" class="btn btn-primary">
                            Зберегти
                        </button>
                    </div>
                </div>
            </form>

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
