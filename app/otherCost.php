<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class otherCost extends Model
{
	protected $table = 'other_costs';
    protected $fillable = ['costName','productQuantity','totalCost',];
}
