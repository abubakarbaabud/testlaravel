<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // is okay for assigning
    // using fillable example
//    protected $fillable=['name','email','active'];

    // using guarded example
    protected $guarded=[];

    protected $attributes=[
        'active'=>1
    ];


//    // declare active()
//    public function scopeActive($query){
//        return $query->where('active','1');
//    }

    public function getActiveAttribute($attribute){
        return $this->activeOptions()[$attribute];
    }

//    // declare inactive()
//    public function scopeInactive($query){
//        return $query->where('active','0');
//    }

    // make relations customers berada di company
    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function activeOptions()
    {
        return [
            '1'=>'Active',
            '0'=>'Inactive',
            '2'=>'In-Progress',
        ];
    }

}
