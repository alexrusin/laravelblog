<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RawCode extends Model
{
    public function shortSku()
    {

        return $this->hasMany(ShortSku::class);
    }
}
