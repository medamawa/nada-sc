<?php

namespace App\Http\Controllers\User\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\User;
use App\Http\Models\Draft;

class DraftsCheckController extends Controller
{
    public function index(Request $request, User $user, Draft $draft)
    {
        // ユーザーIDを取得
        $user_id = auth()->user()->id;

        // アカウント名を取得
        $name = $user->getName($user_id);

        // 下書き一覧を取得
        $drafts = $draft->getDrafts($user_id);
        
        return view('user.admin.draft-check.index', ['name' => $name, 'drafts' => $drafts]);
    }
}

