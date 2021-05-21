<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackModel extends Model
{
    use HasFactory;

    public function customer(){
        return $this->belongsTo('App\Models\SignupModel','Customerid');
    }

    public function worker(){
        return $this->belongsTo('App\Models\WorkerModel','Workername');
    }
}
