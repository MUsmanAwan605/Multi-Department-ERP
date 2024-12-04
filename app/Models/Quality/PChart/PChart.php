<?php

namespace App\Models\Quality\PChart;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PChart extends Model
{
    use HasFactory;
    protected $table = 'pchart';
    protected $guarded = ['id','created_at','updated_at'];
}
