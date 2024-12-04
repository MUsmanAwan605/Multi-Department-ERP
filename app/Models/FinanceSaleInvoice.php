<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceSaleInvoice extends Model
{
    use HasFactory;
    protected $table = 'financesaleinvoice';
    protected $guarded = ['id','created_at','updated_at'];
}
