<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function sesi()
    {
        return $this->hasOne('App\Session');
    }
}
