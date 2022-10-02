<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class userdetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name','last_name','email','tel','city_name','password','profile'
    ];

}
