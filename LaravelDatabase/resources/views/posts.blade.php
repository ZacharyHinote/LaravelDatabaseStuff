<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    @if(Session::has('post_del'))
        {{Session::get('post_del')}};
    @endif
    @foreach($posts as $post) 
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}</p>
        <a href="/posts/{{$post->id}}">View</a>
        <a href="/delete-post/{{$post->id}}">Deleted</a>
    @endforeach
</body>

</htmL>