<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpsHeartbeat extends Model
{
    protected $fillable = ['pi_id', 'date', 'upsname', 'model', 'status', 'linev', 'loadpct', 'bcharge', 'timeleft', 'battv', 'lastxfer'];
       
    public function pi()
    {
        return $this->belongsTo('App\Pi');
    }
}
