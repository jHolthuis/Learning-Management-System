<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    // belongs to user model
    public function user(): BelongsTo
    {
        return $this->belongsto(User::class);
    }
}
