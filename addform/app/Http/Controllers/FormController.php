<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requets\PostRequest;

class FormController extends Controller
{
    //入力
    public function input()
    {
        return view('form.input');
    }
    //完了
    public function save(PostRequest $request)
    {
        //DB登録
        $member = new Member;
        $member->name = $request->name;
        $member->tel = $request->tel;
        $member->email = $request->email;
        $mebmer->content = $request->content;
        $member->save();

        $request->session()->regenerateToken();
        
        return view('form.complate');
    }
}
