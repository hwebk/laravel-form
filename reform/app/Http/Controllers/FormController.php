<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormData;
use Input;
use DB;

class FormController extends Controller
{
    //フォームの表示
    public function input() {
        return view('input');
    }

    //受取と保存
    public function storage() {
        $name = Input::get('name');
        $tel = Input::get('tel');
        $email = Input::get('email');

        DB::table('members')->insert([
            'name'=>$name,
            'tel'=>$tel,
            'email'=>$email

        ]);

        return "保存しました。";
    }

    //一覧表示
    public function select() {
        $members = DB::table('members')->get();
        return view('select')->with('members',$members);
    }
}
