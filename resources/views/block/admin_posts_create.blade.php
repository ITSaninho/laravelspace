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
                <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST">
                {{csrf_field()}}

                <div class="field">
                    <label>Назва:</label>
                    <input type="text" name="title" class="form-control" />
                </div>

                <div class="field">
                    <label>Текст: <span>*</span></label>
                    <textarea name="text" class="form-control" ></textarea>
                </div>

                <div class="field">
                    <label>Зображення: </label>
                    <div>
                        <input type="file" name="img">
                    </div>
                </div>

                <div class="field">
                    <label>Рейтинг: <span>*</span></label>
                    <input type="text" name="rank" value="0" class="form-control" >
                </div>

                <div class="field">
                    <label>Переглядів: <span>*</span></label>
                    <input type="text" name="views" value="0" class="form-control" >
                </div>

                <div class="field">
                    <label>Лайків: <span>*</span></label>
                    <input type="text" name="likes" class="form-control" value="0" >
                </div>

                <div class="field">
                    <label>Дизлайків: <span>*</span></label>
                    <input type="text" name="deslikes" class="form-control" value="0" >
                </div>


                <div class="field">
                    <label>Статус: <span>*</span></label>
                    <input type="checkbox" name="public" class="form-control" >
                </div>

                <div class="field">
                    <label>Планета: <span>*</span></label><br>
                    <select name="planets_id">
                        <option value="0">-</option>
                        @foreach ($planets as $planet)
                            <option value="{{$planet->id}}">{{$planet->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="field">
                    <label>Сонячна система: <span>*</span></label><br>
                    <select name="solar_system_id">
                        <option value="0">-</option>
                        @foreach ($solar_systems as $solar_system)
                            <option value="{{$solar_system->id}}">{{$solar_system->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="field">
                    <label>Автор: <span>*</span></label><br>
                    <select name="user_id">
                        <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
                        @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="field">
                    <label>Категорія: <span>*</span></label><br>
                    <select name="category_id">
                        <option value="0">-</option>
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
                    <input type="checkbox" name="news" class="form-control" >
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