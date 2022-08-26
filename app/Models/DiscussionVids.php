<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DiscussionVids extends Eloquent
{
    use HasFactory;

    protected $table = 'discussionVids';
    protected $fillable = ['title', 'vidLink', 'coverImage'];
}
