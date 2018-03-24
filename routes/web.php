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

// Route::resource('cards', 'IDCardController');
Route::post('cards/lostCard', 'CardAppController@lostCard')->name('lostcard');
Route::resource('cards', 'CardAppController');

Route::resource('course', 'CourseController');
Route::resource('messages', 'MessagesController');

Route::resource('exams', 'ExamController');
Route::resource('timetables', 'TimetableController');
Route::resource('timetabledetails', 'DetailTTController');
Route::resource('examapplication', 'ExamAppController');

Route::resource('users', 'UserController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cApply', function () {
    return view('cardApply');
});

Route::get('/eApply', function () {
    return view('examApply');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('notebooks', 'NotebooksController');
    Route::get('notebooks/{id}/createNote', [
        'as' => 'createNote',
        'middleware'=>'role:superuser',
        'uses' => 'NotesController@createNote']);
    Route::resource('notes', 'NotesController');
    Route::resource('role', 'RoleController');
    Route::resource('user', 'UserController');
    Route::get('/admin', [
        'as' => 'admin.index',
        // 'middleware'=>'role:admin',
        'uses' => function () {
            return view('admin.index');
        }
    ]);
});

Route::get('/dashboard', 'HomeController@index')->name('home');
