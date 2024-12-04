<?php

namespace App\Models\Quality\Inline;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InlineTubeBtryBreatherKSW extends Model
{
    use HasFactory;
    protected $primaryKey = 'sr_no';
    protected $table = 'inline_tbtry_breather_ksw';
    protected $fillable = ['sr_no','date','month','day','year','extr_sngl_lyr','semi_vulcan','fnl_ctng_t','cmplt_vulcan','wshng_t','punching','asmbl_grmt','mldng_grmt','trmng_grmt','prod'];
}
