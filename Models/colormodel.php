<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colormodel extends Model
{
    use HasFactory;

    protected $table = 'color';
    protected $primaryKey = 'co_id';
    protected $fillable = ['c_co_id', 'co_name', 'co_status'];
}
