<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class API5Users extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['username','name','address','mobileno','password'];
    protected $hidden = ['password'];
}
