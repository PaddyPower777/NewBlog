<div class="blog-post">
    <p class="blog-post-meta border-bottom">Written on {{ $post[0]->created_at }}</p>
    <p>{{ $post[0]->post_body }}</p>
</div><!-- /.blog-post -->

<div class="blog-post">
    <h2 class="blog-post-title font-italic border-bottom">Comments ({{ $comments->count() }})</h2>

@foreach($comments as $comment)
    <p>{{ $comment->comment }}</p>
    <p class="blog-post-meta">Written by {{ $comment->user->getFullName($comment->user) }} on {{ $comment->created_at }}</p>
@endforeach
</div>

<div class="blog-post">
    <p class="blog-post-title font-italic border-bottom">Post Your Thoughts</p>
    <form>
        <textarea></textarea><br>
        <input type="submit" value="Submit" />
    </form>
</div>