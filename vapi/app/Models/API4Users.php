<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class API4Users extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable=['firstname','lastname'];
    protected $hidden=['apikey'];
}
