<?php

namespace App\Http\Controllers\User\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Article;
use App\Http\Models\Draft;
use App\Http\Models\ArticleActivation;

class DraftsCheckController extends Controller
{
    public function index(Request $request, Draft $draft, ArticleActivation $articleActivation)
    {
        // チェックする下書きのid一覧を取得
        $draftIds = $articleActivation->getAvailableDraftIds();

        // $draftIdsのidの配列(オブジェクト型)をリストに変換
        $draftIdsList = [];
        foreach ($draftIds as $draftId) {
            array_push($draftIdsList, $draftId->draft_id);
        }

        // idのリストを元に下書き一覧を取得
        $drafts = $draft->getDraftWithIds($draftIdsList);
        
        return view('user.admin.draft-check.index', ['drafts' => $drafts]);
    }

    public function show($id, Draft $draft, ArticleActivation $articleActivation)
    {
        // 提出されていない下書きを弾く
        if ($articleActivation->isSubmitted($id)) {
            return response()->json(['error' => '提出されていません。']);
        }

        // すでにアクティベートされている下書きを弾く
        if (!$articleActivation->isActivated($id)) {
            return response()->json(['error' => 'すでにアクティベートされています。']);
        }

        // idから下書きを取得
        $drafts = $draft->getDraftWithId($id);

        return view('user.admin.draft-check.show', ['drafts' => $drafts]);
    }

    public function reject($id, ArticleActivation $articleActivation)
    {
        // 提出されていない下書きを弾く
        if ($articleActivation->isSubmitted($id)) {
            return response()->json(['error' => '提出されていません。']);
        }

        // すでにアクティベートされている下書きを弾く
        if (!$articleActivation->isActivated($id)) {
            return response()->json(['error' => 'すでにアクティベートされています。']);
        }

        $articleActivation->reject($id);

        return redirect(route('admin.draft-check.index'));
    }

    public function activate($id, Draft $draft, ArticleActivation $articleActivation, Article $article)
    {
        // 提出されていない下書きを弾く
        if ($articleActivation->isSubmitted($id)) {
            return response()->json(['error' => '提出されていません。']);
        }

        // すでにアクティベートされている下書きを弾く
        if (!$articleActivation->isActivated($id)) {
            return response()->json(['error' => 'すでにアクティベートされています。']);
        }

        // idから下書きを取得(リストで渡されるので、必要な要素のみを取得)
        $drafts = $draft->getDraftWithId($id)[0];

        // Articleテーブルに登録
        $article->post($drafts->user_id, $drafts->name, $drafts->email, $drafts->title, $drafts->summary, $drafts->body, $drafts->links);
        
        $articleActivation->activate($id);

        return redirect(route('admin.draft-check.index'));
    }
}

