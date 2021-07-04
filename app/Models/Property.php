<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $appends=['active_status'];
    public function getActiveStatusAttribute(){
        return $this->active ? 'متوفر':'غير متوفر';
    }
    public function apartments(){
        return $this->hasMany(Apartment::class,'property_id','id');
    }
    public function lands(){
        return $this->hasMany(Land::class,'property_id','id');
    }
    public function stores(){
        return $this->hasMany(Store::class,'property_id','id');
    }
    public function chalets(){
        return $this->hasMany(Chalet::class,'property_id','id');
    }
    public function rents(){
        return $this->hasMany(Rent::class,'property_id','id');
    }
    public function images(){
        return $this->hasMany(Image::class,'property_id','id');
    }
}
