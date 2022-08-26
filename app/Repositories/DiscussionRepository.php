<?php

namespace App\Repositories;

use App\Models\DiscussionVids;
use App\Models\Victims;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Request;
use Throwable;

class DiscussionRepository
{
    public function __construct(private DiscussionVids $discussions)
    {
    }

    public function getAll(): Collection
    {
        return $this->discussions->orderByDesc('id')->get();
    }

    public function getById(int $discussionId): DiscussionVids
    {
        return $this->discussions->where('id', '=', $discussionId)->firstOrFail();
    }

    public function create(Request $request): bool
    {
        return $this->discussions->save($request->all());
    }

    public function update(Request $request): bool
    {
        $discussion = $this->getById($request->input('id'));

        return $discussion->save($request->all());
    }

    /**
     * @throws Throwable
     */
    public function delete(Request $request): bool|null
    {
        $discussion = $this->getById($request->input('id'));

        return $discussion->deleteOrFail();
    }
}
