<?php

namespace App\Models\Quality\Capability;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capability extends Model
{
    use HasFactory;
    protected $table = 'capability';
    protected $fillable = ['date','part_no','part_name','process_name','msrng_ins','event','inspector','incharge','manager','head','inspct_data','inspct_rslt'];
}
