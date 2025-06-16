<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobOrder extends Model
{

   use SoftDeletes;



    public function jobOrderStatement() {
        return $this->belongsTo(JobOrderStatement::class);
    }

    public function contractor() {
        return $this->belongsTo(Contractor::class);
    }

    public function conductor() {
        return $this->belongsTo(Conductor::class);
    }

    public function typeOfWork() {
        return $this->belongsTo(TypeOfWork::class);
    }
}
