<?php


use App\Task;
use Illuminate\Http\Request;

/**
 * Display All Tasks
 */
 Route::get('/', function () {
     return veiw('tasks');
 });
 
 /**
  * Add a New Task
  */
Route::post('task', function (request $request) {
    //
});

/**
 * Delete and Existing Task
 */
 Route::delete('/task/{id}', function ($id) {
     //
 });