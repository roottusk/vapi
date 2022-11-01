<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JustWeakTokens extends Model
{
    use HasFactory;
    protected $table = 'justweaktokens';
    public $timestamps = false;
    protected $fillable = ['username','password'];
    protected $hidden = ['password'];
}
