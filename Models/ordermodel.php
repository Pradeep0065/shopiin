<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordermodel extends Model
{
    use HasFactory;

    protected $table = 'orderitem';
    protected $primaryKey = 'o_id';
    protected $fillable = ['o_c_id', 'o_amount','payment_id'];
}
