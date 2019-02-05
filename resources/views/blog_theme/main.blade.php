<!DOCTYPE html>
<html lang="en">
<!-- Create controller and database using php artisan make:model -mcr posts -->
<!-- Update the database with php artisan migrate -->
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  </head>

  <body>

    <!-- Navbar -->
    @include('blog_theme.partials.navbar')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6"> @yield('posts')  @include('blog_theme.partials.sidebar') </div>
     
      </div>
    </div>
    @include('blog_theme.partials.footer')


	

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

  </body>
</html>
