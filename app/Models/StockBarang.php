<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockBarang extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function kategory(): BelongsTo{
        return $this->belongsTo(Kategory::class);
    }
}
