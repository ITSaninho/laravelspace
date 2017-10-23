@foreach($tree as $comment)
    <div class="comment child">
        <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&s=50" alt="" width="50" height="50" border="0" /> </div>
        <p class="text-right">{{$comment->created_at}}</p>
        <p>{{$comment->user_id}}</p>
        <p>{{$comment->text}}</p>
        <a id="{{$comment->id}}" href=#>Ответить</a>


        @if(isset($comment->childs))
            @include('block.comments_rotator',['tree'=>$comment->childs])
        @endif
    </div>
@endforeach