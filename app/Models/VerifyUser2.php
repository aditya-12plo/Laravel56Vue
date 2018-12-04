<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VerifyUser2 extends Model
{
     protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User2', 'user2_id');
    }
}
