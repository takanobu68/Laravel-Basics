<?php

use Illuminate\Support\Facades\Route;
// "use"キーワードは他のファイルからクラスをインポートするために使用される。
use App\Http\Controllers\TestController;

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

// getリクエストを受け付けるためのルートを定義
// 第一引数はリクエストが送信されるURL,第二引数はURLに対して実行される処理
// tests/testというURLがリクエストされた場合に、TestControllerクラスのindexメソッドが実行される
Route::get('tests/test',[TestController::class, 'index']);
