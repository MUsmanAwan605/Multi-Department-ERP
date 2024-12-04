<?php

namespace App\Models\Quality\Inline;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InlineRbrHndlCshnCD100 extends Model
{
    use HasFactory;
    protected $primaryKey = 'sr_no';
    protected $table = 'inline_rbr_hndl_cushn_cd100';
    protected $fillable = ['sr_no','date','month','day','year','moulding','triming','prod','total'];

}
