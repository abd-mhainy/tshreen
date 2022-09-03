<?php

namespace App\Repositories;

use App\Models\News;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Request;
use Throwable;

class NewsRepository
{
    public function __construct(private News $news)
    {
    }

    public function getAll(string $lang): Collection
    {
        return $this->getNewsQueryWithSelect($lang)->get();
    }

    public function getAllByCategory(int $catId, string $lang): LengthAwarePaginator
    {
        return $this->getNewsQueryWithSelect($lang)
            ->whereHas('category', function (Builder $query) use ($catId) {
                return $query->where('id', '=', $catId);
            })
            ->orderByDesc('created_at')
            ->paginate(5);
    }

    public function getById(int $newsId, string $lang = 'ar'): Model
    {
        return $this->getNewsQueryWithSelect($lang)
            ->where('id', '=', $newsId)
            ->firstOrFail();
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

    protected function getNewsQueryWithSelect(string $lang): Builder
    {
        return $this->news
            ->with(['category:id,name', 'city:id,name', 'newsLang'])
            ->whereHas('newsLang', function (Builder $query) use ($lang) {
                return $query->where('lang', '=', $lang);
            })
            ->orderByDesc('id');
    }
}
