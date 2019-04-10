<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class workerCost extends Model
{
	protected $table = 'worker_costs';
    protected $fillable = ['numOfWorker','workingHour','costPerWorker','totalCost',
	];
}
