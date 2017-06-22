<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "item";
    public $timestamps = true;
    protected $fillable = [
        'name', 'description', 'price', 'category_id','type',
    ];

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }
}
