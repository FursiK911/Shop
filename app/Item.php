<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    protected $fillable = ['name_of_item, targets_id, types_id, price, clothing_size, rating, img'];
}
