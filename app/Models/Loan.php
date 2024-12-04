<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Department;

class Loan extends Model
{
    use HasFactory;
    protected $table='loan';
    // protected $guarded=['id', 'created_at', 'updated_at'];
    // protected $filable=['date','sno','name','department','loan_amount'];
    protected $fillable = ['date','sno','name','department','loan_amount', 'January' ,'February','March','April','May','June','July','August','September','October','November','December','remaining_balance'];

    protected $attributes = [
        'January'  => 0,
        'February' => 0,
        'March' => 0,
        'April' => 0,
        'May' => 0,
        'June' => 0,
        'July' => 0,
        'August' => 0,
        'September' => 0,
        'October' => 0,
        'November' => 0,
        'December' => 0,
        'remaining_balance'=>0,
    ];



    // public function department(): HasOne
    // {
    //     return $this->hasOne(Department::class);
    // }
}
