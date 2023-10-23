<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\ListArticlesRequest;
use App\Interfaces\ArticleRepositoryInterface;
use App\Support\ArticleCollection;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ListArticlesController extends Controller
{
    public function __construct(
        private readonly ArticleRepositoryInterface $articleRepository
    )
    {
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(ListArticlesRequest $request): View
    {
        $validated = $request->validated();
        $articles = $this->getArticles($validated);

        return view('article.list_articles', [
            'articles' => $articles
        ]);
    }

    private function getArticles(array $validated): ArticleCollection
    {
        if (!empty($validated['category'])) {
            return $this->articleRepository->findAllArticlesByCategory($validated['category']);
        }

        return $this->articleRepository->findAllArticles();
    }
}
