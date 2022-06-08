<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ventas extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'ventas';
    protected $fillable = ["dateVenta", "inaProd","priceUnit", "cantVenta", "priceTot", "nameCliente", "telCliente", "inaUsuario"];
}
