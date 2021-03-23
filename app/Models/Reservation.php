<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public $guarded = [];
    protected $table= 'reservations';
    protected $fillable = ['name','phone','count','documents','plane_id'];

    protected $casts = [
        'documents' => 'array'
    ];

    public function plane()
    {
        return $this->hasMany(Plane::class);

    }//end fo plane

}//end of mdel
