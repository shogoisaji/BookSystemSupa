<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    // ユーザー一覧
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    // ユーザー詳細
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    // ユーザー登録画面
    public function create()
    {
        return view('users.create');
    }

    // ユーザー登録処理
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|unique:users,id',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'dipertment' => 'required',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = User::create($validatedData);

        return redirect()->route('users.show', [$user])->with('success', 'ユーザー登録しました');
    }

    // ユーザー編集画面
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // ユーザー更新処理
    public function update(Request $request, User $user)
    {
        // バリデーション

        $user->update([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'dipertment' => $request->dipertment,
        ]);
        return redirect()->route('users.show', [$user])->with('success', 'ユーザー更新しました');

        return redirect()->route('users.show', [$user])->with('success', 'ユーザー更新しました');
    }

}