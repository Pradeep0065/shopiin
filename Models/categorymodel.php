<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorymodel extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $primaryKey = 'c_id';
    protected $fillable = [ 'c_a_id','c_name','c_status'];
}
