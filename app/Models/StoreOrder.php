<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreOrder extends Model
{
    use HasFactory;
    protected $table= 'store_order';
    protected $guarded=['id', 'created_at', 'updated_at'];

}
