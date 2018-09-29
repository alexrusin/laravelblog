<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$routes = ['hello-world'];

foreach ($routes as $route) {
	eval("Route::get('/$route', 'RoutesController@helloWorld');");
	eval("Route::post('/$route', 'RoutesController@helloWorld');");
}

Route::post('greetings', function(Request $request){

	$payload = $request->greetings;
	return response(["answer" => "hello to you $payload"], 200);
});

Route::get('greetings', function(Request $request){
	dd($request->how);
});

Route::get('/get/xml', function(Request $request){
	//sleep(10);
	return response('<FulfillmentStatusRequest> <Order> <Owner>Owner</Owner> <APIKey>ApiKey</APIKey> <ReferenceNum>	565502541926-01</ReferenceNum> </Order> </FulfillmentStatusRequest>', 200);
});

Route::post('/hello', function(Request $request) {
	
	$firstName = request('name');
	$lastName = request('lastName');

	$message = "Hello $firstName $lastName.  Nice to meet you!";

	return response()->json(['message' => $message], 200);
});


