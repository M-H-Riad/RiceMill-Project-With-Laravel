<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class otherProfit extends Model
{
	protected $table = 'other_profits';
    protected $fillable = ['productName','productQuantity','totalCost',
					
					];
}
