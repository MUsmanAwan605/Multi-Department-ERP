<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubPurchase extends Model
{
    use HasFactory;
    public $table = 'subpurchase';
    protected $guarded = ['id','created_at','updated_at'];
}
