<!--start: Container -->
<div class="container">

    <!--start: Row -->
    <div class="row">

        <div class="col-sm-9">

            <!-- start: Post -->
            @foreach ($posts as $post)
                <div class="post">
                    <div class="post-img picture"><a href="post.blade.php"><img src="/data/post/images/{{$post->img}}" alt="{{$post->title}}" /><div class="image-overlay-link"></div></a></div>
                    <span class="post-icon standard"><i class="fa fa-pencil"></i></span>
                    <div class="post-content">
                        <div class="post-title"><h2><a href="{{ route('video',['video' => $post->id])}}">{{ $post->title }}</a></h2></div>
                        <div class="post-description">
                            <p>
                                {{ $post->text }}
                            </p>
                        </div>
                        <a class="post-entry" href="{{ route('video',['video' => $post->id])}}">Read More...</a>
                        <div class="post-meta"><span><i class="fa fa-calendar"></i>{{ $post->created_at }}</span> <span><i class="fa fa-user"></i>By <a href="blog.html#">{{ $post->user->name }}</a></span> <span><i class="fa fa-comments"></i>With {{count($post->comments)}}</span></div>
                    </div>
                </div>
                @endforeach
                        <!-- end: Post -->




                {{ $posts->links() }}
                        <!--$posts->render()-->

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
                        <li><a href="{{ route('planets',['planets' => $planet->id])}}">{{$planet->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- end: Sidebar Menu -->

            <!-- start: Sidebar Menu -->
            <div class="widget">
                <div class="title"><h3>Сонячна система</h3></div>
                <ul class="links-list-alt">
                    @foreach ($solar_systems as $solar_system)
                        <li><a href="{{ route('solar_systems',['solar_systems' => $solar_system->id])}}">{{$solar_system->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- end: Sidebar Menu -->


        </div>
        <!-- end: Sidebar -->

    </div>
    <!--end: Container-->

</div>
<!-- end: Wrapper  -->