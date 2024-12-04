<?php

namespace App\Models\Quality\Final;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrmtARearCvrCD100 extends Model
{
    use HasFactory;
    protected $primaryKey = 'sr_no';
    protected $table = 'gra_rear_cvr_cd100';
    protected $fillable = ['sr_no','date','day','month','year','moulding','triming','prod','total'];

}
