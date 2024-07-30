<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RolePolicy
{
    // Let admin do what he wants

    public function before(User $user): bool|null
    {
        if ($user->is_admin) {
            return true;
        }
        return null;
    }
    /**
     * Determine whether the user is a teacher or a boardmember
     */
    public function view(User $user): bool
    {
        return $user->role_id == '2' || $user->role_id == '3';
    }

    // see if the current user can update the personal info

    public function viewButton(User $user): bool
    {
        if (request('reqUser')?->id){
            return request('reqUser')->id == Auth::user()->id;
        }

        return $user->id == Auth::user()->id;
    }

    // only board members can do this
    public function addUser(User $user): bool
    {
        return $user->role_id == '3';
    }
    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user): bool
    {
        return $user->id == Auth::user()->id;
    }

    // For all logged in users
    public function viewAll(User $user): bool
    {
        return $user->role_id != null;
    }
}
