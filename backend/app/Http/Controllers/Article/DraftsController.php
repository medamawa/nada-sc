<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\User;
use App\Http\Models\Draft;
use App\Http\Models\ArticleActivation;

class DraftsController extends Controller
{
    public function index(Request $request, User $user, Draft $draft)
    {
        // ユーザーIDを取得
        $user_id = auth()->user()->id;

        // アカウント名を取得
        $name = $user->getName($user_id);

        // 下書き一覧を取得
        $drafts = $draft->getDrafts($user_id);
        
        return view('draft.index', ['name' => $name, 'drafts' => $drafts]);
    }

    public function create(User $user)
    {
        // ユーザーIDを取得
        $user_id = auth()->user()->id;

        // アカウント名、メールアドレスを取得
        $name = $user->getName($user_id);
        $email = $user->getEmail($user_id);
        
        return view('draft.create', ['name' => $name, 'email' => $email]);
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

    public function show($id, Draft $draft)
    {
        // idから下書きを取得
        $drafts = $draft->getDraftWithId($id);

        return view('draft.show', ['drafts' => $drafts]);
    }

    public function edit($id, Draft $draft)
    {
        // idから編集する下書きを取得
        $drafts = $draft->getDraftWithId($id);

        return view('draft.edit', ['drafts' => $drafts]);
    }

    public function update(Request $request, $id, Draft $draft)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'title' => ['required', 'string', 'max:50'],
            'body' => ['required', 'string'],
            'links' => [],
        ]);

        // DBに登録
        // linksの対応はまだである
        $draft->edit($id, $request->name, $request->email, $request->title, $request->body);

        return redirect(route('draft.index'));
    }

    public function submit($id, ArticleActivation $articleActivation)
    {
        // 既にアクティベーション済みの下書きを弾く
        if (!$articleActivation->isSubmitted($id)) {
            return response()->json(['error' => 'already be submitted.']);
        }
        
        // 下書きをアクティベーションテーブルに登録
        // 管理者の承認を待つ
        $articleActivation->submit($id);

        return redirect(route('draft.index'));
    }
}

