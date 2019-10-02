<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{ $name_index }} </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- jquery -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Styles -->
        <link rel="stylesheet" href= {{ mix("css/app.css") }}>
    </head>
    <body>

      <header>
        <h2> {{ $name_index }} LIST </h2>
      </header>

      <div class="container">

        @yield('content')
        
      </div>

      <footer>
        Powered by Adriano
      </footer>
    </body>
</html>
