<?php

namespace App\Models\Quality\Final;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrmtSideCvrDLX extends Model
{
    use HasFactory;
    protected $primaryKey = 'sr_no';
    protected $table = 'gr_side_cvr_dlx';
    protected $fillable = ['sr_no','date','day','month','year','moulding','triming','prod','total'];
}
