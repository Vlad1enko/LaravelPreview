<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $guarded = [];
    public function university() {
        return $this->belongsTo(university::class, 'university_id', 'id');
    }
    public function subjects() {
        return $this->belongsToMany(subject::class);
    }
}
