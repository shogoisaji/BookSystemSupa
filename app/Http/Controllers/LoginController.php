<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $req) {
        $email=$req->email;
        $data=['email'=>$email];
        return view('top',$data);
    }
}
