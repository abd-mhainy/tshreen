<?php

namespace App\Repositories;

use App\Models\Victims;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Request;
use Throwable;

class VictimsRepository
{
    public function __construct(private Victims $victims)
    {
    }

    public function getById(int $victimId): Victims
    {
        return $this->victims->where('id', '=', $victimId)->firstOrFail();
    }

    public function getMartyrs(): Collection
    {
        return $this->victims->where('isMartyr', '=', 1)->orderByDesc('id')->get();
    }

    public function getInjured(): Collection
    {
        return $this->victims->where('isMartyr', '=', 0)->orderByDesc('id')->get();
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
}
