<style>
    .child {margin-left: 55px;}
</style>
<!--start: Container -->
<div class="container">

    <!--start: Row -->
    <div class="row">

        <div class="col-sm-9">

            <!-- start: Post -->
            @foreach ($posts as $post)
                <div class="post">
                    <div class="post-img picture">
                        <a href="post.blade.php"><img src="/data/post/images/{{$post->img}}" alt="{{$post->title}}" />
                            <div class="image-overlay-link"></div>
                        </a>
                    </div>
                    <span class="post-icon standard"><i class="fa fa-pencil"></i></span>
                    <div class="post-content">
                        <div class="post-title">
                            <h2>
                                <a href="{{ route('post',['post_alias' => $post->id])}}">{{ $post->title }}</a>
                            </h2>
                        </div>
                        <div class="post-description">
                            <p>
                                {{ $post->text }}
                            </p>
                        </div>
                        <div class="post-meta">
                            <span><i class="fa fa-calendar"></i>{{ $post->created_at }}</span>
                            <span><i class="fa fa-user"></i>By <a href="blog.html#">{{ $post->user->name }}</a></span>
                            <span><i class="fa fa-comments"></i>With {{count($post->comments)}}</span>
                        </div>
                    </div>
                </div>


                <!-- end: Post -->

                <div id="comments">
                    @foreach($tree as $comment)
                        <div class="comment">
                            <div class="avatar">
                                <img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&s=50" alt="" width="50" height="50" border="0" />
                            </div>
                            <p class="text-right">{{$comment->created_at}}</p>
                            @if ( $comment->user_id === 1)
                                <p>{{$comment->login}}</p>
                            @else
                                <p>{{$comment->user_id}}</p>
                            @endif
                            <p>{{$comment->text}}</p>

                            <a id="{{$comment->id}}" href=#>Ответить</a>


                            @if(isset($comment->childs))
                                @include('block.comments_rotator',['tree'=>$comment->childs])
                            @endif

                        </div>
                    @endforeach
                </div>


                <!-- Form -->
                <div id="form-comment">
                    <form method="post">
                        {{csrf_field()}}
                        @if ( Auth::user())
                            <input type="hidden" value={{Auth::user()->id}} name="user_id">
                        @else
                            <div class="field">
                                <label>Name:</label>
                                <input type="text" name="login" class="form-control" />
                            </div>
                        @endif

                        <div class="field">
                            <label>Message: <span>*</span></label>
                            <textarea name="text" class="form-control" ></textarea>
                        </div>
                        <input type="hidden" value='0' id="parent_id" name="parent_id">
                        <input type="hidden" value={{$post->id}} name="post_id">

                        <div class="field">
                            <input type="submit" value="Add Comment"/>
                        </div>

                    </form>

                </div>
            @endforeach
        </div>


        <!-- start: Sidebar -->
        <div class="col-sm-3 hidden-phone">

            <!-- start: Sidebar Menu -->
            <div class="widget">
                <div class="title"><h3>Категорії</h3></div>
                <ul class="links-list-alt">
                    @foreach ($category as $categoria)
                        <li><a href="{{ route('category',['category' => $categoria->id])}}">{{$categoria->name}}</a></li>
                    @endforeach
                        <li><a href="{{ route('photo')}}">Фото</a></li>
                        <li><a href="{{ route('video')}}">Документальні фільми</a></li>
                        <li><a href="{{ route('camera')}}">Онлайн камери</a></li>
                </ul>
            </div>
            <!-- end: Sidebar Menu -->

            <!-- start: Sidebar Menu -->
            <div class="widget">
                <div class="title"><h3>Планети</h3></div>
                <ul class="links-list-alt">
                    @foreach ($planets as $planet)
                        <li><a href="http://localhost:8888/bootstrap/smart2/full_width.html">{{$planet->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- end: Sidebar Menu -->

            <!-- start: Sidebar Menu -->
            <div class="widget">
                <div class="title"><h3>Сонячна система</h3></div>
                <ul class="links-list-alt">
                    @foreach ($solar_systems as $solar_system)
                        <li><a href="http://localhost:8888/bootstrap/smart2/full_width.html">{{$solar_system->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- end: Sidebar Menu -->


        </div>
        <!-- end: Sidebar -->
    </div>
</div>


    <!--end: Container-->

<script>
    var comments=document.getElementById('comments'); //выбираем весь блок div с id=comments
    var ref=comments.getElementsByTagName('a'); //выбираем все ссылки внутри блока comments
    var form=document.getElementById('form-comment'); //выбираем форуму для комментирования
    for( i=0; i<ref.length; i++){

        ref[i].addEventListener('click',answer); //проходимся циклом по колекции ссылок и на каждую вешаем обработчик
    }
    function showRef(){ // функция показывает все ссылки "Ответить"
        for( i=0; i<ref.length; i++){

            ref[i].style.display="inline-block"; //проходимся циклом по колекции ссылок и делаем их видимыми
        }
    }
    function cancel(){ // функция обрабатывает нажание на ссылку "Отменить ответ"
        this.parentNode.removeChild(this); //удаляем ссылку на отмену комментария
        form.parentNode.removeChild(form); //удаляем форму
        comments.appendChild(form); //добавляем форму в конце списка комментариев
        showRef(); //показываем все ссылки "ответить"
        document.getElementById('parent_id').value=0; // обнуляем значение скрытого поля parent_id

    }
    function answer(){
        showRef(); //показываем все ссылки "ответить"
        var parent_id=this.id; //получаем id родительсокго комментария
        this.style.display="none"; //скрываем ссылку "ответить"
        document.getElementById('parent_id').value=parent_id; //в скрытое поле помещаем значение id родительского комменатрия.
        form.parentNode.removeChild(form); // удаляем форму, что бы отобразить ее возле родительского комменатрия
        this.parentNode.appendChild(form); //отображаем форму внутри родительского комментария
        var cancel_answer=document.createElement('a'); //создаем ссылку для отмены ответа
        cancel_answer.href='#'; //сслыка ни на что не ссылается
        cancel_answer.style.color="red"; //задаем цвет ссылки
        cancel_answer.id="cancel_anwer"; //назначаем id для ссылки, что легче потом отбирать
        cancel_answer.appendChild(document.createTextNode('Отменить ответ')); //добавляем текст для ссылки

        this.parentNode.appendChild(cancel_answer); //и добавляем ссылки в конце формы
        cancel_answer.addEventListener('click',cancel); // вешаем обработчик  что бы отменить ответ




    }
</script>