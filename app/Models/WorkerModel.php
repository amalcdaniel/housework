<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkerModel extends Model
{
    use HasFactory;

    public function location(){
        return $this->belongsTo('App\Models\LocationModel','Locationid');
    }

    public function category(){
        return $this->belongsTo('App\Models\CategoryModel','Categoryid');
    }
}
