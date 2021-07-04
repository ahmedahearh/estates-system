<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public function getActiveStatusAttribute(){
        return $this->visibility_status ? 'ظاهرة':' مخفية';
    }
    public function property(){
        return $this->belongsTo(Property::class,'property_id','id');
    }
}
