<?php

declare(strict_types=1);

namespace App\Models;


use App\Support\ArticleCollection;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $title
 * @property string $body
 * @property string $category
 * @property string $imageUrl
 * @property Carbon $createdAt
 * @property Carbon $updatedAt
 *
 * @author Adi Putra <adiputrapermana@gmail.com>
 */
class Article extends Model
{
    use HasUuids;

    public $timestamps = true;
    protected $casts = [
        'id' => 'string',
        'title' => 'string',
        'body' => 'string',
        'category' => 'string',
        'image_url' => 'string',
    ];
    protected $guarded = [];

    public function newCollection(array $models = []): ArticleCollection
    {
        return new ArticleCollection($models);
    }
}
