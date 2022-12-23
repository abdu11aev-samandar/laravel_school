<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_url',
        'score',
    ];

    public function task()
    {
        return $this->hasOne(Task::class);
    }
}
