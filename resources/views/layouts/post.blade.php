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
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            {{$post[0]->post_heading}}
          </h3>

@foreach($post as $post)

  @include('partials.post')

@endforeach


</div><!-- /.blog-main -->

@include('partials.sidebar')

</div><!-- /.row -->

</main><!-- /.container -->

@include('partials.footer')