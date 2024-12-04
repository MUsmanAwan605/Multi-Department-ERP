<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsupplier extends Model
{
    use HasFactory;
    public $table = 'subsupplier';
    protected $guarded = ['id','created_at','updated_at'];
}
