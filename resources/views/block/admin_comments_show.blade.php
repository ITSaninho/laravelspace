<!--start: Container -->
<div class="container">

    <!--start: Row -->
    <div class="row">

        <div class="col-sm-9">

            <!-- start: Post -->
                @foreach ($contents as $content)
                    <div class="table_info">
                        <p style="float: right;">
                            <a href="{{ route('admin_comments_edit',['id' => $content->id])}}"><span class="halflings pencil"></span></a>
                            <a href="{{ route('admin_comments_delete',['id' => $content->id])}}"><span class="halflings remove"></span></a>
                        </p>
                        <p><strong>№id:</strong> {{ $content->id }}</p>
                        <p><strong>Login:</strong> {{ $content->login }}</p>
                        <p><strong>Публікація:</strong> {{ $content->post->title }}</p>
                        <p><strong>Зареєстрований під імям:</strong> {{ $content->user->name }}</p>
                        <p><strong>Батьківській комент:</strong> {{ $content->parent_id }}</p>
                        <p><strong>Дата створення:</strong> {{ $content->created_at }}</p>
                    </div>
                    @endforeach


            <a href="{{ URL::previous() }}">Назад</a>


        </div>


        <!-- start: Sidebar -->

        <div class="col-sm-3 hidden-phone">

            <!-- start: Sidebar Menu -->
            <div class="widget">
                <div class="title"><h3>Навігація</h3></div>
                <ul class="links-list-alt">
                    <li><a href="{{ url('/admin/category') }}">Категорії</a></li>
                    <li><a href="{{ url('/admin/users') }}">Користувачі</a></li>
                    <li><a href="{{ url('/admin/rols') }}">Ролі користувачів</a></li>
                    <li><a href="{{ url('/admin/posts') }}">Статті</a></li>
                    <li><a href="{{ url('/admin/comments') }}">Коментарі</a></li>
                    <li><a href="{{ url('/admin/feedback') }}">Зворотній связок</a></li>
                    <li><a href="{{ url('/admin/messages') }}">Повідомлення</a></li>
                    <li><a href="{{ url('/admin/online_camera') }}">Онлайн камери</a></li>
                    <li><a href="{{ url('/admin/photo') }}">Фото</a></li>
                </ul>
            </div>
            <!-- end: Sidebar Menu -->



        </div>
        <!-- end: Sidebar -->

    </div>
    <!--end: Container-->

</div>
<!-- end: Wrapper  -->