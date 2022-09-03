<?php

namespace App\Http\Controllers;

use App\Repositories\NewsRepository;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class NewsController extends Controller
{
    public function __construct(private NewsRepository $newsRepository)
    {
    }

    public function getById(int $id, string $lang)
    {
        return $this->newsRepository->getById($id, $lang);
    }

    public function getAllByCategory(int $catId, string $lang): LengthAwarePaginator
    {
        return $this->newsRepository->getAllByCategory($catId, $lang);
    }
}
