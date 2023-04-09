<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use App\Services\NewsInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class NewsController extends Controller
{
    private NewsInterface $newsService;

    public function __construct(NewsInterface $newsService)
    {
        $this->newsService = $newsService;
    }

    public function index(): View
    {
        $news = $this->newsService->getAll();

        return view('admin.index', [
            'title' => 'Admin page',
            'news' => $news,
        ]);
    }

    public function create(): View
    {
        return view('admin.create', [
            'title' => 'Добавление новости',
        ]);
    }

    public function store(NewsRequest $request): RedirectResponse
    {
        $this->newsService->createNews($request);
        return redirect()->route('news.index');
    }

    public function edit(News $news): View
    {
        return view('admin.edit', [
            'title' => $news->title,
            'news' => $news,
        ]);
    }

    public function update(NewsRequest $request, News $news): RedirectResponse
    {
        $this->newsService->updateNews($request, $news);

        return redirect()->route('news.index');
    }

    public function destroy(News $news): RedirectResponse
    {
        $this->newsService->deleteNews($news);
        return redirect()->back();
    }
}
