@include('tree.header')
@include('components.post', ['components.post' => $post])
@foreach ($post->comments as $comment)
    @include('components.comment', ['components.comment' => $comment])
@endforeach
@include('tree.footer')
