<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rawbrand extends Model
{
    use HasFactory;
    protected $table = 'rawbrand';
    protected $guarded = ['id','created_at','updated_at'];

    // public function products()
    // {
    //     return $this->hasMany(Product::class, 'brand_id');
    // }
}
