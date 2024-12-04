<?php

namespace App\Models\Quality\Final;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CshnFrntFuelTnkDLX extends Model
{
    use HasFactory;
    protected $primaryKey = 'sr_no';
    protected $table = 'cshn_frntfl_tnk_dlx';
    protected $fillable = ['sr_no','date','month','day','year','moulding','triming','prod','total'];
}
