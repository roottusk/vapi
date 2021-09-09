<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class API1Users extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['username','name','course','password'];
    protected $hidden = ['password'];

}
