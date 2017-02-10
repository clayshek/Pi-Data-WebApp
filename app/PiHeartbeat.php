<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PiHeartbeat extends Model
{
    protected $fillable = ['id', 'hostname', 'kernel', 'uptime', 'local_ip'];
}
