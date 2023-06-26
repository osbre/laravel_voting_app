<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Vote;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class VotePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {

    }

    public function view(User $user, Vote $vote)
    {
    }

    public function create(User $user): Response
    {
        return ! $user->vote()->exists()
            ? $this->allow()
            : $this->deny(__('Sorry, you can only vote once.'));
    }

    public function update(User $user, Vote $vote)
    {
    }

    public function delete(User $user, Vote $vote)
    {
    }

    public function restore(User $user, Vote $vote)
    {
    }

    public function forceDelete(User $user, Vote $vote)
    {
    }
}
