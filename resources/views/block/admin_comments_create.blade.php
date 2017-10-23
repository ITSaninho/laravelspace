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
                <form method="post">
                    {{csrf_field()}}
                    <div class="field">
                        <label>Логін:</label>
                        <input type="text" name="login" class="form-control" />
                    </div>

                    <div class="field">
                        <label>Зареєстрований користувач: <span>*</span></label><br>
                        <select name="user_id">
                            <option value="1">Виберіть користувача</option>
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="field">
                        <label>Публікація: <span>*</span></label><br>
                        <select name="post_id">
                            @foreach ($posts as $post)
                                <option value="{{$post->id}}">{{$post->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="field">
                        <label>Батьківській коментар: <span>*</span></label><br>
                        <select name="parent_id" style="width: 100%">
                            <option value="0">Батьківський коментарь</option>
                                @foreach ($comments as $comment)
                                    <option value="{{$comment->id}}">{{substr($comment->text, 0, 50)}}...</option>
                                @endforeach
                        </select>
                    </div>

                    <div class="field">
                        <label>Текст: <span>*</span></label>
                        <textarea name="text" class="form-control" ></textarea>
                    </div>

                    <div class="field">
                        <label>Лайків: <span>*</span></label>
                        <input type="text" name="likes" class="form-control" >
                    </div>

                    <div class="field">
                        <label>Дизлайків: <span>*</span></label>
                        <input type="text" name="deslikes" class="form-control" >
                    </div>

                    <div class="field">
                        <input type="submit" value="Додати"/>
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