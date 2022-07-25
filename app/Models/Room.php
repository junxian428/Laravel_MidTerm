<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'Description',
        'Price',
        'TypeID',
    ];

    //public function type(){
        //return $this->belongsTo('App\Models\Type');
    //}

    public function type(){
        return $this->hasMany('App\Models\Type');
    }
}
