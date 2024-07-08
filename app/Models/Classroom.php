<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    // the table content
    use HasFactory;
    protected  $fillable = [
        'id',
        'location',
    ];

    // this model has many lessons
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
