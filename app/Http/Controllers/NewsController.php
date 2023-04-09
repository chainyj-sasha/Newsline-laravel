<?php

namespace App\Http\Controllers;

use App\Jobs\MailSend;
use App\Services\NewsInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
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

        return view('news.index', [
            'title' => 'News',
            'news' => $news,
        ]);
    }

    public function show(Request $request, int $id): View
    {
        $news = $this->newsService->showOne($id);

        if (!$request->hasCookie("view_$id")) {
            $this->newsService->increaseView($news);
            Cookie::queue("view_$id", true);
        }

        if ($news->views % 10 == 0) {
            MailSend::dispatch($news);
        }

        return view('news.show', [
            'news' => $news,
        ]);

    }

}
