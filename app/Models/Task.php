<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function boss_users()
    {
        return $this->belongsTo('App\Model\User');
    }
}
