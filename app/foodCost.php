<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foodCost extends Model
{
	protected $table = 'food_costs';
    protected $fillable = ['foodName','foodAmount','totalPrice',];

}
