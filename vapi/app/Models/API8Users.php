<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class API8Users extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['username','password','authkey','secret'];
    protected $hidden = ['password','authkey'];

}
