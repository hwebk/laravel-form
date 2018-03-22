<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //全レコードの取得
        $articles = Article::all();

        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //viewの表示
        return view('articles.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //インスタンスの作成
        $article = new Article;
        //formから入力されたデータを代入
        $article->title = $request->title;
        $article->email = $request->email;
        //保存
        $article->save();
        //一覧ページへ
        return redirect('/articles');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$idを元にレコードを取得
        $article = Article::find($id);
        //データをviewへ
        return view('articles.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$idを元にレコード検索
        $article = Article::find($id);
        //データの編集
        $article->title = $request->title;
        $article->email = $request->email;
        $article->body = $request->body;
        //データの保存
        $article->save();
        //詳細ページへリダイレクト
        return redirect("/articles".$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //データの削除
        $article = Article::find($id);
        $article->delete();

        //一覧ページへリダイレクト
        return redirect('/articles');
    }
}
