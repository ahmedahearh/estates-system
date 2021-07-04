<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Model
{
    use HasFactory , HasRoles;

    public function getFullNameAttribute()
    {
        return $this->first_name . " " . $this->last_name;
    }
}

