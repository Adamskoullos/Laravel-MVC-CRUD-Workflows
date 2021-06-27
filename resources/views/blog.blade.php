<x-head />
<x-nav />
<h1>Blog Page</h1>
@foreach($posts as $post)
    <a href="/blog/{{ $post->id }}"><h2>{{ $post->title }}</h2></a>
    <p>{{ $post->body }}</p>
@endforeach
<x-footer />