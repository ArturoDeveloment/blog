<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CreatePostController;
use App\Http\Controllers\MainMenuController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\DropInfoController;
use App\Http\Controllers\SavePasswordController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/request', [SavePasswordController::class, 'index'])->name('/{$email}.index');

Route::get('/save_password', function () {
    return view('savePassword');
});

Route::get('/', function () {
    Auth::logout(); 
    $texto = "";
    return view('login', ['texto' => $texto]);
});

Route::get('/registro', function () {
    $texto = '';
    return view('register', ['texto'  =>  $texto]);
});


Route::get('/responder', function (){
    if(Auth::check())
    {
        return view('answerQuestions');
    }else{
        return redirect('/')->with('texto', 'No tiene credenciales');
    }
});

Route::get('/mainMenu', [MainMenuController::class, 'index'])->name('mainMenu.index');

Route::get("/post", function () {
    if(Auth::check())
    {
        return view('createPost');
    }
    return redirect('/')->with('texto', 'No tiene credenciales');
});

Route::get("/delete_comment/{id_comment}/{id_hilo}", [DropInfoController::class, 'delete_comment'])->name("/elete_comment/{id_comment}.delete_comment");

Route::get("/delete_post/{id_post}", [DropInfoController::class, 'delete_post'])->name('/delete_post/{id_post}.elete_post');

Route::get("/answer/{id?}/{user_id?}", [AnswerController::class, 'send'])->name("/answer/{titulo}/{texto}.send");

Route::post("/save_comment/{id_post}", [AnswerController::class, 'create'])->name('/save_comment/{id_post}.create');

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::post('/save_data', [RegisterController::class, 'sing_up'])->name('sing_up');

Route::post('/post', [CreatePostController::class, 'create'])->name('create');

