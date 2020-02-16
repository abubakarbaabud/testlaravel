<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $guarded=[];


    // make relations company punya banyak customers
    public function customers(){
        return $this->hasMany(Customer::class);
    }

}
