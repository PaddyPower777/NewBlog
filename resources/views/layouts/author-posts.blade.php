<!doctype html>
<html lang="en">

  @include('partials.head')

<body>
<div class="container">
  @include('partials.header')

  @include('partials.nav')
</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
          <h2 class="blog-post-title border-bottom">
            {{$author[0]->getFullName($author[0])}}
          </h2>

@foreach($posts as $post)

  @include('partials.author-posts')

@endforeach


</div><!-- /.blog-main -->

@include('partials.sidebar')

</div><!-- /.row -->

</main><!-- /.container -->

@include('partials.footer')