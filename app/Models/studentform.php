<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentform extends Model
{
    use HasFactory;
    protected  $fillable=['student_name','father_name','mother_name','DOB','email','s_number','p_number'];
}
