<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

  public function index()
  {
    $bookCount = Book::count();
    $userCount = User::count();
    $newBookCount = Book::where('condition', Book::CONDITION_BRAND_NEW)->count();

    return view('admin.index', [
      'bookCount' => $bookCount,
      'userCount' => $userCount,
      'newBookCount' => $newBookCount
    ]);
  }

  public function books()
  {
    $books = Book::withCount('rentals')->paginate(20);

    return view('admin.books', compact('books'));
  }

  public function users()
  {
    $users = User::withCount('rentals')->paginate(20);

    return view('admin.users', compact('users'));
  }

}