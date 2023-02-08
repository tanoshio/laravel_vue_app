<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 追加
use App\Models\Book;
// 具体的にはモデルからDBにアクセスし、取得したデータをコントローラで加工してビューに渡すと行ったことや、ビューからのデータをモデルに渡し、DBに保存をしたりします。
// またバリデーション（データが正当かどうかを判断する機能）もコントローラに記述します。
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        // eloquantをそのままreturnすると、jsonに変換してくれる。
        return $books;
    }
    
    public function store(Request $request)
    {
        // モデルの空のインスタンスを生成
        $book = new Book();

        // 受け取ったデータをインスタンスに挿入し、DBに保存
        $book->fill($request->all())->save();
    }
}