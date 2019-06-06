<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostItem;
use App\Http\Controllers\Helper\PaginationHelper;

class HomeController extends Controller
{

    public function index(){

        $recentPostItem = PostItem::orderBy('created_at', 'asc')->take(20)->paginate(5);
        // $recentPostItemPaginatedTop20 = PaginationHelper::getProductPaginatedToLimit($recentProducts);

        $mostlyViewed = PostItem::take(20)->paginate(5);
        // $mostlyViewedPaginatedTop20 = PaginationHelper::getProductPaginatedToLimit($mostlyViewed);

        $expiringSoon = PostItem::orderBy('created_at', 'desc')->take(20)->paginate(5);
        // $expiringSoonPaginatedTop20 = PaginationHelper::getProductPaginatedToLimit($expiringSoon);

        $near_you = null;
        $you_viewed = null;
        $watch_list = null;

        // $near_you = Product::paginate(5);
        // $you_viewed = Product::paginate(5);
        // $watch_list = Product::paginate(5);

        $banner_ads = PostItem::take(5)->get();

        if (\Request::is('api/*')){
            return response()->json([
                'status' => true,
                'status_code' => 200,
                'message' => 'data is successfully reterived.',
                'data_count' => 8,
                'data' => array(

                    'banner' => $banner,
                    'recent_products' => $recentProducts,
                    'mostly_viewed' => $mostlyViewed,
                    'banner_ads' => $banner,
                    'expiring_soon' => $expiringSoon,

                    'near_you' => $near_you,
                    'you_viewed' => $you_viewed,
                    'watch_list' => $watch_list
                )
            ]);
        }
    }
}
