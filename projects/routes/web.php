<?php

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

use App\Notifications\SubscriptionRenewFailed;
use App\User;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

/*
 * GET    /projects        (index)
 * GET    /projects/create (create)
 * GET    /projects/1      (show)
 * POST   /projects        (store)
 * GET    /projects/1/edit (edit)
 * PATCH  /projects/1      (update)
 * DELETE /projects/1      (destroy)
 */

Route::resource('projects', 'ProjectsController')->middleware('can:view,project');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');


app()->singleton('example', function () {
    return new App\Example;
});

Route::get('/test', function () {
    dd(app('example'), app('example'));
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/notify', function () {
    $user = User::first();
    $user->notify(new SubscriptionRenewFailed());
    return 'Done';
});
