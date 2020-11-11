<!doctype html>
<html lang="en">

  @include('partials.head')

<body>
<div class="container">
  @include('partials.header')

  @include('partials.nav')

  @include('partials.post-featured')

  @include('partials.post-highlights')
</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>

@include('partials.posts')

@include('partials.pagination')

</div><!-- /.blog-main -->

@include('partials.sidebar')

</div><!-- /.row -->

</main><!-- /.container -->

@include('partials.footer')