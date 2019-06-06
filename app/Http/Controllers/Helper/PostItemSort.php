<?php
namespace App\Http\Controllers\Helper;
use Illuminate\Http\Request;

use App\PostItem;

class PostItemSort
{
    public static function apply(Request $sort,$postItem)
    {
        if ($sort->has('sorting')){
            $value = $sort->input('sorting');
            if ($value == 'name_asc'){
                return $postItem->orderBy('name', 'asc');
            }else if ($value == 'name_desc'){
                return $postItem->orderBy('name', 'desc');
            }else if ($value == 'best_rating'){

            }else if ($value == 'popularity'){

            }else if ($value == 'uploaded_date'){
                return $postItem->orderBy('created_at', 'asc');
            }else if ($value == 'price_low_to_high'){
                return $postItem->orderBy('price', 'asc');
            }else if ($value == 'price_high_to_low'){
                return $postItem->orderBy('price', 'desc');
            }
        }
        return $postItem;
    }
}
