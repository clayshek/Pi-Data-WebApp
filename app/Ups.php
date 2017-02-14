<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ups extends Model
{
    protected $fillable = ['id', 'date', 'upsname', 'model', 'status', 'linev', 'loadpct', 'bcharge', 'timeleft', 'battv', 'lastxfer'];
}
