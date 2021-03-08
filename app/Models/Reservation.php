<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public $guarded = [];

    protected $casts = [
        'documents' => 'array'
    ];

    public function plane()
    {
        return $this->hasMany(Plane::class);

    }//end fo plane

}//end of mdel
