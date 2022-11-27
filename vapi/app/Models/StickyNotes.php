<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StickyNotes extends Model
{
    use HasFactory;
    protected $table = 'stickynotes';
    public $timestamps = false;
    protected $fillable = ['note'];
}
