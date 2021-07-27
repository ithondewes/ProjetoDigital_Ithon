<?php

namespace ProjetoDigital\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
