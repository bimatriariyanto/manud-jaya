<?php

declare(strict_types=1);

namespace App\Interfaces;


use App\Models\Article;
use App\Support\ArticleCollection;

/**
 * @author Adi Putra <adiputrapermana@gmail.com>
 */
interface ArticleRepositoryInterface
{
    public function findOneArticleByIdOrFail(string $article): ?Article;
    public function findAllArticles(): ArticleCollection;

    public function findAllArticlesByCategory(string $category): ArticleCollection;
}
