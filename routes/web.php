<?php

use Illuminate\Support\Facades\Route;

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
//الجزء الثالث تمرير المصفوفات في لارافل
Route::get('tasks', function () {
    $tasks = [
        'Task 1',
        'Task 2',
        'Task 3',
    ];
    return view('tasks', compact('tasks'));
});
//لو بدي أصل لعنصر واحد من المصفوفة
Route::get('show/{id}', function ($id){
    $tasks = [
        'Task 1',
        'Task 2',
        'Task 3',
    ];
    $task = $tasks[$id] ;
    return view('show' , compact('task'));
});

//الجزء الرابع تمرير المصفوفات الثنائية
Route::get('tasks', function () {
    $tasks = [
        'first-task' => 'Task 1',
        'second-task' =>'Task 2',
        'third-task' =>'Task 3',
    ];
    return view('tasks', compact('tasks'));
});
Route::get('show/{id}', function ($id){
    $tasks = [
        'first-task' => 'Task 1',
        'second-task' =>'Task 2',
        'third-task' =>'Task 3',
    ];
    $task = $tasks[$id] ;
    return view('show' , compact('task'));
});
