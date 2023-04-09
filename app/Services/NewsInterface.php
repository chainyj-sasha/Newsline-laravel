<?php

namespace App\Services;

use App\Http\Requests\NewsRequest;
use App\Models\News;

interface NewsInterface
{
    public function getAll();
    public function showOne($id);

    public function getLastNewsTime();

    public function updateNews(NewsRequest $request, News $news): void;

    public function createNews(NewsRequest $request): void;

    public function deleteNews(News $news): void;

    public function increaseView(News $news): void;
}
