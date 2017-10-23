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
                        <label>Імя:</label>
                        <input type="text" name="name" value="{{$content->name}}" class="form-control" />
                    </div>

                    <div class="field">
                        <label>Email:</label>
                        <input type="email" name="email" value="{{$content->email}}" class="form-control" />
                    </div>

                    <div class="field">
                        <label>Тема: <span>*</span></label>
                        <input type="text" name="subject" value="{{$content->subject}}" class="form-control" >
                    </div>

                    <div class="field">
                        <label>Текст: <span>*</span></label>
                        <textarea name="text" class="form-control" >{{$content->text}}</textarea>
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