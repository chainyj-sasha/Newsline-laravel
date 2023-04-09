<?php

namespace App\Services;

use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class NewsService implements NewsInterface
{
    public function getAll(): Paginator
    {
        return News::orderBy('created_at', 'desc')->simplePaginate(5);

    }

    public function showOne($id)
    {
        return News::find($id);
    }

    public function getLastNewsTime(): News
    {
        return News::select('created_at')->latest()->first();
    }

    public function updateNews(NewsRequest $request, News $news): void
    {

        $news->title = $request->input('title');
        $news->preview = $request->input('preview');
        $news->text = $request->input('text');

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $news->image = $path;
        }

        if (isset($request->delete)) {
            $news->image = null;
        }

        $news->save();
    }

    public function createNews(NewsRequest $request): void
    {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
        } else {
            $path = null;
        }

        //----- старт транзакции -----//
        DB::transaction(function () use($request, $path) {
            $news = new News();
            $news->title = $request->input('title');
            $news->preview = $request->input('preview');
            $news->text = $request->input('text');
            $news->image = $path;
            $news->save();
        });
        //----- конец транзакции -----//

//        News::create([
//            'title' => $request->input('title'),
//            'preview' => $request->input('preview'),
//            'text' => $request->input('text'),
//            'image' => $path ?? null,
//        ]);
    }

    public function deleteNews(News $news): void
    {
        $news->delete();
    }

    public function increaseView(News $news): void
    {
        $news->views = $news->views + 1;
        $news->save();
    }

}
