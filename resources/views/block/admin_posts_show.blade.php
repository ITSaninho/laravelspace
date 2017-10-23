<!--start: Container -->
<div class="container">

    <!--start: Row -->
    <div class="row">

        <div class="col-sm-9">

            <!-- start: Post -->
                @foreach ($contents as $content)
                    <div class="table_info">
                        <p style="float: right;">
                            <a href="{{ route('admin_posts_edit',['id' => $content->id])}}"><span class="halflings pencil"></span></a>
                            <a href="{{ route('admin_posts_delete',['id' => $content->id])}}"><span class="halflings remove"></span></a>
                        </p>
                        <p><strong>№id:</strong> {{ $content->id }}</p>
                        <p><strong>Назва:</strong> {{ $content->title }}</p>
                        <p><strong>Текст:</strong> {{ $content->text }}</p>
                        <p id="avatar_td"><img src="/data/post/images/{{ $content->img }}" style="width:120px; height:auto;">
                        <p><strong>Рейтинг:</strong> {{ $content->rank }}</p>
                        <p><strong>Переглядів:</strong> {{ $content->views }}</p>
                        <p><strong>Лайків:</strong> {{ $content->likes }}</p>
                        <p><strong>Дизлайків:</strong> {{ $content->deslikes }}</p>
                        <p><strong>Статус:</strong> {{ $content->public }}</p>
                        <p><strong>Дата створення:</strong> {{ $content->created_at }}</p>
                        <p><strong>Планета:</strong> {{ $content->planets_id }}</p>
                        <p><strong>Сонячна система:</strong> {{ $content->solar_system->name }}</p>
                        <p><strong>Автор:</strong> {{ $content->user->name }}</p>
                        <p><strong>Категорія:</strong> {{ $content->category_id }}</p>
                        <p><strong>Кількість проголосувавших:</strong> {{ $content->rank_count }}</p>
                        <p><strong>Новина:</strong> {{ $content->news }}</p>
                        <p><strong>Ключові слова:</strong> {{ $content->keywords }}</p>
                        <p><strong>Опис:</strong> {{ $content->description }}</p>
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