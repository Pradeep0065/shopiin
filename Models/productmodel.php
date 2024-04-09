<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productmodel extends Model
{
    use HasFactory;
    protected $table ='product';
    protected $primaryKey ='p_id';
    protected $fillable = ['p_c_id', 'p_co_id', 'p_b_id', 'p_s_id', 'p_name', 'img', 'p_comment', 'p_status'];
}
