<?php

declare(strict_types=1);

namespace App\Support;


use App\Models\Article;
use Illuminate\Database\Eloquent\Collection;

/**
 * @author Adi Putra <adiputrapermana@gmail.com>
 */
class ArticleCollection extends Collection
{
    public function addArticle(Article $item): ArticleCollection
    {
        return $this->add($item);
    }
}
