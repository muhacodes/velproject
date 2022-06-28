<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Approve extends Model
{
    public function user()
{
    return $this->belongsTo('App\User');
}
}
