<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class riceCost extends Model
{
	protected $table = 'rice_costs';
    protected $fillable = ['riceName','riceQuality','riceQuantity','unitPrice','totalPrice','sellerName','sellerPhone','sellerAddress',
	];
}
