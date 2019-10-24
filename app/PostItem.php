<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostItem extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'images',
        'price',
        'pricing',
        'type',
        'street_address',
        'area_address',
        'city_address',
        'number_of_bed_rooms',
        'number_of_wash_room',
        'total_area',
        'floor',
        'amenities',
        'description',
        'longitude',
        'latitude',
        'is_sold'
    ];
}
