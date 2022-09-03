<?php

namespace App\Http\Controllers;

use App\Repositories\NewsRepository;
use App\Repositories\VictimsRepository;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class VictimsController extends Controller
{
    public function __construct(private VictimsRepository $victimsRepository)
    {
    }

    public function getById(int $id, string $lang)
    {
        return $this->victimsRepository->getById($id, $lang);
    }

    public function getPaginatedMartyrs(string $lang): LengthAwarePaginator
    {
        return $this->victimsRepository->getMartyrs($lang, 5);
    }

    public function getPaginatedInjured(string $lang): LengthAwarePaginator
    {
        return $this->victimsRepository->getInjured($lang, 5);
    }

    public function getAllPaginated(string $lang): LengthAwarePaginator
    {
        return $this->victimsRepository->getPaginatedVictims($lang);
    }
}
