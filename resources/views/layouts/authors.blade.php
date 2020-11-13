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
            Our Many Majestic Authors
          </h3>

@foreach($users as $user)

  @include('partials.authors')

@endforeach


</div><!-- /.blog-main -->

@include('partials.sidebar')

</div><!-- /.row -->

</main><!-- /.container -->

@include('partials.footer')