<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipmentCost extends Model
{
	protected $table = 'equipment_costs';
    protected $fillable = ['equipmentName','equipmentAmount','totalCost',];
}
