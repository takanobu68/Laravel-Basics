<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Test; // Testモデルを使えるように読み込む

class TestController extends Controller
{
    public function index()
    {
        // Testモデルに対してall()メソッドを呼び出して、データベース内のすべてのレコードを取得
        $values = Test::all();

        // クエリビルダ
        $query = DB::table('tests')->where('text','=','aaa')
        ->select('id', 'text')
        ->get();

        dd($query);
        // view関数を使用して、tests.testビューを返します。
        // tests.test は、ビューが保存されているファイルパスを指定しています
        // このビューは、指定されたパスに保存されているBladeテンプレートファイルを表示する役割を持ちます。
        // compact('values') の部分では、$values 変数をビューに渡しています。
        // compact 関数は、引数として渡された変数名とその値を連想配列として生成し、ビューに渡します。
        // つまり、$values 変数がビュー内で利用可能になります。
        return view('tests.test',compact('values'));
    }
}
