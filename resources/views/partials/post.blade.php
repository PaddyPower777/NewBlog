<div class="blog-post">
    <h2 class="blog-post-title">{{ $post->post_heading }}</h2>
    <h3>{{ $post->post_body }}</h3>
    <p class="blog-post-meta">Written on {{ $post->created_at }} - <a href="{{route('get-post', ['post_slug' => Str::slug($post->post_heading), 'post_id'=>$post->id])}}">Read More</a></p>
</div><!-- /.blog-post -->

<div class="blog-comment">
    <h2 class="blog-comment-title">Comments</h2>
</div>