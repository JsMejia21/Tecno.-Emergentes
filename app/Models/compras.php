<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class compras extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'compras';
    protected $fillable = ["dateCompra", "inaProd","priceUnit", "cantCompra", "priceTot", "inaProv"];
}
