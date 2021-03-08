<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    public $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class);

    }//end fo company

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);

    }//end fo plane

}//end of Plane
