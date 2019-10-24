<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
       'user_id',
       'post_item_id'
    ];
}
