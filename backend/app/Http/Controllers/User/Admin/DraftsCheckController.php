<?php

namespace App\Http\Controllers\User\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\User;
use App\Http\Models\Draft;
use App\Http\Models\ArticleActivation;

class DraftsCheckController extends Controller
{
    public function index(Request $request, Draft $draft, ArticleActivation $articleActivation)
    {
        // チェックする下書きのid一覧を取得
        $draftIds = $articleActivation->getDraftIds();

        // $draftIdsのidの配列(オブジェクト型)をリストに変換
        $draftIdsList = [];
        foreach ($draftIds as $draftId) {
            array_push($draftIdsList, $draftId->draft_id);
        }

        // idのリストを元に下書き一覧を取得
        $drafts = $draft->getDraftWithIds($draftIdsList);
        
        return view('user.admin.draft-check.index', ['drafts' => $drafts]);
    }
}

