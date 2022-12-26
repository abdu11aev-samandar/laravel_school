<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'file_url',
        'max_score',
    ];

    public function answer()
    {
        return $this->hasOne(Answer::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
