<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Frequently Asked Questions</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
         <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/modern_css/part-one.css">
    </head>

   	<body>
      <div id="app">
        <header class="section">
          <div class="container">
            <div class="header-top">
              <h1>XCasts</h1>

              <a href="#">Sign In</a>
            </div>

            <nav>
              <a href="#">Catalog</a>
              <a href="#">Series</a>
              <a href="#">Podcast</a>
              <a href="#">Discussion</a>
            </nav>
          </div>
        </header>

        <div class="section">
          <div class="container">
            <div class="w-3/5 m-auto">

              <div class="mb-8 text-center">
                 <h1 class="text-3xl mb-1">FAQ</h1>
                  <p>It's okay.  From time to time we all have questions</p>
              </div>
             
              @foreach($questions as $question)
              <question :question="{{json_encode($question)}}"></question>
              @endforeach

            </div>
            
          </div>
        </div>
      </div>
       <script src="{{ asset('js/app.js') }}"></script>
   	</body>
</html>