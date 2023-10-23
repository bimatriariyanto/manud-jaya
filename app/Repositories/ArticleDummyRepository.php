<?php

declare(strict_types=1);

namespace App\Repositories;


use App\Interfaces\ArticleRepositoryInterface;
use App\Models\Article;
use App\Support\ArticleCollection;
use Carbon\Carbon;
use Spatie\SimpleExcel\SimpleExcelReader;

/**
 * @author Adi Putra <adiputrapermana@gmail.com>
 */
class ArticleDummyRepository implements ArticleRepositoryInterface
{
    public function __construct(
        private ArticleCollection $articleCollection,
    )
    {
        $this->initiateData();
    }

    private function initiateData(): void
    {
        $file = resource_path('data/articles.csv');
        $data = SimpleExcelReader::create($file)->useDelimiter(";")->getRows()->all();
        $articleCollection = new ArticleCollection();

        foreach ($data as $datum) {
            $article = new Article([
                'id' => $datum['id'],
                'title' => $datum['title'],
                'body' => $datum['body'],
                'category' => $datum['category'],
                'image_url' => $datum['image_url'],
            ]);

            $article->createdAt = Carbon::createFromFormat('Y-m-d H:i:s', $datum['created_at']);
            $article->updatedAt = Carbon::createFromFormat('Y-m-d H:i:s', $datum['created_at']);

            $articleCollection->addArticle($article);
        }

        $this->articleCollection = $articleCollection;
    }

    public function findOneArticleByIdOrFail(string $article): ?Article
    {
        return $this->articleCollection->firstOrFail('id', '=', $article);
    }

    public function findAllArticles(): ArticleCollection
    {
        return $this->articleCollection;
    }

    public function findAllArticlesByCategory(string $category): ArticleCollection
    {
        return $this->articleCollection->where(function (Article $article) use ($category) {
            return strtolower($article->category) === strtolower($category);
        });
    }
}
