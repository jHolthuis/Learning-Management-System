<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    // table content
    use HasFactory;
    protected  $fillable = [
        'id',
        'name',
    ];

    // has many lessons
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}

