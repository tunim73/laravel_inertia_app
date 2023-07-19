<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = ['rua'];

    public function inscrito(): BelongsTo
    {
        return $this->belongsTo(Inscrito::class);
    }
}
