<div class="blog-post">
    <h2 class="blog-post-title">{{ $user->getFullName($user) }}</h2>
    @if($user->posts->count() > 1) 
        <h3>Has contributed {{ $user->posts->count() }} blogs</h3>
    @else
        <h3>Has contributed {{ $user->posts->count() }} blog</h3>
    @endif
    <p class="blog-post-meta">Joined {{ $user->created_at }} <a href="{{ route('get-author-posts', ['author_name_slug' => Str::slug($user->getFullName($user)), 'author_id'=>$user->id]) }}">Read Now</a></p>
</div><!-- /.blog-post -->
