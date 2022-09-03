<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

class Victims extends Eloquent
{
    use HasFactory;

    protected $table = 'victims';
    protected $fillable = ['coverImage', 'isMartyr', 'cityId'];

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::make($value)->format('M, d Y H:i'),
        );
    }

    protected function updatedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::make($value)->format('M, d Y H:i'),
        );
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'cityId');
    }

    public function victimsLang(): HasMany
    {
        return $this->hasMany(VictimsLang::class, 'victimId');
    }
}
