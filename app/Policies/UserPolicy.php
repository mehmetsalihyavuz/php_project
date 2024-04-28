<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the admin can edit any users.
     */
    public function edituser(User $user) : bool
    {
        return $user->isAdmin;
    }
}
