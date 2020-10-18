<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\User;
use App\Http\Models\Draft;

class DraftsController extends Controller
{
    public function index(Request $request, User $user, Draft $draft)
    {
        // ユーザーIDを取得
        $user_id = auth()->user()->id;

        // ユーザー名を取得
        $name = $user->getName($user_id);

        // 下書き一覧を取得
        $drafts = $draft->getDrafts($user_id);
        
        return view('draft.index', ['name' => $name, 'drafts' => $drafts]);
    }

    public function create()
    {
        return view('draft.create');
    }

    public function store(Request $request, Draft $draft)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'title' => ['required', 'string', 'max:50'],
            'body' => ['required', 'string'],
            'links' => [],
        ]);

        // ユーザーIDを取得
        $user_id = auth()->user()->id;

        // DBに登録
        // linksの対応はまだである
        $draft->post($user_id, $request->name, $request->email, $request->title, $request->body);

        return redirect(route('draft.index'));
    }

    public function show($id)
    {
        //
    }
}

