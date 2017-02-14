<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pi extends Model
{
    public function upsHeartbeats()
    {
        return $this->hasMany('App\UpsHeartbeat');
    }
}
