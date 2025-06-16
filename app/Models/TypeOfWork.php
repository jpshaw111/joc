<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeOfWork extends Model
{
   use SoftDeletes;

    public function jobOrders() {
        return $this->hasMany(JobOrder::class);
    }

    
}
