@include('tree.header')
<div class="pure-u-1 pure-u-md-1-2">
    <div
        style="margin-bottom: 20px; background-image: url('{{asset($post->image)}}'); height: 300px; width: 100%; background-size: cover; background-position: top"
    ></div>
</div>
<form style="margin-bottom: 10px" method="POST" action="{{route('posts.update', ['post' => $post])}}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    Titolo<br />
    <textarea style="margin-bottom: 10px" cols="100" rows="2" name="title">{{$post->title}}</textarea><br />
    Descrizione<br />
    <textarea style="margin-bottom: 10px" cols="100" rows="2" name="description">{{$post->description}}</textarea><br />
    Contenuto<br />
    <textarea style="margin-bottom: 10px" cols="100" rows="10" name="body">{{$post->body}}</textarea><br />
    <input style="cursor: pointer" value="Invia gli aggiornamenti!" type="submit">
</form>
@include('tree.footer')
