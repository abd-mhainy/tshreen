<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Eloquent
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = ['name'];

    public function news(): HasMany
    {
        return $this->hasMany(News::class, 'catId');
    }
}
