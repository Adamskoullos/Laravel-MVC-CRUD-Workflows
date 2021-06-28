<x-head />
    <x-nav />
    <h2>Create a new post</h2>
    <form action="" method="POST" class="new-post-form">
        @csrf
        <label for="title">Post Title</label>
        <input type="text" id="title" name="title" placeholder="Enter title" required>
        <label for="body">Post Body</label>
        <textarea type="text" id="body" name="body" placeholder="Enter body" required></textarea>
        <button>Create Post</button>
    </form>
    
<x-footer />