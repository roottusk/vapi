<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class API2Users extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['email','name','token','address','city','country','password'];
    protected $hidden = ['password'];
}
