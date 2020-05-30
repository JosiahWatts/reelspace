<?php

namespace App;

trait Joinable
{
    public function join(User $user)
    {
        return $this->members()->save($user);
    }

    public function leave(User $user)
    {
        return $this->members()->detatch($user);
    }
}