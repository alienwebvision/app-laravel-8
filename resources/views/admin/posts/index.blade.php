<a href="{{ route('posts.create') }}">Criar novo Post</a>
<h1>Index de posts</h1>

@foreach($posts  as $post)

    <p>{{$post->title}}</p>

@endforeach
