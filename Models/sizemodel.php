<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sizemodel extends Model
{
    use HasFactory;
    protected $table = 'size';
    protected $primaryKey = 's_id';
    protected $fillable = ['s_c_id', 's_co_id', 's_b_id', 's_name', 's_status'];
}
