<?php

namespace App\Models\Quality\Inspector;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspector extends Model
{
    use HasFactory;
    protected $table = 'inspectors';
    protected $fillable = ['name','gender','contact','profile'];
}
