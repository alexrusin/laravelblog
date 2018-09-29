<?php
// use App\Post;
// $archives=Post::archives();
// dd($archives);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/create', 'TasksController@create')->name('taskform');
Route::post('tasks/create', 'TasksController@submit')->name('tasksubmit');
Route::get('/tasks/{task}', 'TasksController@show');
Route::get('/blade', 'BladeTestController');
Route::get('/merge', 'MergeController@index');
Route::get('/tasks/update/{task}', 'TasksController@taskupdate')->name('taskupdate');
Route::post('/tasks/update', 'TasksController@update')->name('update');
Route::get('/tasks/destroy/{task}', 'TasksController@destroy')->name('tasks.destroy');
Route::get('/posts', 'PostsController@index')->name('posts.index');
Route::get('/ajax-example', 'MergeController@ajaxShow')->name('ajax.show');

Route::get('/projects', 'ProjectsController@create')->name('projects.create');
Route::post('/projects', 'ProjectsController@store')->name('projects.store');

////api routes///
Route::get('/api/skills', function() {
	return ['Laravel', 'Vue', 'PHP', 'Javascript', 'Tooling'];
});

Route::get('/mail-jet', function(){

	$mj = new \Mailjet\Client('9f7c1bc11fdff09b81671177f7b6fa7d', 'f9625756053a788a604a36a5bed6dcc3',
	              true,['version' => 'v3.1']);
	$body = [
	    'Messages' => [
	        [
	            'From' => [
	                'Email' => "alex@alexrusin.com",
	                'Name' => "Mailjet Pilot"
	            ],
	            'To' => [
	                [
	                    'Email' => "alexrusin_2000@yahoo.com",
	                    'Name' => "Alex Rusin"
	                ]
	            ],
	            'Subject' => "Your email flight plan!",
	            'TextPart' => "Dear passenger 1, welcome to Mailjet! May the delivery force be with you!",
	            'HTMLPart' => "<h3>Dear passenger 1, welcome to Mailjet!</h3><br />May the delivery force be with you!"
	        ]
	    ]
	];
	$response = $mj->post(\Mailjet\Resources::$Email, ['body' => $body]);
	dd($response->getData());

});



