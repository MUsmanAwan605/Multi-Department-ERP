<?php

namespace App\Models\Quality\XR;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XR extends Model
{
    use HasFactory;
    protected $table = 'xr';
    protected $fillable = ['date','day','month','cl','r_bar','year','no_of_smpl','lot_no','lot_size','X1','X2','X3','X4','X5','total','mean','range','confirmation','notes','sup_prcs_zone','part_no','part_name','su_chrctr','stndrd','smpl_frqncy','msrng_eqp'];
}
