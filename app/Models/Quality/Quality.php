<?php

namespace App\Models\Quality;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quality extends Model
{
    use HasFactory;
    protected $table = 'quality_assurance';
    protected $fillable = ['file_upload','file_name','date_of_upload'];
}
