<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreRawBrand extends Model
{
    use HasFactory;
         protected $table= '_raw_brand';
         protected $guarded=['id', 'created_at', 'updated_at'];

         public function rawproduct(){

            // return $this->hasMany(_raw_brand::class, 'rbrand_id', 'id');
             return $this->belongsTo(RawmaterialAdd::class, 'rbrand_id', 'id');
             
             }
}
