<?php
namespace App\Http\Controllers\Helper;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

use App\PostItem;

class PaginationHelper
{
    public static function getProductPaginatedToLimit($collection){
        $perPage = 5;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        if ($currentPage == 1) {
            $start = 0;
        }
        else {
            $start = ($currentPage - 1) * $perPage;
        }

        $currentPage = $collection->slice($start, $perPage)->all();

        $paginatedTopLimit = new LengthAwarePaginator($currentPage, count($collection), $perPage);

        return $paginatedTopLimit->setPath(LengthAwarePaginator::resolveCurrentPath());
    }
}
