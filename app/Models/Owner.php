<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    public function getFullNameAttribute()
    {
        return $this->first_name . " " . $this->last_name;
    }
    public function city(){
        return $this->belongsTo(City::class,'cities_id','id');
    }

}
