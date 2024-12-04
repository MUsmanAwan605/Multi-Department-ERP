<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawMaterialProduct extends Model
{
    use HasFactory;

    public $table = 'rawmaterialproducts';
    protected $guarded = ['id','created_at','updated_at'];

    //  public function brand()
    // {
    //     return $this->belongsTo(Rawbrand::class,'brand_id');
    // }
}
