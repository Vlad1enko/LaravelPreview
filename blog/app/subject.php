<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    protected $guarded = [];
    public function students() {
        return $this->belongsToMany(student::class);
    }
}
