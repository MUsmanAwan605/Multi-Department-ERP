<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finishproduct extends Model
{
    use HasFactory;
    protected $table='finishproduct';
    protected $guarded=['id','created_at','updated_at'];
}
