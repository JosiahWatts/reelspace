<?php

namespace App;

trait Joinable
{
    public function hasMember(User $user)
    {
        return (bool) $this->members->contains($user);
    }

    public function join(User $user)
    {
        return $this->members()->save($user);
    }

    public function leave(User $user)
    {
        return $this->members()->detach($user);
    }
}
