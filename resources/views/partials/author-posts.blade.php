<div class="blog-post">
    <h2 class="font-italic">{{ $post->post_heading }}</h2>
    <p class="blog-post-meta">Written on {{ $post->created_at }} - <a href="{{route('get-post', ['post_slug' => Str::slug($post->post_heading), 'post_id'=>$post->id])}}">Read More</a></p>
</div><!-- /.blog-post -->
