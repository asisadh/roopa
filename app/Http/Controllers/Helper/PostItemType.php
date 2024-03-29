<?php
namespace App\Http\Controllers\Helper;
use Illuminate\Http\Request;

use App\PostItem;

class PostItemType
{
    public static function get($postItem, $postItemType)
    {
        // RECENT PRODUCTS
        if ($postItemType == "recent_products"){
            return $postItem->orderBy('created_at', 'asc')->get();
        }
        // MOST VIEWED PRODUCT
        if ($postItemType == "most_viewed"){
            return null;
        }
        // EXPIRING SOON PRODUCTS
        if ($postItemType == "expiring_soon"){
            return $postItem->orderBy('created_at', 'desc')->get();
        }
        // NEAR ME PRODUCTS
        if ($postItemType == "near_me"){
            return null;
        }
        // PRODUCT YOU VIEWED
        if ($postItemType == "you_viewed"){
            return null;
        }
        // WATCH LIST
        if ($postItemType == "watch_list"){
            return null;
        }

        // NOW UNDER CATEGORIES
        // ALL
        if ($postItemType == "all"){
            return $postItem;
        }

        // 'car', 'properties', 'furniture', 'job',
        // 'electronices_and_applicance', 'mobile',
        // 'bikes', 'book_sports_hobbies', 'fashion', 'pets', 'service'
        if ($postItemType == "apartment"){
            return $postItem->where('type', '=', 'apartment');
        }
        if ($postItemType == "flat"){
            return $postItem->where('type', '=', 'flat');
        }
        if ($postItemType == "room"){
            return $postItem->where('type', '=', 'room');
        }
        if ($postItemType == "hostel"){
            return $postItem->where('type', '=', 'hostel');
        }
        if ($postItemType == "paying_guest"){
            return $postItem->where('type', '=', 'paying_guest');
        }
        if ($postItemType == "hotel"){
            return $product->where('type', '=', 'hotel');
        }
    }
}
