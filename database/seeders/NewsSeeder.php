<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    private function addNews(int $countNews)
    {
        $news = new News();
        $news->title = 'Заголовок новости ' . Str::random(3);
        $news->preview = 'Текст анонса новости ' . Str::random(3);
        $news->text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $news->image = '/images/test_' . $countNews . '.jpg';
        $news->views = 0;

        $news->save();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countNews = 20;

        while ($countNews > 0) {
            $this->addNews($countNews);
            $countNews = $countNews - 1;
        }
    }
}
