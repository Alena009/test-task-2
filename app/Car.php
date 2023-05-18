<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Trip;

class Car extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'make',
        'model',
        'year'
    ];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}
