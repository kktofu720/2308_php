<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BoardController;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

// Route::get('/member/login', function () {
//     return view('login');
// });

// Route::get('/member/registration', function () {
//     return view('registration');
// });

// Route::get('/', function () {
//     return view('login');
// });

// 유저 관련
Route::get('/member/login', [UserController::class, 'loginget'])->name('member.login.get'); // 로그인 화면 이동
Route::middleware('my.member.validation')->post('/member/login', [UserController::class, 'loginpost'])->name('member.login.post'); // 로그인 처리
Route::get('/member/registration', [UserController::class, 'registrationget'])->name('member.registration.get'); // 회원가입 화면 이동
Route::middleware('my.member.validation')->post('/member/registration', [UserController::class, 'registrationpost'])->name('member.registration.post'); // 회원가입 처리
Route::get('/member/logout', [UserController::class, 'logoutget'])->name('member.logout.get'); // 로그아웃 처리



// 보드 관련
Route::middleware('auth')->resource('/board', BoardController::class);
//   GET|HEAD        board ...................................... board.index › BoardController@index  
//   POST            board ...................................... board.store › BoardController@store  
//   GET|HEAD        board/create ............................. board.create › BoardController@create  
//   GET|HEAD        board/{board} ................................ board.show › BoardController@show  
//   PUT|PATCH       board/{board} ............................ board.update › BoardController@update  
//   DELETE          board/{board} .......................... board.destroy › BoardController@destroy  
//   GET|HEAD        board/{board}/edit ........................... board.edit › BoardController@edit  
// board/{board} 에 {board} 로 돼 있는 것은 {{route('board.update', ['board' => $data->b_id])}} []를 추가 해야함




//   GET|HEAD        user ........................ user.index › UserController@index  로그인 화면이동
//   GET|HEAD        user/{user}/edit .............. user.edit › UserController@edit  로그인 처리

//   GET|HEAD        user/create ............... user.create › UserController@create  회원 가입 화면 이동
//   POST            user ........................ user.store › UserController@store  회원 가입 처리

//   GET|HEAD        user/{user} ................... user.show › UserController@show  회원 정보 화면 이동
//   PUT|PATCH       user/{user} ............... user.update › UserController@update  회원 정보 수정 처리

//   DELETE          user/{user} ............. user.destroy › UserController@destroy  회원 탈퇴 처리


