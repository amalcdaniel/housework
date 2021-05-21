<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingModel extends Model
{
    use HasFactory;

    public function location(){
        return $this->belongsTo('App\Models\LocationModel','Locationid');
    }

    public function customer(){
        return $this->belongsTo('App\Models\SignupModel','Customerid');
    }

    public function category(){
        return $this->belongsTo('App\Models\CategoryModel','Categoryid');
    }

    public function worker(){
        return $this->belongsTo('App\Models\WorkerModel','Workerid');
    }

    public function subcategory(){
        return $this->belongsTo('App\Models\SubcategoryModel','Subcategoryid');
    }

    
}
