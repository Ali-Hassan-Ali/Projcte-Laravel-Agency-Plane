<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
        public $guarded = [];

    protected $casts = [
        'documents' => 'array'
    ];
}
