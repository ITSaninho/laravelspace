<!--start: Container -->
<div class="container">

    <!--start: Row -->
    <div class="row">

        <div class="col-sm-9">

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                        <!-- start: Post -->
                <a href="{{ route('admin_posts_create')}}">Додати</a>

            <!-- start: Post -->

            <table>
                <tr class="table_info">
                    <td>№</td>
                    <td>Назва</td>
                    <td>Зображення</td>
                    <td>Текст</td>
                    <td>Дата створення</td>
                    <td>Автор</td>
                    <td>Переглядів</td>
                    <td>Опубліковано</td>
                    <td>Дії</td>
                </tr>
                @foreach ($contents as $content)
                    <tr class="table_info">
                        <td>{{ $content->id }}</td>
                        <td>{{ $content->title }}</td>
                        <td><img src="/data/post/images/{{$content->img}}" style="width:55px; height:55px;"></td>
                        <td>{{ $content->text }}</td>
                        <td>{{ $content->created_at }}</td>
                        <td>{{ $content->user->name }}</td>
                        <td>{{ $content->views }}</td>
                        <td>{{ $content->public }}</td>
                        <td class="can"><a href="{{ route('admin_posts_show_id',['content' => $content->id])}}"><span class="halflings eye-open"></span></a></td>
                        <td class="can"><a href="{{ route('admin_posts_edit',['id' => $content->id])}}"><span class="halflings pencil"></span></a></td>
                        <td class="can"><a href="{{ route('admin_posts_delete',['id' => $content->id])}}"><span class="halflings remove"></span></a></td>


                    </tr>
                    @endforeach
                            <!-- end: Post -->
            </table>




            {{ $contents->links() }}
                    <!--$posts->render()-->



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