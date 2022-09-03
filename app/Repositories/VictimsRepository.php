<?php

namespace App\Repositories;

use App\Models\Victims;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Request;
use Throwable;

class VictimsRepository
{
    public function __construct(private Victims $victims)
    {
    }

    public function getById(int $victimId, string $lang): Model
    {
        return $this->getVictimsQueryWithRelation($lang)
            ->where('id', '=', $victimId)
            ->firstOrFail();
    }

    public function getPaginatedVictims(string $lang): LengthAwarePaginator
    {
        return $this->getVictimsQueryWithRelation($lang)->orderByDesc('id')->paginate(5);
    }

    public function getMartyrs(string $lang, int $limit = null): Collection|LengthAwarePaginator
    {
        $query = $this->getVictimsQueryWithRelation($lang)
            ->where('isMartyr', '=', 1);

        if ($limit) {
            return $query->orderByDesc('created_at')->paginate($limit);
        }

        return $query->orderByDesc('id')->get();
    }

    public function getInjured(string $lang, int $limit = null): Collection|LengthAwarePaginator
    {
        $query =$this->getVictimsQueryWithRelation($lang)
            ->where('isMartyr', '=', 0);

        if ($limit) {
            return $query->orderByDesc('created_at')->paginate($limit);
        }

        return $query->orderByDesc('id')->get();
    }

    public function create(Request $request): bool
    {
        return $this->victims->save($request->all());
    }

    public function update(Request $request): bool
    {
        $victim = $this->getById($request->input('id'));

        return $victim->save($request->all());
    }

    /**
     * @throws Throwable
     */
    public function delete(Request $request): bool|null
    {
        $victim = $this->getById($request->input('id'));

        return $victim->deleteOrFail();
    }

    protected function getVictimsQueryWithRelation(string $lang): Builder
    {
        return $this->victims
        ->with(['city:id,name', 'victimsLang'])
        ->whereHas('victimsLang', function (Builder $query) use ($lang) {
            return $query->where('lang', '=', $lang);
        });
    }
}
