<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finish extends Model
{
    protected $table = 'finish';
    protected $guarded = ['id','created_at','updated_at'];
}
