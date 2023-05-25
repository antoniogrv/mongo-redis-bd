
<section style="padding: 10px 10px 1px 10px !important;
    background-color: #eee;
    border-radius: 5px;
    margin-bottom: 10px;"
>
    <header class="post-header">
        <p class="post-meta">
            Commento di <a href="#" class="post-author">{{$comment->author->first_name}} {{$comment->author->last_name}}</a>
        </p>
    </header>
    <div class="post-description">
        <p>{{$comment->body}}</p>
    </div>
</section>
