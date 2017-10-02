<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

      
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @stack('styles')
        
        <title>Tasks</title>
    </head>

   	<body>
      <div id="app"class="container">
     		   @yield('content')
      </div>
      <div id="inp">
      </div>
   <script src="{{ asset('js/app.js') }}"></script>
   @stack('scripts')
   	</body>
</html>