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


            @foreach ($contents as $content)
                    <!-- Form -->
                <form method="post">
                    {{csrf_field()}}

                    <div class="field">
                        <label>Назва:</label>
                        <input type="text" name="name" value="{{$content->name}}" class="form-control" />
                    </div>



                    <div class="field">
                        <label>Рейтинг: <span>*</span></label>
                        <input type="text" value="{{$content->link}}" name="link" class="form-control" >
                    </div>


                    <div class="field">
                        <label>Ключові слова: <span>*</span></label>
                        <textarea name="keywords" class="form-control" >{{$content->keywords}}</textarea>
                    </div>

                    <div class="field">
                        <label>Опис: <span>*</span></label>
                        <textarea name="description" class="form-control" >{{$content->description}}</textarea>
                    </div>

                    <div class="field">
                        <input type="submit" value="Додати"/>
                    </div>

                </form>
            @endforeach

                <a href="{{ URL::previous() }}">Назад</a>



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