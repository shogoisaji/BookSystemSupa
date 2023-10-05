<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{

  // レンタル一覧
  public function index()
  {
    $rentals = Rental::with('book', 'user')->paginate(20);

    return view('rentals.index', compact('rentals'));
  }

  // レンタル登録画面
  public function create()
  {
    // 選択可能な本、ユーザーを取得

    return view('rentals.create', compact('books', 'users'));
  }

  // レンタル登録処理
  public function store(Request $request)
  {
    // バリデーション
    $validatedData = $request->validate([
      'rental_id' => 'required|unique:rentals,id',
      'book_id' => 'required|exists:books,id',
      'user_id' => 'required|exists:users,id',
      'rental_date' => 'required|date',
      'return_date' => 'required|date|after:rental_date',
    ]);

    // レンタル期間計算
    $rental = Rental::create($validatedData);

    return redirect()->route('rentals.index');
  }

  // レンタル返却処理
  public function returnBack(Rental $rental)
  {
    // 返却日時を保存

    $returnDateTime = now();
    $rental->update(['returned_at' => $returnDateTime]);

    return redirect()->route('rentals.index');
  }

}