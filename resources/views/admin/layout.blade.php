<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Micro Blog</title>

        <link rel="stylesheet" href="{{ asset('public/admin/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/admin/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/admin/css/style.css') }}">
        @yield('style')

    </head>
    <body>
      <div class="container">

@include('admin.includes.header')

<div class="section">
    <div class="row">
        <div class="col-md-4">
            @include('admin.includes.sidebar')
        </div>

        <div class="col-md-8">
            @yield('content')
        </div>
    </div>
</div>

@include('admin.includes.footer')
      

        </div>

        <script src="{{ asset('public/admin/js/jquery.js') }}"></script>
        <script src="{{ asset('public/admin/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/admin/js/functions.js') }}"></script>   

        @yield('script')
    </body>
</html>
