<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Flexbox Examples</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/modern_css/flexbox-example.css">
    </head>
    <body class="container mx-auto">
    	<div class="border-b py-8">
    		<h1 class="mb-6 text-grey-dark text-sm font-bold tracking-wide uppercase">
    			Instant Navigation
    		</h1>
    		<nav class="bg-blue-lightest py-4 px-4 flex justify-between">
    			<a href="#">Home</a>
    			<a href="#">About</a>
    			<a href="#">Our Mission</a>
    			<a href="#">Contact</a>
    		</nav>
    	</div>

    	<div class="border-b py-8">
    		<h1 class="mb-6 text-grey-dark text-sm font-bold tracking-wide uppercase">
    			Split Navigation
    		</h1>
    		<nav class="bg-blue-lightest py-4 px-4 flex justify-between">
    			<div>
    				<a href="#">Home</a>
    				<a href="#">About</a>
    			</div>
    			<div>
					<a href="#">Our Mission</a>
    				<a href="#">Contact</a>
    			</div>
    		</nav>
    	</div>

    	<div class="border-b py-8">
    		<h1 class="mb-6 text-grey-dark text-sm font-bold tracking-wide uppercase">
    			Align Image With Text
    		</h1>
    		
    		<div class="flex items-center">
    			<img src="http://via.placeholder.com/350x150" class="mr-4">
    			<div>
    				<h3 class="mb-4">My Trip To...</h3>
    				<p>
    					Lorem ipsum dolor sit ament, consecterur adiplicing elit, sed do eiusmod tempor incidunt ut labore et dolore magn aliqua
    				</p>
    			</div>
    		</div>

    	</div>

    	<div class="border-b py-8">
    		<h1 class="mb-6 text-grey-dark text-sm font-bold tracking-wide uppercase">
    			Perfectly Centered Text
    		</h1>
    		
    		<div class="bg-grey-light p-6 w-3/4 h-64 flex justify-center items-center">
    			<div class="w-64">
    				<h3>Flexbox is Amazing</h3>
    				<p>
    					Lorem ipsum dolor sit ament, consecterur adiplicing elit, sed do eiusmod tempor incidunt ut labore et dolore magn aliqua
    				</p>
    			</div>
    			
    		</div>

    	</div>

    </body>
</html>