<?php

namespace App\Traits;

use App\Models\User;

trait Following 
{
    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id')->withTimestamps();
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'follows', 'following_user_id', 'user_id' )->withTimestamps();
    }

    public function hasFollow($user)
    {
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }

    public function follow($user)
    {
        return $this->follows()->save($user);
    }
    
    public function unfollow($user)
    {
        return $this->follows()->detach($user);
    }
}

?>