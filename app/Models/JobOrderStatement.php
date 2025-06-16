<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobOrderStatement extends Model
{

   use SoftDeletes;



    public function jobOrders() {
        return $this->belongsToMany(JobOrder::class, 'jos_job_order_links');
    }
}
