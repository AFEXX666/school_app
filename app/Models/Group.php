<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    use HasFactory;
    protected $tabke = "groups";
    protected $fillable = ['group', 'grade', 'academicLvl'];
    protected $hidden = ['id'];

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

}
