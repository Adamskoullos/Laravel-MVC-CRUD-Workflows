<x-head />
<x-nav />
<h1>Blog Page</h1>
@foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
@endforeach
<x-footer />