<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    protected $fillable = ['username','requested_at','count','countries_details'];
    protected $casts = ['countries_details'=>'array','requested_at'=>'datetime'];
}
