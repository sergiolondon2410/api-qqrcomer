<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Product;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllBusinesses()
    {
        $businesses = Business::get();
        return response()->json($businesses, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    public function getAllBusinessProducts($business_id)
    {
        $products = Product::where('business_id', $business_id)->get();
        return response()->json($products, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }
}
