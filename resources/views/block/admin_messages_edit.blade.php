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
                        <label>Відправник: <span>*</span></label><br>
                        <select name="user_id">
                            <option value="{{$content->user->id}}">{{$content->user->name}}</option>
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="field">
                        <label>Отримувач: <span>*</span></label><br>
                        <select name="whom_id">
                            <option value="{{$content->whom_id}}">{{$content->whom_id}}</option>
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="field">
                        <label>Текст: <span>*</span></label>
                        <textarea name="text" class="form-control" >{{$content->text}}</textarea>
                    </div>

                    <div class="field">
                        <label>Прочитане: <span>*</span></label>
                        @if($content->read_it == 1)
                            <input type="checkbox" name="read_it" class="form-control" checked>
                        @else
                            <input type="checkbox" name="read_it" class="form-control" >
                        @endif
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