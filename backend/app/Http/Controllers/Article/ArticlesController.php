<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Article;

class ArticlesController extends Controller
{
    public function index(Article $article)
    {
        // 記事一覧を取得
        $articles = $article->getArticles();
        
        return view('article.index', ['articles' => $articles]);
    }

    public function show($id, Article $article)
    {
        // idから記事を取得
        $articles = $article->getArticleWithId($id);

        return view('article.show', ['articles' => $articles]);
    }

    public function adminIndex(Article $article)
    {
        // 管理者の記事一覧を取得
        $articles = $article->getAdminArticles();

        return view('article.admin.index', ['articles' => $articles]);
    }

    public function committeeIndex(Article $article)
    {
        // 委員会の記事一覧を取得
        $articles = $article->getCommitteeArticles();

        return view('article.committee.index', ['articles' => $articles]);
    }

    public function committeeShow($name, Article $article)
    {
        // 委員会ごとの記事一覧を取得
        $articles = $article->getCommitteeArticleWithName($name);

        return view('article.committee.show', ['articles' => $articles]);
    }

    public function clubIndex(Article $article)
    {
        // クラブの記事一覧を取得
        $articles = $article->getClubArticles();

        return view('article.club.index', ['articles' => $articles]);
    }

    public function clubShow($name, Article $article)
    {
        // クラブごとの記事一覧を取得
        $articles = $article->getClubArticleWithName($name);

        return view('article.club.show', ['articles' => $articles]);
    }

    public function personalIndex(Article $article)
    {
        // 個人の記事一覧を取得
        $articles = $article->getPersonalArticles();

        return view('article.personal.index', ['articles' => $articles]);
    }
}
