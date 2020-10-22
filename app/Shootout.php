<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shootout extends Model
{
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function space()
    {
        return $this->belongsTo(Space::class, 'space_id');
    }
}
