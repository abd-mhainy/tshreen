<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

class News extends Eloquent
{
    use HasFactory;

    protected $table = 'news';
    protected $fillable = ['coverImage', 'userId', 'catId', 'cityId'];

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

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'catId');
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'cityId');
    }

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function newsLang(): HasMany
    {
        return $this->hasMany(NewsLang::class, 'newsId');
    }
}
