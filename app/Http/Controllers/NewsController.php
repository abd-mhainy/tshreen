<?php

namespace App\Http\Controllers;

use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct(private NewsRepository $newsRepository)
    {
    }

    public function getById(int $id)
    {
        return $this->newsRepository->getById($id);
    }

    public function getAllByCategory(int $catId, string $lang)
    {
        return $this->newsRepository->getAllByCategory($catId, $lang);
    }
}
