@include('tree.header')
@foreach ($posts as $post)
    @include('components.post', ['components.post' => $post])
    <div style="margin-top: -30px; margin-bottom: 30px">
        <span style="
            background-color: #CCE3E9;
            padding: 8px;
            border-radius: 10px;
            cursor: pointer;"
        >
            <a href="{{route('posts.show', ['post' => $post])}}">Leggi i commenti!</a>
        </span>
    </div>
@endforeach
@include('tree.footer')
