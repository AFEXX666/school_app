<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $tabke = "students";
    protected $fillable = ['name', 'lastname', 'address', 'group_id'];
    protected $hidden = ['id'];

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
}
