<?php

namespace App\Models\Quality\Inline;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InlineCshnFrntFuelTnkDLX extends Model
{
    use HasFactory;
    protected $primaryKey = 'sr_no';
    protected $table = 'inline_cshn_frntfl_tnk_dlx';
    protected $fillable = ['sr_no','date','month','day','year','moulding','triming','prod','total'];
}
