<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function groups()
    {
        $this->belongsToMany(Group::class);
    }

    public function assignments()
    {
        $this->hasMany(Assignment::class);
    }
}
