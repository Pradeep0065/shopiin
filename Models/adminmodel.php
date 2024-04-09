<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminmodel extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'a_id';
    protected $fillable = ['a_name', 'a_mob', 'a_email', 'a_pass','f_otp'];
}
