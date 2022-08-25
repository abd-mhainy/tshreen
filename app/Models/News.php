<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class News extends Eloquent
{
    use HasFactory;

    protected $table = 'news';
    protected $fillable = ['coverImage', 'userId', 'catId', 'cityId'];

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
