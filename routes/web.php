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
Route::get('/posts', 'PostsController@index')->name('posts.all');


