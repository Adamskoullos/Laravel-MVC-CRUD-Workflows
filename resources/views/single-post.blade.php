<x-head />
    <x-nav />
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <div class="btn-container">
        <a href="/blog">Back to blog</a>
        <a href="/blog/{{ $post->id }}/edit">Edit post</a>
        <form id="delete-form" method="POST">
            @method('DELETE')
            @csrf
            <button>Delete post</button>
        </form>
    </div>
<x-footer />