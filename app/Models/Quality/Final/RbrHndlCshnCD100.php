<?php

namespace App\Models\Quality\Final;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RbrHndlCshnCD100 extends Model
{
    use HasFactory;
    protected $primaryKey = 'sr_no';
    protected $table = 'rbr_hndl_cushn_cd100';
    protected $fillable = ['sr_no','date','month','day','year','moulding','triming','prod','total'];

}
