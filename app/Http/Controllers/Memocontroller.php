<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use App\Http\Requests\MemoRequest;


class Memocontroller extends Controller
{
    // indexページへ移動
    public function index()
    {
        $memos = Memo::all();
        return view('memos.index', ['memos' => $memos]);
    }

    // createページへ移動
    public function create()
    {
        return view('memos.create');
    }

    // storeページへ移動
    public function store(MemoRequest $request)
    {
        //インスタンスの作成
        $memo = new Memo();

        $memo->title = $request->title;
        $memo->body = $request->body;

        $memo->save();

        //登録したらindexに戻る
        return redirect(route('memos.index'));
    }

    // showページへ移動
    public function show($id)
    {
        $memo = Memo::find($id);
        return view('memos.show', ['memo' => $memo]);
    }

    // editページへ移動
    public function edit($id)
    {
        $memo = Memo::find($id);
        return view('memos.edit', ['memo' => $memo]);
    }

    // updateページへ移動
    public function update(MemoRequest $request, $id)
    {
        //更新対象データの取得
        $memo = Memo::find($id);

        $memo->title = $request->title;
        $memo->body = $request->body;

        $memo->save();

        //更新したらindexに戻る
        return redirect(route('memos.index'));
    }

    // destroyページへ移動
    public function destroy($id)
    {
        $memo = Memo::find($id);
        $memo->delete();

        //削除したらindexに戻る
        return redirect(route('memos.index'));
    }
}
