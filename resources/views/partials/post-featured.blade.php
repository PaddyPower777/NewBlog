<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">{{ $post->post_heading }}</h1>
        <p class="lead my-3">{{ $post->post_body }}</p>
        <p class="lead mb-0"><a href="{{route('get-post', ['post_slug' => Str::slug($post->post_heading), 'post_id'=>$post->id])}}" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
</div>