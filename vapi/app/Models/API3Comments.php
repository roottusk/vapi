<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class API3Comments extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['postid','deviceid','latitude','longitude','commenttext','username'];
}
