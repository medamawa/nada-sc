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

    public function clubIndex(Article $article)
    {
        // クラブの記事一覧を取得
        $articles = $article->getClubArticles();

        return view('article.club.index', ['articles' => $articles]);
    }

    public function personalIndex(Article $article)
    {
        // クラブの記事一覧を取得
        $articles = $article->getPersonalArticles();

        return view('article.personal.index', ['articles' => $articles]);
    }
}
