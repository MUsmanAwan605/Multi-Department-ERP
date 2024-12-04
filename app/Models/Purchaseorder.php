<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchaseorder extends Model
{
    use HasFactory;
    protected $table= 'purchase_order';
    protected $guarded=['id', 'created_at', 'updated_at'];

    public function scopeProcess($query)
    {
        return $query->where('status', 'process');
    }


    public function scopeConfirmed($query)
    {
        return $query->where('status', 'confirmed');
    }
}
