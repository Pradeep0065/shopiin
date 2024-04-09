<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sizemodel extends Model
{
    use HasFactory;
    protected $table = 'login_web';
    protected $primaryKey = 'login_id';
    protected $fillable = ['login_email', 'login_pass'];
}
