<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class riceProfit extends Model
{
	protected $table = 'rice_profits';
    protected $fillable = ['riceName','riceQuality','riceQuantity','unitPrice','totalPrice','customerName','customerPhone','customerAddress',
	];
}
