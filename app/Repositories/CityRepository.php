<?php

namespace App\Repositories;

use App\Models\City;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Request;
use Throwable;

class CityRepository
{
    public function __construct(private City $city)
    {
    }

    public function getAll(): Collection
    {
        return $this->city->all();
    }

    public function getById(int $catId): City
    {
        return $this->city->where('id', '=', $catId)->firstOrFail();
    }

    public function create(Request $request): bool
    {
        return $this->city->save($request->all());
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
}
