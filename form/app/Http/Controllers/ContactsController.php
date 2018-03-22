<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function index()
    {
        return view('contact/index');
    }
    public function confirm(Request $request)
    {
        //バリデーションチェック
        $this->validate($request, [
            'last_name' => 'required|max:16',
            'firs_name' => 'required|max:16',
            'email'     => 'required|email',
            'message'   => 'required|max:1200',
        ]);
        var_dump($request->all());
        return view('contact/confirm');
    }
    public function complete()
    {
        return view('contact/complete');
    }
}
