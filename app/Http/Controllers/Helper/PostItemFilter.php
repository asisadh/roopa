<?php
namespace App\Http\Controllers\Helper;
use Illuminate\Http\Request;

use App\PostItem;

class PostItemFilter
{
    public static function apply(Request $filter, $postItem)
    {
        // Search for a product for price_min.
        if ($filter->has('min_price')){
            $postItem->where('price', '>=', $filter->input('min_price'));
        }

        // Search for a product for price_max.
        if ($filter->has('max_price')){
            $postItem->where('price', '<=', $filter->input('max_price'));
        }

        if ($filter->has('rating')){

        }

        if ($filter->has('city')){

        }

        if ($filter->has('exclude_sold_out')){

        }

        return $postItem;
    }
}
