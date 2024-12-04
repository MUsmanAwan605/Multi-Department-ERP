<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currentjob extends Model
{
    use HasFactory;
    protected $table='currentjob';
    protected $guarded = ['id','created_at','updated_at'];
    protected $fillable=['e_id','e_name','supervisor_name','department','doj','designation'];

}
