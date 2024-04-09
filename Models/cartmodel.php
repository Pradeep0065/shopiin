<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cartmodel extends Model
{
    use HasFactory;
    
    protected $table = 'cartitem';
    protected $primaryKey = 'ca_id';
    protected $fillable = ['ca_p_id', 'ca_o_id', 'ca_p_cou', 'ca_cu_id', 'ca_price', 'item_status'];
}
