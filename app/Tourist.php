<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tourist extends Model
{
    protected $table='tourists';
    public $primaryKey='id';
    public $timestamps=true;
}
