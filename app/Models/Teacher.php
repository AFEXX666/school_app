<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $tabke = "teacher";
    protected $fillable = ['name', 'lastname', 'career'];
    protected $hidden = ['id'];
}
