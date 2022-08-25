<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Request;
use Throwable;

class CategoryRepository
{
    public function __construct(private Category $category)
    {
    }

    public function getAll(): Collection
    {
        return $this->category->all();
    }

    public function getById(int $catId): Category
    {
        return $this->category->where('id', '=', $catId)->firstOrFail();
    }

    public function create(Request $request): bool
    {
        return $this->category->save($request->all());
    }

    public function update(Request $request): bool
    {
        $category = $this->getById($request->input('id'));

        return $category->save($request->all());
    }

    /**
     * @throws Throwable
     */
    public function delete(Request $request): bool|null
    {
        $category = $this->getById($request->input('id'));

        return $category->deleteOrFail();
    }
}
