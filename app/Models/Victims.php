<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Victims extends Eloquent
{
    use HasFactory;

    protected $table = 'victims';
    protected $fillable = ['name', 'biography', 'coverImage', 'isMartyr'];
}
