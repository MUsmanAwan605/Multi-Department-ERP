<?php

namespace App\Models\Quality\Summary;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    use HasFactory;
    protected $primaryKey = 'sr_no';
    protected $table = 'summary';
    protected $fillable = ['sr_no','month','part_name','fnl_inspct_rjct','prod_qty','inspct_qty'];
}
