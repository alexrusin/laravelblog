<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortSku extends Model
{
    public function rawCode()
    {

        return $this->belongsTo(RawCode::class);
    }
}
