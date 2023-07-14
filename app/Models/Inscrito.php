<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Inscrito extends Model
{
    use HasFactory;

    public function endereco(): HasOne
    {
        return $this->hasOne(Endereco::class);
    }


}
