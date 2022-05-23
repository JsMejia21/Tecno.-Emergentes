<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class almacenes extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'almacenes';
    protected $fillable = ["codAlm", "dirAlm","telAlm"];
}
