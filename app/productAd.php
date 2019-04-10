<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productAd extends Model
{
    protected $table = 'product_ads';
    protected $fillable = ['title','description','image'];
}
