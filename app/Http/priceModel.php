<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class priceModel extends Model
{
    protected $table = 'price';
    protected $primaryKey = 'cost_id';
    protected $keyType = 'varchar';
    protected $fillable = [
        'cost_id', 'cost_name', 'cost', 'type', 'port', 'form',
    ];
    public $incrementing = false;
}
