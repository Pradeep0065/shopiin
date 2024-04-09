<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brandmodel extends Model
{
    use HasFactory;
    protected $table = 'brand';
    protected $primaryKey ='b_id';
    protected $fillable = ['b_c_id', 'b_co_id', 'b_name', 'b_status'];
}
