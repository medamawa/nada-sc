<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Article;

class ArticlesController extends Controller
{
    
    public function index(Request $request, Article $article)
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
}
