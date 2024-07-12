<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;

class RolePolicy
{
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user): bool
    {
        return $user->role_id == '3' || $user->role_id == '4';
    }

    // let teachers & board members fill in their availability

    public function available(User $user): bool
    {
        return $user->role_id == '2' || $user->role_id == '3';
    }

    // see if the current user can update the personal info

    public function viewButton(User $user): bool
    {
        if (strcspn($_SERVER['REQUEST_URI'], '0123456789') != strlen($_SERVER['REQUEST_URI'])) {
            return request('reqUser')->id == Auth::user()->id;
        } else {
            return $user->id == Auth::user()->id;
        }
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->role_id == '2' || $user->role_id == '3';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user): bool
    {
        return $user->id == Auth::user()->id;
    }
}
