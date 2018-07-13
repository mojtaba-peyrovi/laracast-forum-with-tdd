<?php

namespace App;

use App\Channel;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function threads()
    {
        return $this->hasMany(Thread::class);
    }
}
