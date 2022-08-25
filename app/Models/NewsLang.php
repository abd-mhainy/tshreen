<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NewsLang extends Model
{
    use HasFactory;

    protected $table = 'newsLang';
    protected $fillable = ['title', 'body', 'lang', 'newsId'];

    public function news(): BelongsTo
    {
        return $this->belongsTo(News::class, 'newsId');
    }
}
