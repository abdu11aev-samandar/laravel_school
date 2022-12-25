<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'message_id',
        'name',
    ];


    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function assigments()
    {
        return $this->hasMany(Assignment::class);
    }
}
