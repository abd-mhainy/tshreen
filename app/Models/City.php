<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Eloquent
{
    use HasFactory;

    protected $table = 'cities';
    protected $fillable = ['name'];

    public function news(): HasMany
    {
        return $this->hasMany(News::class, 'cityId');
    }

    public function victims(): HasMany
    {
        return $this->hasMany(Victims::class, 'cityId');
    }
}
