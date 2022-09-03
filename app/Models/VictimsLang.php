<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VictimsLang extends Eloquent
{
    use HasFactory;

    protected $table = 'victimsLang';
    protected $fillable = ['name', 'biography', 'lang'];

    public function victims(): BelongsTo
    {
        return $this->belongsTo(Victims::class, 'victimId');
    }
}
