<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usersys extends Model
{
    public function students(){
        return $this->hasMany(student::class);
    }
}
