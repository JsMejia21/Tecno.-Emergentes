<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class proveedores extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'proveedores';
    protected $fillable = ["codProve", "nameProve","dirProve","telProve"];
}

