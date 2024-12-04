<?php

namespace App\Models\Quality\Inline;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InlineGrmtCD70 extends Model
{
    use HasFactory;
    protected $primaryKey = 'sr_no';
    protected $table = 'inline_gr_cd70';
    protected $fillable = ['sr_no','date','day','month','year','moulding','triming','prod','total'];

}
