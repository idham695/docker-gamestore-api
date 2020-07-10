<?php

namespace App\Model;


use Illuminate\database\Eloquent\Model;

class Data extends Model {
     public $table = 'data';

    protected $fillable = array('nama');

    public $timestamps = true;
}