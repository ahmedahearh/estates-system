<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    use HasFactory;
    protected $appends=['active_status'];
    public function getActiveStatusAttribute(){
        return $this->active ? 'متوفر':'غير متوفر';
    }
    public function property(){
        return $this->belongsTo(Property::class,'property_id','id');
    }


}
