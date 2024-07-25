<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var string
     */
    // table content
    protected  $fillable = [
        'id',
        'name',
    ];
    // has many user model
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
