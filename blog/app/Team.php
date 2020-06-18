<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //scrittura / modifica attributi

    protected $fillable = [
        'name',
        'city',
        'titles',
        'description',
    ];
}
