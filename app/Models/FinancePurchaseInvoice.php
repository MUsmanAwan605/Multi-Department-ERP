<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancePurchaseInvoice extends Model
{
    use HasFactory;
    protected $table = 'financepurchaseinvoice';
    protected $guarded = ['id','created_at','updated_at'];
}
