<?php

namespace App\Models\Quality\Final;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RbrMflrMntDLX extends Model
{
    use HasFactory;
    protected $primaryKey = 'sr_no';
    protected $table = 'rbr_mflr_mnt_dlx';
    protected $fillable = ['sr_no','date','month','day','year','moulding','triming','prod','total'];


}
