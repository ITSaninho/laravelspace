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
                <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST">
                    {{csrf_field()}}

                    <div class="field">
                        <label>Назва:</label>
                        <input type="text" value="{{$content->title}}" name="title" class="form-control" />
                    </div>

                    <div class="field">
                        <label>Текст: <span>*</span></label>
                        <textarea name="text" class="form-control" >{{$content->text}}</textarea>
                    </div>


                    <div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
                        <label for="img" class="control-label">Avatar</label>

                        <div>
                            <img src="/data/post/images/{{$content->img}}" style="width:120px; height:auto;">
                            <input type="file" name="img">
                        </div>
                    </div>


                    <div class="field">
                        <label>Рейтинг: <span>*</span></label>
                        <input type="text" value="{{$content->rank}}" name="rank" class="form-control" >
                    </div>

                    <div class="field">
                        <label>Переглядів: <span>*</span></label>
                        <input type="text" name="views" value="{{$content->views}}" class="form-control" >
                    </div>

                    <div class="field">
                        <label>Лайків: <span>*</span></label>
                        <input type="text" name="likes" class="form-control" value="{{$content->likes}}" >
                    </div>

                    <div class="field">
                        <label>Дизлайків: <span>*</span></label>
                        <input type="text" name="deslikes" class="form-control" value="{{$content->deslikes}}" >
                    </div>


                    <div class="field">
                        <label>Статус: <span>*</span></label>
                        @if($content->public == 1)
                            <input type="checkbox" name="public" class="form-control" checked>
                        @else
                            <input type="checkbox" name="public" class="form-control" >
                        @endif
                    </div>

                    <div class="field">
                        <label>Планета: <span>*</span></label><br>
                        <select name="planets_id">
                            <option value="{{$content->planet_id}}">{{$content->planets_id}}</option>
                            @foreach ($planets as $planet)
                                <option value="{{$planet->id}}">{{$planet->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="field">
                        <label>Сонячна система: <span>*</span></label><br>
                        <select name="solar_system_id">
                            <option value="{{$content->solar_system_id}}">{{$content->solar_system->name}}</option>
                            @foreach ($solar_systems as $solar_system)
                                <option value="{{$solar_system->id}}">{{$solar_system->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="field">
                        <label>Автор: <span>*</span></label><br>
                        <select name="user_id">
                            <option value="{{$content->user_id}}">{{$content->user->name}}</option>
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="field">
                        <label>Категорія: <span>*</span></label><br>
                        <select name="category_id">
                            <option value="{{$content->category_id}}">{{$content->category->name}}</option>
                            @foreach ($categoryes as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="field">
                        <label>Кількьсть проголосувавших: <span>*</span></label>
                        <input type="text" name="rank_count" value="0" class="form-control" >
                    </div>

                    <div class="field">
                        <label>Новина: <span>*</span></label>
                        @if($content->news == 1)
                            <input type="checkbox" name="news" class="form-control" checked>
                        @else
                            <input type="checkbox" name="news" class="form-control" >
                        @endif
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