<?php

namespace App\Repositories;

use App\User;

class MessageRepository
{
    /**
     * Get all of the messages for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->messages()
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}
