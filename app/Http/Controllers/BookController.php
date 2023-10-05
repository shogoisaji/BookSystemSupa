<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    // 本一覧
    public function index()
    {   //1件表示数　ページ遷移確認の為少なく設定
        $books=Book::paginate(2);
        return view('books.index', compact('books'));
    }

    // 本詳細
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    // 本登録画面
    public function create()
    {
        return view('books.create');
    }

    // 本登録処理
    public function store(Request $request)
    {
        // バリデーション
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'description' => 'required',
            'comment' => 'required',
            'recommendation' => 'required',
        ]);

        $book = Book::create($validatedData);
        return redirect()->route('books.show', [$book]);
    }

    // 本編集画面
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // 本更新処理
    public function update(Request $request, Book $book)
    {
        // バリデーション
        $validatedData = $request->validate([
            'book_id' => 'required|exists:books,id',
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'description' => 'required',
            'comment' => 'required',
            'recommendation' => 'required',
        ]);

        $book->update($validatedData);
        return redirect()->route('books.show', [$book]);
    }

    // 本削除処理
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }

}