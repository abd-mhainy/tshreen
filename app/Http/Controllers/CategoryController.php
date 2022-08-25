<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(private CategoryRepository $categoryRepository)
    {
    }

    public function getById(int $id)
    {
        return $this->categoryRepository->getById($id);
    }

    public function getAll()
    {
        return $this->categoryRepository->getAll();
    }
}
