<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table ='Employee';
    protected $guarded = ['id','created_at','updated_at'];
    // protected $fillable = ['fname','fh_name','h_no','m_no','dob','email','region','cni_no','adrs','m_status','emergency_no','s_name','l_adrs','grade','p_year','c_name','adrsss','designations','yoemloy','cv','cnic_copy','photos','status'];

    public function loan()
{
    return $this->hasOne(Loan::class);
}

}
