<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tasks</title>
    </head>

   	<body>
   		<ul>
   			@foreach ($tasks as $task):
   				<li>{{$task}}</li>

   			@endforeach
   		</ul>


   	</body>
</html>