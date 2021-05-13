<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaravelComics</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
      @include ('partials.header')
      <main>
        @yield('main')
      </main>
      @include ('partials.footer')

      <script src="/js/app.js" charset="utf-8"></script>
    </body>
</html>
