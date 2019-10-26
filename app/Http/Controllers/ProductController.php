<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(int $id = null)
    {
        if ($id !== null) {
            $getPost = DB::table('products')->where('product_id', $id)->get();
        } else {
            $getPost = DB::table('products')->get();
        }

        return response()->json($getPost, 200);
    }
}
