<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stationary extends Model
{
    use HasFactory;
    public $table = 'stationary';
    protected $guarded = ['id','created_at','updated_at'];
}
