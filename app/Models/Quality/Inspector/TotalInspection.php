<?php

namespace App\Models\Quality\Inspector;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TotalInspection extends Model
{
    use HasFactory;
    protected $table = 'totalinspection';
    protected $fillable = ['month','part_name','ttl_inspct'];
}
