<?php
use App\Note;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('notes',function(){

	$notes =\App\Note::all();

	return view('notes',compact('notes'));
});

Route::post('notes',function(){

	return 'creating a note';
});



Route::get('notes/create', function(){
	return '[Create Note]';
});

Route::get('notes/{note}/{slog?}',function($note,$slog=null){
	dd($note,$slog);
})->where('note','[0-9]+');
