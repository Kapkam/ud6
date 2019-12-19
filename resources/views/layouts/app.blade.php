<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Blog Post  - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{url('css/blog-post.css')}}" rel="stylesheet">

</head>
<body>
    <div id="app">
        @include('layouts.header')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('layouts.footer')
    @include('layouts.scripts')
</body>
</html>
