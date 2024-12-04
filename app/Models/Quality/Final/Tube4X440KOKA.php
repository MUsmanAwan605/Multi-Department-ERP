<?php

namespace App\Models\Quality\Final;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tube4X440KOKA extends Model
{
    use HasFactory;
    protected $primaryKey = 'sr_no';
    protected $table = 't_4X440_koka';
    protected $fillable = ['sr_no','date','month','day','year','extr_snl_lyr','blnk_ctng','vulcan','washing','fnl_ctng','clip_asmbl','prod','total'];
}
