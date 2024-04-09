<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coustmermodel extends Model
{
    use HasFactory;
        
    protected $table = 'coustmerdetail';
    protected $primaryKey = 'cu_id';
    protected $fillable = ['cu_namefirst', 'cu_namelast', 'cu_addre', 'cu_city', 'cu_pincode', 'cu_email', 'cu_mob', 'cu_pass'];
}
