<section class="post">
    <header class="post-header">
        <div class="pure-u-1 pure-u-md-1-2">
            <div
                style="background-image: url('{{asset($post->image)}}'); height: 300px; width: 100%; background-size: cover; background-position: top"
            ></div>
        </div>
        <div>
            <h2 class="post-title">
                {{$post->title}}
            </h2>
            <form style="margin-bottom: 10px" method="POST" action="{{route('posts.destroy', ['post' => $post])}}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input style="cursor: pointer" value="Elimina questo post!" type="submit">
            </form>
            <form style="margin-bottom: 10px" method="GET" action="{{route('posts.edit', ['post' => $post])}}">
                <input style="cursor: pointer" value="Aggiorna questo post!" type="submit">
            </form>
        </div>
        <p class="post-meta">
            Di <a href="#" class="post-author">{{$post->author->first_name}} {{$post->author->last_name}}</a>
        </p>
        <p class="post-meta">
            {{$post->description}}
        </p>
    </header>
    <div class="post-description">
        <p>{{$post->body}}</p>
    </div>
</section>
