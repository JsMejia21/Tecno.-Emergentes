<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class categorias extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'categorias';
    protected $fillable = ["codCat", "nameCat","descrCat"];
}
