<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
     <!-- JS --> 
     <script type="text/javascript" src="{{ asset('public/js/app.js') }}"></script>
     <!-- CSS --> 
     <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
     
     <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
     <div class="container">
          @include('inc.navbar')
          @yield('body')
     </div>
</body>
</html>