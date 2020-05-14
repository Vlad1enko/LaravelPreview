<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class university extends Model
{
    protected $guarded = [];
    public function students() {
        return $this->hasMany(student::class);
    }
}
