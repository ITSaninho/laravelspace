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
                        <label for="title" class="control-label">Назва</label>

                        <div>
                            <input id="title" type="text" class="form-control" name="title" required autofocus>
                        </div>
                    </div>


                    <div class="field">
                        <label for="img" class="control-label">Зображення</label>

                        <div>
                            <input type="file" name="img">
                        </div>
                    </div>


                    <div class="field">
                        <label>Ключові слова: <span>*</span></label>
                        <textarea name="keywords" class="form-control" ></textarea>
                    </div>

                    <div class="field">
                        <label>Опис: <span>*</span></label>
                        <textarea name="description" class="form-control" ></textarea>
                    </div>


                    <div class="field">
                        <div>
                            <button type="submit" class="btn btn-primary">
                                Зберегти
                            </button>
                        </div>
                    </div>
                </form>

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