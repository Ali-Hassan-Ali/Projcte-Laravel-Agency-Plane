<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $guarded = [];

    public function plane()
    {
        return $this->hasMany(Plane::class);

    }//end fo plane
}
