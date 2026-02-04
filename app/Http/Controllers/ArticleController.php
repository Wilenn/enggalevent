<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::published()
            ->latest('published_at')
            ->paginate(9);

        return view('public.articles.index', compact('articles'));
    }

    public function show(string $slug)
    {
        $article = Article::where('slug', $slug)
            ->published()
            ->firstOrFail();

        $relatedArticles = Article::where('id', '!=', $article->id)
            ->published()
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('public.articles.show', compact('article', 'relatedArticles'));
    }
}
