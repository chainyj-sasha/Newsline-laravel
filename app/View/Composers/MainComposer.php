<?php

namespace App\View\Composers;

use App\Services\NewsInterface;
use Illuminate\View\View;

class MainComposer
{
    private NewsInterface $newsService;
    public function __construct(NewsInterface $newsService)
    {
        $this->newsService = $newsService;
    }

    public function compose(View $view)
    {
        $view->with('lastNewsDateTime', $this->newsService->getLastNewsTime());
    }
}
