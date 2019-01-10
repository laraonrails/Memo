<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    public function getRouteKeyName()
    {
        return "token";
    }

    public $timestamps = false;
}
