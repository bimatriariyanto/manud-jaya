<?php

declare(strict_types=1);

namespace App\Providers;


use App\Interfaces\ArticleRepositoryInterface;
use App\Repositories\ArticleDummyRepository;
use Illuminate\Support\ServiceProvider;

/**
 * @author Adi Putra <adiputrapermana@gmail.com>
 */
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ArticleRepositoryInterface::class, ArticleDummyRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
