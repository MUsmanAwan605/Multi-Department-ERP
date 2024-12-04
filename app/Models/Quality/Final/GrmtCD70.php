<?php

namespace App\Models\Quality\Final;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrmtCD70 extends Model
{
    use HasFactory;
    protected $primaryKey = 'sr_no';
    protected $table = 'gr_cd70';
    protected $fillable = ['sr_no','date','day','month','year','moulding','triming','prod','total'];

}
