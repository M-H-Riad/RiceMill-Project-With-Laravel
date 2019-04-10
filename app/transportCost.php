<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transportCost extends Model
{
	protected $table = 'transport_costs';
    protected $fillable = ['transportName','transportNumber','source','destination','transportCost','totalCost',
	];
}
//protected $fillable = ['numOfWorker','workingHour','costPerWorker','totalCost',
//	];