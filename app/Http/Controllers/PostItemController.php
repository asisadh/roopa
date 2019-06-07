<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostItem;
use App\Http\Controllers\Helper\PostItemFilter;
use App\Http\Controllers\Helper\PostItemSort;
use App\Http\Controllers\Helper\PostItemType;

class PostItemController extends Controller
{
    /**
     * getPost Times
     * @param $request: will have max_price, min_price, and other filer params
     * @param $postItemType: will have recent,expiring... and apartment, flat, room
    */
    public function getPostItems(Request $request, $postItemType){

        $postItem = (new PostItem)->newQuery();

        // GET THE Sorted List
        $postItem = PostItemSort::apply($request, $postItem);

        // GET THE FILTERED PARAMS PRODUCT OBJECT
        $postItem = PostItemFilter::apply($request, $postItem);

        // GET THE PRODUCT TYPE
        $postItem = PostItemType::get($postItem, $postItemType);

        // Get the results and return them.
        if ($postItem == null){
            return response()->json([
                'status' => false,
                'status_code' => 404,
                'message' => 'product is not available',
                'product' => null,
            ]);
        }
        return response()->json([
            'status' => true,
            'status_code' => 200,
            'message' => 'data retrived successfully',
            'product' => $postItem->paginate(15),
        ]);
    }

    /**
     *
     * **/

    public function getPostItemDetail($id){

        if (\Request::is('api/*')){

            try{
                $postItem = PostItem::findOrFail($id);

                $uploader = null;

                try{
                    $uploader = User::findOrFail($postItem->user_id);
                }catch (ModelNotFoundException $ex){
                    return response()->json([
                        'status' => false,
                        'status_code' => 404,
                        'message' => 'User information is not available.',
                    ]);
                }

                return response()->json([
                    'status' => true,
                    'status_code' => 200,
                    'message' => 'data is successfully reterived.',
                    'product' => $postItem,
                    'seller' => $uploader,
                ]);

            }catch (ModelNotFoundException $ex){
                return response()->json([
                    'status' => false,
                    'status_code' => 404,
                    'message' => 'Product is not available.',
                ]);
            }
        }
    }
}
