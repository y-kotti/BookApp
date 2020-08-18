<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistBookInfoPost;
use Illuminate\Support\Facades\DB;
use App\Model\Book;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    // 一覧画面の表示
    public function searchBooksInfo(Request $request)
    {
        // 検索条件取得
        $keyword = $request->input('keyword');

        // テーブル指定
        $books_info = DB::table('books');

        // 検索時の処理
        if (!empty($keyword)) {
            // キーワード検索
            $books_info = $books_info
                ->where('id', $keyword)
                ->orWhere('title', 'like', '%' . $keyword . '%')
                ->orWhere('cost', 'like', '%' . $keyword . '%')
                ->orWhere('memo', 'like', '%' . $keyword . '%');
        }

        // 5ページごとに表示
        $books_info = $books_info->paginate(10);
        return view('books.index', ['books_info' => $books_info]);
    }

    // 新規登録画面の表示
    public function createBookInfo()
    {
        return view('books.create');
    }

    // 新規データ登録
    public function storeBookInfo(RegistBookInfoPost $request)
    {
        $book_info = new Book;
        $user = Auth::user();

        $book_info->title = $request->input('title');
        $book_info->user_id = $user->id;
        $book_info->cost = $request->input('cost');
        $book_info->memo = $request->input('memo');
        $book_info->save();
        return redirect('/books-info');
    }

    // 更新画面の表示
    public function editBookInfo($id)
    {
        // IDの存在チェック
        $is_id = DB::table('books')->where('id', $id)->exists();
        if (!$is_id) {
            abort(404);
        }

        $book_info = Book::find($id);
        return view('books.edit', ['book_info' => $book_info]);
    }

    // 既存データの更新
    public function updateBookInfo(RegistBookInfoPost $request, $id)
    {
        // IDの存在チェック
        $is_id = DB::table('books')->where('id', $id)->exists();
        if (!$is_id) {
            abort(404);
        }

        $book_info = Book::find($id);
        $book_info->title = $request->input('title');
        $book_info->cost = $request->input('cost');
        $book_info->memo = $request->input('memo');
        $book_info->save();
        return redirect("/books-info/" . $id);
    }

    // 詳細画面の表示
    public function showDetailBookInfo($id)
    {
        // IDの存在チェック
        $is_id = DB::table('books')->where('id', $id)->exists();
        if (!$is_id) {
            abort(404);
        }

        // IDに対応するレコードの取得
        $book_info = Book::find($id);
        return view('books.detail', ['book_info' => $book_info]);
    }

    // 削除処理
    public function deleteBookInfo($id)
    {
        // IDの存在チェック
        $is_id = DB::table('books')->where('id', $id)->exists();
        if (!$is_id) {
            abort(404);
        }

        $book_info = Book::find($id);
        $book_info->delete();
        return redirect('/books-info');
    }
}
