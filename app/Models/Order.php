<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table= 'order';
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
