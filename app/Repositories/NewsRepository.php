<?php

namespace App\Repositories;

use App\Models\News;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Request;
use Throwable;

class NewsRepository
{
    public function __construct(private News $news)
    {
    }

    public function getAll(): Collection
    {
        return $this->getNewsQueryWithSelect()->get();
    }

    public function getAllByCategory(int $catId, string $lang): Collection
    {
        return $this->getNewsQueryWithSelect()
            ->whereHas('category', function (Builder $query) use ($catId) {
                return $query->where('id', '=', $catId);
            })
            ->whereHas('newsLang', function (Builder $query) use ($lang) {
                return $query->where('lang', '=', $lang);
            })
            ->orderByDesc('id')
            ->get();
    }

    public function getById(int $catId): News
    {
        return $this->news->where('id', '=', $catId)->firstOrFail();
    }

    public function create(Request $request): bool
    {
        return $this->news->save($request->all());
    }

    public function update(Request $request): bool
    {
        $city = $this->getById($request->input('id'));

        return $city->save($request->all());
    }

    /**
     * @throws Throwable
     */
    public function delete(Request $request): bool|null
    {
        $city = $this->getById($request->input('id'));

        return $city->deleteOrFail();
    }

    protected function getNewsQueryWithSelect(): Builder
    {
        return $this->news->with(['category:id,name', 'city:id,name', 'newsLang']);
    }
}
