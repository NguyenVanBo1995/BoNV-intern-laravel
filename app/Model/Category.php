<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $table= "category";
    public $timestamps = true;
    protected $fillable = array('name', 'description');

    public function items(){
        return  $this->hasMany('App\Model\Item');
    }
}
