<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'answer_id',
        'file_url',
        'max_score',
    ];

    public function answer()
    {
        return $this->hasOne(Answer::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
