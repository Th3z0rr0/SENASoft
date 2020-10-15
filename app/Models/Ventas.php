<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;
    protected $table='buy';
    protected $primaryKey = 'id';
    protected $fillable = ['product','date','cliente','quantity','price','iva','total'];
}
