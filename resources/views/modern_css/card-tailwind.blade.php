<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Card Tailwind</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/modern_css/card-tailwind.css">
    </head>

   	<body class="flex justify-center items-center">
      <div class="card flex rounded">
        {{--left --}}
        <div class="card-left flex flex-col justify-between rounded px-8 py-6 items-center text-center text-white">
          <a href="#" class="card-skill-button no-underline text-xs rounded-full py-1 px-6 text-color-inherit">PHP</a>
          <img src="https://via.placeholder.com/120x120">
          <span class="card-difficulty text-xs">Intermediate Difficulty</span>
        </div>
        
        {{-- right --}}
        <div class="card-right flex flex-col text-grey-darker p-6">
          <h3 class="card-title text-black font-light text-3xl mb-3">
            <a href="#" class="no-underline text-color-inherit">Testing Jargon</a>
          </h3>
          <p class="card-excerpt flex-1">
            There's no two way about it: terminology in the testing world is incredibly overwhelming.  Let's fix that! Bit by bit,well break all of these confusing concepts down as best as we can.
          </p>
          <div class="card-meta flex text-sm">
            <div class="flex items-center mr-4">
              <img src="https://via.placeholder.com/15x15" class="mr-2 rounded-full">
              5 Lessons
            </div>

            <div class="flex items-center">
               <img src="https://via.placeholder.com/15x15" class="mr-2 rounded-full">
                53:10 min
            </div>           
          </div>
        </div>
      </div>
   	</body>
</html>