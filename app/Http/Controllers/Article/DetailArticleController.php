<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\DetailArticleRequest;
use App\Interfaces\ArticleRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DetailArticleController extends Controller
{
    public function __construct(
        private readonly ArticleRepositoryInterface $articleRepository
    )
    {
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(DetailArticleRequest $request): View
    {
        $validated = $request->validated();
        $articleId = $request->route('article');
        $article = $this->articleRepository->findOneArticleByIdOrFail($articleId);

        return view('article.detail_article', [
            'article' => $article,
        ]);
    }
}
