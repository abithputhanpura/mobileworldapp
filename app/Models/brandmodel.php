<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brandmodel extends Model
{
    use HasFactory;
    protected $fillable = ['brand_id','model_name'];

}
