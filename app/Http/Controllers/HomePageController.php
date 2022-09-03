<?php

namespace App\Http\Controllers;

use App\Repositories\DiscussionRepository;
use App\Repositories\NewsRepository;
use App\Repositories\VictimsRepository;

class HomePageController
{
    public function __construct(
        private NewsRepository $newsRepository,
        private VictimsRepository $victimsRepository,
        private DiscussionRepository $discussionRepository
    ){
    }

    public function getHomePage(string $lang)
    {
        $news = collect($this->newsRepository->getAll($lang));
        $sliderInfo = $news->take(10)->flatten();

        return response()->json([
            'slider' => [
                'first' => $sliderInfo->take(5),
                'second' => $sliderInfo->count() < 5 ? [] : $sliderInfo->skip(5)->take(5)->flatten(),
            ],
            'mainNews' => $news->where('category.id', '=', 1)->take(9)->flatten(),
            'generalAllegation' => $news->where('category.id', '=', 2)->take(4)->flatten(),
            'sport' => $news->where('category.id', '=', 3)->take(4)->flatten(),
            'worries' => $news->where('category.id', '=', 4)->take(4)->flatten(),
            'scienceAndTech' => $news->where('category.id', '=', 5)->take(4)->flatten(),
            'literature' => $news->where('category.id', '=', 6)->take(4)->flatten(),
            'articlesAndResearch' => $news->where('category.id', '=', 7)->take(4)->flatten(),
            'martyrs' => $this->victimsRepository->getMartyrs($lang)->take(9)->flatten(),
            'injured' => $this->victimsRepository->getInjured($lang)->take(9)->flatten(),
            'discussionVideos' => $this->discussionRepository->getAll()->take(10)->flatten(),
        ]);
    }
}
