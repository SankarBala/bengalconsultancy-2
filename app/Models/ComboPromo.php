<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ComboPromo extends Model
{
    use HasFactory;

    public function populars(): BelongsToMany
    {
        return $this->belongsToMany(Popular::class);
    }
}
